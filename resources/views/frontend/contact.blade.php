@extends('layout.master')
@section('title')
Contact - Ingenium Concept LTD
@endsection
@section('content')

<!-- Start main-content -->
<section class="page-title" style="background-image: url(assets/images/background/page-title-bg.png);">
    <div class="auto-container">
        <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
            <h1 class="title">Contact us</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->
<!--Contact Details Start-->
<section class="contact-details">
    <div class="container ">
        <div class="row">
            @include('include.success')
            @include('include.warning')
            @include('include.error')
            <div class="col-xl-6 col-lg-6">
                <div class="sec-title">
                    <span class="sub-title">Send us email</span>
                    <h3>Don’t Hesitate To Contact Us For Any Kind Of Information.</h3>
                </div>
                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="{{ url('/send-contact') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="name" class="form-control" type="text" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="email_subject" class="form-control required" type="text" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea name="email_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="mb-5">
                        <button type="submit" class="theme-btn btn-style-one"><span class="btn-title" style="padding-top: 17px;">Send
                                message</span></button>
                    </div>
                </form>
                <!-- Contact Form Validation-->
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact-details__right">
                    <ul class="list-unstyled contact-details__info">
                        <li>
                            <div class="icon bg-theme-color2">
                                <span class="lnr-icon-phone-plus"></span>
                            </div>
                            <div class="text">
                                <h6>Have any question?</h6>
                                <a href="#"> +2348036604417,+2349161852329, +2349138332620, +447440548221</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-envelope1"></span>
                            </div>
                            <div class="text">
                                <h6>Write email</h6>
                                <a href="mailto:info@growwithingenium.com">info@growwithingenium.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-location"></span>
                            </div>
                            <div class="text">
                                <h6>Nigeria Office</h6>
                                <span style="font-size: 16px;">Suite J227, Road 5 Ikota Shopping
                                    Complex <br>beside VGC Lagos-Epe Expressway, Lagos Nigeria.</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-location"></span>
                            </div>

                            <div class="text">
                                <h6>UK Office</h6>
                                <span style="font-size: 16px;">42, Cardinal Close B178EU, Birmingham, United Kingdom.</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-location"></span>
                            </div>
                            <div class="text">
                                <h6>US Office</h6>
                                <span style="font-size: 16px;">405 W Greenlawn Ave, G11 Lansing, Michigan USA.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Details End-->

<!-- Map Section-->
<section class="map-section">
    <iframe class="map w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126864.21173844166!2d3.5380775687065005!3d6.457309828044987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bff9b90532ad1%3A0x1d58f67b945339a6!2sIkota%20Shopping%20Complex!5e0!3m2!1sen!2sng!4v1706196894676!5m2!1sen!2sng" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>
<!--End Map Section-->

@endsection