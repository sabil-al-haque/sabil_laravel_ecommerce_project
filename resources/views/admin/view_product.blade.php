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
        <div class="">
            <div class="block">
              <div class="title"><strong>Striped table with hover effect</strong></div>
              <div class="table-responsive"> 
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>SN</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Quantity</th>
                      <th>Category</th>
                      <th>Image</th>
                      <th>Delete</th>
                      <th>Edit</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($product as $products)
                    <tr>
                      
                        <td>{{ $products->id }}</td>
                        <td>{{ $products->title }}</td>
                        {{-- <td>{{ $products->description }}</td> --}}
                        <td>{!!Str::limit($products->description,50) !!}</td>
                        <td>{{ $products->quantity }}</td>
                        <td>{{ $products->category }}</td>
                        <td>
                            <img height="50" width="50" src="Products/{{ $products->image }}" alt="">
                        </td>

                        <td>
                          <a class="btn btn-primary" onclick="confirmation(event)" href="{{ url('delete_product',$products->id) }}">Delete</a>
                        </td>
                        <td>
                          <a class="btn btn-primary"  href="{{ url('update_product',$products->id) }}">Edit</a>
                        </td>
                        
                      </tr>
                    @endforeach
                   
                   
                  </tbody>
                </table>
                <div>
                    {{ $product->onEachSide(1)->links() }}
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