<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class BlogDetailsController extends Controller
{
    public function index()
    {
        return view('frontend.blog-details');
    }
}
