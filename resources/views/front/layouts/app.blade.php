<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travelo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="front-asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="front-asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="front-asset/css/magnific-popup.css">
    <link rel="stylesheet" href="front-asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="front-asset/css/themify-icons.css">
    <link rel="stylesheet" href="front-asset/css/nice-select.css">
    <link rel="stylesheet" href="front-asset/css/flaticon.css">
    <link rel="stylesheet" href="front-asset/css/gijgo.css">
    <link rel="stylesheet" href="front-asset/css/animate.css">
    <link rel="stylesheet" href="front-asset/css/slick.css">
    <link rel="stylesheet" href="front-asset/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="front-asset/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="front-asset/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="{{ route('home') }}">home</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                            <li><a class="" href="{{ route('destination') }}">Destination</a></li>
                                            <li><a class="" href="{{ route('gallery') }}">Gallery</a></li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> <i class="fa fa-phone"></i> 10(256)-928 256</p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            {{-- @if (!auth('front_users')->check())                          --}}
                                            <a class="boxed-btn2" href="{{ route('signup') }}">SignUp</a>
                                            <a class="boxed-btn1" href="{{ route('signin') }}">SignIn</a>
                                            {{-- @else --}}
                                            {{-- <a href="{{ route('dashboard')}}" class="btn small">Dashboard</a> --}}
                                            {{-- <a class="btn small" href="{{ route('signout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('signout') }}
                                            </a>  --}}

                                            {{-- <form id="logout-form" action="{{ route('signout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        @endif --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
<!-- =========================== End Header Section =============================== -->

@yield('content')

<!-- =========================== Footer Section Start =============================== -->

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="front-asset/img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>5th flora, 700/D kings road, green <br> lane New York-1782 <br>
                                <a href="#">+10 367 826 2567</a> <br>
                                <a href="#">contact@carpenter.com</a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul class="links">
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Gallery</a></li>
                                <li><a href="#"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Popular destination
                            </h3>
                            <ul class="links double_links">
                                <li><a href="#">Indonesia</a></li>
                                <li><a href="#">America</a></li>
                                <li><a href="#">India</a></li>
                                <li><a href="#">Switzerland</a></li>
                                <li><a href="#">Italy</a></li>
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">Franch</a></li>
                                <li><a href="#">England</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="front-asset/img/instagram/1.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="front-asset/img/instagram/2.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="front-asset/img/instagram/3.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="front-asset/img/instagram/4.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="front-asset/img/instagram/5.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="front-asset/img/instagram/6.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>
    <!-- link that opens popup -->
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="front-asset/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="front-asset/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="front-asset/js/popper.min.js"></script>
    <script src="front-asset/js/bootstrap.min.js"></script>
    <script src="front-asset/js/owl.carousel.min.js"></script>
    <script src="front-asset/js/isotope.pkgd.min.js"></script>
    <script src="front-asset/js/ajax-form.js"></script>
    <script src="front-asset/js/waypoints.min.js"></script>
    <script src="front-asset/js/jquery.counterup.min.js"></script>
    <script src="front-asset/js/imagesloaded.pkgd.min.js"></script>
    <script src="front-asset/js/scrollIt.js"></script>
    <script src="front-asset/js/jquery.scrollUp.min.js"></script>
    <script src="front-asset/js/wow.min.js"></script>
    <script src="front-asset/js/nice-select.min.js"></script>
    <script src="front-asset/js/jquery.slicknav.min.js"></script>
    <script src="front-asset/js/jquery.magnific-popup.min.js"></script>
    <script src="front-asset/js/plugins.js"></script>
    <script src="front-asset/js/gijgo.min.js"></script>
    <script src="front-asset/js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="front-asset/js/contact.js"></script>
    <script src="front-asset/js/jquery.ajaxchimp.min.js"></script>
    <script src="front-asset/js/jquery.form.js"></script>
    <script src="front-asset/js/jquery.validate.min.js"></script>
    <script src="front-asset/js/mail-script.js"></script>


    <script src="front-asset/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
</body>

</html>