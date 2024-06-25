<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class ShopDetailsController extends Controller
{
    public function index()
    {
        return view('frontend.shop-details');
    }
}