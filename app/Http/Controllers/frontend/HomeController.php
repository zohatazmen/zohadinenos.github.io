<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\HomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function submitMessage(Request $request)
    {
        $request->validate([
            'time' => 'required',
            'date' => 'required|date',
            'guest' => 'required|integer',
        ]);

        $reservation = new HomeModel();
        $reservation->time = $request->time;
        $reservation->date = $request->date;
        $reservation->guest = $request->guest;
        $reservation->save();

        return back()->with('success', 'Thanks for Contacting. We\'ll Contact you ASAP!');
    }
}
