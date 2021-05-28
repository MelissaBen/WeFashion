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
       <section class="container " style="margin-bottom: 10%">
      
            <h1>ici ajouter un produit</h1>
            <form method="POST" action="{{route('products.store')}}">
              @csrf
              <div class="col-12">
                <div class="form-group">
                  <label for="">nom</label>
                  <input type="text" name='title' class="form-control" placeholder="nom du produit">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1" class="form-label">description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" min="0.01" max="9999.99" value="" required>
                </div>

                <div class="form-group">
                  <label for="reference">Référence</label>
                  <input type="text" minlength="16" maxlength="16" class="form-control" id="reference" name="reference" value="" required>
                </div>

            
              
                <div class="form-group">
                    <label>En solde</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="discount0" name="discount" value="1" checked >
                        <label class="form-check-label" for="discount0">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="discount1" name="discount" value="0"  checked>
                        <label class="form-check-label" for="discount1">Non</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="picture">Photo</label>
                    <input type="text" class="form-control-file" name="image" id="picture">
                </div>

                

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
          </section>
    @endsection 
</body>
</html>