@extends('frontend.layouts.main')
@section('title', 'Shop')
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
                        <h2 class="heading-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Products
                        </h2>
                        <h1 class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Our Menus
                        </h1>
                        <p class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800"></p>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->

    <!-- MENU area start -->
    <div class="rts-shop-area rts-section-gap">
        <div class="container">
            <div class="shop-area-inner">
                <div class="shop-filter-area">

                    </select>
                    <div class="menu-item">
                        <div class="row">
                            @foreach ($shops as $shop)
                                <div class="col-lg-4">
                                    <div class="portfolio-wrapper2 mb-30">
                                        <a href="{{ url('shop-details/' . $shop->id) }}" class="image">
                                            <img class="img-fluid" src="{{ url($shop->image) }}" alt="Portfolio Img">
                                        </a>
                                        <div class="portfolio-content">
                                            <div class="content">
                                                <p class="title"><a
                                                        href="{{ url('shop-details/' . $shop->id) }}">{{ $shop->name }}</a>
                                                </p>
                                                <p class="price">${{ number_format($shop->price, 2) }}</p>
                                                <a href="{{ url('cart') }}"
                                                    class="rts-btn btn-primary add-to-cart-btn">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- MENU area end -->
@endsection
