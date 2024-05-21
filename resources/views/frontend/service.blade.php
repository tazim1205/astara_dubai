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
            <h2>OUR SERVICES</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    
    <section class="our-services-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR SERVICES</h2>
                        <p>We provide the perfect service for you.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-12">
                    <div class="alazea-service-area mb-100">

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Content -->
                            <div class="service-content" style="text-align: justify;">
                                <h5>Import Export</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <p>Astara Foodstuff Trading import market premium high quality demandable food and beverages from Local Markets and international. On the other hand we export our products to regional and international markets.
                                        
                                        We have established a long term business and personal relationship with suppliers and customers sharing the mutual belief of Integrity, Reliability and Trustworthiness.</p>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('') }}frontend/assets/img/service/service1.png" alt="" style="width: 200px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Products Development</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="text-align: justify;">Astara Foodstuff Trading Offers brand management services. Our focus is not only on the distribution of products to you, but also boost brand awareness and growth. As we are responsible for the following aspects: Product Registration, approval and development, Brand Positioning and Price strategy, Distribution and Promotion assistance, Product and packaging solutions, Added value services, Private labeling.</p>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('') }}frontend/assets/img/service/service2.png" alt="" style="width: 200px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Distribution and Supply Chain</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="text-align: justify;">Astara Foodstuff Trading’s logistic and distribution center mirrors UAE’s emergence as a trading hub.We have a stable factory network, waiting for our orders of any quantity. And we have strategically situated our office and warehouse to allow easy access and maintain the highest standards and follow regulatory requirements. It is our aim to deal with reliability.</p>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('') }}frontend/assets/img/service/service3.png" alt="" style="width: 200px">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
    <!-- Our Services Area End -->

    <!-- Main Content End -->
@endsection