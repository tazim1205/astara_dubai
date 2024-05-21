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
            <h2>OUR MISSION VISION AND STRATEGY</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Mission Vision AND Strategy</li>
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
                        <h2>OUR MISSION VISION AND STRATEGY</h2>
                        <p>We provide the perfect service for you.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6">
                    <div class="alazea-service-area mb-100">

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Vision</h5>
                                <p style="text-align: justify;">To be recognized as a pioneer leading supplier of food and beverages in the region for high quality and good value products while sustaining a unique excellent services to our customers.</p>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Mission</h5>
                                <p style="text-align: justify;">To continually supply, develop, produce and market a range of nutritious and highly qualified products as required by the market. To adopt a safe and environment friendly work practices across our business. Engage, Develop and inspire our work force to excel.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="alazea-service-area mb-100">
                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Products Development</h5>
                                <p style="text-align: justify;">Astara Foodstuff Trading Offers brand management services. Our focus is not only on the distribution of products to you, but also boost brand awareness and growth. As we are responsible for the following aspects: Product Registration, approval and development, Brand Positioning and Price strategy, Distribution and Promotion assistance, Product and packaging solutions, Added value services, Private labeling.</p>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Values</h5>
                                <p style="text-align: justify;">Creativity, Innovation and High Quality in a progress working environment. Achievement and Success in different competitive fields. Honesty and integrity across all aspects of our business. Continuous improvement in all areas.</p>
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