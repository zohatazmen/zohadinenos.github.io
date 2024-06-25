<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/images/logo/01.svg') }}">
    <title>@yield('title') | Zoha's Dinenos</title>

    <link rel="stylesheet" href="{{ url('frontend/css/plugins/fontawesome-5.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/timepickers.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/plugins/hover-revel.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
</head>

<body class="home-one">


    <header class="header-one header--sticky">
        <div class="header-one-container">
            <div class="row">
                <div class="col-12">
                    <div class="header-main-wrapper">
                        <div class="logo-area">
                            <a href="{{ url('index') }}" class="logo">
                                <img src="{{ url('frontend/images/logo/01.svg') }}" alt="image-logo">
                            </a>
                        </div>
                        <div class="menu-area" id="menu-btn">
                            <a href="#" class="nav-menu-link menu-button">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                                <span class="dot4"></span>
                            </a>
                        </div>
                        <div class="rts-header-mid d-none d-lg-block">
                            <div class="main-nav-desk nav-area">
                                <nav>
                                    <ul>
                                        <li>
                                            <a class="nav-link" href="{{ url('') }}">Home</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ url('reservation') }}">Reservation</a>
                                        </li>

                                        <li>
                                            <a class="nav-link" href="{{ url('menu') }}">Menu</a>

                                        </li>
                                        <li class="has-droupdown pages">
                                            <a class="nav-link" href="#">Shop</a>
                                            <ul class="submenu">
                                                <li><a href="{{ url('shop') }}">Shop</a></li>
                                                <li><a href="{{ url('shop-details') }}">Shop Details</a></li>
                                                <li><a href="{{ url('cart') }}">Cart</a></li>
                                                <li><a href="{{ url('checkout') }}">Checkout</a></li>
                                                <li><a href="{{ url('account') }}">My Account</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="rts-header-right">
                            <div class="bottom">
                                <div class="query-list">
                                    <span class="sub-text">BOOK A TABLE</span>
                                    <a href="{{ url('tel:03077936306') }}"><span
                                            class="text-heading">03077936306</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="side-bar" class="side-bar header-one">
        <div class="inner">
            <button class="close-icon-menu"><i class="far fa-times"></i></button>
            <div class="inner-main-wrapper-desk d-none d-lg-block">
                <div class="thumbnail">
                    <img src="{{ url('frontend/images/logo/01.svg') }}" alt="dinenos">
                </div>
                <div class="banner-shape-area">
                    <span class="shape"></span>
                    <span class="shape"></span>
                    <span class="shape"></span>
                </div>
                <div class="inner-content">
                    <ul class="feature-list">
                        <li class="query-list">
                            <span class="sub-text">Sahiwal, Pakistan</span>
                            <a class="phone" href="{{ url('tel:99988899900') }}">03077936306</a>
                            <a class="email" href="{{ url('zohatazmen@gmail.com') }}">zohatazmen@gmail.com</a>
                        </li>
                        <li class="query-list two">
                            <p class="time">Mon - Thu: 10 AM - 02 AM</p>
                            <p class="time">Fri - Sun: 10 AM - 02 AM</p>
                        </li>
                    </ul>
                    <div class="footer">
                        <ul class="social-area">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-menu d-block d-lg-none">
                <nav class="nav-main mainmenu-nav mt--30">
                    <ul class="mainmenu" id="mobile-menu-active">
                        <li>
                            <a href="#" class="main">Home</a>
                        <li><a class="mobile-menu-link" href="{{ url('index') }}">Home</a></li>
                    </ul>
                    </li>
                    <li>
                        <a href="#" class="main">Reservation</a>
                    <li><a class="mobile-menu-link" href="{{ url('reservation') }}">Reservation</a></li>
                    </ul>
                    </li>
                    <li>
                        <a href="#" class="main">Menu</a>
                    <li><a class="mobile-menu-link" href="{{ url('menu') }}">Menu</a></li>
                    </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Pages</a>
                        <ul class="submenu">
                            <li><a class="mobile-menu-link" href="{{ url('shop') }}">Shop</a></li>
                            <li><a class="mobile-menu-link" href="{{ url('shop-details') }}">Shop Details</a></li>
                            <li><a class="mobile-menu-link" href="{{ url('cart') }}">cart</a></li>
                            <li><a class="mobile-menu-link" href="{{ url('checkout') }}">Checkout</a></li>
                            <li><a class="mobile-menu-link" href="{{ url('account') }}">Account</a></li>
                        </ul>
                    </li>


                    <li><a class="mobile-menu-link" href="{{ url('blog') }}">Blog</a></li>
                    <li><a class="mobile-menu-link" href="{{ url('contact') }}">Contact</a></li>
                    </li>
                    </ul>
                </nav>

                <div class="social-wrapper-one">
                    <ul>
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
    </div>
