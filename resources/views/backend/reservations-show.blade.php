@extends('backend.layouts.main')

@section('title', 'Reservation Details')

@section('main-container')
<div class="app-body">
    <div class="container-fluid">
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">
                    <a class="text-info" href="{{ url('/admin') }}"></a>
                </h6>
                <a href="{{ route('admin.reservations.index') }}" class="btn btn-dark">
                    <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Reservations
                </a>
            </div>
            <div class="card-body">
                <p><b>Reservation ID:</b> {{ $reservation->id }}</p>
                <p><b>Customer Name:</b> {{ $reservation->customer_name }}</p>
                <p><b>Customer Email:</b> {{ $reservation->customer_email }}</p>
                <p><b>Customer Phone:</b> {{ $reservation->customer_phone }}</p>
                <p><b>Reservation Date:</b> {{ $reservation->reservation_date }}</p>
                <p><b>Number of People:</b> {{ $reservation->number_of_people }}</p>
                <p><b>Special Requests:</b> {{ $reservation->special_requests }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
