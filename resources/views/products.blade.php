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
      <div class="row m-5 ">
          <!--title-->
        <h1 class="display-3 text-center m-5"> products </h1>
          @foreach ($products as $product)
          <!--product-->
              <div class="col-md-4 mb-2">
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
                            <small style="color:green">{{ucfirst('prix :')}}</small>
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