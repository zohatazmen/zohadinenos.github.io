<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ReservationModel;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('frontend.reservation');
    }

    public function submitMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'time' => 'required',
            'date' => 'required|date',
            'guest' => 'required|integer',
            'message' => 'required',
        ]);

        $reservation = new ReservationModel();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->time = $request->time;
        $reservation->date = $request->date;
        $reservation->guest = $request->guest;
        $reservation->message = $request->message;
        $reservation->save();

        return back()->with('success', 'Thanks for Contacting. We\'ll Contact you ASAP!');
    }
}
