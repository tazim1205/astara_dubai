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
            <h2>Product Details</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Product Details Area Start -->
    <section class="single_product_details_area mb-50">
        <div class="produts-details--content mb-50">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="product-img" href="{{ asset('') }}frontend/assets/img/categories/one (1).jpg" title="Product Image">
                                        <img class="d-block w-100" src="{{ asset('') }}frontend/assets/img/categories/one (1).jpg" alt="1">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="product-img" href="{{ asset('') }}frontend/assets/img/categories/one (1).jpg" title="Product Image">
                                        <img class="d-block w-100" src="{{ asset('') }}frontend/assets/img/categories/one (1).jpg" alt="1">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="product-img" href="{{ asset('') }}frontend/assets/img/categories/one (1).jpg" title="Product Image">
                                        <img class="d-block w-100" src="{{ asset('') }}frontend/assets/img/categories/one (1).jpg" alt="1">
                                    </a>
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url({{ asset('') }}frontend/assets/img/categories/one (1).jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url({{ asset('') }}frontend/assets/img/categories/one (1).jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url({{ asset('') }}frontend/assets/img/categories/one (1).jpg);">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single_product_desc">
                            <h4 class="title">Recuerdos Plant</h4>
                            <div class="short_overview">
                                <p>Tamara Dates are premium quality dates, harvested carefully from the desert oasis, basked with the golden sunlight, grown in perfection with its all natural flavours to satisfy you in every bite</p>
                            </div>

                            <div class="products--meta">
                                <p><span>SKU:</span> <span>CT201807</span></p>
                                <p><span>Category:</span> <span>Emirati Dates, Tamara Date</span></p>
                                <p>
                                    <span>Share on:</span>
                                    <span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Area End -->

    <!-- Main Content End -->
@endsection