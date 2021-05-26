<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class MainController extends Controller
{
    //
    public function home() {
        return view('home');
    }

    public function index() {

        if (request()->categorie) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->categorie);
            })->paginate(6);
        } else {
            $products = Product::with('categories')->paginate(6);
        }
        
        return view('products' , [
              'products' => $products
          ]);
       
    }
}
