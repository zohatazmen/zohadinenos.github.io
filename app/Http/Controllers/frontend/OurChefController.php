<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class OurChefController extends Controller
{
    public function index()
    {
        return view('frontend.our-chef');
    }
}
