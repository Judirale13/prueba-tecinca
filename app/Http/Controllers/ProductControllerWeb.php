<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductControllerWeb extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all(); 
        return view('index', ['products' => $products]); 
    }

   
    public function show(Product $product)
    {
        return view('index', ['product' => $product]);
    }

   
    
}
