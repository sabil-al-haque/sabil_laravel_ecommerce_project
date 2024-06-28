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
            <h1>Add Category</h1>
                        <form action="{{ url('add_category') }}" method="POST" >
                          @csrf
                        <div class="form-group">
                            <label class="form-control-label">Add Category</label>
                            <input type="text" name="category" placeholder="Add Category" class="form-control">
                        </div>
                        
                        <div class="form-group">       
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                        </form>
        </div>
        <div>
          <div class="col-lg-6">
            <div class="block">
              <div class="title"><strong>Striped table with hover effect</strong></div>
              <div class="table-responsive"> 
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Category Name</th>
                      <th>Action</th>
                      <th>Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $data )
                    <tr>
                      
                        
                      
                      <th scope="row">{{ $data->id }}</th>
                      <td>{{ $data->category_name }}</td>
                      <td>
                        <a class="btn btn-primary" href="">Edit</a>
                        <a class="btn btn-primary" href="{{ url('delete_category',$data->id) }}">Delete</a>
                      </td>
                      
                      <td>@mdo</td>

                  
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Body part end-->
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>