<!-- Header Area Start -->
<header class="header-area">
@php
$path = public_path().'/Backend/settings/'.$settings->logo;
@endphp

<!-- Top Header Area -->
<div class="top-header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-header-content d-flex align-items-center justify-content-between">
                    <!-- Top Header Content -->
                    <div class="top-header-meta">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: infodeercreative@gmail.com</span></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +1 234 122 122</span></a>
                    </div>

                    <!-- Top Header Content -->
                    <div class="top-header-meta d-flex">
                        <!-- Language Dropdown -->
                        <div class="language-dropdown">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle mr-30" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">Bangla</a>
                                    <a class="dropdown-item" href="#">Arabic</a>
                                </div>
                            </div>
                        </div>
                        <!-- Login -->
                        {{--<div class="login">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                        </div>
                        <!-- Cart -->
                        <div class="cart">
                            <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navbar Area -->
<div class="alazea-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="alazeaNav">

                <!-- Nav Brand -->
                <a href="{{url('/')}}" class="nav-brand">
                    @if(file_exists($path))
                    <img src="{{asset('Backend/settings')}}/{{$settings->logo}}" alt="" class="img-fluid" style="height: 80px;">
                    @endif
                </a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Navbar Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#">About</a>
                                <ul class="dropdown">
                                    <li><a href="{{url('/about')}}">About Us</a></li>
                                    <li><a href="{{url('/message_from_chairman')}}">Message from the Chairman</a></li>
                                    <li><a href="{{url('/mission_vision')}}">Mission Vision And Strategy</a></li>
                                    <li><a href="{{url('/our_quality')}}">Our Quality</a></li>
                                    <!-- <li><a href="#">Certificate and Membership</a></li> -->
                                </ul>
                            </li>
                            <!-- <li><a href="#">Our Brands</a></li> -->
                            <li><a href="{{url('/categories')}}">Our Product</a></li>
                            <li><a href="{{url('/service')}}">Our Services</a></li>
                            <li><a href="{{url('/blogs')}}">Blogs</a></li>
                            <li><a href="{{url('/contact')}}">Contact Us</a></li>
                        </ul>

                        <!-- Search Icon -->
                        <div id="searchIcon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>

                    </div>
                    <!-- Navbar End -->
                </div>
            </nav>

            <!-- Search Form -->
            <div class="search-form">
                <form action="#" method="get">
                    <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                    <button type="submit" class="d-none"></button>
                </form>
                <!-- Close Icon -->
                <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>
</div>
</header>
<!-- Header Area End -->