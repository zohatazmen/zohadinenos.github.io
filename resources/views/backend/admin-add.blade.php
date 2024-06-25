@extends('backend.layouts.main')
@section('title', 'Add/Edit an Admin')
@section('main-container')
<div class="app-body">
    <div class="container-fluid"><br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ url('/admin/admins-list') }}" class="btn btn-dark">Admins</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="post" action="{{ $url }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="m-0">
                                <label for="inputFirstName">First Name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="first_name" value="{{ old('first_name', $admin->first_name ?? '') }}">
                                <span class="text-danger">
                                    @error('first_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="m-0">
                                <label class="form-label" for="inputLastName">Last Name</label>
                                <input class="form-control"  id="inputLastName" type="text" placeholder="Enter your last name" name="last_name" value="{{ old('last_name', $admin->last_name ?? '') }}">
                                <span class="text-danger">
                                    @error('last_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="m-0">
                                <label for="inputEmail">Email Address</label>
                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" value="{{ old('email', $admin->email ?? '') }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="m-0">
                                <label for="inputContact">Contact Number</label>
                                <input class="form-control" id="inputContact" type="tel" placeholder="+923451234567" name="contact" value="{{ old('contact', $admin->contact ?? '') }}">
                                <span class="text-danger">
                                    @error('contact')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="m-0">
                                <label for="inputPassword">Password</label>
                                <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" name="password">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="m-0">
                                <label for="inputPasswordConfirm">Confirm Password</label>
                                <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="password_confirmation">
                                <span class="text-danger">
                                    @error('password_confirmation')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid">
                            <input class="btn btn-dark btn-lg" type="submit" value="Save Admin" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
@endsection
