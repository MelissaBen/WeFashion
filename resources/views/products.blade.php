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
       
         
      <div class=" mt-5 bg-light">
          <h1 class="display-3 text-center"> Products</h1>
          <div class="article row justify-content-center">
              @foreach ($products as $product)
                  <div class="col-md-6">
                    <div class="card my-3">
                        <div class="card-body">
                           <h5 class="card-title">{{$product->title}}</h5>
                           <p class="card-text">{{$product->getFrenchPrice()}}</p>
                           <img src={{$product->image}} alt="">
                           <a href="{{route('products' , $product->slug)}}" class="btn btn-primary"> lire la suite <i class="fas fa-arrow-right"></i> </a>
                       </div>
                   </div>
                 </div>
              @endforeach
          </div>
            <div class="d-flex justify-content-center mt-5">
              {{$products->links('vendor.pagination.custom')}}
              
          </div>
         
      </div> 
    @endsection
</body>
</html>