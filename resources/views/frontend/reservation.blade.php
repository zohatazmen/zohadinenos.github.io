@extends('frontend.layouts.main')
@section('title', 'reservation')
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
                        <h2 class="heading-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            Reservation
                        </h2>
                        <h1 class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            Book Table
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

    <!-- resources/views/frontend/reservation.blade.php -->

    <div class="rts-reservation-area reservation">
        @if ($message = Session::get('success'))
            <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                <strong>
                    <h1 style="color:#ffffff">{{ $message }}</h1>
                </strong>
            </div>
        @endif
        <div class="container">
            <form action="{{ route('reservation.submit') }}" method="post" class="appoinment-form">
                @csrf
                <div class="single-input">
                    <label for="guest">Number of Guest <span class="indicator">*</span></label>
                    <input name="guest" type="number" placeholder="Person" required />
                    @if ($errors->has('guest'))
                        <span class="text-danger">{{ $errors->first('guest') }}</span>
                    @endif
                </div>
                <div class="single-input">
                    <label for="date">Select Date <span class="indicator">*</span></label>
                    <input placeholder="Date" type="text" name="date" id="datepicker" class="calendar" required />
                    @if ($errors->has('date'))
                        <span class="text-danger">{{ $errors->first('date') }}</span>
                    @endif
                </div>
                <div class="single-input">
                    <label for="time">Select Time <span class="indicator">*</span></label>
                    <input name="time" type="text" id="timepicker" placeholder="Time" required />
                    @if ($errors->has('time'))
                        <span class="text-danger">{{ $errors->first('time') }}</span>
                    @endif
                </div>
                <div class="single-input">
                    <label for="name">Your Name <span class="indicator">*</span></label>
                    <input name="name" type="text" placeholder="Your Name" required />
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="single-input">
                    <label for="email">Email Address <span class="indicator">*</span></label>
                    <input name="email" type="text" placeholder="Your Email" required />
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="single-input">
                    <label for="phone">Phone Number <span class="indicator">*</span></label>
                    <input name="phone" type="text" placeholder="Phone Number" required />
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
                <div class="single-input message">
                    <label for="message">Special Request <span class="indicator">*</span></label>
                    <textarea name="message" placeholder="Message" required></textarea>
                    @if ($errors->has('message'))
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    @endif
                </div>
                <div class="single-input">
                    <button type="submit" class="rts-btn btn-primary">BOOK RESERVATION</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Video area start -->
    <div class="rts-video-area reservation rts-section-gap">
        <div class="container">
            <div class="video-area-inner">
                <div class="vedio-icone">
                    <a id="play-video" class="video-play-button" href="#">
                        <span></span>
                        <p class="text">Play Vedio</p>
                    </a>
                    <div id="video-overlay" class="video-overlay">
                        <a class="video-overlay-close">×</a>
                    </div>
                </div>
                <div class="video-section-bottom">
                    <div class="rts-brand-area">
                        <div class="swiper-brand-main-wrapper">
                            <div class="swiper mySwiper-brand">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="brand-wrapper">
                                            <div class="image">
                                                <a href="#"><img src="{{ url('frontend/images/brand/01.webp') }}"
                                                        alt="brand" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-wrapper">
                                            <div class="image">
                                                <a href="#"><img src="{{ url('frontend/images/brand/02.webp') }}"
                                                        alt="brand" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-wrapper">
                                            <div class="image">
                                                <a href="#"><img src="{{ url('frontend/images/brand/03.webp') }}"
                                                        alt="brand" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-wrapper">
                                            <div class="image">
                                                <a href="#"><img src="{{ url('frontend/images/brand/04.webp') }}"
                                                        alt="brand" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-wrapper">
                                            <div class="image">
                                                <a href="#"><img src="{{ url('frontend/images/brand/05.webp') }}"
                                                        alt="brand" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rts-testimonial-area">
                        <div class="testimonial-area-inner">
                            <div class="swiper-testimonial-main-wrapper">
                                <div class="swiper swiper-testimonials-1">
                                    <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="200"
                                        data-sal-duration="800">
                                        <span class="shape"></span>
                                        <span class="shape"></span>
                                        <span class="shape"></span>
                                    </div>
                                    <div class="left-quote">
                                        <img src="{{ url('frontend/images/testimonials/quote-3.webp') }}"
                                            alt="testimonial" />
                                    </div>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-wrapper">
                                                <div class="content">
                                                    <h3>
                                                        <em>“ Customer feedback is the information,
                                                            insights, issues, & input shared by your
                                                            community about their experiences with your
                                                            company, product, or services. ”</em>
                                                    </h3>
                                                </div>
                                                <div class="author">
                                                    <h5 class="title">Zoha Tazmen</h5>
                                                    <p class="sub-title">ceo of zohasdinenos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-wrapper">
                                                <div class="content">
                                                    <h3>
                                                        <em>“ Customer feedback is the information,
                                                            insights, issues, & input shared by your
                                                            community about their experiences with your
                                                            company, product, or services. ”</em>
                                                    </h3>
                                                </div>
                                                <div class="author">
                                                    <h5 class="title">Zoha Tazmen</h5>
                                                    <p class="sub-title">ceo of zohasdinenos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-wrapper">
                                                <div class="content">
                                                    <h3>
                                                        <em>“ Customer feedback is the information,
                                                            insights, issues, & input shared by your
                                                            community about their experiences with your
                                                            company, product, or services. ”</em>
                                                    </h3>
                                                </div>
                                                <div class="author">
                                                    <h5 class="title">Zoha Tazmen</h5>
                                                    <p class="sub-title">ceo of zohasdinenos</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-quote">
                                        <img src="{{ url('frontend/images/testimonials/quote-4.webp') }}"
                                            alt="testimonial" />
                                    </div>
                                </div>
                                <div class="next-prev-btn">
                                    <div class="swiper-button-prevs">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </div>
                                    <div class="swiper-button-nexts">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video area end -->
@endsection
