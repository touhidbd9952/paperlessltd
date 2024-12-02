@extends('layouts.master')
@section('feature')
    <!-- ======== 3.2. core section ========  -->
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
    <!-- ======== End of 3.2. core section ========  -->
@endsection
