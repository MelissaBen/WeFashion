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
            
      <div class=" mt-5 bg-light text-center">
            <small class="text-danger h4">
                @foreach ($product->categories as $category)
                            {{ $category->name }}
                @endforeach
            </small>
          <h2 class="display-4 text-center"> {{$product->title}} </h2>
           <img src={{$product->image}} alt="">
           <h5 class="text-center my-3 pt-3">{{$product->getFrenchPrice()}}</h5>
          <div class="d-flex justify-content-center my-5">
              <a href="{{route('products')}}" class="btn btn-primary">
                retour
              </a>
         
      </div> 
    @endsection
</body>
</html>