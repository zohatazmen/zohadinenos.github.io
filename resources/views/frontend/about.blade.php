@extends('frontend.layouts.main')
@section('title','about')
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
                        <h2 class="heading-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Since From 2000</h2>
                        
                    <h1 class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">About Us</h1>
                    <p class=" main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                    </p>   
                </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->

    <!-- about area start -->
    <div class="rts-about-area about rts-section-gapTop bg-white">
        <div class="container">
            <div class="about-area-inner">
                <div class="image-section">
                    <div class="reveal-item overflow-hidden aos-init">
                        <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end"></div>
                        <img src="{{ url('frontend/images/bg/coffee-banner-sm.webp') }}" alt="image">
                    </div>
                    <span class="round-shape"><img src="{{ url('frontend/images/about/round.png') }}" alt="about"></span>
                </div>
                <div class="content">
                    <div class="title-img" data-sal="zoom-in" data-sal-delay="100" data-sal-duration="800">
                        <img src="{{ url('frontend/images/about/title-shape.png') }}" alt="about">
                    </div>
                    <h2 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                        A distinctive, well-preserved and comfortable space, high-quality products, authentic cuisine, food & drinks are done flawlessly.
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- brand area start -->
    <div class="rts-brand-area rts-section-gap bg-white" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
        <div class="container">
            <div class="swiper-brand-main-wrapper">
                <div class="swiper mySwiper-brand">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-wrapper">
                                <div class="image">
                                    <a href="#"><img src="{{ url('frontend/images/brand/01.png') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-wrapper">
                                <div class="image">
                                    <a href="#"><img src="{{ url('frontend/images/brand/02.png') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-wrapper">
                                <div class="image">
                                    <a href="#"><img src="{{ url('frontend/images/brand/03.png') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-wrapper">
                                <div class="image">
                                    <a href="#"><img src="{{ url('frontend/images/brand/04.png') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-wrapper">
                                <div class="image">
                                    <a href="#"><img src="{{ url('frontend/images/brand/05.png') }}" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-text">
                <p class="desc">5000+ Happy Sponsors With us</p>
            </div>
        </div>
    </div>
    <!-- brand area end -->

    <!-- service area start -->
    <div class="rts-service-area rts-section-gap home-five">
        <div class="container">
            <div class="banner-one-wrapper">
                <div class="title-img" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                    <img src="{{ url('frontend/images/about/title-shape.png') }}" alt="about">
                </div>
                <h1 class="title-banner" data-sal="slide-up" data-sal-delay="170" data-sal-duration="800">
                    Why People Choose Us?
                </h1>
                <p class="desc" data-sal="slide-up" data-sal-duration="800">It’s the story of an everlasting love affair, Dieter Delicioz and the <br> Atlantic Ocean in the big air.</p>
            </div>
            <div class="service-area-inner pt--100">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-wrapper" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            <div class="icon">
                                <img src="{{ url('frontend/images/service/icon/01.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h2 class="title">
                                    <a href="{{ url('menu-list') }}">Popular Dishes</a>
                                </h2>
                                <p class="service-txt"> They cannot foresee the pain & trouble that are bound to ensue. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-wrapper" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                            <div class="icon">
                                <img src="{{ url('frontend/images/service/icon/02.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h2 class="title">
                                    <a href="{{ url('shop-details') }}">Neat & Clean Foods</a>
                                </h2>
                                <p class="service-txt"> They cannot foresee the pain & trouble that are bound to ensue. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-wrapper" data-sal="slide-up" data-sal-delay="250" data-sal-duration="800">
                            <div class="icon">
                                <img src="{{ url('frontend/images/service/icon/03.png') }}" alt="icon">
                            </div>
                            <div class="content">
                                <h2 class="title">
                                    <a href="{{ url('meet-the-chef') }}">Experience Chefs</a>
                                </h2>
                                <p class="service-txt"> They cannot foresee the pain & trouble that are bound to ensue. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- Cta area start -->
    <div class="rts-cta-area">
        <div class="container">
            <div class="cta-inner">
                <h2 class="title">
                    <span class="first-title">Book Your Table Today.</span>
                    <span class="second-title"> Book Now!</span>
                </h2>
                <a href="{{ url('reservation') }}" class="rts-btn btn-primary"><i class="fa-solid fa-table"></i>BOOK A TABLE</a>
            </div>
        </div>
    </div>
    <!-- Cta area end -->

    <!-- blog area start -->
    <div class="rts-blog-area rts-section-gap">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="banner-one-wrapper">
                        <div class="title-img" data-sal="zoom-in" data-sal-delay="100" data-sal-duration="800">
                            <img src="{{ url('frontend/images/about/title-shape.png') }}" alt="about">
                        </div>
                        <h1 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            Starters & Main Dishes
                        </h1>
                        <p class="desc" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">It’s the story of an everlasting love affair, Dieter Delicioz and the <br> Atlantic Ocean in the big air.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-technical-main-wrapper" data-sal="slide-up" data-sal-delay="1200" data-sal-duration="800">
                <div class="swiper mySwiper-blog">
                    <div class="swiper-wrapper" data-sal-delay="250" data-sal-duration="800">
                        <div class="swiper-slide">
                            <div class="blog-wrapper">
                                <div class="image-part">
                                    <img src="{{ url('frontend/images/blog/blog-01.jpg') }}" alt="blog">
                                </div>
                                <span class="blog-badge"> March 2, 2023</span>
                                <div class="content">
                                    <p class="tag"><a href="#">Fast Food</a></p>
                                    <h3 class="title"><a href="{{ url('blog-details') }}">Love and food: It is all about dinenos restaurant</a></h3>
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
                                    <h3 class="title"><a href="{{ url('blog-details') }}">Food is the foundation of true happiness</a></h3>
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
                                    <h3 class="title"><a href="{{ url('blog-details') }}">Enjoy an exceptional journey of taste of joy.</a></h3>
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
                                    <h3 class="title"><a href="{{ url('blog-details') }}">The opportunity to work abroad is a prospect, one</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->

@endsection
