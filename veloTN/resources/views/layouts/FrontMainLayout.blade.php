<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c)
********************************************************************************************************** -->
<!--
Template Name: Cycling- Html Template
Version: 1.0.0
Author: Kamleshyadav
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <title>Velo Tn - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Hsoft">
    <meta name="MobileOptimized" content="320">
    <!-- favicon links-->
    <link rel="icon" type="image/icon" href="{{ asset('front')}}/favicon.png " >
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('front')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('front')}}/css/fonts.css">
    <link rel="stylesheet" href="{{ asset('front')}}/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('front')}}/css/custom-animation.css">
    <link rel="stylesheet" href="{{ asset('front')}}/js/plugin/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('front')}}/js/plugin/owl/owl.theme.css">
    <link rel="stylesheet" href="{{ asset('front')}}/js/plugin/magnific/magnific-popup.css">
    <link href="{{ asset('front')}}/css/settings.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('front')}}/css/layers.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('front')}}/css/navigation.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('front')}}/css/style.css">
</head>

<body>
<!--Loader Start-->
<div class="loader_wrapper">
    <div class='loader'>
        <img src="{{ asset('front') }}/images/loader.gif" alt="loader">
    </div>
</div>
<!--Top bar start-->
@section('navbar')
<div class="cy_top_wrapper">
    <div class="cy_top_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="cy_top_detail">
                        <ul>
                            <li><a href="#">EMAIL: Info@yourmail.com</a></li>
                            <li>PHONE: 18009001010</li>
                            <li>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                </ul>
                            </li>
                            <li class="cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span>2</span></a>
                                <ul class="cart_box">
                                    <li>
                                        <div class="cart_section">
                                            <div class="cart_img">
                                                <a href="#"><img src="http://via.placeholder.com/68x68" alt="cart" class="img-fluid"></a>
                                            </div>
                                            <div class="cart_detail">
                                                <h4><a href="cart.html">Road Bicycle</a></h4>
                                                <h5>$2200</h5>
                                            </div>
                                            <a class="cart_delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart_section">
                                            <div class="cart_img">
                                                <a href="#"><img src="http://via.placeholder.com/68x68" alt="cart" class="img-fluid"></a>
                                            </div>
                                            <div class="cart_detail">
                                                <h4><a href="cart.html">Road Bicycle</a></h4>
                                                <h5>$2500</h5>
                                            </div>
                                            <a class="cart_delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart_section">
                                            <div class="cart_total">
                                                <h4>Total<span>$4700</span></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart_section">
                                            <a href="cart.html" class="cy_button">view cart</a>
                                            <a href="checkout.html" class="cy_button">Checkout</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sign icons -->
<div class="cy_sign_wrapper">
    <h2 class="signin"><i class="fa fa-sign-in" aria-hidden="true"></i><a href="{{ route('home') }}" >Sign In Admin</a></h2>

</div>
<!-- sign in modal -->
<div class="modal" id="signin">
    <div class="cy_signin">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="cy_sign_img">
                    <img src="http://via.placeholder.com/376x496" alt="popup" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="cy_sign_form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1>Sign In</h1>
                    <input type="text" placeholder="Username" class="form-control">
                    <input type="password" placeholder="Password" class="form-control">
                    <div class="forget_password">
                        <div class="remember_checkbox">
                            <label>Keep me signed in
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <a href="#">Forgot Password ?</a>
                    </div>
                    <a href="#" class="cy_button">sign in</a>
                    <p>Dont Have An Account? <a href="#signup" data-toggle="modal" class="cy_modal">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sign up modal -->
<div class="modal" id="signup">
    <div class="cy_signup">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="cy_sign_img">
                    <img src="http://via.placeholder.com/376x496" alt="popup" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="cy_sign_form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1>Sign up</h1>
                    <input type="text" placeholder="Username" class="form-control">
                    <input type="text" placeholder="Email or Phone" class="form-control">
                    <input type="password" placeholder="Password" class="form-control">
                    <a href="#" class="cy_button">register</a>
                    <p>Already Have An Account? <a href="#">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Menus Start-->
<div class="cy_menu_wrapper">
    <div class="cy_logo_box">
        <a href=""><img src="{{ asset('front') }}/images/logo.png" alt="logo" class="img-fluid"/></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <button class="cy_menu_btn">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="cy_menu">
                    <nav>
                        <ul>
                            <li><a href="/velotn" >home</a></li>
                            <li><a href="{{ route('bikes.index') }}">Shop</a></li>


                                    <li><a href="/lesassociations">Associations</a></li>


                            <li><a href="{{ route('events.index') }}">Events</a></li>
                            <li><a href="{{ route('rides.index') }}">Balades</a></li>

                            <li class="dropdown"><a href="javascript:;">pages</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="shop_single.html">shop single</a></li>
                                    <li><a href="cart.html">cart</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.html">gallery</a></li>
                            <li><a href="contact.html">contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="cy_search">
                    <a href="#" class="search_open"><i class="fa fa-search"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search section -->
<div class="cy_search_form">
    <button class="search_close"><i class="fa fa-times"></i></button>
    <div class="cy_search_input">
        <input type="search" placeholder="search">
        <i class="fa fa-search"></i>
    </div>
</div>
@show

<div class="cy_shop_wrapper">
    <div class="container">
        @yield('content')
    </div>
</div>




@section('footerfront')
<!--Footer section start-->
<div class="cy_footer_wrapper cy_section_padding padder_bottom75">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget cy_footer_about">
                    <img src="{{ asset('front') }}/images/logo.png" alt="logo" class="img-fluid"/>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h1 class="widget-title">recent blog</h1>
                    <div class="cy_recent_post">
                        <div class="cy_post_img">
                            <a href="#"><img src="http://via.placeholder.com/70x70" alt="post"/></a>
                        </div>
                        <div class="cy_post_data">
                            <h3><a href="#">Selecting The Proper Bicycle</a></h3>
                            <p>14 Apr, 2017</p>
                        </div>
                    </div>
                    <div class="cy_recent_post">
                        <div class="cy_post_img">
                            <a href="#"><img src="http://via.placeholder.com/70x70" alt="post"/></a>
                        </div>
                        <div class="cy_post_data">
                            <h3><a href="#">Selecting The Proper Bicycle</a></h3>
                            <div class="cy_post_info"><p>14 Apr, 2017</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h1 class="widget-title">contact info</h1>
                </div>
                <div class="cy_foo_contact">
                    <span><img src="{{ asset('front') }}/images/svg/map-mark.svg" alt="map-mark"></span>
                    <div class="cy_post_info">
                        <p>10221 Magnolia Grove Dr,  Manassas, VA, 20110</p>
                    </div>
                </div>
                <div class="cy_foo_contact">
                    <span><img src="{{ asset('front') }}/images/svg/phone.svg" alt="phone"></span>
                    <div class="cy_post_info">
                        <p>Office :- +1-512-555-0190</p>
                        <p>Office :- +1-512-555-0190</p>
                    </div>
                </div>
                <div class="cy_foo_contact">
                    <span><img src="{{ asset('front') }}/images/svg/email.svg" alt="email"></span>
                    <div class="cy_post_info">
                        <p><a href="#">help@yourmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h1 class="widget-title">flicker widget</h1>
                    <div class="cy_foo_gallery">
                        <ul>
                            <li><a href="#"><img src="http://via.placeholder.com/78x78" alt="flicker gallery"></a></li>
                            <li><a href="#"><img src="http://via.placeholder.com/78x78" alt="flicker gallery"></a></li>
                            <li><a href="#"><img src="http://via.placeholder.com/78x78" alt="flicker gallery"></a></li>
                            <li><a href="#"><img src="http://via.placeholder.com/78x78" alt="flicker gallery"></a></li>
                            <li><a href="#"><img src="http://via.placeholder.com/78x78" alt="flicker gallery"></a></li>
                            <li><a href="#"><img src="http://via.placeholder.com/78x78" alt="flicker gallery"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@show
<!--scripts start-->
<script src="{{ asset('front') }}/js/jquery.js"></script>
<script src="{{ asset('front') }}/js/tether.min.js"></script>
<script src="{{ asset('front') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('front') }}/js/jquery.countTo.js"></script>
<script src="{{ asset('front') }}/js/appear.js"></script>
<script src="{{ asset('front') }}/js/wow.js"></script>
<script src="{{ asset('front') }}/js/plugin/owl/owl.carousel.min.js"></script>
<script src="{{ asset('front') }}/js/plugin/magnific/jquery.magnific-popup.min.js"></script>
<!--Revolution slider js-->
<script src="{{ asset('front') }}/js/plugin/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset('front') }}/js/plugin/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('front') }}/js/plugin/revolution/js/revolution.extension.navigation.min.js"></script>
<script src="{{ asset('front') }}/js/plugin/revolution/js/revolution.extension.slideanims.min.js"></script>
<script src="{{ asset('front') }}/js/plugin/revolution/js/revolution.extension.layeranimation.min.js"></script>
<script src="{{ asset('front') }}/js/plugin/revolution/js/revolution.extension.parallax.min.js"></script>
<script src="{{ asset('front') }}/js/plugin/revolution/js/revolution.extension.kenburn.min.js"></script>
<script src="{{ asset('front') }}/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('front') }}/js/custom.js"></script>

</body>
</html>
