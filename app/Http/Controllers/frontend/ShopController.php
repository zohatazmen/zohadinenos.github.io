<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ShopModel;

class ShopController extends Controller
{
    public function index()
    {
        // Fetch all shops data from the database
        $shops = ShopModel::all();

        // Pass the data to the view
        return view('frontend.shop', compact('shops'));
    }
}