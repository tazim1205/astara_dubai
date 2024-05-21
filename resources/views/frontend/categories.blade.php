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
            <h2>OUR PRODUCT</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Product Area Start -->
    <section class="shop-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- All Products Area -->
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="shop-products-area">
                        <div class="row">
                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                        <a href="{{url('/products')}}"><img src="{{ asset('') }}frontend/assets/img/categories/one (1).jpg" alt=""></a>
                                    
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="{{url('/products')}}">
                                            <p>Category Name</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                        <a href="{{url('/products')}}"><img src="{{ asset('') }}frontend/assets/img/categories/one (2).jpg" alt=""></a>
                                    
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="{{url('/products')}}">
                                            <p>Category Name</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                        <a href="{{url('/products')}}"><img src="{{ asset('') }}frontend/assets/img/categories/one (3).jpg" alt=""></a>
                                    
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="{{url('/products')}}">
                                            <p>Category Name</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                        <a href="{{url('/products')}}"><img src="{{ asset('') }}frontend/assets/img/categories/one (4).jpg" alt=""></a>
                                    
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="{{url('/products')}}">
                                            <p>Category Name</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                        <a href="{{url('/products')}}"><img src="{{ asset('') }}frontend/assets/img/categories/one (4).jpg" alt=""></a>
                                    
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="{{url('/products')}}">
                                            <p>Category Name</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                        <a href="{{url('/products')}}"><img src="{{ asset('') }}frontend/assets/img/categories/one (5).jpg" alt=""></a>
                                    
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="{{url('/products')}}">
                                            <p>Category Name</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Area End -->

    <!-- Main Content End -->
@endsection