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
                      
                      {{-- <th>Username</th> --}}
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $data )
                    <tr>
                      
                        
                      
                      <th scope="row">{{ $data->id }}</th>
                      <td>{{ $data->category_name }}</td>
                      <td>
                        <a class="btn btn-success" href="{{ url('edit_category',$data->id) }}">Edit</a>
                        
                      </td>

                      <td>
                        <a class="btn btn-primary" onclick="confirmation(event)" href="{{ url('delete_category',$data->id) }}">Delete</a>
                      </td>
                      
                      {{-- <td>@mdo</td> --}}              
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
    @include('admin.js')
  </body>
  </body>
</html>