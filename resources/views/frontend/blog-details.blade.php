@extends('frontend.layouts.main')
@section('title','blog-details')
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
                    <h2 class="heading-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Blog & Feeds</h2>
                    <h1 class="main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800">Insights</h1>
                    <p class=" main-title" data-sal="slide-up" data-sal-delay="120" data-sal-duration="800"></p>   
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
            <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                <!-- single post -->
                <div class="blog-single-post-listing details mb--0">
                    <div class="thumbnail">
                        <img src="{{url('frontend/images/blog/blog-04-1.jpg')}}" alt="Food Blog">
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
                        <h3 class="title">Building smart business solution for you</h3>
                        <p class="disc para-1">
                            Collaboratively pontificate bleeding edge resources with inexpensive methodologies
                            globally initiate multidisciplinary compatible architectures pidiously repurpose leading
                            edge growth strategies with just in time web readiness communicate timely meta services
                        </p>
                        <p class="disc">
                            Onubia semper vel donec torquent fusce mauris felis aptent lacinia nisl, lectus
                            himenaeos euismod molestie iaculis interdum in laoreet condimentum dictum, quisque quam
                            risus sollicitudin gravida ut odio per a et. Gravida maecenas lobortis suscipit mus
                            sociosqu convallis, mollis vestibulum donec aliquam risus sapien ridiculus, nulla
                            sollicitudin eget in venenatis. Tortor montes platea iaculis posuere per mauris, eros
                            porta blandit curabitur ullamcorper varius
                        </p>
                        <!-- quote area start -->
                        <div class="rts-quote-area text-center">
                            <h5 class="title">“Choices to take a holiday and travelling out in this pandemic situation are limited. Why not take a stay action on quality design. ”</h5>
                            <a href="#" class="name">Zoha Tazmen</a>
                        </div>
                        <!-- quote area end -->

                        <p class="disc">
                            Ultrices iaculis commodo parturient euismod pulvinar donec cum eget a, accumsan viverra
                            cras praesent cubilia dignissim ad rhoncus. Gravida maecenas lobortis suscipit mus
                            sociosqu convallis, mollis vestibulum donec aliquam risus sapien ridiculus, nulla
                            sollicitudin eget in venenatis. Tortor montes platea iaculis posuere per mauris, eros
                            porta blandit curabitur ullamcorper varius, nostra ante risus egestas suscipit. Quisque
                            interdum nec parturient facilisis nunc ac quam, ad est cubilia mauris himenaeos nascetur
                            vestibulum.
                        </p>

                        <h4 class="title mt--40 mt_sm--20">Ultimate Business Strategy Solution</h4>
                        <p class="disc mb--25">
                            Gravida maecenas lobortis suscipit mus sociosqu convallis, mollis vestibulum donec
                            aliquam risus sapien ridiculus, nulla sollicitudin eget in venenatis. Tortor montes
                            platea iaculis posuere per mauris, eros porta blandit curabitur ullamcorper varius
                            nostra ante risus egestas.
                        </p>
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumbnail details mb_sm--15"><img src='{{url ("frontend/images/blog/inner-blog.png")}}' alt="Dinenos">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="check-area-details">
                                    <!-- single check -->
                                    <div class="single-check">
                                        <span>From connecting back-office operations to front-of-the-house A/B testing and dynamic personalization for each customer, the shared foundation is fast server side rendering powered by fast storefront data access. On top of this foundation, we add layers of caching, prerendering and edge delivery optimizations — not the other way</span>
                                    </div>
                                    <!-- single check End -->
                                </div>
                            </div>
                        </div>
                        <p class="disc mt--30">
                            Cubilia hendrerit luctus sem aptent curae gravida maecenas eleifend nunc nec vitae morbi
                            sodales fusce tristique aenean habitasse mattis sociis feugiat conubia mus auctor
                            praesent urna tincidunt taciti dui lobortis nullam. Mattis placerat feugiat ridiculus
                            sed a per curae fermentum aenean facilisi, vitae urna imperdiet ac mauris non inceptos
                            luctus hac odio.
                        </p>
                        <div class="author-area">
                            <div class="thumbnail details mb_sm--15">
                                <img src='{{url("frontend/images/blog/author.png")}}' alt="finbiz_buseness">
                            </div>
                            <div class="author-details team">
                                <h5>Dinenos</h5>
                                <p class="disc">
                                    Nullam varius luctus pharetra ultrices volpat facilisis donec tortor, nibhkisys
                                    habitant curabitur at nunc nisl magna ac rhoncus vehicula sociis tortor nist
                                    hendrerit molestie integer.
                                </p>
                            </div>
                        </div>
                        <div class="replay-area-details">
                            <h4 class="title">Leave a Reply</h4>
                            <form action="#">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" placeholder="Select Topic">
                                        <textarea placeholder="Type your message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="rts-btn btn-primary" type="submit"> Submit Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- single post End-->
            </div>
            <!-- rts-blog post end area -->
            <!--rts blog wizered area -->
            <div class="col-xl-4 col-md-12 col-sm-12 col-12  pd-control-bg--40">
                <!-- single wizered start -->
                <div class="rts-single-wized search">
                    <div class="wized-header">
                        <h5 class="title">
                            Search Hear
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
                                <a href="{{url('blog-details')}}"><img src="{{url('frontend/images/blog/blog-sm-01.jpg')}}" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="{{url('blog-details')}}">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="{{url('blog-details')}}"><img src="{{url('frontend/images/blog/blog-sm-02.jpg')}}" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="{{url('blog-details')}}">
                                    <h6 class="title">We would love to share a similar experience</h6>
                                </a>
                            </div>
                        </div>
                        <!-- recent-post End -->
                        <!-- recent-post -->
                        <div class="recent-post-single">
                            <div class="thumbnail">
                                <a href="{{url ('blog-details')}}"><img src="{{url('frontend/images/blog/blog-sm-03.webp')}}" alt="Blog_post"></a>
                            </div>
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>15 Jan, 2023</span>
                                </div>
                                <a class="post-title" href="{{url('blog-details')}}">
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
    </div>
</div>
<!-- rts blog mlist area End -->
@endsection