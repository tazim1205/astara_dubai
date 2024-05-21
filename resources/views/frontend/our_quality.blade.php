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
            <h2>OUR QUALITY</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Quality</li>
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
                        <h2>OUR QUALITY</h2>
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
                            <div class="service-content">
                                <p style="text-align: justify;">As part of our ongoing commitment to excel in the Food & Beverages Trading field we are committed to supply the highest quality across all of the company’s business areas.
                                
                                By consistently providing products/services that meet or exceed consumer expectation and international standards, we will develop user loyalty to achieve strong business performance in the field of :</p>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Content -->
                            <div class="service-content" style="text-align: justify;">
                                <h5>Food & Beverages Trading</h5>
                                <h6>All employees are expected to help the company attain high quality standards. It is a company policy to:</h6><br>
                                
                                <li>Maintain and keep records of a quality management system in accordance with international standards, regulations and directives.</li>
                                <li>Ensure all staff are fully trained and understand their role providing quality products and good customer service.</li>
                                <li>Provide products/services which fully meet customer requirements.</li>
                                <li>Develop or acquire products/services which are Cost effective, safe and reliable.</li>
                                <li>Make sure the services and materials from suppliers are of consistent and sufficient in quantity and quality.</li>
                                <li>Strive for continual improvement in performance, underpinned by the necessary financial resources, and highlight objectives and progress through internal and external communications.</li>
                                <li>Committed to continually meet the legal and regulatory requirements.</li>
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