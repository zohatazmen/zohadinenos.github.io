@extends('frontend.layouts.main')
@section('title', 'blog')
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
                        <h2 class="heading-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Blog &
                            Feeds</h2>

                        <h1 class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Insights
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

    <!-- rts blog mlist area -->
    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-8 col-md-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--30">
                        <div class="thumbnail">
                            <img src="{{ url('frontend/images/blog/blog-05.jpg') }}" alt="Food Blog">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by Zoha Tazmen</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>by Zoha Tazmen</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span>by Zoha Tazmen</span>
                                </div>
                                <!-- single infoe end -->
                            </div>
                            <a href="{{ url('blog-details') }}">
                                <h3 class="title">Building smart business solution for you</h3>
                            </a>
                            <p class="disc para-1 mb--30">
                                Collaboratively pontificate bleeding edge resources with inexpensive methodologies
                                globally initiate multidisciplinary compatible architectures pidiously repurpose leading
                                edge growth strategies with just in time web readiness communicate timely meta services
                            </p>
                            <a class="rts-btn btn-primary mt--0" href="{{ url('blog-details') }}">Read Details</a>
                        </div>
                    </div>
                    <!-- single post End-->
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--30">
                        <div class="thumbnail">
                            <img src="{{ url('frontend/images/blog/blog-02-1.jpg') }}" alt="Food Blog">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by Zoha Tazmen</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>by Zoha Tazmen</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span>by Zoha Tazmen</span>
                                </div>
                                <!-- single infoe end -->
                            </div>
                            <a href="{{ url('blog-details') }}">
                                <h3 class="title">Building smart business solution for you</h3>
                            </a>
                            <p class="disc para-1 mb--30">
                                Collaboratively pontificate bleeding edge resources with inexpensive methodologies
                                globally initiate multidisciplinary compatible architectures pidiously repurpose leading
                                edge growth strategies with just in time web readiness communicate timely meta services
                            </p>
                            <a class="rts-btn btn-primary mt--0" href="{{ url('blog-details') }}">Read Details</a>
                        </div>
                    </div>
                    <!-- single post End-->
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--30">
                        <div class="thumbnail">
                            <img src="{{ url('frontend/images/blog/blog-03-1.webp') }}" alt="Food Blog">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by Zoha Tazmen</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>by Zoha Tazmen</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span>by Zoha Tazmen</span>
                                </div>
                                <!-- single infoe end -->
                            </div>
                            <a href="{{ url('blog-details') }}">
                                <h3 class="title">Building smart business solution for you</h3>
                            </a>
                            <p class="disc para-1 mb--30">
                                Collaboratively pontificate bleeding edge resources with inexpensive methodologies
                                globally initiate multidisciplinary compatible architectures pidiously repurpose leading
                                edge growth strategies with just in time web readiness communicate timely meta services
                            </p>
                            <a class="rts-btn btn-primary mt--0" href="{{ url('blog-details') }}">Read Details</a>
                        </div>
                    </div>
                    <!-- single post End-->
                </div>
                <!-- rts-blog post end area -->
                <!--rts blog wizered area -->
                <div class="col-xl-4 col-md-12 pl-b-list-controler">
                    <!-- single wizered start -->
                    <div class="rts-single-wized search">
                        <div class="wized-header">
                            <h5 class="title">
                                Search Here
                            </h5>
                        </div>
                        <div class="wized-body">
                            <div class="rts-search-wrapper">
                                <input class="Search" type="text" placeholder="Enter Keyword">
                                <button><i class="fal fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized Categories">
                        <div class="wized-header">
                            <h5 class="title">
                                Categories
                            </h5>
                        </div>
                        <div class="wized-body">
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Business Solution <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Strategy Growth<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Finance Solution<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Investment Policy<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                            <!-- single categoris -->
                            <ul class="single-categories">
                                <li><a href="#">Tax Managment<i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                            <!-- single categoris End -->
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized Recent-post">
                        <div class="wized-header">
                            <h5 class="title">
                                Recent Posts
                            </h5>
                        </div>
                        <div class="wized-body">
                            <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="{{ url('blog-details') }}"><img
                                            src="{{ url('frontend/images/blog/blog-sm-01.jpg') }}" alt="Blog_post"></a>
                                </div>
                                <div class="content-area">
                                    <div class="user">
                                        <i class="fal fa-clock"></i>
                                        <span>15 Jan, 2023</span>
                                    </div>
                                    <a class="post-title" href="{{ url('blog-details') }}">
                                        <h6 class="title">We would love to share a similar experience</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- recent-post End -->
                            <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="{{ url('blog-details') }}"><img
                                            src="{{ url('frontend/images/blog/blog-sm-02.jpg') }}" alt="Blog_post"></a>
                                </div>
                                <div class="content-area">
                                    <div class="user">
                                        <i class="fal fa-clock"></i>
                                        <span>15 Jan, 2023</span>
                                    </div>
                                    <a class="post-title" href="{{ url('blog-details') }}">
                                        <h6 class="title">We would love to share a similar experience</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- recent-post End -->
                            <!-- recent-post -->
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="{{ url('blog-details') }}"><img
                                            src="{{ url('frontend/images/blog/blog-sm-03.webp') }}" alt="Blog_post"></a>
                                </div>
                                <div class="content-area">
                                    <div class="user">
                                        <i class="fal fa-clock"></i>
                                        <span>15 Jan, 2023</span>
                                    </div>
                                    <a class="post-title" href="{{ url('blog-details') }}">
                                        <h6 class="title">We would love to share a similar experience</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- recent-post End -->
                        </div>
                    </div>
                    <!-- single wizered End -->
                    <!-- single wizered start -->
                    <div class="rts-single-wized">
                        <div class="wized-header">
                            <h5 class="title">
                                Popular Tags
                            </h5>
                        </div>
                        <div class="wized-body">
                            <div class="tags-wrapper">
                                <a href="#">Services</a>
                                <a href="#">Business</a>
                                <a href="#">Growth</a>
                                <a href="#">Finance</a>
                                <a href="#">UI/UX Design</a>
                                <a href="#">Solution</a>
                                <a href="#">Speed</a>
                                <a href="#">Strategy</a>
                                <a href="#">Technology</a>
                            </div>
                        </div>
                    </div>
                    <!-- single wizered End -->
                </div>
                <!-- rts- blog wizered end area -->
            </div>
            <div class="row mt--30">
                <div class="col-lg-12">
                    <div class="rts-elevate-pagination">
                        <ul>
                            <li><button class="active">01</button></li>
                            <li><button>02</button></li>
                            <li><button>03</button></li>
                            <li><button>04</button></li>
                            <li><button><i class="fa-solid fa-chevrons-right"></i></button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog mlist area End -->
@endsection
