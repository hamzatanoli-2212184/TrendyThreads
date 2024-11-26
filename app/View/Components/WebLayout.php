<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WebLayout extends Component
{
    public function render()
    {
        return view('layouts.web-layout'); // This refers to layouts/web-layout.blade.php
    }
}
