@extends('frontend.layouts.main')
@section('title', 'Menu')
@section('main-container')
    <!-- rts breadcrumb area start -->
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
                        <h2 class="heading-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Menu Tab
                        </h2>
                        <h1 class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Special
                            Menus</h1>
                        <p class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800"></p>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->

    <!-- MENU area start -->
    <div class="rts-menu-area menu rts-section-gap">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="banner-one-wrapper">
                        <div class="shape-1"><img src="{{ url('frontend/images/project/vector1.webp') }}" alt="shape">
                        </div>
                        <div class="shape-2"><img src="{{ url('frontend/images/project/vector2.webp') }}" alt="shape">
                        </div>
                        <div class="title-img" data-sal="zoom-in" data-sal-delay="100" data-sal-duration="800">
                            <img src="{{ url('frontend/images/about/title-shape.png') }}" alt="about">
                        </div>
                        <h1 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Our Food
                            Menu</h1>
                        <p class="desc" data-sal="slide-up" data-sal-duration="800">It’s the story of an everlasting love
                            affair, Dieter Delicioz and the Atlantic Ocean in the big air.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-12 text-center">
                    <div class="portfolio-menu mb-35" data-sal="slide-up" data-sal-delay="450" data-sal-duration="800">
                        <button class="gf_btn active" data-filter="*">All</button>
                        <button class="gf_btn" data-filter=".cat1">Breakfast</button>
                        <button class="gf_btn" data-filter=".cat2">Dinner</button>
                        <button class="gf_btn" data-filter=".cat3">Lunch</button>
                    </div>
                </div>
            </div>
            <div class="grid row align-items-center" data-sal="slide-up" data-sal-delay="270" data-sal-duration="800">
                @foreach ($menus as $menu)
                    <div class="col-lg-3 col-md-6 col-sm-6 grid-item cat{{ $menu->category }}">
                        <div class="portfolio-wrapper2 mb-30">
                            <a href="{{ url('shop-details/' . $menu->id) }}" class="image">
                                <img class="img-fluid" src="{{ url($menu->image) }}" alt="Portfolio Img">
                            </a>
                            <div class="portfolio-content">
                                <div class="star-rating">
                                    @for ($i = 0; $i < $menu->rating; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                    @for ($i = $menu->rating; $i < 5; $i++)
                                        <i class="fa-regular fa-star"></i>
                                    @endfor
                                </div>
                                <div class="content">
                                    <p class="title">
                                        <a href="{{ url('shop-details/' . $menu->id) }}">{{ $menu->name }}</a>
                                    </p>
                                    <span class="price">${{ number_format($menu->price, 2) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- MENU area end -->
@endsection
