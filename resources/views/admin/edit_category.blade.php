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
      
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6">
                    <div class="block">

                        <div class="block-body">
                            <form action="{{ url('edit_product', $data->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group">
                                <label class="form-control-label">Category Name</label>
                                <input type="text" value="{{ $data->category_name }}" name="category" class="form-control">
                            </div>
                            
                            <div class="form-group">       
                                <input type="submit" value="Update" class="btn btn-primary">
                            </div>
                            </form>
                        </div>

                    </div>
            
                </div>

            </div>
            
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