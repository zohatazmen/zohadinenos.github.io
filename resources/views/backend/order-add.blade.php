@extends('backend.layouts.main')
@section('title', 'Add Order')
@section('main-container')
<div class="app-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block p-4 border-left-success">
                    <strong>
                        {{$message}}
                    </strong>
                </div>
            @endif
            <div class="container-fluid">
                <br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="{{url('/admin/orders')}}"><button class="btn btn-dark">orders List</button></a></a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/order-add" enctype="multipart/form-data">
                            @csrf
                            <div class="m-0">
                                <label for="title">Title</label>
                                <input class="form-control" id="title" type="text" placeholder="Enter order Title" name="title" value="{{old('title')}}">
                                @if ($errors->has('title'))
                                    <span class="text-danger">
                                        {{$errors->first('title')}}
                                    </span>
                                @endif
                            </div>
                            <div class="m-0">
                                <label for="details">Details</label>
                                <textarea class="form-control" id="details" type="text" name="details" placeholder="Enter order Details" value="{{old('details')}}"></textarea>
                                @if ($errors->has('details'))
                                    <span class="text-danger">
                                        {{$errors->first('details')}}
                                    </span>
                                @endif
                            </div>
                            <div class="m-0">
                                <label for="link">Link</label>
                                <input class="form-control" id="link" type="text" placeholder="Enter order Link" name="link" value="{{old('link')}}">
                                @if ($errors->has('link'))
                                    <span class="text-danger">
                                        {{$errors->first('link')}}
                                    </span>
                                @endif
                            </div>
                            <div class="m-0">
                                <label for="category">Category</label>
                                <input class="form-control" id="category" type="text" placeholder="Enter order Category" name="category" value="{{old('category')}}">
                                @if ($errors->has('category'))
                                    <span class="text-danger">
                                        {{$errors->first('category')}}
                                    </span>
                                @endif
                            </div>

                            <div class="m-0">
                                <label for="technology">Technology</label>
                                <input class="form-control" id="technology" type="text" placeholder="Enter order Technology" name="technology" value="{{old('technology')}}"/>
                                @if ($errors->has('technology'))
                                    <span class="text-danger">
                                        {{$errors->first('technology')}}
                                    </span>
                                @endif
                            </div>
                            <div class="m-0">
                                <label for="client">Client</label>
                                <input class="form-control" id="client" type="text" placeholder="Enter order Client" name="client" value="{{old('client')}}">
                                @if ($errors->has('client'))
                                    <span class="text-danger">
                                        {{$errors->first('client')}}
                                    </span>
                                @endif
                            </div>
                            <div class="m-0">
                                <label for="image">Image</label>
                                <input class="form-control" id="image" type="file" accept=".png, .jpg, .jpeg" name="image" value="{{old('image')}}" style="padding-bottom:38px">
                                @if ($errors->has('image'))
                                    <span class="text-danger">
                                        {{$errors->first('image')}}
                                    </span>
                                @endif
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input class="btn btn-dark btn-lg" type="submit" value="Add order" name="submit">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
