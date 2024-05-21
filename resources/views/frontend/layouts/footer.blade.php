    @php
    $path = public_path().'/Backend/settings/'.$settings->logo;
    @endphp

    <!-- Footer Area Start -->
    <footer class="footer-area bg-img" style="background-image: url({{ asset('') }}frontend/assets/img/bg-img/green_background.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                @if(file_exists($path))
								<img src="{{asset('Backend/settings')}}/{{$settings->logo}}" alt="" class="img-fluid" style="height: 130px;">
								@else
								@lang('settings.logo')
								@endif
                            </div>
                            <p>We are one of leading in the Foodstuff Trading LLC fields.</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>QUICK LINK</h5>
                            </div>
                            <nav class="widget-nav">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>BEST SELLER</h5>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="{{ asset('') }}frontend/assets/img/bg-img/4.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Cactus Flower</a>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="{{ asset('') }}frontend/assets/img/bg-img/5.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Tulip Flower</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CARREERS</h5>
                            </div>

                            <div class="contact-information">
                                <form action="" method="post">
                                    <input type="text" class="form-control" placeholder="Enter Full Name" style="background: transparent;border-radius: 0%;margin-bottom: -19px;color: #fff;"><br>
                                    <input type="text" class="form-control" placeholder="Enter Email" style="background: transparent;border-radius: 0%;margin-bottom: -19px;color: #fff;"><br>
                                    <input type="text" class="form-control" placeholder="Enter Designation" style="background: transparent;border-radius: 0%;margin-bottom: -19px;color: #fff;"><br>
                                    <input type="file" class="form-control" style="background: transparent;border-radius: 0%;margin-bottom: -19px;color: #fff;"><br>
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-12">
                        <div class="copywrite-text text-center">
                            <p>&copy;
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="sbit.com.bd">SKILL BASED IT-SBIT</a> All rights reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All Javascript Files -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('') }}frontend/assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{ asset('') }}frontend/assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('') }}frontend/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('') }}frontend/assets/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{ asset('') }}frontend/assets/js/active.js"></script>
</body>

</html>