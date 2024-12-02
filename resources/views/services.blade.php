@extends('layouts.master')
@section('services')
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
                        <!--                            <a class="btn-hover1" href="about.html">Learn More</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
