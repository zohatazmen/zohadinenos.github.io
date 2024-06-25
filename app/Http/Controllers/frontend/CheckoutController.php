<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('frontend.checkout');
    }
}
