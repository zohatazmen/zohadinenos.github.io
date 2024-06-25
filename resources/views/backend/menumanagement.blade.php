@extends('backend.layouts.main')

@section('title', 'Menu Management')

@section('main-container')
    <div class="app-body">
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-info">Menu Management</h6>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.menus.add') }}" class="btn btn-dark mb-3">
                        <i class="fas fa-plus fa-sm text-white-50"></i> Add Menu Item
                    </a>

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
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Rating</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $menu)
                                    <tr>
                                        <td>{{ $menu->id }}</td>
                                        <td>{{ $menu->name }}</td>
                                        <td>{{ $menu->category }}</td>
                                        <td>${{ number_format($menu->price, 2) }}</td>
                                        <td><img src="{{ asset($menu->image) }}" alt="{{ $menu->name }}"
                                                style="max-width: 100px;"></td>
                                        <td>{{ $menu->rating }}</td>
                                        <td>
                                            <form action="{{ route('admin.menus.delete', $menu->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this admin?')">Delete</button>
                                            </form>
                                            <a href="{{ route('admin.menus.edit', $menu->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
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
