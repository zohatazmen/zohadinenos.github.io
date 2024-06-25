@extends('backend.layouts.main')

@section('title', 'Edit Reservation')

@section('main-container')
<div class="app-body">
    <div class="container-fluid">
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('admin.reservations.index') }}"><button class="btn btn-dark">Reservation List</button></a>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.reservations.update', $reservation->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="customer_name">Customer Name</label>
                        <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ $reservation->customer_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="customer_email">Customer Email</label>
                        <input type="email" class="form-control" id="customer_email" name="customer_email" value="{{ $reservation->customer_email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="customer_phone">Customer Phone</label>
                        <input type="text" class="form-control" id="customer_phone" name="customer_phone" value="{{ $reservation->customer_phone }}" required>
                    </div>
                    <div class="form-group">
                        <label for="reservation_date">Reservation Date</label>
                        <input type="datetime-local" class="form-control" id="reservation_date" name="reservation_date" value="{{ $reservation->reservation_date }}" required>
                    </div>
                    <div class="form-group">
                        <label for="number_of_people">Number of People</label>
                        <input type="number" class="form-control" id="number_of_people" name="number_of_people" value="{{ $reservation->number_of_people }}" required>
                    </div>
                    <div class="form-group">
                        <label for="special_requests">Special Requests</label>
                        <textarea class="form-control" id="special_requests" name="special_requests">{{ $reservation->special_requests }}</textarea>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid">
                            <input class="btn btn-dark btn-lg" type="submit" value="Update Reservation" name="submit">
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
