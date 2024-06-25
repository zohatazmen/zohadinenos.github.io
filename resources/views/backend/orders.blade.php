@extends('backend.layouts.main')
@section('title', 'Orders')
@section('main-container')
<div class="container-fluid"><br>
<div class="app-body">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">
                <a class="text-info" href="{{url('/admin')}}"></a>
            </h6>
            <a href="{{url('/admin/order-add')}}" class="btn btn-dark">
                <i class="fas fa-plus fa-sm text-white-50"></i> Add New Order
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Category</th>
                            <th>Client</th>
                            <th>Link</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th width="160px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->title }}</td>
                            <td>{{ $order->details }}</td>
                            <td>{{ $order->category }}</td>
                            <td>{{ $order->client }}</td>
                            <td>{{ $order->link }}</td>
                            <td>
                                <img src="/backend/images/orders/{{$order->image}}" class="rounded-circle border border-info" width="50px" height="50px" alt="Image Not Found">
                            </td>
                            <td>
                                @if($order->status == 1)
                                    <a href="#">
                                        <span class="badge badge-success p-2">Active</span>
                                    </a>
                                @else
                                    <a href="#">
                                        <span class="badge badge-danger p-2">Disabled</span>
                                    </a>
                                @endif
                            </td>
                            <td>
                                <!-- Edit Button -->
                                <button class="btn btn-black btn-outline-dark btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip-primary" data-bs-title="Edit">
                                    <a href="/admin/order-edit/{{ $order->id }}">
                                        <i class="icon-edit"></i>
                                    </a>
                                </button>
                                
                                <!-- Delete Button -->
                                <form method="post" class="d-inline" action="/admin/order-delete/{{ $order->id }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-black btn-outline-dark btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip-danger" data-bs-title="Delete" onClick="return confirm('Are you sure you want to delete this record?');">
                                        <i class="icon-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    .btn-black {
        background-color: black;
        border-color: black;
        color: white;
    }
    .btn-black:hover {
        background-color: #333;
        border-color: #333;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
</div>
@endsection
