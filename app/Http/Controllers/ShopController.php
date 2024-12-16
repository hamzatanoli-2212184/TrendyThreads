<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // Categories fetch karte hain
        $categories = Category::all();

        // Products fetch karte hain, filter lagane ke saath agar koi category selected ho
        $products = Product::when($request->category, function ($query, $category) {
            return $query->where('category_id', $category);
        })->get();

        // Data ko shop page ke view ke liye pass karte hain
        return view('web.shop', compact('categories', 'products'));
    }
}
