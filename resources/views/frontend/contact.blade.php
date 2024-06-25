@extends('frontend.layouts.main')
@section('title', 'contact')
@section('main-container')
    <!-- rts breadcrumba area start -->
    <div class="rts-breadcrumb-area ptb_sm--100 bg-breadcrumb bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            <span class="shape"></span>
                            <span class="shape"></span>
                            <span class="shape"></span>
                        </div>
                        <h2 class="heading-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">My
                            Account</h2>
                        <h1 class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Your Details
                        </h1>
                        <p class=" main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                        </p>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->

    <!-- rts team area start -->
    <div class="rts-map-area chef rts-section-gap">
        <div class="container">
            <div class="map-inner">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7478823.98179023!2d70.2369214306667!3d27.98972208557777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b62cd8405a6d%3A0x6cce79c0f78cbfb7!2sSahiwal%2C%20Sahiwal%20District%2C%20Punjab!5e0!3m2!1sen!2s!4v1718908525055!5m2!1sen!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- rts team area end -->

    <!-- contact area start -->
    <div class="rts-contact-area contact rts-section-gapBottom bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content">
                        <h2 class="heading-title">Catch Us Here 24/7</h2>
                        <p class="desc">It’s the story of an everlasting love affair, Dieter Delicioz and the Atlantic
                            Ocean in the big air.</p>
                        <div class="content-bottom">
                            <div class="address">
                                <div class="get-touch">
                                    <ul>
                                        <li>18/B, New Ave 1000, New York</li>
                                        <li><a href="tel:{{ url('99988899900') }}">999 888 999 00</a></li>
                                        <li><a href="mailto:{{ url('booking@webexample.com') }}">booking@webexample.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="time">
                                <div class="open-closing-time">
                                    <ul>
                                        <li>Mon - Thu: 10 AM - 02 AM</li>
                                        <li>Fri - Sun: 10 AM - 02 AM</li>
                                    </ul>
                                </div>
                                <div class="rts-social-wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="rts-btn btn-secondary">Get Direction <i
                                class="fa-light fa-arrow-right"></i></a>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                        <strong>
                            <h1 style="color:#ffffff">{{ $message }}</h1>
                        </strong>
                    </div>
                @endif
                <div class="col-lg-6">
                    <form action="#" class="contact-form" method="post" action="{{ url('/contact') }}">
                        @csrf
                        <div class="single-input">
                            <input name="name" type="text" placeholder="Your Name" required
                                value="{{ old('name') }}" />
                            @if ($errors->has('name'))
                                <span class="text-danger">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                        <div class="single-input">
                            <input name="email" type="text" placeholder="Email" required value="{{ old('email') }}" />
                            @if ($errors->has('email'))
                                <span class="text-danger">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <div class="single-input">
                            <textarea name="message" placeholder="Message" value="{{ old('message') }}"></textarea>
                            @if ($errors->has('message'))
                                <span class="text-danger">
                                    {{ $errors->first('message') }}
                                </span>
                            @endif
                        </div>
                        <div class="single-input">
                            <button name="submit" type="submit" class="rts-btn btn-primary">SUBMIT <i
                                    class="fa-light fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
@endsection
