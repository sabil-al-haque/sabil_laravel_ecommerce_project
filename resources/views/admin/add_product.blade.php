<!DOCTYPE html>
<html>
  <head> 
@include('admin.css')
  </head>
  <body>
    <header class="header">   
    @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
<!-- Body part star-->
      <div class="page-content">
        <div class="block-body">
            <h1>Add Product</h1>
                        <form action="{{ url('upload_product') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                        <div class="form-group">
                            <label class="form-control-label">Add Title</label>
                            <input type="text" name="title" placeholder="Add Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Add Description</label>
                            <input type="text" name="desc" placeholder="Add Description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Add Price</label>
                            <input type="text" name="price" placeholder="Add Price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Add Quantity</label>
                            <input type="text" name="quantity" placeholder="Add Quantity" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Add Category</label>
                            <select name="category" id="">
                                <option value="">Select Option</option>
                                @foreach ( $category as $category)
                                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Add Image</label>
                            <input type="file" name="file" placeholder="Add Image" class="form-control">
                        </div>
                        
                        <div class="form-group">       
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                        </form>

                        
        </div>
      </div>

      <!-- Body part end-->
    </div>
    <!-- JavaScript files-->
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
  </body>
</html>