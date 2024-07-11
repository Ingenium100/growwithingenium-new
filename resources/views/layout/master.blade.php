<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <style>
        .overlay-text {
            position: absolute;
            top: 30%;
            left: 40%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px 20px;
            font-size: 24px;
            border: 1px solid #FEFFE7;
            border-radius: 10px;
        }

        @media (max-width: 780px) {
            .overlay-text {
                position: absolute;
                top: 80%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, 0.5);
                color: #fff;
                padding: 10px 20px;
                font-size: 20px;
                border: 1px solid #FEFFE7;
                border-radius: 10px;
            }
        }

        .floating {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 1px 1px 2px #999;
            z-index: 100;
        }

        .float-button {
            margin-top: 16px;
        }
    </style>
</head>

<body>

    <div class="page-wrapper">

        <!-- Main Header-->
        <header class="main-header header-style-thirteen">
            <!-- Header Top -->
            <div class="header-top">
                <div class="inner-container">

                    <div class="top-right">
                        <!-- Info List -->
                        <ul class="list-style-one light">
                            <li><i class="fa fa-phone" style="color:#FFBD02;"></i> <a href="#">+2348036604417,
                                    +447440548221</a></li>
                            <li><i class="fa fa-envelope" style="color:#FFBD02;"></i> <a href="#">info@growwithingenium.com</a></li>
                        </ul>
                        <ul class="social-icon-one light">
                            <li><a href="https://www.linkedin.com/company/ingeniumconceptltd/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://x.com/growithingenium/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/growwithingenium" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/growwithingenium/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Header Top -->

            <div class="header-lower">
                <!-- Main box -->
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="assets/images/logoo.png" alt="" title="Digicod"></a>
                        </div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer">
                        <nav class="nav main-menu">
                            <ul class="navigation">
                                <li><a href="{{ url('/about-us') }}">About us</a></li>
                                <li><a href="{{ url('/academy') }}">Academy</a></li>
                                <li><a href="https://theingeniumapp.com/auth/signin" target="_blank">App</a></li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                <li><a href="{{ url('/updates') }}">Updates</a></li>
                                <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Main Menu End-->
                    <div class="outer-box">
                        <a href="https://bit.ly/business-clinic1" target="_blank" class="theme-btn"><span>Book a session</span></a>
                        <!-- Mobile Nav toggler -->
                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="upper-box">
                        <div class="nav-logo">
                            <a href="{{ url('/') }}"><img src="assets/images/black-logo.png" alt="" title=""></a>
                        </div>
                        <div class="close-btn"><i class="icon fa fa-times"></i></div>
                    </div>
                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>

                    <ul class="social-links">
                        <li><a href="https://www.linkedin.com/company/ingeniumconceptltd/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="https://x.com/growithingenium/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/growwithingenium" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/growwithingenium/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    </ul>
                </nav>
            </div>
            <!-- End Mobile Menu -->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo">
                            <a href="{{ url('/') }}" title=""><img src="assets/images/logoo.png" alt="" title=""></a>
                        </div>

                        <!--Right Col-->
                        <div class="nav-outer">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-collapse show collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <!--Keep This Empty / Menu will come through Javascript-->
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->
        </header>
        <!--End Main Header -->

        <!-- Hidden bar back drop -->
        <div class="hidden-bar-back-drop"></div>
        <a href="https://api.whatsapp.com/send?phone=+2348036604417&text=Hello, My name is Sunshine 🌞 and it would be my absolute pleasure to assist you, how can I help?." class="floating" target="_blank">
            <i class="fab fa-whatsapp float-button"></i>
        </a>
        @yield('content')

        <footer class="main-footer footer-style-four pull-up">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row">
                        <div class="footer-column col-xl-3 col-lg-6 col-md-6">
                            <div class="footer-widget about-widget">
                                <div class="logo">
                                    <a href="#"><img src="assets/images/logoo.png" alt=""></a>
                                </div>
                                <div class="text">Copyright © 2023 Ingenium Concept LTD. All Rights Reserved.</div>

                                <ul class="social-icon-four">
                                    <li><a href="https://www.linkedin.com/company/ingeniumconceptltd/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="https://x.com/growithingenium/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/growwithingenium" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.facebook.com/growwithingenium/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer COlumn -->
                        <div class="footer-column col-xl-3 col-lg-6 col-md-6">
                            <div class="footer-widget about-widget">
                                <h4 class="widget-title " style="font-size: 40px;">Still have a questions?</h4>
                                <div class="post-info1"><i class="fas fa-envelope " style="color: #FFBD02;"></i> &nbsp; info@growwithingenium.com
                                </div>
                                <div class="post-info1"><i class="fas fa-phone " style="color: #FFBD02;"></i>&nbsp; +2348036604417,+2349161852329, +2349138332620, +447440548221</div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="https://play.google.com/store/apps/details?id=com.academy.ingenium&pli=1" target="_blank">
                                            <img src="assets/images/google.png" width="120px">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="https://apps.apple.com/ng/app/ingenium-app/id6451157054" target="_blank">
                                            <img src="assets/images/apple.png" width="120px">
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- Footer COlumn -->
                        <div class="footer-column col-xl-3 col-lg-6 col-md-6">
                            <div class="footer-widget links-widget">
                                <h4 class="widget-title">Quick Links</h4>
                                <div class="widget-content">
                                    <ul class="user-links style-two">
                                        <li><a href="{{ url('/about-us') }}">About us</a></li>
                                        <li><a href="{{ url('/academy') }}">Academy</a></li>
                                        <li><a href="https://theingeniumapp.com/auth/signin" target="_blank">App</a></li>
                                        <li><a href="{{ url('/services') }}">Services</a></li>
                                        <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                        <li><a href="{{ url('/updates') }}">Updates/Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Footer COlumn -->
                        <div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget blog-widget">
                                <h4 class="widget-title">UK Office</h4>
                                <div class="widget-content">
                                    <div class="text">42, Cardinal Close B178EU, Birmingham, United Kingdom.</div>
                                </div><br>
                                <h4 class="widget-title">USA Office</h4>
                                <div class="widget-content">
                                    <div class="text">405 W Greenlawn Ave, G11 Lansing, Michigan USA.</div>
                                </div><br>
                                <h4 class="widget-title">Nigeria Office</h4>
                                <div class="widget-content">
                                    <div class="text">Suite J227, Road 5 Ikota Shopping Complex beside VGC Lagos-Epe Expressway, Lagos Nigeria.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Main Footer -->


    </div>
    <!-- End Page Wrapper -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target " data-target="html"><span class="fa fa-angle-up"></span></div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>