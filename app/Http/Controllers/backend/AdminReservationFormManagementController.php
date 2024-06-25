<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\ReservationFormModel;

class AdminReservationFormManagementController extends Controller
{
    public function index()
    {
        $reservations = ReservationFormModel::all();

        return view('backend.reservationformmanagement', compact('reservations'));
    }

    public function destroy($id)
    {
        $reservation = ReservationFormModel::findOrFail($id);
        $reservation->delete();

        return redirect()->route('admin.reservation.index')->with('success', 'Reservation deleted successfully.');
    }
}