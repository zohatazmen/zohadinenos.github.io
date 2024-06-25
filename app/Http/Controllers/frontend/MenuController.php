<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\MenuModel;

class MenuController extends Controller
{
    public function index()
    {
        // Fetch all menu items from the database
        $menus = MenuModel::all();

        // Pass the data to the view
        return view('frontend.menu', compact('menus'));
    }
}
