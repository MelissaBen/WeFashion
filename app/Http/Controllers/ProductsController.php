<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(6) ;
        return view('admin.products.index' , [
            'products' => $products 
        ]);
    }

     // // product soldes
     public function ShowProductSolde(){
     $soldes=DB::table('Products')->where('discount','=','solde')->orderBy('id','DESC')->paginate(6);
     $results=DB::table('Products')->where('discount','=','solde');
     $countSolde=$results->count();
       return view('products',['products'=>$soldes],compact('countSolde'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all() ;
        return view('admin.products.create' , [
            'products' => $products 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

    $addProduct= new Product;

    $addProduct->title=$request->input('title');
    $addProduct->description=$request->input('description');
    $addProduct->price=$request->input('price');
    $addProduct->size=$request->input('size');
    $addProduct->reference=$request->input('reference');
    $addProduct->discount=$request->input('categorie');
    $addProduct->discount=$request->input('discount');

   if($request->hasfile('image')){

      $file=$request->file('image');

      $extension=$file->getClientOriginalExtension();

      $filename=time().'.'.$extension;

      $file->move('images',$filename);

      $addProduct->image=$filename;
    }
     

    $addProduct->save();
        return redirect()->route('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function destroy(Product $product)
    
    {
       $product->delete();
       return redirect()->route('admin')->with("success" , "l'article a bien été supprimé");
    }

}
