@extends('layouts.master')
@section('contact')

    <!-- ======== 5.1. contact-hero section ========  -->
    <div class="container">
        <div class="contact-hero">
            <h2 class="text-center">CONTACT</h2>
            <P class="text-center"></P>
        </div>
    </div>
    <div class="map">
        <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Paperless Ltd, 9 Rd No 13, Dhaka 1212&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ======== End of 5.1. contact-hero section ========  -->
    </div>
    <section class="d-flex justify-content-center">
        <div class="help position-relative">
            <div class="container">
                <div class="row d-flex gap-lg-5 gap-md-3 gap-sm-4 gap-3 justify-content-center">
                    <div class="col-lg-5 col-md-5 help-crd1" data-aos="fade-down"
                         data-aos-easing="linear"
                         data-aos-duration="1500">
                        <h4>Contact Details</h4>
                        <P>For inquiries, partnerships, or any assistance, please feel free to contact us at:</P>
                        <div class="d-flex gap-4 align-items-center">
                            <i class="fa-solid fa-house"></i>
                            <span>Corporate Office :  H# 540/6, (Level-5) Road# 12, Baridhara DOHS, Baridhara. Dhaka-1206.</span>
                        </div>
                        <div class="d-flex gap-4 align-items-center">
                            <i class="fa-solid fa-house"></i>
                            <span>Head Office : Plot#20, (Level-2)Lake Drive Road, Sectore-07, Uttara, Dhaka-1230.</span>

                        </div>
                        <div class="d-flex gap-4 align-items-center">
                            <i class="fa-solid fa-phone"></i>
                            <span>+880 1940-297993</span>
                        </div>
                        <div class="d-flex gap-4 align-items-center">
                            <i class="fa-solid fa-envelope"></i>
                            <span>info@paperlessltd.com</span>
                        </div>
                        <div class="d-flex gap-4 align-items-center">
                            <i class="fa-solid fa-envelope"></i>
                            <span>Trade License No.TRAD/DNCC/153480/2022</span>
                        </div>
                        <h5>OPERATING HOURS</h5>
                        <div class="d-flex gap-4 align-items-center">
                            <i class="fa-solid fa-clock"></i>
                            <span>Saturday To Thursday  <br> 10:00am to 6:00pm</span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 contact-email" data-aos="fade-down"
                         data-aos-easing="linear"
                         data-aos-duration="1500">
                        <h4>EMAIL US</h4>
                        <form action="action_page.php"  id="footer-sub">
                            <div class="row justify-content-center gap-3">
                                <input type="text" name="name" id="name" class="col-md-5 col-sm-12 col-12" placeholder="Your Name" required>
                                <input type="text" name="email" id="email" class="col-md-5 col-sm-12 col-12" placeholder="Email Address" required>
                                <input type="text" name="number" id="number" class="col-md-5 col-sm-12 col-12" placeholder="Phone Number" required>
                                <input type="text" name="subject" id="subject" class="col-md-5 col-sm-12 col-12" placeholder="Subject" required>
                                <textarea class="col-md-11 col-12" name="massage" id="massage" cols="30" rows="10" placeholder="Write here message"></textarea>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <button class=" e-btn btn-hover1" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div id="Succes-box"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== End of 5.1. map help section ========  -->
</body>
</html>

@endsection
