@extends('backend.layouts.main')
@section('title', 'Add FAQ')
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
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="{{url('/admin/faqs')}}"><button class="btn btn-info">FAQs List</button></a></a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/faq-edit/{{$faqs->id}}">
                            @csrf
                            @method('put')
                            <div class="m-0">
                                <label for="question">Question</label>
                                <input class="form-control" id="question" type="text" placeholder="Enter Question" name="question" value="{{old('question', $faqs->question)}}"/>
                                @if ($errors->has('question'))
                                    <span class="text-danger">
                                        {{$errors->first('question')}}
                                    </span>
                                @endif
                            </div>
                            <div class="m-0">
                                <label for="answer">Answer</label>
                                <input class="form-control" id="answer" type="text" placeholder="Enter Answer" name="answer" value="{{old('answer', $faqs->answer)}}"/>
                                @if ($errors->has('answer'))
                                    <span class="text-danger">
                                        {{$errors->first('answer')}}
                                    </span>
                                @endif
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input class="btn btn-info btn-block" type="submit" value="Submit" name="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
