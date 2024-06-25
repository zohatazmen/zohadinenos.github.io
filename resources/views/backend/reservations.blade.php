@extends('backend.layouts.main')

@section('title', 'Reservations')

@section('main-container')
    <div class="app-body">
        <div class="container-fluid"><br>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-info">
                        <a class="text-info" href="{{ url('/admin') }}"></a>
                    </h6>
                    <a href="{{ route('admin.reservations.create') }}" class="btn btn-dark">
                        <i class="fas fa-plus fa-sm text-white-50"></i> Add Reservation
                    </a>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Reservation Date</th>
                                    <th>Number of People</th>
                                    <th>Special Requests</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $reservation)
                                    <tr>
                                        <td>{{ $reservation->id }}</td>
                                        <td>{{ $reservation->customer_name }}</td>
                                        <td>{{ $reservation->customer_email }}</td>
                                        <td>{{ $reservation->customer_phone }}</td>
                                        <td>{{ $reservation->reservation_date }}</td>
                                        <td>{{ $reservation->number_of_people }}</td>
                                        <td>{{ $reservation->special_requests }}</td>
                                        <td>
                                            <a href="{{ route('admin.reservations.edit', $reservation->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this admin?')">Delete</button>
                                            </form>
                                            <a href="{{ route('admin.reservations.show', $reservation->id) }}"
                                                class="btn btn-info btn-sm">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
