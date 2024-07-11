@extends('layout.master')
@section('title')
Portfolio - Ingenium Concept LTD
@endsection
@section('content')

<!-- Start main-content -->
<section class="page-title" style="background-image: url(assets/images/background/page-title-bg.png);">
    <div class="auto-container">
        <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
            <h1 class="title">Portfolio</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Our Works</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!-- Projects Section -->
<!-- <section class="projects-section">
    <div class="auto-container">
        <div class="mixitup-gallery">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec-title text-center">
                        <h2>Our Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="filters">
                        <ul class="filter-btns">
                            <li class="active filter clink" data-role="button" data-filter="all">All Project</li>
                            <li class="filter clink" data-role="button" data-filter=".consulting">Digital Strategy Consulting</li>
                            <li class="filter clink" data-role="button" data-filter=".marketing">Digital Marketing</li>
                            <li class="filter clink" data-role="button" data-filter=".optimization">Public Relations</li>
                            <li class="filter clink" data-role="button" data-filter=".consulting">Brand Identity & Packaging</li>
                            <li class="filter clink" data-role="button" data-filter=".consulting">Advertising</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="filter-list row">
                <div class="project-block mix all optimization consulting col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="cover-layer"></div>
                            <figure class="image">
                                <a href="#"><img src="assets/images/resource/project1-1.jpg" alt=""></a>
                            </figure>
                            <div class="info-box">
                                <h4 class="title"><a href="#">Affiliate Program</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block mix all marketing col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="cover-layer"></div>
                            <figure class="image">
                                <a href="#"><img src="assets/images/resource/project1-2.jpg" alt=""></a>
                            </figure>
                            <div class="info-box">
                                <h4 class="title"><a href="#">Affiliate Program</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block mix all optimization consulting col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="cover-layer"></div>
                            <figure class="image">
                                <a href="#"><img src="assets/images/resource/project1-3.jpg" alt=""></a>
                            </figure>
                            <div class="info-box">
                                <h4 class="title"><a href="#">Affiliate Program</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block mix all marketing col-lg-6 col-md-!2 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="cover-layer"></div>
                            <figure class="image">
                                <a href="#"><img src="assets/images/resource/project1-4.jpg" alt=""></a>
                            </figure>
                            <div class="info-box">
                                <h4 class="title"><a href="#">Affiliate Program</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block mix all optimization col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="cover-layer"></div>
                            <figure class="image">
                                <a href="#"><img src="assets/images/resource/project1-5.jpg" alt=""></a>
                            </figure>
                            <div class="info-box">
                                <h4 class="title"><a href="#">Affiliate Program</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-block mix all marketing consulting col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="cover-layer"></div>
                            <figure class="image">
                                <a href="#"><img src="assets/images/resource/project1-6.jpg" alt=""></a>
                            </figure>
                            <div class="info-box">
                                <h4 class="title"><a href="#">Affiliate Program</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Projects Section -->


<!-- Clients Section Four -->
<section class="clients-section-four pt-0">
    <div class="auto-container">
        <div class="sec-title text-center">
            <br><br><br><br><br><h2>Organizations & Media Mentions</h2>
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
    <div class="bg bg-pat1"></div>
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
                    <form method="post" action="#">
                        <div class="form-group">
                            <button type="button" class="theme-btn btn-style-one2"><span class="btn-title">Contact us &nbsp;&nbsp; <i class="fa fa-arrow-right" style="color: #FFBD02;"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe section -->

@endsection