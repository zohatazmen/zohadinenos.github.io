<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class MeetChefController extends Controller
{
    public function index()
    {
        return view('frontend.meet-the-chef');
    }
}
