<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Reservation;
use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();

        return view('backend.reservations', compact('reservations'));
    }

    public function create()
    {
        return view('backend.reservations-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_phone' => 'required',
            'reservation_date' => 'required|date',
            'number_of_people' => 'required|integer',
        ]);

        $reservationData = $request->except('_token');

        Reservation::create($reservationData);

        return redirect()->route('admin.reservations.index')->with('success', 'Reservation created successfully.');
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('backend.reservations-show', compact('reservation'));
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('backend.reservations-edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_phone' => 'required',
            'reservation_date' => 'required|date',
            'number_of_people' => 'required|integer',
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservationData = $request->except('_token', '_method');
        $reservation->update($reservationData);

        return redirect()->route('admin.reservations.index')->with('success', 'Reservation updated successfully.');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('admin.reservations.index')->with('success', 'Reservation deleted successfully.');
    }
}
