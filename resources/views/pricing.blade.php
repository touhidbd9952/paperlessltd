@extends('layouts.master')

@section('about')

    {{-- <section>
        <div class="about-hero container">
            <h1 class="text-center">Pricing</h1>
            <p class="text-center about-p">
                <div class="services  pb-lg-4 pb-md-2 pb-sm-0 pb-0 mb-lg-2 mb-md-1 mb-sm-0 mb-0">
                    <div class="container">
                        <div class="row gap-md-0 gap-sm-4 gap-4">
                            <div class="col-lg-6 col-md-6" data-aos="fade-up">
                                <h2 class="text-lg-start text-md-start text-sm-center text-center">About Us</h2>
            <p
                class="text-lg-start text-md-start text-sm-center text-center mt-lg-4 mt-md-2 mt-sm-2 mt-2 pb-4 ">
                Paperless Limited is a leading financial technology company based in Bangladesh. Established in 2020, we are proud to be at the forefront of the digital payment revolution. In 2023, we secured a license from the Bangladesh Bank as a Payment System Operator (PSO), marking a significant milestone in our journey to revolutionize the financial landscape in Bangladesh.
            </p>
            <p class="text-lg-start text-md-start text-sm-center text-center pb-4 ">
                It is our belief that with the option of a multi-channel access proposition that includes cards, applications, and integrated services, we can ensure a strong step towards a cashless and wallet less future and ease the transition from a cash to a cashless era</p>

            <div
                class="serives-btn justify-content-md-start justify-content-ms-center justify-content-center d-flex pt-lg-4 pt-md-2 pt-sm-2 pt-2">
                <!--                                        <a class="btn-hover1" href="#">Get The Card</a>-->

            </div>
        </div>
        <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center abt" data-aos="fade-down">
            <div class="position-relative">
                <figure class="abut-hero-img1"><img src="{{asset('/')}}images/about/lady-mobile.png" alt="img"></figure>
                <figure class="abut-hero-img2"><img src="{{asset('/')}}images/icon/whitStar.png" alt="img"></figure>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section> --}}

    <!-- ======== 2.1. hero section ========  -->
    </div>



    {{-- <section class="pricing pricing-b-g">
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
    </section> --}}


    <!-- ======== 1.4. finance section ========  -->
    <section class="finance">
        <div class="container text-center">
            <h2 class="text-uppercase">Simple and Transparent Pricing</h2>
            <P class="mt-0">Paperless Limited is committed to providing cutting-edge fintech services that simplify transactions, improve financial accessibility, and empower individuals and businesses with digital payment solutions. </P>
            <div class="finanes-card row gap-md-0 gap-sm-4 gap-4">
                <div class="col-lg-4 col-md-4 d-flex justify-content-center pe-lg-3 pe-md-0 pe-sm-3 pe-3">
                    <div class="fin-card" data-aos="flip-up">
                        {{-- <figure>
                            <img src="{{asset('/')}}images/icon/graphe.png" alt="praph">
                        </figure> --}}
                        
                        <style>
                            ul li{color: #E4E4E4;text-align: left;line-height: 22px;font-family: 'Poppins', sans-serif;}
                            .packagetitle{
                                
  font-weight: 700;
  line-height: 57px;
  letter-spacing: -2px;
  font-family: 'Montserrat', sans-serif;
  background: linear-gradient(-40deg, #db9b1e 0%, #C0D4C9 100%);
    background-clip: border-box;
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
                            }
                            .check{background: linear-gradient(-40deg, #db9b1e 0%, #C0D4C9 100%);background-clip: border-box;background-clip: text;-webkit-background-clip: text;-webkit-text-fill-color: transparent;}
                            .btn-hover1{padding: 5px 10px !important; width: 150px;}
                            .preq{font-weight: 900;font-size: 30px;line-height: 1.2em;color: #E4E4E4;}
                            .preqn{color: rgba(103 , 114, 148, 1); font-size: 12px;padding-bottom: 20px;}
                        </style>

                        <h4 class="packagetitle">Package 1</h4>

                        <p class="preq">
                            Call For Price <br>
                        </p> 
                        <p class="preqn"> One time fee (non-refundable)</p>  

                        <ul>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                No Monthly Fee
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                One Time Charge
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Visa, Mastercard, Nexus: 2.50%
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Amrican Express: 3.50%
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Nagad, Rocket, Bkash: 2.50%
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Transaction Alert: SMS & Email
                                </li>
                                <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Statement using Portal & App
                                </li>
                                <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Support: Call, Email & Chat
                                </li>
                                <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Dedicated Key Account Manager
                                </li>
                                <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                All Payment Methods By Default
                                </li>
                                <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                No Additional Payment Method Fee
                                </li>
                        </ul>
                        <br>
                        <a href="{{route("contact")}}" class=" e-btn btn-hover1" type="submit">Contact US</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center pe-lg-3 pe-md-0 pe-sm-3 pe-3">
                    <div class="fin-card" data-aos="flip-up">
                        <h4 class="packagetitle">Package 2</h4>

                        <p class="preq">
                            Call For Price <br>
                        </p> 
                        <p class="preqn"> One time fee (non-refundable)</p>

                        <ul>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                No Monthly Fee
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                One Time Charge
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Visa, Mastercard, Nexus: 2.30%
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Amrican Express: 3.30%
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Nagad, Rocket, Bkash: 2.30%
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Transaction Alert: SMS & Email
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Statement using Portal & App
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Support: Call, Email & Chat
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Dedicated Key Account Manager
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                All Payment Methods By Default
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                No Additional Payment Method Fee
                            </li>
                        </ul>
                        <br>
                        <a href="{{route("contact")}}" class=" e-btn btn-hover1" type="submit">Contact US</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                    <div class="fin-card" data-aos="flip-up">
                        <h4 class="packagetitle">Package 3</h4>

                        <p class="preq">
                            Call For Price <br>
                        </p> 
                        <p class="preqn"> One time fee (non-refundable)</p>

                        <ul>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                No Monthly Fee
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                One Time Charge
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Visa, Mastercard, Nexus: 2.00%
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Amrican Express: 3.15%
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Nagad, Rocket, Bkash: 1.90%
                            </li>
                            <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Transaction Alert: SMS & Email
                                </li>
                                <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Statement using Portal & App
                                </li>
                                <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Support: Call, Email & Chat
                                </li>
                                <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                Dedicated Key Account Manager
                                </li>
                                <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                All Payment Methods By Default
                                </li>
                                <li class="p-f-s">
                                <span class="check">✔&nbsp;</span>
                                No Additional Payment Method Fee
                                </li>
                        </ul>
                        <br>
                        <a href="{{route("contact")}}" class=" e-btn btn-hover1" type="submit">Contact US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
