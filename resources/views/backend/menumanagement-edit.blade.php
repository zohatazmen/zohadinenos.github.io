@extends('backend.layouts.main')
@section('title', 'Edit Menu')
@section('main-container')
    <div class="app-body">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block p-4 border-left-success">
                <strong>
                    {{ $message }}
                </strong>
            </div>
        @endif
        <div class="container-fluid">
            <br>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{ url('/admin/menus') }}"><button class="btn btn-dark">Menus List</button></a>
                </div>
                <div class="card-body">
                    <form method="post" action="/admin/menus/update/{{ $menu->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="m-0">
                            <label for="name">Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Enter Menu Name"
                                name="name" value="{{ $menu->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="category">Category</label>
                            <input class="form-control" id="category" type="text" placeholder="Enter Menu Category"
                                name="category" value="{{ $menu->category }}">
                            @if ($errors->has('category'))
                                <span class="text-danger">
                                    {{ $errors->first('category') }}
                                </span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="price">Price</label>
                            <input class="form-control" id="price" type="text" placeholder="Enter Menu Price"
                                name="price" value="{{ $menu->price }}">
                            @if ($errors->has('price'))
                                <span class="text-danger">
                                    {{ $errors->first('price') }}
                                </span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="rating">Rating</label>
                            <input class="form-control" id="rating" type="number" placeholder="Enter Menu Rating"
                                name="rating" value="{{ $menu->rating }}">
                            @if ($errors->has('rating'))
                                <span class="text-danger">
                                    {{ $errors->first('rating') }}
                                </span>
                            @endif
                        </div>
                        <div class="m-0">
                            <label for="image">Image</label>
                            <input class="form-control" id="image" type="file" accept=".png, .jpg, .jpeg"
                                name="image">
                            @if ($errors->has('image'))
                                <span class="text-danger">
                                    {{ $errors->first('image') }}
                                </span>
                            @endif
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input class="btn btn-dark btn-lg" type="submit" value="Update Menu" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
