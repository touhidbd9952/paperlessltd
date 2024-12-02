@extends('layouts.master')
@section('home')

    <section class="hero">
        <div class="container">
            <div class="row text-md-start text-sm-center text-center gap-md-0 gap-sm-4 gap-5" >
                <div  data-aos="fade-up" class="col-md-6 d-flex align-items-md-start align-items-ms-center align-items-center justify-content-center flex-column" >
                    <h1 style="text-transform:uppercase;">A Payment Gateway Like Never Before</h1>
                    <p>We belief that with the option of a multi-channel access proposition that includes cards, applications, and integrated services, we can ensure a strong step towards a cashless and wallet less future and ease the transition from a cash to a cashless era.</p>
                    <a class="btn-hover1" href="{{route('about')}}">Learn More</a>
                </div>
                <div data-aos="fade-down" class="col-md-6 position-relative d-flex flex-column justify-content-center align-items-center mt-md-0 mt-sm-5 mt-4">
                    <img src="{{asset('/')}}images/index/hero.png" alt="hero_img1" class="moving">
                <!--                            <img src="{{asset('/')}}images/index/hero_watch.png" alt="hero_img2">-->
                    <img src="{{asset('/')}}images/icon/hero_star.png" alt="hero_icon">
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.2. hero section ========  -->
    <!-- ======== 1.3. about section ========  -->
    <section class="about">
        <div class="container">
            <div class="row text-md-start text-sm-center text-center">
                <div class="col-md-6 d-flex justify-content-between">
                    <div class="ab_card1"  data-aos="flip-left">
                        <h3>About Us</h3>
                        <p class="p-f-s"> Paperless Limited is a financial technology company based in Bangladesh. Established in 2020, we are proud to be at the forefront of the digital payment revolution. In 2023, we secured a license from the Bangladesh Bank as a Payment System Operator (PSO), marking a significant milestone in our journey to revolutionize the financial landscape in Bangladesh.</p>
                        <div
                            class="d-flex align-items-center justify-content-lg-start justify-content-md-center justify-content-center">
                            <a class="btn-hover1" href="{{route('about')}}">Learn More</a>

                            <div class="abut-video">
                                <!--                                        <a class="video-play-button" href="#">-->
                                <!--                                        <span class="fa-solid fa-play"></span>-->
                                </a>

                            </div>
                            <!--                                    <div class="p-f-s w-v">Watch Video</div>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center mt-md-0 mt-sm-3 mt-3">
                    <div class="ab_card2 d-flex flex-column justify-content-between" data-aos="flip-right">
                        <div>
                            <div class="row gap-md-0 gap-sm-3 gap-3">
                                <div class="col-md-12 col-sm-12 col-12 ">
                                    <div
                                        class="d-flex justify-content-md-start justify-content-sm-center justify-content-center">
                                        <h3>Our Commitment</h3>
                                    </div>
                                    <p class="p-f-s">We are committed to providing you with the tools and services you need to achieve your financial goals. Whether you're an individual looking for a simple and secure way to make payments or a business seeking innovative solutions, we're here to make it happen.</p>


                                </div>



                            </div>
                        </div>
                        <div
                            class="d-flex mb-3 mt-4 gap-4 justify-content-md-start justify-content-ms-center justify-content-center">
                            <!--                                    <div class="position-relative">-->
                        <!--                                        <img src="{{asset('/')}}images/index/about_card_img1.jpg" alt="about_img1">-->
                        <!--                                        <img src="{{asset('/')}}images/index/about_card_img2.jpg" alt="about_img2">-->
                            <!--                                    </div>-->
                            <div class="ps-2">
                                <!--                                        <span>-->
                                <!--                                            <i class="fa-solid fa-star"></i>-->
                                <!--                                            <i class="fa-solid fa-star"></i>-->
                                <!--                                            <i class="fa-solid fa-star"></i>-->
                                <!--                                            <i class="fa-solid fa-star"></i>-->
                                <!--                                            <i class="fa-solid fa-star"></i>-->
                                <!--                                        </span>-->
                                <!--                                        <p>So many people like this service</p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- ======== End of 1.3. about section ========  -->
    <!-- ======== 1.4. finance section ========  -->
    <section class="finance">
        <div class="container text-center">
            <h2>UNLOCKING THE POWER OF DIGITAL PAYMENTS</h2>
            <P class="mt-0">Paperless Limited is committed to providing cutting-edge fintech services that simplify transactions, improve financial accessibility, and empower individuals and businesses with digital payment solutions. </P>
            <div class="finanes-card row gap-md-0 gap-sm-4 gap-4">
                <div class="col-lg-4 col-md-4 d-flex justify-content-center pe-lg-3 pe-md-0 pe-sm-3 pe-3">
                    <div class="fin-card" data-aos="flip-up">
                        <figure><img src="{{asset('/')}}images/icon/graphe.png" alt="praph"></figure>
                        <h4>Financial Inclusion</h4>
                        <p class="p-f-s">Bridge the gap between the banked and unbanked populations in Bangladesh by making digital financial services accessible to all.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center pe-lg-3 pe-md-0 pe-sm-3 pe-3">
                    <div class="fin-card" data-aos="flip-up">
                        <figure> <img src="{{asset('/')}}images/icon/secqurity.png" alt="doller"></figure>
                        <h4>Security</h4>
                        <p class="p-f-s">Implement state-of-the-art security measures to safeguard all transactions and customer data, building trust and reliability.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="fin-card" data-aos="flip-up">
                        <figure><img src="{{asset('/')}}images/icon/inovation.png" alt="arow"></figure>
                        <h4>Innovation</h4>
                        <p class="p-f-s">Continuously innovate and develop new and improved payment solutions that adapt to the changing needs of our customers and the financial industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.4. finance section ========  -->
    <!-- ======== 1.5. ispsum section ========  -->
    <div class="ispsum-logo">
        <div class="container">
            <hr>
            <div class="logo_ispsum_slider">
                <a href="#">
                    <figure><img src="{{asset('/')}}images/icon/ipsum-1.png" alt="img"></figure>
                </a>
                <a href="#">
                    <figure><img src="{{asset('/')}}images/icon/ipsum-2.png" alt="img"></figure>
                </a>
                <a href="#">
                    <figure><img src="{{asset('/')}}images/icon/ispum-3.png" alt="img"></figure>
                </a>
                <a href="#">
                    <figure><img src="{{asset('/')}}images/icon/ipsum-4.png" alt="img"></figure>
                </a>
                <a href="#">
                    <figure><img src="{{asset('/')}}images/icon/ipsum-1.png" alt="img"></figure>
                </a>
                <a href="#">
                    <figure><img src="{{asset('/')}}images/icon/ipsum-2.png" alt="img"></figure>
                </a>
                <a href="#">
                    <figure><img src="{{asset('/')}}images/icon/ispum-3.png" alt="img"></figure>
                </a>
                <a href="#">
                    <figure><img src="{{asset('/')}}images/icon/ipsum-4.png" alt="img"></figure>
                </a>
            </div>
            <hr>
        </div>
    </div>
    <!-- ======== End of 1.5. ispsum section ========  -->
    <!-- ======== 1.6. gateway section ========  -->
    <section class="gateway">
        <div class="container">
            <div class="row gap-lg-0 gap-md-0 gap-sm-4 gap-4">
                <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center" data-aos="fade-up">
                    <div class=" gateway-bg-img mt-5 ">
                        <figure><img src="{{asset('/')}}images/index/gateway-1.png" alt="gate_img1" class="moving"></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6  text-md-start text-sm-center text-center" data-aos="fade-down">
                    <h2 style="text-transform:uppercase;" > Our Services are Dedicated to Making Life Easier</h2>
                    <P class="pt-lg-4 pt-md-3 pt-sm-2 pt-2">As a PSO, Paperless Limited offers a wide range of digital payment services, including</P>
                    <div
                        class="gate mt-md-3 mt-sm-0 mt-4   d-flex flex-md-row flex-sm-column flex-column align-items-center">
                        <figure class="d-flex align-items-center"><img src="{{asset('/')}}images/icon/gate-icon1.png"
                                                                       alt="gate-img1"></figure>
                        <div class="account-text ms-3">
                            <h5 class="pb-2">Payment Gateway</h5>
                            <p class="p-f-s">Our secure and reliable payment gateway enables businesses to accept online payments effortlessly, enhancing their customer's shopping experience and boosting revenue.</p>
                        </div>
                    </div>
                    <div class="gate d-flex mt-4  flex-md-row flex-sm-column flex-column align-items-center">
                        <figure class="d-flex align-items-center"><img src="{{asset('/')}}images/icon/gate-icon2.png"
                                                                       alt="gate-img2"></figure>
                        <div class="ms-3">
                            <h5 class="pb-2">Mobile Recharge</h5>
                            <p class="p-f-s">Our mobile recharge service allows users to top up their mobile phone credit quickly and easily, ensuring seamless connectivity at all times.</p>


                        </div>
                    </div>
                    <div class="gate d-flex mt-4  flex-md-row flex-sm-column flex-column align-items-center">
                        <figure class="d-flex align-items-center"><img src="{{asset('/')}}images/icon/gate-icon3.png"
                                                                       alt="gate-img3"></figure>
                        <div class="ms-3">
                            <h5 class="pb-2">Bill Payment</h5>
                            <p class="p-f-s">We offer a convenient platform for individuals and businesses to pay their bills online, saving time and simplifying the payment process.</p>

                        </div>
                    </div>
                    <div class="gate-link text-lg-start text-md-start text-sm-center text-center">
                        <a class="btn-hover1" href="services.html">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.6. gateway section ========  -->
    <!-- ======== 1.7. services section ========  -->
    <section class="services">
        <div class="container">
            <div class="row gap-md-0 gap-sm-4 gap-4">
                <div class="col-lg-6 col-md-6" data-aos="fade-down">
                    <h2 class="text-lg-start text-md-start text-sm-center text-center" style="text-transform:uppercase;">
                        We take your Payment matters seriously</h2> <p
                        class="text-lg-start text-md-start text-sm-center text-center mt-lg-4 mt-md-2 mt-sm-2 mt-2 pb-4 ">

                        We secured a license from the Bangladesh Bank as a Payment System Operator (PSO), marking a significant milestone in our journey to revolutionize the financial landscape in Bangladesh. Every payment performed through our gateway would be well secured we will follow the Central bank's Regulations and standards to make sure the smoothness of the services

                    </p>
                    <div class=" d-flex  justify-content-center gap-lg-4 gap-md-3 gap-sm-2 gap-2">
                        <div class="offers">
                            <h5 class="mb-2">Security</h5>
                            <p class="p-f-s">Implement state-of-the-art security measures to safeguard all transactions and customer data, building trust and reliability.</p>
                        </div>
                        <div class="offers">
                            <h5 class=" mb-2">Customer-Centric Approach</h5>
                            <p class="p-f-s">Prioritize the needs and preferences of our customers, ensuring a seamless and user-friendly experience in all our services.</p>
                        </div>
                    </div>
                    <div class="serives-btn justify-content-md-start justify-content-ms-center justify-content-center d-flex">
                        <!--                            <a class="btn-hover1" href="#">Learn More</a>-->
                        <!--                            <div class="d-flex align-items-center">-->
                        <!--                                <a class="ps-4" href="#">Register Now </a>-->
                        <!--                                <i class="fa-solid fa-greater-than ps-md-3 ps-sm-1 ps-0"></i>-->
                        <!--                            </div>-->

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center sevices_img" data-aos="fade-up">
                    <div class="position-relative">
                        <div class="social-rating">
                            <div class="d-flex">
                                <div class="d-flex">
                                    <span><i class="fa-brands fa-youtube"></i></span>
                                    <div>
                                        <h6>YouTube</h6>
                                        <!--                                            <p>9 June 2023</p>-->
                                    </div>
                                </div>
                                <!--                                    <div class="d-flex text-pink">-->
                                <!--                                        <p>-$</p>-->
                                <!--                                        <p class="count">3.00</p>-->
                                <!--                                    </div>-->
                            </div>
                            <div class="d-flex">
                                <div class="d-flex">
                                    <span>
                                        <a href="https://www.facebook.com/paperlesslt">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                    </span>
                                    <div>
                                        <h6>Facebook</h6>
                                        <!--                                            <p>5 June 2023</p>-->
                                    </div>
                                </div>
                                <!--                                    <div class="d-flex text-green">-->
                                <!--                                        <p>+$</p>-->
                                <!--                                        <p class="count">21.00</p>-->
                                <!--                                    </div>-->
                            </div>
                            <div class="d-flex">
                                <div class="d-flex">
                                    <span><i class="fa-brands fa-pinterest-p"></i></span>
                                    <div>
                                        <h6>Pinterest</h6>
                                        <!--                                            <p>2 June 2023</p>-->
                                    </div>
                                </div>
                                <!--                                    <div class="d-flex text-pink">-->
                                <!--                                        <p>-$</p>-->
                                <!--                                        <p class="count">14.00</p>-->
                                <!--                                    </div>-->
                            </div>
                            <div class="d-flex">
                                <div class="d-flex">
                                    <span><i class="fa-brands fa-twitter" ></i></span>
                                    <div>
                                        <h6>Twitter</h6>
                                        <!--                                            <p>1 June 2023</p>-->
                                    </div>

                                </div>
                                <!--                                    <div class="d-flex text-green">-->
                                <!--                                        <p>+$</p>-->
                                <!--                                        <p class="count">51.00</p>-->
                                <!--                                    </div>-->
                            </div>
                        </div>
                        <figure><img src="{{asset('/')}}images/index/lady-mobile.png" alt="sevice_img2"></figure>
                        <figure><img src="{{asset('/')}}images/icon/whitStar.png" alt="sevice_img3"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.7. services section ========  -->
    <!-- ======== 1.8. visa section ========  -->
    <section class="visa">
        <div class="container">
            <div class="visa-bg" data-aos="zoom-in">
                <figure><img src="{{asset('/')}}images/index/vesa-back.png" alt="visa-img"></figure>
            </div>
            <div class="visa-contant" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3 class="text-md-start text-sm-center text-center">Gateway Integration Made Easy
                        </h3>
                        <p class="text-md-start text-sm-center text-center p-f-s">One of the biggest challenges businesses face when adopting a new payment system is the integration process. We understand the importance of keeping this process as simple and straightforward as possible. </p>
                        <p class="text-md-start text-sm-center text-center p-f-s"></p>
                        <!--                            <div class="visa-btn text-sm-center text-md-start text-center">-->
                        <!--                                <a class="btn-hover1" href="#">Try PayPath Now</a>-->
                        <!--                            </div>-->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="visa-logo d-flex justify-content-between align-items-center pt-2 pb-3">
                            <figure><img src="{{asset('/')}}images/icon/vis-1.png" alt="vica-icon1"> </figure>
                            <figure><img src="{{asset('/')}}images/icon/ves-2.png" alt="vica-icon2"></figure>
                            <figure><img src="{{asset('/')}}images/icon/ves-3.png" alt="vica-icon3"></figure>
                            <figure><img src="{{asset('/')}}images/icon/ves-4.png" alt="vica-icon4"></figure>
                            <figure><img src="{{asset('/')}}images/icon/ves-5.png" alt="vica-icon5"></figure>
                        </div>
                        <!--                            <div class="d-flex pt-2 justify-content-md-start justify-content-center justify-content-center">-->
                        <!--                                <h2 class="count">280</h2>-->
                        <!--                                <h2>+</h2>-->
                        <!--                                <h6 class="d-flex align-items-center ps-2 ">Integrations</h6>-->
                        <!--                            </div>-->
                        <p class="pt-2 pb-3 text-md-start text-sm-center text-center p-f-s">Paperless Gateway is known for its user-friendly integration options. With our easy-to-follow documentation and dedicated support team, you can have your payment gateway up and running in no time, saving your business both time and resources.</p>
                        <!--                            <div class="visa-card position-relative mt-3">-->
                    <!--                                <img src="{{asset('/')}}images/index/Card.png" alt="visa-card">-->
                        <!--                            </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.8. visa section ========  -->
    <!-- ========  1.9. pricing section ========  -->
    <!-- ======== Start Core FEATURES section ========  -->
    <section class="core">
        <div class="container">
            <h2 class="text-center">CORE FEATURES</h2>
            <p class="core-p"> Our  payment gateways facilitate secure transactions between customers and merchants, ensuring that payment data is encrypted and processed efficiently. Core features of a standard payment gateway include: </p>
            <div class="row d-flex gap-md-0 gap-sm-5 gap-5">
                <div class="col-lg-4 col-md-4 d-flex flex-column gap-3 justify-content-center" data-aos="fade-up">
                    <div class="core-card">
                        <h5>Fully Plug & Play</h5>
                        <p>We have various types of API & Plugins ready for you to get started quickly and get paid instantly</p>
                    </div>
                    <div class="core-card">
                        <h5>Security</h5>
                        <p>Robust security features are essential, including encryption to protect sensitive customer payment data. Payment gateways often comply with industry standards such as PCI DSS (Payment Card Industry Data Security Standard).</p>
                    </div>
                    <div class="core-card">
                        <h5>Payment Methods</h5>
                        <p>Support for a wide range of payment methods to accommodate customer preferences, including credit cards (Visa, MasterCard, etc.), debit cards</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center align-items-center" data-aos="zoom-in">
                    <figure><img src="{{asset('/')}}images/index/mobile.png" alt="img"></figure>
                </div>
                <div class="col-lg-4 col-md-4 d-flex flex-column gap-3 justify-content-center" data-aos="fade-down">
                    <div class="core-card1">
                        <h5>PSO Licence </h5>
                        <p>we secured a license from the Bangladesh Bank as a Payment System Operator (PSO), marking a significant milestone in our journey to revolutionize the financial landscape in Bangladesh.</p>
                    </div>
                    <div class="core-card1">
                        <h5>Reporting and Analytics:</h5>
                        <p>Detailed reporting and analytics tools to help merchants track their sales, revenue, and customer trends.</p>
                    </div>
                    <div class="core-card1">
                        <h5>API Webhooks </h5>
                        <p>Support for webhook notifications, allowing merchants to receive real-time updates about transaction status and other events.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======== End of 1.8. CORE FEATURES ========  -->
    <section class="pricing pricing-b-g">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center pricing-bg" data-aos="fade-up">
                    <div>
                        <figure><img src="{{asset('/')}}images/index/pricinge.png" alt="pric-img1" class="moving"></figure>
                        <figure><img src="{{asset('/')}}images/icon/hero_star.png" alt="pric-img2"></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mt-md-0 mt-sm-5 mt-5" data-aos="fade-down">
                    <h2 class=" text-md-start text-sm-center text-center">Inspiring Progress, Achieving Excellence</h2>
                    <p class="text-md-start text-sm-center text-center p-md-0 p-sm-2 p-2">Our primary objective is to revolutionize the financial landscape by providing cutting-edge digital payment solutions and services. We aim to empower individuals and businesses to seamlessly transact, save time, and gain better control over their financial operations.</p>
                    <div class="pric-list">
                        <h6>Mission</h6>
                        <div class="d-flex">
                            <div class="mt-3 me-3"><i class="fa-solid fa-check"></i></div>

                            <div class="d-flex justify-content-between gap-1">
                                <p class="p-f-s">Our mission is to comply with the most rigorous security and compliance standards and ensure a seamless and rich experience for a user.</p>
                                <!--                                    <div class="d-flex pric-sup">-->
                                <!--                                        <h2>$</h2>-->
                                <!--                                        <h2 >1.54</h2>-->
                                <!--                                        <p>/month</p>-->
                                <!--                                    </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="pric-list second">
                        <h6>Vision</h6>
                        <div class="d-flex justify-content-between">
                            <div class="mt-3 me-3"><i class="fa-solid fa-check"></i></div>
                            <div class="d-flex justify-content-between">
                                <p class="p-f-s">To revolutionize the financial landscape in Bangladesh by offering innovative, secure, and accessible digital payment solutions, ensuring financial inclusion for all.</p>
                                <!--                                    <div class="d-flex pric-sup ">-->
                                <!--                                        <h2>$</h2>-->
                                <!--                                        <h2>4.54</h2>-->
                                <!--                                        <p>/month</p>-->
                                <!--                                    </div>-->
                            </div>
                        </div>
                    </div>
                    <!--                        <div class="text-md-start text-sm-center text-center pt-lg-4 pt-md-2 pt-sm-0 pt-1">-->
                    <!--                            <a class="btn-hover1" href="#">Get Started</a>-->
                    <!--                        </div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.9. pricing section ========  -->
    <!-- ======== 1.10. profaessional section ========  -->
    <!--        <section class="profaessional">-->
    <!--            <div class="container">-->
    <!--                <h2 class="text-center">Trusted By Professionals</h2>-->
    <!--                <P class="text-center pt-3 pb-5 mb-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit.-->
    <!--                    Sapiente-->
    <!--                    vel-->
    <!--                    asperiores vero repudiandae neque! Ut suscipit neque eligendi alias vero repellat enim-->
    <!--                    corporis-->
    <!--                    incidunt, ex, natus qui quia nulla sint.</P>-->
    <!--                <div class="prof-size"  data-aos="zoom-in-up">-->
    <!--                    <div class="prof-slider ">-->
    <!--                        <div class="prof-slide position-relative">-->
    <!--                            <div>-->
    <!--                                <div class="d-flex  align-items-center justify-content-center">-->
    <!--                                    <img src="{{asset('/')}}images/slider/profational2.jpg" alt="img" class="prof-img-2">-->
    <!--                                </div>-->
    <!--                                <div>-->
    <!--                                    <img src="{{asset('/')}}images/slider/Comma.png" alt="img" class="prof-img-1">-->
    <!--                                </div>-->
    <!--                                <p class="text-center p-f-s">Lorem ipsum dolor, sit amet consectetur adipisicing elit.-->
    <!--                                    Enim-->
    <!--                                    qui-->
    <!--                                    porro perferendis voluptatibus minima, eius illo animi nihil sed natus! Deleniti-->
    <!--                                    officia-->
    <!--                                    dolores culpa alias quasi repellat corrupti doloremque aliquam!</p>-->
    <!--                                <div class="prof-star pt-2 pb-2 text-center">-->
    <!--                                    <span class="stars text-lg-start">-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                    </span>-->
    <!--                                </div>-->
    <!--                                <h5 class="text-center">Johnny Stone</h5>-->
    <!--                                <p class="text-center pt-2 pb-5 p-f-s">Enterpreneur</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="prof-slide position-relative">-->
    <!--                            <div>-->
    <!--                                <div class="d-flex  align-items-center justify-content-center">-->
    <!--                                    <img src="{{asset('/')}}images/slider/profactional3.jpg" alt="img" class="prof-img-2">-->
    <!--                                </div>-->
    <!--                                <div>-->
    <!--                                    <img src="{{asset('/')}}images/slider/Comma.png" alt="img" class="prof-img-1">-->
    <!--                                </div>-->
    <!--                                <p class="text-center p-f-s">Lorem ipsum dolor, sit amet consectetur adipisicing elit.-->
    <!--                                    Enim-->
    <!--                                    qui-->
    <!--                                    porro perferendis voluptatibus minima, eius illo animi nihil sed natus! Deleniti-->
    <!--                                    officia-->
    <!--                                    dolores culpa alias quasi repellat corrupti doloremque aliquam!</p>-->
    <!--                                <div class="prof-star pt-2 pb-2 text-center">-->
    <!--                                    <span class="stars text-lg-start">-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                    </span>-->
    <!--                                </div>-->
    <!--                                <h5 class="text-center">Stephen Stewart</h5>-->
    <!--                                <p class="text-center pt-2 pb-5 p-f-s">Entrepreneur</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="prof-slide position-relative">-->
    <!--                            <div>-->
    <!--                                <div class="d-flex  align-items-center justify-content-center">-->
    <!--                                    <img src="{{asset('/')}}images/slider/profacitional.jpg" alt="img" class="prof-img-2">-->
    <!--                                </div>-->
    <!--                                <div>-->
    <!--                                    <img src="{{asset('/')}}images/slider/Comma.png" alt="img" class="prof-img-1">-->
    <!--                                </div>-->
    <!--                                <p class="text-center p-f-s">Lorem ipsum dolor, sit amet consectetur adipisicing elit.-->
    <!--                                    Enim-->
    <!--                                    qui-->
    <!--                                    porro perferendis voluptatibus minima, eius illo animi nihil sed natus! Deleniti-->
    <!--                                    officia-->
    <!--                                    dolores culpa alias quasi repellat corrupti doloremque aliquam!</p>-->
    <!--                                <div class="prof-star pt-2 pb-2 text-center">-->
    <!--                                    <span class="stars text-lg-start">-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                        <i class="fa-solid fa-star"></i>-->
    <!--                                    </span>-->
    <!--                                </div>-->
    <!--                                <h5 class="text-center">Tom Hiddellon</h5>-->
    <!--                                <p class="text-center pt-2 pb-5 p-f-s">Entrepreneur</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->
    <!-- ======== End of 1.10. profaessional section ========  -->
    <!-- ======== 1.11. question section ========  -->
    <section class="question">
        <div class="container">
            <div class="row">
                <div class="question-text col-lg-6 col-md-6 tab-center" data-aos="fade-up">
                    <h2 class="text-lg-start text-md-start text-sm-center text-center">FREQUENTLY ASKED
                        QUESTIONS
                    </h2>
                    <P class="text-lg-start text-md-start text-sm-center text-center mt-md-3 mt-3">
                        Here are some frequently asked questions (FAQs) specific. It can be a valuable resource for your website visitors.
                    </P>
                    <!--                        <div class="text-lg-start text-md-start text-sm-center text-center ">-->
                    <!--                            <a class="btn-hover1" href="faq.html">More FAQs</a>-->
                    <!--                        </div>-->
                </div>
                <div class="question-collapes col-lg-6 col-md-6 mt-md-0 mt-sm-3 mt-3" data-aos="zoom-in">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is Paperless Limited, and what does it offer?
                                </button>
                            </h5>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Paperless Limited is a fintech company that specializes in digital payment solutions. We provide a wide range of services to streamline transactions for individuals and businesses, including online payment processing, mobile wallets, and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Is my personal and financial information secure with Paperless Limited?
                                </button>
                            </h5>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> Yes, we take data security seriously. We use advanced encryption and security measures to protect your personal and financial information, ensuring a secure payment experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Is Paperless Limited regulated and compliant with financial regulations?
                                </button>
                            </h5>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                 aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Absolutely. Paperless Limited is fully compliant with all relevant financial regulations, and we work closely with Bangladesh Bank, our regulatory authority, to ensure that we meet and exceed the highest standards in the fintech industry. Your assurance of compliance with a specific regulatory authority like Bangladesh Bank adds clarity and transparency, giving users confidence in your adherence to local financial regulations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    How can I contact Paperless Limited's customer support team?
                                </button>
                            </h5>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>You can reach our customer support team through email, phone, or by using the contact form on our website. We're here to assist you with any questions or concerns you may have.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 1.11. question section ========  -->
    <!-- ======== 1.12. news-cards section ========  -->
    <!--        <section class="news-cards">-->
    <!--            <div class="container">-->
    <!--                <h2 class="text-center">OUR LATEST NEWS & EVENTS</h2>-->
    <!--                <P class="text-center news-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum-->
    <!--                    vitae voluptatibus ad laudantium culpa consequatur aperiam nulla.</P>-->
    <!--                <div class="row d-flex gap-md-0 gap-sm-5 gap-4">-->
    <!--                    <div class="col-lg-4 col-md-4 d-flex" data-aos="flip-right">-->
    <!--                        <div class="card news-card-back">-->
    <!--                            <img src="{{asset('/')}}images/index/news-1.png" alt="card-img">-->
    <!--                            <div class="card-body">-->
    <!--                                <a href="#">-->
    <!--                                    <h5>Choosing a Payment Gateway: Key Factors to Consider</h5>-->
    <!--                                </a>-->
    <!--                                <p class="card-text p-f-s">Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
    <!--                                    Voluptates magni veniam officia?.</p>-->
    <!--                            </div>-->
    <!--                            <hr class="dotted-line">-->
    <!--                            <div class="card-viewer d-flex justify-content-between ">-->
    <!--                                <div>-->
    <!--                                    <i class="fa-solid fa-calendar-days"></i>-->
    <!--                                    <span>2023/06/12</span>-->
    <!--                                </div>-->
    <!--                                <div>-->
    <!--                                    <i class="fa-regular fa-message"></i>-->
    <!--                                    <span>0</span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="news-link">-->
    <!--                                <a class="btn-hover1" href="#">Read More</a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-lg-4 col-md-4 d-flex"  data-aos="flip-right">-->
    <!--                        <div class="card news-card-back">-->
    <!--                            <img src="{{asset('/')}}images/index/news-2.png" alt="image">-->
    <!--                            <div class="card-body">-->
    <!--                                <a href="#">-->
    <!--                                    <h5>Top Strategies to do Successful Online Business</h5>-->
    <!--                                </a>-->
    <!--                                <p class="card-text p-f-s">Lorem ipsum dolor sit amet consectetur adipisicing elit.-->
    <!--                                    Molestias aperiam doloribus totam.</p>-->
    <!--                            </div>-->
    <!--                            <hr class="dotted-line">-->
    <!--                            <div class="card-viewer d-flex justify-content-between ">-->
    <!--                                <div>-->
    <!--                                    <i class="fa-solid fa-calendar-days"></i>-->
    <!--                                    <span>2023/06/12</span>-->
    <!--                                </div>-->
    <!--                                <div>-->
    <!--                                    <i class="fa-regular fa-message"></i>-->
    <!--                                    <span>0</span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="card-color">-->
    <!--                                <a class="btn-hover1" href="#">Read More</a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-lg-4 col-md-4 d-flex" data-aos="flip-right">-->
    <!--                        <div class="card news-card-back">-->
    <!--                            <img src="{{asset('/')}}images/index/news-3.png" alt="image">-->
    <!--                            <div class="card-body">-->
    <!--                                <a href="#">-->
    <!--                                    <h5>The Benefits of Microfinancing for Small Business</h5>-->
    <!--                                </a>-->
    <!--                                <p class="card-text p-f-s">Lorem ipsum dolor sit amet consectetur adipisicing elit.-->
    <!--                                    Tenetur, error impedit.</p>-->
    <!--                            </div>-->
    <!--                            <hr class="dotted-line">-->
    <!--                            <div class="card-viewer d-flex justify-content-between ">-->
    <!--                                <div>-->

    <!--                                    <i class="fa-solid fa-calendar-days"></i>-->
    <!--                                    <span>2023/06/12</span>-->
    <!--                                </div>-->
    <!--                                <div>-->
    <!--                                    <i class="fa-regular fa-message"></i>-->
    <!--                                    <span>0</span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div>-->
    <!--                                <a class="btn-hover1" href="#">Read More</a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->
    <!-- ======== End of 1.12. news-cards section ========  -->


@endsection
