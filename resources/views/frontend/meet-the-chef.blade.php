@extends('frontend.layouts.main')
@section('title','meet-the-chef')
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
                    <h2 class="heading-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Team Details</h2>
                    <h1 class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Expert Chef</h1>
                    <p class=" main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                    </p>   
                </div>
                <!-- bread crumb inner wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- rts breadcrumba area end -->

<!-- brand area start -->
<div class="rts-team-details-area rts-section-gap bg-white">
    <div class="container">
        <div class="team-details-inner">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="image-area">
                        <img src="{{ url('frontend/images/team/01-big.webp') }}" alt="team-iamge">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="banner-one-wrapper">
                        <div class="banner-shape-area" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                            <span class="shape"></span>
                            <span class="shape"></span>
                            <span class="shape"></span>
                        </div>
                        <h3 class="title-banner" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">
                            Alice Capsey
                        </h3>
                        <p class="desc">
                            A restaurant is a business that prepares and serves food and drinks to customers meals are generally.
                        </p>
                        <div class="get-touch">
                            <ul>
                                <li><i class="fa-solid fa-location-dot"></i>Silk St, Barbican, London E2Y, UK</li>
                                <li><a href="tel:{{ url('39055123456') }}"><i class="fa-solid fa-phone-flip"></i>+39-055-123456</a></li>
                                <li><a href="mailto:{{ url('booking@webexample.com') }}"><i class="fa-solid fa-envelope-open"></i>booking@webexample.com</a></li>
                            </ul>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand area end -->
@endsection
