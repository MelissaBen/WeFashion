<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class MainController extends Controller
{
    //
    public function home() {
        return view('home');
    }

    public function index() {

        $products = Product::all();
        dd($products);
        return view('products');
    }
}
