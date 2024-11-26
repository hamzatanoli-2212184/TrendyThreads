<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('shop.index', compact('products')); // Send data to shop page
    }
}
