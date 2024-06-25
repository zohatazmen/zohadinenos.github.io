@extends('backend.layouts.main')
@section('title', 'Edit Order')
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
                        <form method="post" action="/admin/order-edit/{{$order->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="m-0">
                                <label for="title">Title</label>
                                <input class="form-control" id="title" type="text" placeholder="Enter order Title" name="title" value="{{old('title', $order->title)}}">
                                @if ($errors->has('title'))
                                    <span class="text-danger">
                                        {{$errors->first('title')}}
                                    </span>
                                @endif
                            </div>
                            <div class="m-0">
                                <label for="details">Details</label>
                                <input class="form-control" id="details" type="text" placeholder="Enter order Details" name="details" value="{{old('details', $order->details)}}">
                                @if ($errors->has('details'))
                                    <span class="text-danger">
                                        {{$errors->first('details')}}
                                    </span>
                                @endif
                            </div>
                            <div class="m-0">
                                <label for="category">Category</label>
                                <input class="form-control" id="category" type="text" placeholder="Enter order Category" name="category" value="{{old('category', $order->category)}}">
                                @if ($errors->has('category'))
                                    <span class="text-danger">
                                        {{$errors->first('category')}}
                                    </span>
                                @endif
                            </div>
                            <div class="m-0">
                                <label for="client">Client</label>
                                <input class="form-control" id="client" type="text" placeholder="Enter order Client" name="client" value="{{old('client', $order->client)}}">
                                @if ($errors->has('client'))
                                    <span class="text-danger">
                                        {{$errors->first('client')}}
                                    </span>
                                @endif
                            </div>
                            <div class="m-0">
                                <label for="link">Link</label>
                                <input class="form-control" id="link" type="text" placeholder="Enter order Client" name="link" value="{{old('link', $order->link)}}"/>
                                @if ($errors->has('link'))
                                    <span class="text-danger">
                                        {{$errors->first('link')}}
                                    </span>
                                @endif
                            </div>
                            <div class="m-0">
                                <label for="technology">Technology</label>
                                <input class="form-control" id="fb" type="text" placeholder="Enter order Technology" name="technology" value="{{old('technology', $order->technology)}}">
                                @if ($errors->has('technology'))
                                    <span class="text-danger">
                                        {{$errors->first('technology')}}
                                    </span>
                                @endif
                            </div>
                            <div class="m-0">
                                <label for="image">Image</label>
                                <input class="form-control" id="image" type="file" name="image" value="{{old('image', $order->image)}}" style="padding-bottom:38px">
                                @if ($errors->has('image'))
                                    <span class="text-danger">
                                        {{$errors->first('image')}}
                                    </span>
                                @endif
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input class="btn btn-dark btn-lg" type="submit" value="Update order" name="submit">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
