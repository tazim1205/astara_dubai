@extends('frontend.layouts.master')

@section('content')
<style>
    /* slider */

.clients-slider {
  overflow: hidden;
  background-color: white;
  width: 80vw;
  height: 200px;
  position: relative;
}

.clients-slider::after,
.clients-slider::before {
  position: absolute;
  width: 50px;
  height: 100%;
  content: "";
}

.clients-slider::before {
  left: 0;
  top: 0;
  z-index: 2;
}

.clients-slider::after {
  right: 0;
  top: 0;
  transform: rotateZ(180deg);
}

.slider-wrapper {
  height: 100%;
  width: calc(300px * 18);
  display: flex;
  animation: slide 35s linear infinite;
}
.slider-wrapper:hover {
  animation-play-state: paused;
}

.slide {
  width: 300px;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.slide:has(:hover) > .img-container > .burger-info {
  opacity: 1;
}

.img-container {
  width: 80%;
  height: 80%;
  overflow: hidden;
  position: relative;
}

.burger-image {
  object-fit: cover;
  width: 300px;
}

.burger-info {
  opacity: 0;
  position: absolute;
  top: 0;
  background-color: white;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 15px;
  transition: all 500ms ease;
}

.burger-title {
  font-weight: 500;
  text-align: center;
}

.burger-description {
  font-size: 12px;
  text-align: center;
}

.add-to-cart {
  width: 70%;
  height: 40px;
  border: none;
  background: #f24825;
  color: #f6f2ef;
  font-weight: 700;
  text-transform: uppercase;
  transition: transform 500ms ease;
  cursor: pointer;

  &:hover {
    transform: scale(1.1);
  }
}

/* @keyframes slide {
  0% {
    transform: translateX(0);
  }

  100% {
    transform: translateX(calc(-300px * 9));
  }
} */

</style>
    <!-- Navbar Start -->

        @include('frontend.layouts.navbar')

    <!-- Navbar End -->
    @php

    use App\Models\slider;

    $slider = slider::where("slider",1)->orderBy('id','DESC')->get();

    @endphp
    <!-- Main Content Start -->
    
    <!-- Hero Area Start -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            @if(isset($slider))
            @foreach($slider as $key => $s)
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url({{asset('/Backend/img/slider')}}/{{$s->image}});"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>@if(config('app.locale') == 'en'){{$s->title}}@elseif(config('app.locale') == 'bn'){{$s->title_bn}}@endif</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </section>
    <!-- Hero Area End -->

    <!-- Service Area Start -->
    <section class="our-services-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="alazea-service-area mb-100">

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <!-- Content -->
                            <div class="service-content" style="text-align: center;">
                                <i class="fa fa-eye" style="font-size:30px;line-height:60px;color:#70c745;"></i>
                                <h5>Our Vision</h5>
                                <p>To be recognized as a pioneer leading supplier of food and beverages in the region for high quality and good value products while sustaining a unique excellent services to our customers.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                            <!-- Content -->
                            <div class="service-content" style="text-align: center;">
                                <i class="fa fa-line-chart" style="font-size:30px;line-height:60px;color:#70c745;"></i>
                                <h5>Our Mission</h5>
                                <p>To continually supply, develop, produce and market a range of nutritious and highly qualified products as required by the market. To adopt a safe and environment friendly work practices across our business. Engage, Develop and inspire our work force to excel.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="alazea-service-area mb-100">

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <!-- Content -->
                            <div class="service-content" style="text-align: center;">
                                <i class="fa fa-star" style="font-size:30px;line-height:60px;color:#70c745;"></i>
                                <h5>Our Values</h5>
                                <p>Creativity, Innovation and High Quality in a progress working environment. Achievement and Success in different competitive fields. Honesty and integrity across all aspects of our business. Continuous improvement in all areas.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                            <!-- Content -->
                            <div class="service-content" style="text-align: center;">
                                <i class="fa fa-spinner" style="font-size:30px;line-height:60px;color:#70c745;"></i>
                                <h5>Our Strategy</h5>
                                <p>Tamara Foodstuff Trading is dedicated in using its resources to gain market share aggressively in the years to come. Our main objective is to always deliver consumer satisfaction on providing premium healthy products and delivering to our customers a true value of their money.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->

    <!-- About Area Start -->
    <section class="about-us-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>ABOUT US</h2>
                        <p>We are one of leading in the Foodstuff Trading LLC fields.</p>
                    </div>
                    <p>Tamara Foodstuff Trading has been established in a fast dynamic developing city, Dubai, United Arab Emirates</p>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-benefits-area">
                        <div class="row">
                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <h5>Quality Products</h5>
                                    <p>Intiam eu sagittis est, at commodo lacini libero. Praesent dignissim sed odio vel aliquam manta lagorn.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <h5>Perfect Service</h5>
                                    <p>Intiam eu sagittis est, at commodo lacini libero. Praesent dignissim sed odio vel aliquam manta lagorn.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <h5>100% Natural</h5>
                                    <p>Intiam eu sagittis est, at commodo lacini libero. Praesent dignissim sed odio vel aliquam manta lagorn.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <h5>Environmentally friendly</h5>
                                    <p>Intiam eu sagittis est, at commodo lacini libero. Praesent dignissim sed odio vel aliquam manta lagorn.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->


    <!-- Brand Area Start -->
    <section class="testimonial-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR BRANDS</h2>
                    </div>
                </div>
            </div>
            <div class="clients-slider">
                <div class="slider-wrapper">
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/brand/Tamara-1.jpg')}}" alt="" class="burger-image" style="width: 200px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/brand/El-Basha.jpg')}}" alt="" class="burger-image" style="width: 200px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/brand/ulker.jpg')}}" alt="" class="burger-image" style="width: 200px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/brand/sweet.jpg')}}" alt="" class="burger-image" style="width: 200px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/brand/Mandi.jpg')}}" alt="" class="burger-image" style="width: 200px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/brand/saka.jpg')}}" alt="" class="burger-image" style="width: 200px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/brand/Tamara-1.jpg')}}" alt="" class="burger-image" style="width: 200px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/brand/El-Basha.jpg')}}" alt="" class="burger-image" style="width: 200px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/brand/ulker.jpg')}}" alt="" class="burger-image" style="width: 200px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/brand/sweet.jpg')}}" alt="" class="burger-image" style="width: 200px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/brand/Mandi.jpg')}}" alt="" class="burger-image" style="width: 200px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/brand/saka.jpg')}}" alt="" class="burger-image" style="width: 200px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Area End -->

    <!-- Subscribe Area Start -->
    <section class="subscribe-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading mb-0">
                        <h2>Join the Newsletter</h2>
                        <p>Subscribe to our newsletter and get 10% off your first purchase</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="subscribe-form">
                        <form action="#" method="get">
                            <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Enter your email">
                            <button type="submit" class="btn alazea-btn">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Area End -->

    <!-- Clients Area Start -->
    <section class="testimonial-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR CLIENTS</h2>
                        <p>We work with more than 100+ clients</p>
                    </div>
                </div>
            </div>
            <div class="clients-slider">
                <div class="slider-wrapper">
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/clients/bayara.png')}}" alt="" class="burger-image" style="width: 120px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/clients/Fujairah-Welfare-Association.jpg')}}" alt="" class="burger-image" style="width: 120px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/clients/Sharjah-Charity-International.jpg')}}" alt="" class="burger-image" style="width: 120px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/clients/union-coop.jpg')}}" alt="" class="burger-image" style="width: 120px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/clients/Aswaaq.jpg')}}" alt="" class="burger-image" style="width: 120px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/clients/al-ahli.png')}}" alt="" class="burger-image" style="width: 120px;">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img-container">
                            <img src="{{asset('frontend/assets/img/clients/alnoor-logo.jpg')}}" alt="" class="burger-image" style="width: 120px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Area End -->

    <!-- Main Content End -->
@endsection