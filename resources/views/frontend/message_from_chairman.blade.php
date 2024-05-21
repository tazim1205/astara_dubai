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
            <h2>Message From The Chairman</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Message From The Chairman</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Message From The Chairman Area Start -->
    <section class="about-us-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-7">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>{{$data->name}}</h2>
                        <p>Chairman, Astara Foodstuff Trading LLC</p>
                    </div>
                    <p style="text-align: justify;">{!! $data->description !!}</p>
                </div>

                <div class="col-12 col-lg-5">
                    <img src="{{ asset('backend/img/chairman_message/')}}/{{ $data->image }}" alt="">
                </div>
            </div>
        </div>
    </section><br><br>
    <!-- Message From The Chairman Area End -->

    <!-- Main Content End -->
@endsection