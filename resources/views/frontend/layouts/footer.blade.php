<div class="rts-footer-one rts-section-gap2Top">
    <div class="shape-1"><img src="{{ url('frontend/images/footer/vector5.webp') }}" alt="shape"></div>
    <div class="shape-2"><img src="{{ url('frontend/images/footer/vector6.webp') }}" alt="shape"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-footer-wrapper-one">
                    <div class="single-footer-wized-one logo-area" data-sal="slide-up" data-sal-delay="150"
                        data-sal-duration="800">
                        <a href="index" class="logo">
                            <img src="{{ url('frontend/images/logo/01.svg') }}" alt="logo">
                        </a>
                        <p class="disc-f">
                            Be the first to know about new collections, special events, and what’s going on at Our
                            Place. We are creative
                        </p>
                        <div class="query-list">
                            <span class="sub-text">Book a table</span>
                            <a href="{{ url('tel:03077936306') }}">
                                <span class="text-heading">03077936306</span>
                            </a>
                        </div>
                    </div>
                    <div class="single-footer-wized-one get-in-touch" data-sal="slide-up" data-sal-delay="350"
                        data-sal-duration="800">
                        <div class="footer-header-two get-touch">
                            <h6 class="title">Get In Touch</h6>
                            <div class="get-touch">
                                <ul>
                                    <li><i class="fa-solid fa-location-dot"></i>Sahiwal, Pakistan</li>
                                    <li><a href="{{ url('tel:03077936306') }}"><i
                                                class="fa-solid fa-phone-flip"></i>03077936306</a></li>
                                    <li><a href="{{ url('zohasdinenos.com') }}"><i
                                                class="fa-solid fa-envelope-open"></i>zohasdinenos@gmail.com</a></li>
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
                    <div class="single-footer-wized-one pages" data-sal="slide-up" data-sal-delay="250"
                        data-sal-duration="800">
                        <div class="footer-header-two pages">
                            <h6 class="title">Pages</h6>
                            <div class="pages">
                                <ul>
                                    <li><a href="{{ url('about') }}"> About Us</a></li>
                                    <li><a href="{{ url('menu-list') }}"> Our Menu</a></li>
                                    <li><a href="{{ url('our-chef') }}">Our Chef</a></li>
                                    <li><a href="{{ url('reservation') }}"> Reservation</a></li>
                                    <li><a href="{{ url('meet-the-chef') }}"> Meet The Chef </a></li>
                                    <li><a href="{{ url('contact') }}"> Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-footer-wized-one gallery" data-sal="slide-up" data-sal-delay="550"
                        data-sal-duration="800">
                        <div class="gallery-item"><img src="{{ url('frontend/images/gallery/sm-01.jpg') }}"
                                alt=""></div>
                        <div class="gallery-item"><img src="{{ url('frontend/images/gallery/sm-02.jpg') }}"
                                alt=""></div>
                        <div class="gallery-item"><img src="{{ url('frontend/images/gallery/sm-03.jpg') }}"
                                alt=""></div>
                        <div class="gallery-item"><img src="{{ url('frontend/images/gallery/sm-04.jpg') }}"
                                alt=""></div>
                        <div class="gallery-item"><img src="{{ url('frontend/images/gallery/sm-05.jpg') }}"
                                alt=""></div>
                        <div class="gallery-item"><img src="{{ url('frontend/images/gallery/sm-06.jpg') }}"
                                alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-footer-one">
                        <p class="disc">
                            ©<?php echo date('Y'); ?> Zoha's Dinenos | Developed by <a
                                href="mailto:zohatazmen@example.com">Zoha Tazmen</a> under the supervision of <a
                                href="mailto:jamil138.amin@gmail.com">Sir Jamil</a>
                            <br>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>

<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>


<div id="anywhere-home" class="">
</div>

<div id="dinenos-load">
    <div class="loader-wrapper">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>


<script src="{{ url('frontend/js/plugins/jquery.min.js') }}"></script>
<script src="{{ url('frontend/js/vendor/jqueryui.js') }}"></script>
<script src="{{ url('frontend/js/plugins/counter-up.js') }}"></script>
<script src="{{ url('frontend/js/plugins/swiper.js') }}"></script>
<script src="{{ url('frontend/js/vendor/twinmax.js') }}"></script>
<script src="{{ url('frontend/js/vendor/aos.js') }}"></script>
<script src="{{ url('frontend/js/vendor/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('frontend/js/vendor/split-text.js') }}"></script>
<script src="{{ url('frontend/js/plugins/text-plugins.js') }}"></script>
<script src="{{ url('frontend/js/plugins/metismenu.js') }}"></script>
<script src="{{ url('frontend/js/plugins/waypoint.js') }}"></script>
<script src="{{ url('frontend/js/vendor/metisMenu.min.js') }}"></script>
<script src="{{ url('frontend/js/vendor/wow.js') }}"></script>
<script src="{{ url('frontend/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ url('frontend/js/plugins/jquery-timepicker.js') }}"></script>
<script src="{{ url('frontend/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ url('frontend/js/vendor/sal.min.js') }}"></script>
<script src="{{ url('frontend/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ url('frontend/js/plugins/jquery-slideNav.js') }}"></script>
<script src="{{ url('frontend/js/vendor/hover-revel.js') }}"></script>
<script src="{{ url('frontend/js/plugins/swip-img.js') }}"></script>
<script src="{{ url('frontend/js/main.js') }}"></script>


</body>


</html>
