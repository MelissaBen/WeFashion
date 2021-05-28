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
      <div class=" mt-5 bg-light text-center">
            <small class="text-danger h4">
                @foreach ($product->categories as $category)
                            {{ $category->name }}
                @endforeach
            </small>
          <h2 class="display-4 text-center"> {{$product->title}} </h2>
           <img src={{$product->image}} alt="">
           <p>{{$product->description}}</p>
           <h5 class="text-center my-3 pt-3">{{$product->getFrenchPrice()}}</h5>
                         <button class="btn btn-primary m-5">acheter</button>

          <div class="d-flex justify-content-center px-5">
              <a href="{{route('products')}}" class="btn btn-primary">
                retour
              </a>
         
      </div> -->
    <section class="container align-self-cente ">
      <div class="row mt-5 m-auto text-center">
        <div class="col-md-4  offset-md-2">
            <img src={{$product->image}}  alt="">

        </div>
        <div class="col-md-4 offset-md-1 text-left">
            <h3>{{strtoupper($product->title)}}</h3>
            <ul class="list-group product-info">
                <li class="list-group-item text-danger ">
                @foreach ($product->categories as $category)
                {{ucfirst('catégorie: ').$category->name }}
                @endforeach
                </li>
                <li class="list-group-item">{{ucfirst('réference: ').$product->reference}}</li>
              
              <li class="list-group-item">{{ucfirst('size: ').$product->size}}</li>
              <li class="list-group-item">{{ucfirst('description : ').$product->description}}</li>
              <li class="list-group-item">{{ucfirst('prix : ').$product->getFrenchPrice()}}</li>
              <li class="list-group-item">
                    <button type="button" class="btn btn-success">{{strtoupper('acheter ')}}<i
                                class="fa fa-shopping-cart"></i>
                    </button>
              </li>
            </ul>

        </div>
    </div>
    <div class="d-flex justify-content-center ">
              <a href="{{route('products')}}" class="btn btn-primary">
                retour à la boutique 
              </a>
    </div>
  </section>
    @endsection
</body>
</html>