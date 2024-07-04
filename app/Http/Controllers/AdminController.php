<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class AdminController extends Controller
{
    public function view_category(){

        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    
    public function add_category(Request $request){

        $category = new Category;

        $category->category_name = $request->category;
        $category->save();

        toastr()->success('Data added successfully.');

        return redirect()->back();


    }

    public function delete_category($id){
        $data = Category::find($id);
        $data->delete();

        toastr()->success('Data Deleted successfully.');

        return redirect()->back();
    }


    // edit category
    public function edit_category($id){
        $data = Category::find($id);
        return view('admin.edit_category', compact('data'));

    }

    // update_category
    public function update_category(Request $request,$id){

        $data = Category::find($id);
        $data->category_name = $request->category;
        $data->save();

        toastr()->success('Data Updated successfully.');

        return redirect('/view_category');

    }

   

        //  add_product
        public function  add_product(){

            $category = Category::all();
           
            return view('admin.add_product', compact('category'));
    
        }


       // upload_product

            
    public function upload_product(Request $request){

        $data = new Product(); // Because The Model name is Product

        $data->title = $request->title;
        $data->description = $request->desc;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;

        $image = $request->file;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('Products',$imagename);

            $data->image = $imagename;
        }

        $data->save();

        toastr()->success('Data added successfully.');

        return redirect()->back();


    }


    //view_product

    public function  view_product(){

        $product = Product::paginate(3);
       
        return view('admin.view_product', compact('product'));

    }

    //delete product
    public function delete_product($id){
        $data = Product::find($id);
        $image_path= public_path('Products/'.$data->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }

        $data->delete();

        toastr()->success('Data Deleted successfully.');

        return redirect()->back();
    }

    //update_product
    public function update_product($id){
        $data = Product::find($id);
        $category = Category::all();

        return view('admin.update_product', compact('data','category'));

    }


    //edit_product

    public function edit_product(Request $request,$id){

        $data = Product::find($id); // Because The Model name is Product

        $data->title = $request->title;
        $data->description = $request->desc;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;

        $image = $request->file;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('Products',$imagename);

            $data->image = $imagename;
        }

        $data->save();

        // toastr()->success('Data edited successfully.');

        return redirect('/view_product');


    }

    //product_search
    public function product_search(Request $request){
        $search = $request->search;
        $product = Product::where('title','LIKE','%'.$search.'%')->orWhere('category','LIKE','%'.$search.'%')->paginate(3);

        return view('admin.view_product', compact('product'));

    }


}
