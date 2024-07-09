<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    
    @include('home.header')
   
    <!-- end header section -->
    <!-- slider section -->

    {{-- @include('home.slider') --}}

    <!-- end slider section -->
  </div>
  <!-- end hero area -->


  <!-- product details start -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
Product details        </h2>
      </div>
      <div class="row">
        {{-- @foreach ($product as $products ) --}}
          
      
        <div class="heading_center">
          <div class="text-center">
         
              <div class="img-box">
                <img width="300" src="/Products/{{ $data->image }}" alt="">  <!-- image folder er age obossoi / dite hobe,karon loop user kora hoy nai -->
              </div>
              <div class="detail-box">
                <h6>
                 Title: {{ $data->title }}
                </h6>
                <h6>
                  Price:
                  <span>
                    ${{ $data->price }}
                  </span>
                </h6>
                <h6>
                  Category:
                  <span>
                    {{ $data->category }}
                  </span>
                </h6>
              </div>
              

              <div>
                {{ $data->description }}
              </div>
           
            
          </div>

        </div>

        {{-- @endforeach --}}
        
      </div>
      <div class="btn-box">
        <a href="">
          View All Products
        </a>
      </div>
    </div>
  </section>
  <!-- product details end -->
  {{-- @include('home.contact') --}}

  <br><br><br>

  <!-- end contact section -->

  <!-- info section -->

  @include('home.footer')

</body>

</html>