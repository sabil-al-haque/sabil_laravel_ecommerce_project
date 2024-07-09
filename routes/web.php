<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/',[HomeController::class,'home']);

route::get('/dashboard',[HomeController::class,'login_home'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('home.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// view admin dashboard after login the admin
route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

// Category create
route::get('view_category',[AdminController::class,'view_category'])->middleware(['auth','admin']);
route::post('add_category',[AdminController::class,'add_category'])->middleware(['auth','admin']);

//delete_category
route::get('delete_category/{id}',[AdminController::class,'delete_category'])->middleware(['auth','admin']);
//edit_category
route::get('edit_category/{id}',[AdminController::class,'edit_category'])->middleware(['auth','admin']);
//update_category
route::post('update_category/{id}',[AdminController::class,'update_category'])->middleware(['auth','admin']);

// add product
route::get('add_product',[AdminController::class,'add_product'])->middleware(['auth','admin']);
route::post('upload_product',[AdminController::class,'upload_product'])->middleware(['auth','admin']);

//view_product
route::get('view_product',[AdminController::class,'view_product'])->middleware(['auth','admin']);
//delete_product
route::get('delete_product/{id}',[AdminController::class,'delete_product'])->middleware(['auth','admin']);
//update_product
route::get('update_product/{id}',[AdminController::class,'update_product'])->middleware(['auth','admin']);
//edit_product
route::post('edit_product/{id}',[AdminController::class,'edit_product'])->middleware(['auth','admin']);
//product_search
route::get('product_search',[AdminController::class,'product_search'])->middleware(['auth','admin']);
//product_details
route::get('product_details/{id}',[HomeController::class,'product_details']);
