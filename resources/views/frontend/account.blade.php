@extends('frontend.layouts.main')
@section('title', 'Account')
@section('main-container')

    <!-- Display Flash Messages -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

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
                        <h2 class="heading-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">My
                            Account</h2>
                        <h1 class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Your Details
                        </h1>
                        <p class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800"></p>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->

    <!-- contact form area start -->
    <div class="rts-contact-page-form-area rts-section-gap account">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mian-wrapper-form left">
                        <div class="title-mid-wrapper-home-two" data-sal="slide-up" data-sal-delay="150"
                            data-sal-duration="800">
                            <h2 class="title">Login</h2>
                        </div>
                        <form id="login-form" class="contact-form-contact" action="{{ route('login') }}" method="post">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="single-input">
                                <label for="email">Username or email address <span class="indicator">*</span></label>
                                <input type="email" name="email" id="email" placeholder="Email Address or Username"
                                    required>
                            </div>
                            <div class="single-input">
                                <label for="password">Password <span class="indicator">*</span></label>
                                <input type="password" name="password" id="password" placeholder="Password" required>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember
                                    me</label>
                            </div>
                            <button type="submit" class="rts-btn btn-primary">Log In</button>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mian-wrapper-form right">
                        <div class="title-mid-wrapper-home-two" data-sal="slide-up" data-sal-delay="150"
                            data-sal-duration="800">
                            <h2 class="title">Registration</h2>
                        </div>
                        <form id="registration-form" class="contact-form-contact" action="{{ route('register') }}"
                            method="post">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="single-input">
                                <label for="name_reg">Name <span class="indicator">*</span></label>
                                <input type="text" name="name" id="name_reg" required>
                            </div>
                            <div class="single-input">
                                <label for="email_reg">Email address <span class="indicator">*</span></label>
                                <input type="email" name="email" id="email_reg" required>
                            </div>
                            <div class="single-input">
                                <label for="password_reg">Password <span class="indicator">*</span></label>
                                <input type="password" name="password" id="password_reg" placeholder="Password" required>
                            </div>
                            <button type="submit" class="rts-btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form area end -->
@endsection
