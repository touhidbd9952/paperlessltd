<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon  -->
    <link rel="shortcut icon" href="{{asset('/')}}images/favicon.png" type="image/x-icon">
    <!-- faremwork of css -->
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap-lib/bootstrap.min.css">
    <!-- style sheet of css        -->
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
    <!-- Responsive sheet of css -->
    <link rel="stylesheet" href="{{asset('/')}}css/responsive.css">
    <!-- fonts awsome icon link            -->
    <link rel="stylesheet" href="{{asset('/')}}font-awesome-lib/icon/font-awesome.min.css">
    <!-- slick-slider link css -->
    <link rel="stylesheet" href="{{asset('/')}}css/slick.min.css">
    <!-- animation of css -->
    <link rel="stylesheet" href="{{asset('/')}}css/aos.css">
    <style>
        .btn-signup, .btn-signin{
            padding: 10px;
            border: 1px solid #125B60;
            border-radius: 5px;
        }
        .btn-signup:hover, .btn-signin:hover{
            padding: 10px;
            border: 1px solid #A78024;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="site-wrapper">
    <div class="first_nav_hero_about">
        <!-- ======== 1.1. header section ======== -->
        <header>
            <nav class="container navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <!-- site logo -->
                    <a class="nav-logo p-0" href="{{route('home')}}"><img src="{{asset('/')}}images/Logo.png" alt="logo"></a>
                    <!-- navigation button  -->
                    <button class="navbar-toggle" onclick="openNav()" type="button"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <!-- navigation bar manu  -->   
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul
                            class="navbar-nav d-flex justify-content-center align-items-center gap-lg-2 gap-md-2 gap-sm-2 gap-2 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link <?php if($page=='index'){ echo 'active';}?>" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($page=='about'){ echo 'active';}?>" href="{{route('about')}}">About us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php if($page=='services'){ echo 'active';}?>" href="{{route('services')}}">Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php if($page=='feature'){ echo 'active';}?>" href="{{route('feature')}}">Feature</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php if($page=='pricing'){ echo 'active';}?>" href="{{route('pricing')}}">Pricing</a>
                            </li>
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{route('policy')}}">Policy</a>--}}
{{--                            </li>--}}

                            <li class="nav-item">
                                <a class="nav-link <?php if($page=='contact'){ echo 'active';}?>" href="{{route('contact')}}">Contact</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link btn-signup" href="https://portal.paperlessltd.com">Signup</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link btn-signin" href="https://portal.paperlessltd.com/merchant/login">Login</a>
                            </li>

                            <li class="nav-item">
                                <a id="search-bar-bt" class="nav-link" href="javascript:"><i
                                        class="fa-solid fa-magnifying-glass"></i></a>
                            </li>
                            <li class="nav-item" onclick="open_right_side()">
                                <a class="nav-link" href="javascript:"><i class="fa-sharp fa-solid fa-bars"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!--============ navigation left slidebar================-->
            <aside>
                <div id="mySidenav" class="sidenav">
                    <div class="side-nav-logo d-flex justify-content-between align-items-center ps-4 pe-3">
                        <figure class="navbar-brand">
                            <a href="{{route('home')}}">
                                <img src="{{asset('/')}}images/Logo.png" alt="img"
                                                                               class="nav-logo">
                                                                            </a></figure>
                        <div class="closebtn" onclick="closeNav()"><i
                                class="fa-solid fa-square-xmark side-bar-close-btn"></i></div>
                    </div>
                    <ul>
                        <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('home')}}>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('services')}}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('feature')}}">Feature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('policy')}}">Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://portal.paperlessltd.com">Signup</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://portal.paperlessltd.com/merchant/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <div class="d-flex align-items-center justify-content-between pt-3" id="slid-btn">
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>

            <!--================== navigation drop search bar================-->
            <div class="search" id="search-bar">
                <form class="d-flex nav-search">
                    <input type="text" name="search" placeholder="Enter your text">
                    <button class="btn-hover1" type="submit">Search</button>
                </form>
                
                <button id="remove-btn">
                    <i class="fa-solid fa-square-xmark "></i>
                </button>
                
            </div>
            <!--=================navigation Right slidebar==================-->
            <section class="right-sidbar" id="right_side">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- site logo -->
                    <a class="p-0 " href="{{route('home')}}"><img src="{{asset('/')}}images/Logo.png" alt="logo"></a>
                    <button class="close_right_sidebar fa-solid fa-xmark" onclick="close_right_sade()"> </button>
                </div>
                <p class="mt-4 pb-3">Paperless Limited is a financial technology company based in Bangladesh. Established in 2020, we are proud to be at the forefront of the digital payment revolution.
                </p>
                <!--                    <a href="#" class="btn-hover1">Discover More</a>-->
                <hr>
                <h5 class="mt-4 mb-4">Connected details:</h5>
                <ul class="d-flex flex-column gap-3">
                    <li>
                        <a href="#"> <i class="fa-solid fa-phone"></i></a>
                        <a href="#">info@paperlessltd.com</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                        <a href="#">+8801940297993</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-clock"></i></a>
                        <a href="#">Office Hours: 10AM - 6PM <br>
                            Friday - Weekend Day</a>
                    </li>
                </ul>
                <span class="d-flex gap-4 mt-4">
                        <a href="https://www.facebook.com/paperlesslt" class="p-0"><i class="fa-brands fa-facebook"></i></a>
                        <a href="javascript:" class="p-0"><i class="fa-brands fa-instagram"></i></a>
                        <a href="javascript:" class="p-0"><i class="fa-brands fa-whatsapp"></i></a>
                    </span>
            </section>
        </header>
        <!-- ======== End of 1.1. header section ========  -->
        <!-- ======== 1.2. hero section ======== -->

@yield('home')
    @yield('about')
    @yield('services')
    @yield('feature')
    @yield('contact')
         <!-- ======== 1.13. footer section ========  -->



    <footer class="position-relative">
        <div class="container">
            <h4 class="text-center">SUBSCRIBE OUR NEWSLETTER</h4>
            <P class="text-center pt-2 pb-3">Get latest News and Updates</P>
            <form class="d-flex align-items-center justify-content-center" id="footer-sub2">
                <!-- form Subscribe massage -->
                <div id="Succes-box2"></div>
                <div class="d-flex footer-search ">
                    <input type="email" name="search" placeholder="Enter your Email" required>
                    <button type="submit" class="btn-hover1">Subscribe</button>
                </div>
            </form>
            <div class="footer-logo text-center pb-lg-4 pb-md-3 pb-sm-2 pb-4">
                <!-- footer logo  -->
                <a href="{{route('home')}}">
                    <figure><img src="{{asset('/')}}images/Logo.png" alt="img"></figure>
                </a>
            </div>
            <ul class="d-flex align-items-center justify-content-center">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>

                <li>
                    <a href="{{route('policy')}}"> Privacy Policy </a>
                </li>
                <li>
                     <a href="{{route('termsAConditions')}}"> Terms & Conditions </a> {{--{{route('termsAConditions')}} --}}
                </li>
                <li>
                     <a href="{{route('returnAndRefundPolicy')}}"> Return and Refund Policy</a>  {{--{{route('returnAndRefundPolicy')}} --}}
                </li>
                <li>
                    <a href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
            <hr>
            <div class="row footer-nav-icon">
                <!-- footer social icon  -->
                <div class="col-lg-3 col-md-3 d-flex align-items-center justify-content-md-start justify-content-sm-center justify-content-center">
                    <div
                        class="social-icon d-flex gap-2 justify-content-md-start justify-content-sm-center justify-content-center">
                        <a href="https://www.facebook.com/paperlesslt"> <i class="fa-brands fa-facebook-f foot-facebook"></i></a>
                        <a href="javascript:"> <i class="fa-brands fa-youtube"></i></a>
                        <a href="javascript:"> <i class="fa-brands fa-whatsapp"></i></a>
                        <a href="javascript:"> <i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <!-- footer terms privacy  -->
                {{-- <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center">
                    <!--                        <div class=" d-flex gap-3 p-2">-->
                    <!--                            <a href="#">Terms & Condition</a>-->
                    <!--                            <a href="#">Privacy Policy</a>-->
                    <!--                        </div>-->
                </div> --}}
                <!-- footer logo slider  -->
                <div class="col-lg-6 col-md-6">
                    <div class="footer_ispsum_slider">
                        <figure><a href="#"><img src="{{asset('/')}}images/icon/logoipsum-228.png" alt="qr-code"></a>
                        </figure>
                        <figure><a href="#"><img src="{{asset('/')}}images/icon/logoipsum-233.png" alt="qr-code"></a>
                        </figure>
                        <figure><a href="#"><img src="{{asset('/')}}images/icon/logoipsum-229.png" alt="qr-code"></a>
                        </figure>
                        <figure><a href="#"><img src="{{asset('/')}}images/icon/logoipsum-228.png" alt="qr-code"></a>
                        </figure>
                        <figure><a href="#"><img src="{{asset('/')}}images/icon/logoipsum-233.png" alt="qr-code"></a>
                        </figure>
                        <figure><a href="#"><img src="{{asset('/')}}images/icon/logoipsum-229.png" alt="qr-code"></a>
                        </figure>
                    </div>
                </div>
            </div>
            <hr>
            <div class="Copyright d-flex justify-content-between flex-wrap dir">
                <p>Copyright © 2023 by Paperless Limited . All Right Reserved.</p>
                <p>Powered by Paperless Limited </p>
            </div>
        </div>
    </footer>
    <!-- ======== End of 1.13. footer section ========  -->
</div>
<!-- end site wrapper -->
<!-- button back to top -->
<button onclick="scrollToTop()" id="backToTopBtn"><i class="fa-solid fa-arrow-turn-up"></i></button>

<!-- bootstrap min javascript -->
<script src="{{asset('/')}}js/javascript-lib/bootstrap.min.js"></script>
<!-- j Query -->
<script src="{{asset('/')}}js/jquery.js"></script>
<!-- slick slider js -->
<script src="{{asset('/')}}js/slick.min.js"></script>
<!-- main javascript -->
<script src="{{asset('/')}}js/custom.js"></script>
<!-- counter javascript file -->
<script src="{{asset('/')}}js/waypoints.min.js"></script>
<!-- animation from javascript -->
<script src="{{asset('/')}}js/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 1500,
    });
</script>
</body>

</html>
