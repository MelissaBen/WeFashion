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

       <div class="container m-5">
    <h1 class="text-center my-5">Articles</h1>
    <table class="table table-hover">
  <thead>
    <tr class="table-active">
      <th scope="col">ID</th>
      <th scope="col">Titre</th>
      <th scope="col">Crée le </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($products as $product)
      <tr class="">
         <th>{{$product->id}}</th>
         <td>{{$product->title}}</td>
         <!--<td>{{$product->created_at}}</td>- aficher date en detail -->
         <td>{{date('d-m-y' , strtotime($product->created_at)) }}</td>
         <td class="d-flex">
             <a href="" class="btn btn-warning mx-3"><i class="fas fa-edit"></i></a>
             <a href="" class="btn btn-danger mx-3"><i class="fas fa-trash-alt"></i></a>
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