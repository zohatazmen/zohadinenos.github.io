@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')


    <div class="rts-banner-main-area-swiper banner-one">
        <div class="banner-area-sidebar">
            <div class="mail"><a href="#">zohasdinenos@gmail.com</a></div>
            <div class="content">
                <p class="open">Opening Hour:</p>
                <div class="time">10:00AM-8:00PM</div>
            </div>
        </div>
        <div class="swiper-container">

            <div class="swiper-pagination"></div>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rts-section-gap ptb_sm-20 rts-banner-one bg_image bg_image--1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-one-wrapper ptb--110">
                                        <span class="b_one-pre">
                                            We Serve Food, Harmony, & Laughter Since 2000
                                        </span>
                                        <div class="banner-shape-area">
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                        </div>
                                        <h1 class="title-banner">
                                            Delicious Foods With
                                            <br>
                                            Wonderful Eating
                                        </h1>
                                        <div class="button-area-banner">
                                            <a href="{{ url('about') }}" class="rts-btn btn-primary">View More</a>
                                            <a href="{{ url('menu') }}" class="rts-btn btn-seconday">Food Menu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rts-section-gap ptb_sm-20 rts-banner-one bg_image bg_image--2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-one-wrapper ptb--110">
                                        <span class="b_one-pre">
                                            We Serve Food, Harmony, & Laughter Since 1998
                                        </span>
                                        <div class="banner-shape-area">
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                        </div>
                                        <h1 class="title-banner">
                                            Delicious Foods With
                                            <br>
                                            Wonderful Eating
                                        </h1>
                                        <div class="button-area-banner">
                                            <a href="{{ url('about') }}" class="rts-btn btn-primary">View More</a>
                                            <a href="{{ url('menu') }}" class="rts-btn btn-seconday">Food Menu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rts-section-gap ptb_sm-20 rts-banner-one bg_image bg_image--3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-one-wrapper ptb--110">
                                        <span class="b_one-pre">
                                            We Serve Food, Harmony, & Laughter Since 1998
                                        </span>
                                        <div class="banner-shape-area">
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                            <span class="shape"></span>
                                        </div>
                                        <h1 class="title-banner">
                                            Delicious Foods With
                                            <br>
                                            Wonderful Eating
                                        </h1>
                                        <div class="button-area-banner">
                                            <a href="{{ url('about') }}" class="rts-btn btn-primary">View More</a>
                                            <a href="{{ url('menu') }}" class="rts-btn btn-seconday">Food Menu</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-reservation-area">
        @if ($message = Session::get('success'))
            <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                <strong>
                    <h1 style="color:#ffffff">{{ $message }}</h1>
                </strong>
            </div>
        @endif
        <div class="container">
            <form action="{{ url('/') }}" method="post" class="appoinment-form">
                @csrf
                <div class="single-input">
                    <label for="guest">Number of Guest <span class="indicator">*</span></label>
                    <input name="guest" type="number" placeholder="Person" id="guest" required>
                    @if ($errors->has('guest'))
                        <span class="text-danger">{{ $errors->first('guest') }}</span>
                    @endif
                </div>
                <div class="single-input">
                    <label for="datepicker">Select Date <span class="indicator">*</span></label>
                    <input placeholder="Date" type="text" name="date" id="datepicker" value="" class="calendar"
                        required>
                    @if ($errors->has('date'))
                        <span class="text-danger">{{ $errors->first('date') }}</span>
                    @endif
                </div>
                <div class="single-input">
                    <label for="timepicker">Select Time <span class="indicator">*</span></label>
                    <input name="time" type="text" id="timepicker" placeholder="Time" />
                    @if ($errors->has('time'))
                        <span class="text-danger">{{ $errors->first('time') }}</span>
                    @endif
                </div>
                <div class="single-input">
                    <button type="submit" class="rts-btn btn-primary">BOOK RESERVATION</button>
                </div>
            </form>
        </div>
    </div>

    <div class="rts-about-area rts-section-gapTop bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 pr--60 pr_sm--0 mt_md--50 mt_sm--50 pl_md--0 pl_sm--0 pb_md--150 pb_sm--70">
                    <div class="about-one-img">
                        <div class="thumbnail-1">
                            <img src="{{ url('frontend/images/about/about1.png') }}" alt="about">
                            <div class="line">
                                <img src="{{ url('frontend/images/about/line-shape-1.webp') }}" alt="about">
                            </div>
                        </div>
                        <div class="thumbnail-2">
                            <div class="reveal-item overflow-hidden aos-init">
                                <div class="reveal-animation reveal-end reveal-primary aos aos-init"
                                    data-aos="reveal-end"></div>
                                <img src="{{ url('frontend/images/about/about2.jpg') }}" alt="about">
                            </div>
                            <span><img src="{{ url('frontend/images/about/round.png') }}" alt="about"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 pr--10">
                    <div class="banner-one-wrapper ptb--110">
                        <div class="title-img" data-sal="zoom-in" data-sal-delay="200" data-sal-duration="800">
                            <img src="{{ url('frontend/images/about/title-shape.png') }}" alt="about">
                        </div>
                        <h1 class="title-banner" data-sal="slide-up" data-sal-delay="170" data-sal-duration="800">
                            Welcome To Our <br> Luxury Restaurant
                        </h1>
                        <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                            <span class="shape"></span>
                            <span class="shape"></span>
                            <span class="shape"></span>
                        </div>
                        <p class="desc" data-sal="slide-up" data-sal-duration="800">Welcome to Zohas Dinenos, where
                            culinary excellence meets unparalleled luxury. Our restaurant is a sanctuary of taste, offering
                            an exquisite dining experience that delights the senses. From the moment you step through our
                            doors, you are enveloped in an atmosphere of elegance and sophistication.</p>
                        <div class="button-area-banner" data-sal="slide-up" data-sal-delay="350"
                            data-sal-duration="800">
                            <a href="menu" class="rts-btn btn-secondary">More Foods</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-marquee-area rts-section-gap bg-white">
        <div class="left"></div>
        <div class="marquee">
            <div class="marquee-content">
                <div class="marquee-tag">
                    <h3>Welcome To Our Luxury Restaurant <span></span></h3>
                </div>
                <div class="marquee-tag">
                    <h3>Welcome To Our Dinenos Restaurant <span></span></h3>
                </div>
                <div class="marquee-tag">
                    <h3>Welcome To Our Luxury Restaurant <span></span></h3>
                </div>
            </div>
        </div>
        <div class="right"></div>
    </div>

    <div class="rts-menu-area rts-section-gapTop">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="banner-one-wrapper">
                        <div class="shape-1"><img src="{{ url('frontend/images/project/vector1.webp') }}"
                                alt="shape"></div>
                        <div class="shape-2"><img src="{{ url('frontend/images/project/vector2.webp') }}"
                                alt="shape"></div>
                        <div class="title-img" data-sal="zoom-in" data-sal-delay="200" data-sal-duration="800">
                            <img src="{{ url('frontend/images/about/title-shape.png') }}" alt="about">
                        </div>
                        <h1 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            Our Food Menu
                        </h1>
                        <p class="desc" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">It’s the
                            story of an everlasting love affair, Dieter Delicioz and the <br> Atlantic Ocean in the big air.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-12 text-center">
                    <div class="portfolio-menu mb-35" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                        <button class="gf_btn active" data-filter="*">All</button>
                        <button class="gf_btn" data-filter=".cat1">Beakfast</button>
                        <button class="gf_btn" data-filter=".cat2">Dinner</button>
                        <button class="gf_btn" data-filter=".cat3">Lunch</button>
                    </div>
                </div>
            </div>
            <div class="grid row align-items-center" data-sal="slide-up" data-sal-delay="1250" data-sal-duration="800">
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat3">
                    <div class="portfolio-wrapper2 mb--30">
                        <a href="shop-details" class="image">
                            <img class="img-fluid" src="{{ url('frontend/images/project/01.jpg') }}"
                                alt="Portfolio Img">
                        </a>
                        <div class="portfolio-content">
                            <div class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="content">
                                <p class="title"><a href="{{ url('shop-details') }}">Chicha Morada</a></p>
                                <span class="price">$33.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat1">
                    <div class="portfolio-wrapper2 mb--30">
                        <a href="shop-details" class="image">
                            <img class="img-fluid" src="{{ url('frontend/images/project/02.jpg') }}"
                                alt="Portfolio Img">
                        </a>
                        <div class="portfolio-content">
                            <div class="star-rating">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="content">
                                <p class="title"><a href="{{ url('shop-details') }}">Tommy’s Margarita</a></p>
                                <span class="price">$30.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat2 cat3">
                    <div class="portfolio-wrapper2 mb--30">
                        <a href="shop-details" class="image">
                            <img class="img-fluid" src="{{ url('frontend/images/project/03.jpg') }}"
                                alt="Portfolio Img">
                        </a>
                        <div class="portfolio-content">
                            <div class="star-rating">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="content">
                                <p class="title"><a href="{{ url('shop-details') }}">Prickly Pear Tonic</a></p>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat1">
                    <div class="portfolio-wrapper2 mb--30">
                        <a href="{{ url('shop-details') }}" class="image">
                            <img class="img-fluid" src="{{ url('frontend/images/project/04.jpg') }}"
                                alt="Portfolio Img">
                        </a>
                        <div class="portfolio-content">
                            <div class="star-rating">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="content">
                                <p class="title"><a href="{{ url('shop-details') }}">Crispy Skin Chicken</a></p>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-area-banner" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800">
                <a href="{{ url('menu') }}" class="rts-btn btn-secondary">Get Free Tour</a>
            </div>
        </div>
    </div>

    <div class="rts-contact-area rts-section-gapTop bg-white">
        <div class="divider">
            <div class="rt-line-draw" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                <svg version="1.1" id="line_1" xmlns="{{ url('http://www.w3.org/2000/svg') }}"
                    xmlns:xlink="{{ url('http://www.w3.org/1999/xlink') }}" x="0px" y="0px" width="50px"
                    height="200px" xml:space="preserve">
                    <path class="line-path wow path-vert" fill="#01a09e" stroke-width="1" stroke="#dd5903"
                        d="M30 0 v600 400"></path>
                </svg>
            </div>
        </div>
        <div class="contact-area-inner">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="container">
                        <div class="banner-one-wrapper text-center">
                            <div class="shape-1"><img src="{{ url('frontend/images/contact/overly-line.webp') }}"
                                    alt=""></div>
                            <div class="title-img" data-sal="zoom-in" data-sal-delay="200" data-sal-duration="800">
                                <img src="{{ url('frontend/images/about/title-shape.png') }}" alt="about">
                            </div>
                            <h1 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                                Find Food Lounge
                            </h1>
                            <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="400"
                                data-sal-duration="800">
                                <span class="shape"></span>
                                <span class="shape"></span>
                                <span class="shape"></span>
                            </div>
                            <ul class="address" data-sal="slide-up" data-sal-delay="450" data-sal-duration="800">
                                <li>Farid Town, Sahiwal Pakistan</li>
                                <li><a href="tel:03077936306">03077936306</a></li>
                                <li><a href="zohasdinenos@gmail.com">zohasdinenos@gmail.com</a></li>
                                <li class="break"></li>
                                <li>Mon - Thu: 10 AM - 02 AM</li>
                                <li>Fri - Sun: 10 AM - 02 AM</li>
                            </ul>
                            <ul class="social-area">
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-behance"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-side-image">
                        <div class="reveal-item overflow-hidden aos-init">
                            <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end">
                            </div>
                            <img src="{{ url('frontend/images/contact/bg-01.jpg') }}" alt="contact">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="counter-up-area">
                <div class="rts-single-service-two" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                    <h2 class="title-main"><span class="counter">10</span></h2>
                    <p class="disc">
                        Awards Won
                    </p>
                </div>
                <div class="rts-single-service-two" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                    <h2 class="title-main"><span class="counter">5</span> <span class="prefix">K</span></h2>
                    <p class="disc">
                        Dally Orders
                    </p>
                </div>
                <div class="rts-single-service-two" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                    <h2 class="title-main"><span class="counter">99</span></h2>
                    <p class="disc">
                        Members
                    </p>
                </div>
                <div class="rts-single-service-two" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                    <h2 class="title-main"><span class="counter">100</span></h2>
                    <p class="disc">
                        Menu & Dish
                    </p>
                </div>
                <div class="rts-single-service-two" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                    <h2 class="title-main"><span class="counter">25</span></h2>
                    <p class="disc">
                        Specialities
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-menu-area menu-area-2 rts-section-gap">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="banner-one-wrapper">
                        <div class="shape-2"><img src="{{ url('frontend/images/project/vector4.webp') }}"
                                alt="shape"></div>
                        <div class="title-img" data-sal="zoom-in" data-sal-delay="200" data-sal-duration="800">
                            <img src="{{ url('frontend/images/about/title-shape.png') }}" alt="about">
                        </div>
                        <h1 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            Starters & Main Dishes
                        </h1>
                        <p class="desc" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">It’s the
                            story of an everlasting love affair, Dieter Delicioz and the <br> Atlantic Ocean in the big air.
                        </p>
                    </div>
                </div>
            </div>
            <div class="menu-area-2-inner">
                <div class="shape-1"><img src="{{ url('frontend/images/project/vector3.webp') }}" alt="shape"></div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="180" data-sal-duration="800">
                            <div class="menu-image"><a href="{{ url('shop-details') }}"><img
                                        src="frontend/images/project/sm-01.jpg" alt="item"></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="{{ url('shop-details)') }}">Chicha Morada</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$33.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="180" data-sal-duration="800">
                            <div class="menu-image"><a href="{{ url('shop-details') }}"><img
                                        src="frontend/images/project/sm-02.jpg" alt="item"></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="{{ url('shop-details') }}">Tommy’s Margarita</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$30.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="180" data-sal-duration="800">
                            <div class="menu-image"><a href="{{ url('shop-details') }}"><img
                                        src="{{ url('frontend/images/project/sm-03.jpg') }}" alt="item"></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="{{ url('shop-details') }}">Prickly Pear Tonic</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$15.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="180" data-sal-duration="800">
                            <div class="menu-image"><a href="{{ url('shop-details') }}"><img
                                        src="frontend/images/project/sm-04.jpg" alt="item"></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="{{ url('shop-details') }}">Crispy Skin Chicken</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$16.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="180" data-sal-duration="800">
                            <div class="menu-image"><a href="{{ url('shop-details') }}"><img
                                        src="frontend/images/project/sm-05.jpg" alt="item"></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="{{ url('shop-details') }}">Wild Mushroom Arancini</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$12.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="180" data-sal-duration="800">
                            <div class="menu-image"><a href="{{ url('shop-details') }}"><img
                                        src="frontend/images/project/sm-06.jpg" alt="item"></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="{{ url('shop-details') }}">Fresh Oysters Dozen</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$10.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="180" data-sal-duration="800">
                            <div class="menu-image"><a href="{{ url('shop-details') }}"><img
                                        src="frontend/images/project/sm-07.jpg" alt="item"></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="{{ url('shop-details') }}">Bruno’s Scribble</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$33.00</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="menu-wrapper" data-sal="zoom-in" data-sal-delay="180" data-sal-duration="800">
                            <div class="menu-image"><a href="{{ url('shop-details') }}"><img
                                        src="frontend/images/project/sm-08.jpg" alt="item"></a></div>
                            <div class="content">
                                <h4 class="p-title"><a href="{{ url('shop-details') }}">Purple Corn Tostada</a></h4>
                                <p class="desc">beetroot and datterini, goat cheese, Ricotta</p>
                            </div>
                            <div class="price-tag"><a href="#">$20.00</a></div>
                        </div>
                    </div>
                </div>
                <div class="button-area-banner" data-sal="slide-up" data-sal-delay="180" data-sal-duration="800">
                    <a href="{{ url('about') }}" class="rts-btn btn-primary">View More</a>
                    <a href="{{ url('shop-details') }}" class="rts-btn btn-secondary">Food Menu</a>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-gallery-area bg-white">
        <div class="gallery-area-inner">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-image" data-sal="slide-up" data-sal-delay="50" data-sal-duration="800">
                        <a id="open-popup" href="#"><img
                                src="{{ url('frontend/images/gallery/gallery-img-01.jpg') }}" alt="gallery"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-image" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800">
                        <a id="open-popupa" href="#"><img
                                src="{{ url('frontend/images/gallery/gallery-img-02.jpg') }}" alt="gallery"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-image" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                        <a id="open-popupb" href="#"><img
                                src="{{ url('frontend/images/gallery/gallery-img-03.jpg') }}" alt="gallery"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-image" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                        <a id="open-popupc" href="#"><img
                                src="{{ url('frontend/images/gallery/gallery-img-04.jpg') }}" alt="gallery"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-blog-area rts-section-gap">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="banner-one-wrapper">
                        <div class="title-img" data-sal="zoom-in" data-sal-delay="200" data-sal-duration="800">
                            <img src="{{ url('frontend/images/about/title-shape.png') }}" alt="about">
                        </div>
                        <h1 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            Starters & Main Dishes
                        </h1>
                        <p class="desc" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">It’s the
                            story of an everlasting love affair, Dieter Delicioz and the <br> Atlantic Ocean in the big air.
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-technical-main-wrapper" data-sal="slide-up" data-sal-delay="1200"
                data-sal-duration="800">
                <div class="swiper mySwiper-blog">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-wrapper">
                                <div class="image-part">
                                    <img src="frontend/images/blog/blog-01.jpg" alt="blog">
                                </div>
                                <span class="blog-badge"> March 2, 2023</span>
                                <div class="content">
                                    <p class="tag"><a href="#">Fast Food</a></p>
                                    <h3 class="title"><a href="{{ url('blog-details') }}">Love and food: It is all about
                                            dinenos restaurant</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-wrapper">
                                <div class="image-part">
                                    <img src="{{ url('frontend/images/blog/blog-02.jpg') }}" alt="blog">
                                </div>
                                <span class="blog-badge"> March 2, 2023</span>
                                <div class="content">
                                    <p class="tag"><a href="#">Rice curry</a></p>
                                    <h3 class="title"><a href="{{ url('blog-details') }}">Food is the foundation of true
                                            happiness</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-wrapper">
                                <div class="image-part">
                                    <img src="{{ url('frontend/images/blog/blog-03.jpg') }}" alt="blog">
                                </div>
                                <span class="blog-badge"> March 2, 2023</span>
                                <div class="content">
                                    <p class="tag"><a href="#">Dinner</a></p>
                                    <h3 class="title"><a href="{{ url('blog-details') }}">Enjoy an exceptional journey
                                            of taste of joy.</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-wrapper">
                                <div class="image-part">
                                    <img src="{{ url('frontend/images/blog/blog-04.jpg') }}" alt="blog">
                                </div>
                                <span class="blog-badge"> March 2, 2023</span>
                                <div class="content">
                                    <p class="tag"><a href="#">Restaurant</a></p>
                                    <h3 class="title"><a href="{{ url('blog-details') }}">The opportunity to work abroad
                                            is a prospect, one</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-brand-area rts-section-gap bg-white" data-sal="slide-up" data-sal-delay="120"
        data-sal-duration="800">
        <div class="container">
            <div class="swiper-brand-main-wrapper">
                <div class="swiper mySwiper-brand">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-wrapper">
                                <div class="image">
                                    <a href="#"><img src="{{ url('frontend/images/brand/01.png') }}"
                                            alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-wrapper">
                                <div class="image">
                                    <a href="#"><img src="{{ url('frontend/images/brand/02.png') }}"
                                            alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-wrapper">
                                <div class="image">
                                    <a href="#"><img src="{{ url('frontend/images/brand/03.png') }}"
                                            alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-wrapper">
                                <div class="image">
                                    <a href="#"><img src="{{ url('frontend/images/brand/04.png') }}"
                                            alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-wrapper">
                                <div class="image">
                                    <a href="#"><img src="{{ url('frontend/images/brand/05.png') }}"
                                            alt="brand"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-text">
                <p class="desc">5000+ Happy Sponsors With us</p>
            </div>
            <div class="divider">
                <div class="rt-line-draw" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                    <svg version="1.1" id="line_2" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="200px"
                        xml:space="preserve">
                        <path class="line-path wow path-vert" fill="#01a09e" stroke-width="1" stroke="#dd5903"
                            d="M30 0 v600 400"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection
