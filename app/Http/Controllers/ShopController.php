<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        // Database se products fetch karte hain
        $products = Product::all();

        // Products ko shop page ke liye bhej dete hain
        return view('web.shop', compact('products'));
    }
}
