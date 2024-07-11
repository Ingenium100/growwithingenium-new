@extends('layout.master')
@section('title')
Ingenium Concept LTD
@endsection
@section('content')

<!-- Banner Section Fifteen -->
<section class="banner-section-fifteen">
    <div class="bg" style="background-image: url(assets/images/banner/bg-4.png)"></div>
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-columnn col-lg-6">
                <div class="content-box">
                    <h1 class="title wow fadeInUp" data-wow-delay="600ms">Grow Your Business Today With Ingenium
                        <span class="span">Advisory Firm</span>
                    </h1>
                    <h6 class="text wow fadeInUp" data-wow-delay="900ms"> We Help Build Structures To Drive Your Business To Success.</h6>
                    <div class="btn-box wow fadeInUp" data-wow-delay="1200ms">
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Request for Proposal
                            </span></a>
                        <a href="{{ url('/contact-us') }}" class="theme-btn1 btn-style-one1"><span class="btn-title">Contact us
                                &nbsp;&nbsp; <i class="fa fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="image-column col-lg-6">
                <div class="image-box wow fadeInLeft" data-wow-delay="1500ms">
                    <span class="icon-dots-3 bounce-y"></span>
                    <figure class="image overlay-anim"><img src="assets/images/banner/6.jpg" alt=""></figure>
                    <div class="overlay-text info-box wow fadeInUp" data-wow-delay="1800ms">
                        <h3 class="text-white">Upcoming Event</h3>
                        <div class="icon-box"><i class="fa fa-calendar-alt"></i> Jan 27th</div>
                        <div class="text text-white">Customer Service Ebook Launch</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section Two -->

<!-- Process section Six-->
<section class="process-section-six" style="background-image: url(assets/images/background/page-title-bg.png);">
    <div class="container">
        <div class="">
            <div class="sec-title text-center">
                <h2 class="text-white">Our Tailored <span>Services</span> for your<br> Organizational Success
                </h2>
            </div>
            <div class="row">
                <!-- process-block Six-->
                <div class="process-block-six col-lg-2 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="content-box">
                            <i class="icon flaticon-web-programming"></i>
                            <h4 class="title" style="padding-right: 25px;"><a href="#">Business Advisory</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- process-block Six-->
                <div class="process-block-six col-lg-2 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="content-box">
                            <i class="icon flaticon-approved"></i>
                            <h4 class="title" style="padding-right: 25px;"><a href="#">Business Strategy</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- process-block Six-->
                <div class="process-block-six col-lg-2 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                    <div class="inner-box">
                        <div class="content-box">
                            <i class="icon flaticon-diamond-2"></i>
                            <h4 class="title" style="padding-right: 25px;"><a href="#">Start-Up Planning</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- process-block Six-->
                <div class="process-block-six col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="content-box">
                            <i class="icon flaticon-web-programming"></i>
                            <h4 class="title" style="padding-right: 25px;"><a href="#">Corporate
                                    Restructuring</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <!-- process-block Six-->
                <div class="process-block-six col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="content-box">
                            <i class="icon flaticon-approved"></i>
                            <h4 class="title" style="padding-right: 25px;"><a href="#">Training &
                                    Development</a>
                            </h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="pad-syn">
            <div class="">
                <h3 class="text-white">Product bundles</h3>
            </div>
            <div class="row">
                <!-- service-block Seven-->
                <div class="service-block-seven col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><i class="icon flaticon-puzzle"></i></div>
                            <h4 class="title">Ingenium Academy</h4>
                            <div class="text"> Get exceptional skills training, courses, and professional development programs aligned with your objectives.
                            </div>
                            <button><a href="{{ url('/academy') }}" class="text-white">Learn more</a></button>
                        </div>
                    </div>
                </div>
                <!-- service-block Seven-->
                <div class="service-block-seven col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><i class="icon flaticon-camera"></i></div>
                            <h4 class="title">Ingenium App</h4>
                            <div class="text">Our networking platform for customer service professionals and human resource managers. Discover your potential, boost your career, and connect with the best opportunities in customer service.
                            </div>
                            <button><a href="https://theingeniumapp.com/auth/signin" target="_blank" class="text-white">Learn more</a></button>
                        </div>
                    </div>
                </div>
                <!-- service-block Seven-->
                <div class="service-block-seven col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><i class="icon flaticon-settings"></i></div>
                            <h4 class="title">Ingenium U.S</h4>
                            <div class="text">Let us take your business in the USA to the next level - through business development, strategy, restructuring, training, and management.
                            </div>
                            <button><a href="{{ url('/us-center') }}" class="text-white">Learn more</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="container">

                <h1 class="abt-head">We Are Committed To<br> Inspiring Excellence</h1>

                <div class="tabs">
                    <div class="tabby-tab">
                        <input type="radio" id="tab-1" name="tabby-tabs" checked>
                        <label for="tab-1">Who we are</label>
                        <div class="tabby-content">
                            <section class="about-section-seven">
                                <div class="auto-container">
                                    <div class="row">
                                        <!-- Content Column -->
                                        <div class="content-column col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="600ms">
                                            <div class="inner-column">
                                                <div class="sec-title">
                                                    <div class="text">Business Advisory Firm committed to inspiring excellence and advocating for better customer relationship management in business organizations. Ingenium seeks to deploy the cumulative expertise,
                                                        experience and intellectual capital of her team to inspire nothing but excellence in people and businesses.
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <a href="{{ url('/about-us') }}" class="theme-btn btn-style-one" style="border-radius: 3px;padding: 5px 10px;font-size: 15px;"><span class="btn-title">Learn more about us</span></a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Image Column -->
                                        <div class="image-column col-xl-6 col-lg-6">
                                            <div class="inner-column wow fadeInLeft">
                                                <!-- <span class="icon-dots bounce-x"></span> -->
                                                <figure class="image-1 wow fadeInUp"><img src="assets/images/resource/Frame17.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="tabby-tab">
                        <input type="radio" id="tab-2" name="tabby-tabs">
                        <label for="tab-2">Our Purpose</label>
                        <div class="tabby-content">
                            <section class="about-section-seven">
                                <div class="auto-container">
                                    <div class="row">
                                        <!-- Content Column -->
                                        <div class="content-column col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="600ms">
                                            <div class="inner-column">
                                                <div class="sec-title">
                                                    <div class="text" style="text-align: justify;">We exist to transform businesses in Africa by implementing innovative ideas and fostering growth. Our vision is to be a leading force of business transformation, driving idea implementation and
                                                        business growth towards economic development in Africa. In a rapidly changing world, we help businesses navigate the challenges and opportunities of innovation, disruption and growth. We
                                                        provide insights, strategies and structure that foster growth and peak performance for businesses and society – whether they are startups, SMEs or large corporations. Creating a common vision
                                                        will help to guide businesses through the next stage of transformation, as the markets, industries and cultures in which they operate are reshaped and redefined.
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <a href="{{ url('/about-us') }}" class="theme-btn btn-style-one" style="border-radius: 3px;padding: 5px 10px;font-size: 15px;"><span class="btn-title">Learn more about us</span></a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Image Column -->
                                        <div class="image-column col-xl-6 col-lg-6">
                                            <div class="inner-column wow fadeInLeft">
                                                <!-- <span class="icon-dots bounce-x"></span> -->
                                                <figure class="image-1 wow fadeInUp"><img src="assets/images/resource/frame188.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="tabby-tab">
                        <input type="radio" id="tab-3" name="tabby-tabs">
                        <label for="tab-3">Our Values</label>
                        <div class="tabby-content">
                            <section class="about-section-seven">
                                <div class="auto-container">
                                    <div class="row">
                                        <!-- Content Column -->
                                        <div class="content-column col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="600ms">
                                            <div class="inner-column">
                                                <div class="sec-title">
                                                    <div class="text">Our values shape our identity, our actions and our impact. We uphold a corporate culture and work ethic that reflects our core values in everything we do. Our values are the essence of our brand
                                                        and the standards for our work. Our values are: 
                                                            <ul>
                                                                <li><img src="assets/images/check.png" width="10px" height="10px"> integrity,</li>
                                                                <li><img src="assets/images/check.png" width="10px" height="10px"> professionalism,</li>
                                                                <li><img src="assets/images/check.png" width="10px" height="10px"> knowledge,</li>
                                                                <li><img src="assets/images/check.png" width="10px" height="10px"> and customer centricity</li>
                                                            </ul> These are the measures for our daily engagement and interaction with colleagues,
                                                        clients and other stakeholders
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <a href="{{ url('/about-us') }}" class="theme-btn btn-style-one" style="border-radius: 3px;padding: 5px 10px;font-size: 15px;"><span class="btn-title">Learn more about us</span></a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Image Column -->
                                        <div class="image-column col-xl-6 col-lg-6">
                                            <div class="inner-column wow fadeInLeft">
                                                <!-- <span class="icon-dots bounce-x"></span> -->
                                                <figure class="image-1 wow fadeInUp"><img src="assets/images/resource/Frame19.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>
<!-- About Section Five -->

<!-- call-to-action Three -->
<section class="call-to-action-three">
    <div class="bg bg-image" style="background-image: url(assets/images/background/1.jpg)"></div>
    <div class=" auto-container">
        <div class="outer-box">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-12 text-center">
                    <h2 class="title">Use the form to provide details of the services required or to book a discovery session.</h2><br>
                    <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Submit a Request for
                            Proposal </span></a>
                </div>
                <div class="col-md-2"></div>
            </div>

        </div>
    </div>
</section>
<!-- End call-to-action -->

<!-- FAQ Section Seven -->
<section class="faqs-section-seven pt-0">
    <div class="auto-container">
        <div class="outer-box">
            <div class="row">
                <!-- Image Column -->
                <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <figure class="image wow fadeInLeft"><img src="assets/images/resource/faq77.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <!-- FAQ Column -->
                <div class="faq-column col-xl-6 col-lg-12">
                    <div class="inner-column">
                        <h2>Ingenium Business Corner</h2>
                        <p>
                            The Ingenium Business Insights corner is a series of publications covering a wide range of topics that are essential to transforming businesses, especially SMEs in Africa. Subscribe today to access this collection. You’ll also get access to other essential
                            customer centricity tips for insights into Africa’s business transformation.
                        </p>
                        <div class="bottom-box">
                            <a href="https://growwithingenium.myflodesk.com/newslettersignup" target="_blank" class="btn1 theme-btn btn-style-one"><span class="btn-title">Subscribe now</span></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!--End FAQ Section -->


<!-- Testimonial Section eleven -->
<section class="testimonial-section-eleven">
    <div class="auto-container">
        <div align="right " style="padding-right: 120px;font-size: 140px;color: #fff;opacity: 15%;">
            <span class="icon fa fa-quote-right"></span>
        </div>
        <div class="sec-title light text-center">
            <h2>What our <span style="color: #FFBD02;">clients</span> say about us</h2>
        </div>

        <div class="two-items-carousel owl-carousel disable-navs">
            <!-- Testimonial Block Two -->
            <div class="testimonial-block-eleven">
                <div class="inner-box">
                    <div class="content-box">
                        <div class="text text-white">“I enjoyed my call, quite eye opening. Customer retention is key and sending a reminder to your customers so that they can try replenish their products is important. I have never thought of it yet as a customer this would
                            be an excellent service. My business is minding my customers business! ”</div>
                        <div class="info-box">
                            <h4 class="name"> Mary N. (Kenya)</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial Block Two -->
            <div class="testimonial-block-eleven">
                <div class="inner-box">
                    <div class="content-box">
                        <div class="text">“I enjoyed my call, quite eye opening. Customer retention is key and sending a reminder to your customers so that they can try replenish their products is important. I have never thought of it yet as a customer this would
                            be an excellent service. My business is minding my customers business! ”</div>
                        <div class="info-box">
                            <h4 class="name"> Ronald Richards</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section eleven-->

<!-- FAQ Section Four -->
<section class="faqs-section-four pt-0">
    <div class="auto-container">
        <div class="outer-box">
            <div class="row">
                <!-- FAQ Column -->
                <div class="faq-column col-xl-12 col-lg-12 wow fadeInLeft">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2 style="color: #0f0d0d;">Frequently Asked Questions</h2>
                            <p>
                                We answered questions so you don’t have to ask them.
                            </p>
                        </div>

                        <ul class="accordion-box style-four wow fadeInRight">
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">How long does it take to see result after working with Ingenium Concepts Ltd ?
                                    <div class="icon fa fa-angle-double-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Immediately! Working with Ingenium is signing a contract with excellence. We put the needs of our clients first and their satisfaction is our priority.<br><br> We begin to put in the work right after your
                                            first contact with us.<br><br> Talk is cheap? Well, send in your business brief and let’s work our magic.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">What industries does Ingenium Concepts Ltd specializes in ?
                                    <div class="icon fa fa-angle-double-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">We offer business support and services to clients across various sectors and industries.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">Why do i need the services of Ingenium Concepts Ltd ?
                                    <div class="icon fa fa-angle-double-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Growth. We are in business so your business can flourish and grow.<br><br> We see the great height your business can reach, and we are in business to harness all our values and offerings to make sure your
                                            business scales and soar.<br><br> Ingenium shares in your vision and we have made your success our ambition.<br><br> Starting up a business and leading an enterprise is enough of a job, our services
                                            take the burden of customer acquisition, retention and scaling off your shoulders.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">How much do Ingenium Concepts Ltd Service's Cost ?
                                    <div class="icon fa fa-angle-double-right"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">We take pride in the value we offer and have a track record of clients that value our offer. We’ll deliver the best at your budget price.<br><br> Now, the real question is – What is your budget?
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End FAQ Section -->

<section class="projects-section-two">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Moments from our events</h2>
        </div>

        <div class="row">
            <!-- Project Block Two-->
            <div class="project-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="{{ url('/gallery') }}"><img src="assets/images/resource/f2.jpg " alt=""></a>
                        </figure>
                    </div>
                    <div class="caption-box">
                        <h4 class="title"><a href="{{ url('/gallery') }}">4MCST Q2 2023</a></h4>
                        <a href="{{ url('/gallery') }}" class="icon"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Project Block Two-->
            <div class="project-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp " data-wow-delay="300ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="{{ url('/gallery') }}"><img src="assets/images/resource/f1.jpg " alt=""></a>
                        </figure>
                    </div>
                    <div class="caption-box">
                        <h4 class="title"><a href="{{ url('/gallery') }}">4MCST Q1 2023</a></h4>
                        <a href="{{ url('/gallery') }}" class="icon"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Project Block Two-->
            <div class="project-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp " data-wow-delay="600ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="{{ url('/gallery') }}"><img src="assets/images/resource/f6.png " alt=""></a>
                        </figure>
                    </div>
                    <div class="caption-box">
                        <h4 class="title"><a href="{{ url('/gallery') }}">Ingenium Breakfast Meeting</a></h4>
                        <a href="{{ url('/gallery') }}" class="icon"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Clients Section Four -->
<section class="clients-section-four pt-80">
    <div class="auto-container">
        <div class="sec-title text-center fadeInLeft">
            <h2 class="">We are Trusted By Top Brands</h2>
        </div>

        <!-- Sponsors Outer -->
        <div class="sponsors-outer">
            <!--clients carousel-->
            <div class="row">
                <div class="col-md-12" align="center">
                    <img src="assets/images/clients/client.jpg">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Clients Section -->

<!-- Subscribe section -->
<section class="subscribe-section">
    <div class="bg bg-pattern-5"></div>
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-xl-8">
                <div class="inner-column">
                    <h2 class="title">Get in touch</h2>
                    <p>
                        We’d love to speak to you and discuss how we can work together to bring your ideas to life.
                    </p>
                </div>
            </div>
            <!-- Form Column -->
            <div class="form-column col-xl-4">
                <div class="newsletter-form">
                    <form method="post " action="#">
                        <div class="form-group">
                            <a href="{{ url('/contact-us') }}" type="button " class="theme-btn btn-style-one2"><span class="btn-title">Contact us &nbsp;&nbsp; <i class="fa fa-arrow-right " style="color: #FFBD02;"></i></span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe section -->


<!-- Projects Section -->
<section class="projects-section1">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="mixitup-gallery1">
            <div class="row">
                <div class="title-column col-xl-6 col-project-six">
                    <div class="inner-column">
                        <h2 class="title">Highlights</h2>
                        <p>
                            Stay in touch with us as we keep you updated with happenings around the world across different sectors and industries.
                        </p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <!--Filter-->
                    <div class="filters">
                        <ul class="filter-btns">
                            <li class="active filter clink" data-role="button" data-filter=".feat">Featured</li>
                            <li class="filter clink" data-role="button" data-filter=".consulting">Highlights</li>
                            <li class="filter clink" data-role="button" data-filter=".optimization">Stories
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="filter-list row">
                 <!-- News Block -->
                 <div class="news-block mix feat col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/11/28/11-signs-of-a-toxic-client-partnership/?sh=40ac7a891684" target="_blank"><img src="assets/images/resource/news1.jpg " alt=""></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fas fa-calendar-alt"></i> 28 November 2023</li>
                            </ul>
                            <h4 class="title"><a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/11/28/11-signs-of-a-toxic-client-partnership/?sh=40ac7a891684" target="_blank">11 Signs Of A Toxic Client Partnership</a></h4>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block mix feat col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/11/27/seeking-a-business-coach-13-strategies-for-hiring-the-right-one/?sh=746a8c124345" target="_blank"><img src="assets/images/resource/news2.jpg " alt=""></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fas fa-calendar-alt"></i> 27 November 2023</li>
                            </ul>
                            <h4 class="title"><a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/11/27/seeking-a-business-coach-13-strategies-for-hiring-the-right-one/?sh=746a8c124345" target="_blank">Seeking A Business Coach? 13 Strategies For Hiring The Right One</a></h4>
                        </div>
                    </div>
                </div>

                 <!-- News Block -->
                 <div class="news-block mix feat col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/11/02/10-ways-to-handle-unhappy-customers-when-theyre-wrong/?sh=79e89b66a66c" target="_blank"><img src="assets/images/resource/news3.jpg " alt=""></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fas fa-calendar-alt"></i> 27 November 2023</li>
                            </ul>
                            <h4 class="title"><a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/11/02/10-ways-to-handle-unhappy-customers-when-theyre-wrong/?sh=79e89b66a66c" target="_blank">10 Ways To Handle Unhappy Customers When They're Wrong</a></h4>
                        </div>
                    </div>
                </div>

                 <!-- News Block -->
                 <div class="news-block mix feat col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/10/06/20-tips-for-conflict-management-among-diverse-teams/?sh=48d233bb6296" target="_blank"><img src="assets/images/resource/news4.jpg " alt=""></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fas fa-calendar-alt"></i> 6 october 2023</li>
                            </ul>
                            <h4 class="title"><a href="https://www.forbes.com/sites/forbesbusinesscouncil/2023/10/06/20-tips-for-conflict-management-among-diverse-teams/?sh=48d233bb6296" target="_blank">20 Tips For Conflict Management Among Diverse Teams</a></h4>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block mix feat col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="https://www.vanguardngr.com/2023/04/ingenium-concepts-to-train-4-millon-smes-on-customer-service-for-economic-growth/" target="_blank"><img src="assets/images/resource/news5.jpg " alt=""></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fas fa-calendar-alt"></i> 4 April 2023</li>
                            </ul>
                            <h4 class="title"><a href="https://www.vanguardngr.com/2023/04/ingenium-concepts-to-train-4-millon-smes-on-customer-service-for-economic-growth/" target="_blank">Ingenium Concepts to train 4 millon SMEs on customer service for economic growth </a></h4>
                        </div>
                    </div>
                </div>

                 <!-- News Block -->
                 <div class="news-block mix feat col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="https://www.bellanaija.com/2023/04/ingenium-concepts-customer-service-training/" target="_blank"><img src="assets/images/resource/news6.jpg " alt=""></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fas fa-calendar-alt"></i> 13 April 2023</li>
                            </ul>
                            <h4 class="title"><a href="https://www.bellanaija.com/2023/04/ingenium-concepts-customer-service-training/" target="_blank">Ingenium Concepts Kicks Off Customer Service Training in Nigeria</a></h4>
                        </div>
                    </div>
                </div>

                 <!-- News Block -->
                <div class="news-block mix optimization consulting col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <iframe src="https://www.youtube.com/embed/QFDteS2RcQs" title="Business Scale up with Coach Jenny Episode 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </figure>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fas fa-calendar-alt"></i> 01 January 2024</li>
                            </ul>
                            <h4 class="title"><a href="#">Business Scale up with Coach Jenny <br>Episode 1</a></h4>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block mix optimization consulting col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <iframe src="https://www.youtube.com/embed/Apu_wZgXX6s" title="Jennifer Orode on Arise TV discussing Customer Service and Systems" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </figure>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fas fa-calendar-alt"></i> 06 May 2023</li>
                            </ul>
                            <h4 class="title"><a href="#">Ingenium on Arise TV discussing Customer Service and Systems</a></h4>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block mix optimization consulting col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <iframe src="https://www.youtube.com/embed/JDu6Keavmcc" title="What You Should Know About Excellent Customer Service Delivery - Coach Jenny" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </figure>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li><i class="fas fa-calendar-alt"></i> 14 May 2023</li>
                            </ul>
                            <h4 class="title"><a href="#">What You Should Know About Excellent Customer Service Delivery</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Projects Section -->

@endsection