<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        return view('frontend.cart');
    }
}
