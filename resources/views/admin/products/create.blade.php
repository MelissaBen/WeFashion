<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>create</title>
</head>
<body>
    @extends('base')
    @section('content')
       <section class="container card my-5" >
      
            <h2 class="text-center mt-5"> Ajouter un article</h2>
            <form method="post" action="{{route('products.store')}}">
              @method('POST')
              @csrf
              <div class="col-12 m-5">
                <div class="form-group m-5 ">
                  <label for="">nom</label>
                  <input type="text" name='title' class="form-control" placeholder="nom du produit">
                </div>  

                <div class="form-group m-5">
                  <label for="exampleFormControlTextarea1" class="form-label">description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="description"></textarea>
                </div>
                            
                <div class="form-group m-5">
                    <label for="price">Prix</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" min="0.01" max="9999.99" value="" placeholder="prix" required>
                </div>

                <div class="form-group m-5">
                    <label for="image">Image</label>
                    <input type="file" class="form-control mt-2" id="image" name="image" placeholder="image" >
                </div>
 
                <div class="form-group m-5">
                  <label for="reference" class="m-2">Référence</label>
                  <input type="text" minlength="16" maxlength="16" class="form-control" id="reference" name="reference" value="" placeholder="référence" required>
                </div>
              
                <div class="form-group m-5">
                    <label  for="pet-select" class="form-label m-2">Taille</label>
                    <select  id="pet-select" id="size" name='size'>
                    <option value="XS">XS</option>
                    <option value="S" selected>S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                   </select>
                 
                </div>
    
                 </div>
                  <div class="form-group m-5">
                    <label for="categorie" class="form-label m-2">Catégorie</label>
                     <select name="categorie" class="form-control">
                       <option value="0"></option>
                         @foreach (App\Models\Category::all() as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                       </select>
                  </div>
               
                  <div class="form-group m-5">
                    <label for="discount" class="form-label m-2">Etat</label>

                    <select id="discount" name="discount">
                    <option value="standard" selected>Standard</option>
                    <option value="solde">solde</option>
                   </select>
                 </div>
 

                <button type="submit" class="btn btn-primary m-5">Envoyer</button>

            </form>
          </section>
    @endsection 
</body>
</html>