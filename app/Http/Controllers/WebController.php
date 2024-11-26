<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    // Home page
    public function index()
    {
        return view('web.index'); // index.blade.php view
    }

    // Shop page
    public function shop()
    {
        return view('web.shop'); // shop.blade.php view
    }

    // Men page
    public function men()
    {
        return view('web.men'); // men.blade.php view
    }

    // Women page
    public function women()
    {
        return view('web.women'); // women.blade.php view
    }

    // Cart page
    public function cart()
    {
        return view('web.cart'); // cart.blade.php view
    }

    // Contact page
    public function contact()
    {
        return view('web.contact'); // contact.blade.php view
    }
}