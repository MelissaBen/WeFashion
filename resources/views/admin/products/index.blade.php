<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Home</title>
</head>
<body>
    @extends('base')
    @section('content')
    
       <h1>ici crud</h1>

       <div class="container align-item-center">
    <h1 class="text-center my-5">Articles</h1>
    <div class="d-flex">
        <a href="{{route('admin.create')}}" class="btn btn-info m-5"> <i class="fas fa-plus"></i> Ajouter un produit</a>
    </div>
    <table class="table table-hover">
  <thead>
    <tr class="table-active">
      <th scope="col">ID</th>
      <th scope="col">nom</th>
      <th scope="col">prix</th>
      <th scope="col">catégorie</th>
      <th scope="col">état</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($products as $product)
      <tr class="">
         <th>{{$product->id}}</th>
         <td>{{$product->title}}</td>
         <td>{{$product->getFrenchPrice()}}</td>
         @foreach ($product->categories as $category)
          <td> {{ $category->name }}</td>
          @endforeach 
         <td>{{$product->discount}}</td>
         <td class="d-flex">
             <a href="" class="btn btn-warning mx-3"><i class="fas fa-edit"></i></a>
             <form action={{route('admin.product.destroy',$product->id )}} method="POST">
              @csrf
              @method("DELETE")
                <button type="submit" class="btn btn-danger mx-3"><i class="fas fa-trash-alt"></i>
                </button>
             </form>
         </td>
      </tr>
      @endforeach
  
  </tbody>
</table>
 <div class="d-flex justify-content-center mt-5">
              {{$products->links('vendor.pagination.custom')}}
              
 </div>
</div>
    @endsection

   
</body>
</html>