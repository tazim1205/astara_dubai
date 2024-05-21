@extends('frontend.layouts.master')

@section('content')
    <!-- Navbar Start -->

        @include('frontend.layouts.navbar')

    <!-- Navbar End -->
    
    <!-- Main Content Start -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url({{ asset('') }}frontend/assets/img/bg-img/products_1597115.png);">
            <h2>Blogs</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <section class="alazea-blog-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="post-sidebar-area">
                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <form action="#" method="get" class="search-form">
                                <input type="search" name="search" id="widgetsearch" placeholder="Search...">
                                <button type="submit"><i class="icon_search"></i></button>
                            </form>
                        </div>
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h4>Recent post</h4>
                            </div>
                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="{{ asset('') }}frontend/assets/img/bg-img/30.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>New Harris Bugg design for Bridgewater</h6>
                                    </a>
                                    <a href="#" class="post-date">20 Jun 2018</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="{{ asset('') }}frontend/assets/img/bg-img/31.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>The designers will create a new kitchen garden</h6>
                                    </a>
                                    <a href="#" class="post-date">20 Jun 2018</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="{{ asset('') }}frontend/assets/img/bg-img/32.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>SGD Members win Best of Houzz Design Award</h6>
                                    </a>
                                    <a href="#" class="post-date">20 Jun 2018</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="{{ asset('') }}frontend/assets/img/bg-img/33.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Shepherding Vegetables From Roof to Restaurant</h6>
                                    </a>
                                    <a href="#" class="post-date">20 Jun 2018</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8">
                    <div class="row">

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="{{url('/blog_details')}}"><img src="{{ asset('') }}frontend/assets/img/bg-img/6.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{url('/blog_details')}}" class="post-title">
                                        <h5>Garden designers across the country forecast ideas shaping the gardening world in 2018</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 20 Jun 2018</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Alan Jackson</a>
                                    </div>
                                    <p class="post-excerpt">Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="{{url('/blog_details')}}"><img src="{{ asset('') }}frontend/assets/img/bg-img/7.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{url('/blog_details')}}" class="post-title">
                                        <h5>2018 Midwest Tree and Shrub Conference: Resilient Plants for a Lasting Landscape</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 20 Jun 2018</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Christina Aguilera</a>
                                    </div>
                                    <p class="post-excerpt">Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="{{url('/blog_details')}}"><img src="{{ asset('') }}frontend/assets/img/bg-img/8.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{url('/blog_details')}}" class="post-title">
                                        <h5>The summer coming up, it’s time for both us and the flowers to soak up the sunshine</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 19 Jun 2018</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Mason Jenkins</a>
                                    </div>
                                    <p class="post-excerpt">Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="{{url('/blog_details')}}"><img src="{{ asset('') }}frontend/assets/img/bg-img/6.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{url('/blog_details')}}" class="post-title">
                                        <h5>Garden designers across the country forecast ideas shaping the gardening world in 2018</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 20 Jun 2018</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Alan Jackson</a>
                                    </div>
                                    <p class="post-excerpt">Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="{{url('/blog_details')}}"><img src="{{ asset('') }}frontend/assets/img/bg-img/7.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{url('/blog_details')}}" class="post-title">
                                        <h5>2018 Midwest Tree and Shrub Conference: Resilient Plants for a Lasting Landscape</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 20 Jun 2018</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Christina Aguilera</a>
                                    </div>
                                    <p class="post-excerpt">Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="{{url('/blog_details')}}"><img src="{{ asset('') }}frontend/assets/img/bg-img/8.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{url('/blog_details')}}" class="post-title">
                                        <h5>The summer coming up, it’s time for both us and the flowers to soak up the sunshine</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 19 Jun 2018</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Mason Jenkins</a>
                                    </div>
                                    <p class="post-excerpt">Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->

    <!-- Main Content End -->
@endsection