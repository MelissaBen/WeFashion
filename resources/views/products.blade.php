<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Products</title>
</head>
<body>
    @extends('base')
    @section('content')
      <!--  
      <div class=" mt-5 bg-light">
          <h1 class="display-3 text-center"> products </h1>
          <div class="article row justify-content-center">
              @foreach ($products as $product)
                  <div class="col-md-4">
                    <div class="card my-3">
                        <div class="card-body text-center">
                            <img src={{$product->image}} alt="">

                        </div>
                        <div class="card-body">
                            <small class="text-danger h4">
                                @foreach ($product->categories as $category)
                                     {{ $category->name }}
                                @endforeach
                            </small>
                           <h5 class="card-title">{{$product->title}}</h5>
                           <p class="card-text">{{$product->getFrenchPrice()}}</p>
                           <a href="{{route('product' , $product->slug)}}" class="btn btn-primary"> acheter l'article <i class="fas fa-arrow-right"></i> </a>
                       </div>
                   </div>
                 </div>
              @endforeach
          </div>
            <div class="d-flex justify-content-center mt-5">
              {{$products->appends(request()->input())->links('vendor.pagination.custom')}}
            </div>    
      </div> -->
      <div class=" mt-5 bg-light">
  <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
            </div></div>
      <div class="row">
          @foreach ($products as $product)
          
              <div class="col-md-6">
                  <div class="card bg-light  img-thumbnail">
                      <div class="card-header text-center">
                         <img src={{$product->image}} alt="">
                      </div>
                      <div class="card-body">
                        <small class="text-danger h4">
                            @foreach ($product->categories as $category)
                                {{ $category->name }}
                            @endforeach
                        </small>
                         <h4 class="card-title">{{$product->title}}</h4>
                          <div>
                             {{ Str::limit($product->description, 100, $end='...') }}
                          </div>
                          <p>
                            <small>{{ucfirst('prix :')}}</small>
                            <small>{{$product->getFrenchPrice()}}</small> 
                          </p>
                         <a href="{{route('product' , $product->slug)}}" class="btn btn-primary "> acheter l'article <i class="fas fa-arrow-right"></i> </a>    
                      </div>
                  </div>
              </div>
          @endforeach
          <div class="d-flex justify-content-center mt-5">
              {{$products->appends(request()->input())->links('vendor.pagination.custom')}}
            </div> 
      </div>
      
    @endsection
</body>
</html>