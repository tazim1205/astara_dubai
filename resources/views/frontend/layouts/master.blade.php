@include('frontend.layouts.head')

    <body>
        <!-- Preloader -->
        {{--<div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-circle"></div>
            <div class="preloader-img">
                <img src="img/core-img/leaf.png" alt="">
            </div>
        </div>--}}



    @yield('content')

    
    @include('frontend.layouts.footer')