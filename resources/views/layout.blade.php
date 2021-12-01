<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="{{env('APP_NAME')}} - IT Solutions and Services Company HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{env('APP_NAME')}} </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo:400,400i,500,500i,600,600i,700,700i&amp;display=swap">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/swiper/swiper.min.css" />
    <link rel="stylesheet" href="css/animate/animate.min.css" />
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>

    <!--=================================
    header -->
    <header class="header default">
        <div class="topbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="d-block d-md-flex align-items-center text-center">
                            <div class="me-4 d-inline-block py-1">
                                <a href="#"><i class="far fa-envelope me-2 fa-flip-horizontal text-primary"></i>letstalk@hisoft.com</a>
                            </div>
                            <div class="me-auto d-inline-block py-1">
                                <a href="tel:1-800-555-1234"><i class="fas fa-map-marker-alt text-primary me-2"></i>6580 Allison Turnpike Creminfort, AL 32808</a>
                            </div>
                            <div class="d-inline-block py-1">
                                <ul class="list-unstyled">
                                    <li><a href="careers.html">Careers</a></li>
                                    <li><a href="blog.html">News & Media</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar bg-white navbar-static-top navbar-expand-lg">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
                <a class="navbar-brand" href="index.html" style="padding: 0; height:130px">
                    <img class="img-fluid" src="{{asset('images/meritinfos.png')}}" alt="logo" style="width: 100%; height:100%">
                </a>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="properties.html" class="nav-link" data-bs-toggle="dropdown">About</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="contact.html">About Us<i class="fas fa-arrow-right"></i></a></li>
                                <li><a class="dropdown-item" href="pricing.html">Team<i class="fas fa-arrow-right"></i></a></li>
                                <li><a class="dropdown-item" href="testimonials.html">Carear</a></li>
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="properties.html" class="nav-link" data-bs-toggle="dropdown">IT Solutions</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about-us.html">Web Development<i class="fas fa-arrow-right"></i></a></li>
                                <li><a class="dropdown-item" href="careers.html">Mobile Development<i class="fas fa-arrow-right"></i></a></li>
                                <li><a class="dropdown-item" href="how-we-work.html">Branding Services<i class="fas fa-arrow-right"></i></a></li>
                                <li><a class="dropdown-item" href="our-team.html">Digital Marketing<i class="fas fa-arrow-right"></i></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="properties.html" class="nav-link" data-bs-toggle="dropdown">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="properties.html" class="nav-link" data-bs-toggle="dropdown">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="properties.html" class="nav-link" data-bs-toggle="dropdown">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="d-none d-sm-flex ms-auto me-5 me-lg-0 pe-4 pe-lg-0">
                    <ul class="nav ms-1 ms-lg-2 align-self-center">
                        <li class="contact-number nav-item pe-4 ">
                            <a class="fw-bold" href="#"><i class="fab fa-whatsapp pe-2"></i>+(704) 279-1249</a>
                        </li>
                        <li class="header-search nav-item">
                            <div class="search">
                                <a class="search-btn not_click" href="javascript:void(0);"></a>
                                <div class="search-box not-click">
                                    <form action="https://themes.potenzaglobalsolutions.com/html/{{env('APP_NAME')}}/search.html" method="get">
                                        <input type="text" class="not-click form-control" name="search" placeholder="Search..">
                                        <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--=================================
    header -->


    @yield ('content')

    <!--=================================
    Action Box -->
    <section class="space-pb dark-background">
        <div class="container">
            <div class="bg-dark text-center rounded py-5 px-3">
                <h2 class="text-white">Tell us about your idea, and we’ll make it happen.</h2>
                <h6 class="text-white">Have a brand problem that needs to be solved? We’d love to hear about it!</h6>
                <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3 text-white">Let’s Get Started<i class="fas fa-arrow-right ps-3"></i></a>
            </div>
        </div>
    </section>
    <!--=================================
    Action Box -->

    <!--=================================
    footer-->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-3">
                        <img class="img-fluid" src="{{asset('images/meritinfos.png')}}" alt="logo" style="width: 100%; height:100%">
                    </div>
                    <div class="col-sm-9 text-sm-end mt-4 mt-sm-0">
                        <ul class="list-unstyled mb-0 social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-github"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
                <hr class="my-4 my-sm-5 pb-0">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-primary mb-2 mb-sm-4">IT Services</h5>
                    <div class="footer-link">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">Data Synchronization</a></li>
                            <li><a href="#">Content Management</a></li>
                            <li><a href="#">Content Delivery</a></li>
                            <li><a href="#">Transaction Processing</a></li>
                            <li><a href="#">Process Automation</a></li>
                        </ul>
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">Event Processing</a></li>
                            <li><a href="#">Information Security</a></li>
                            <li><a href="#">Mobile Platforms</a></li>
                            <li><a href="#">Communications</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4 mb-lg-0">
                    <h5 class="text-primary mb-2 mb-sm-4">Company</h5>
                    <div class="footer-link">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Leadership Team</a></li>
                            <li><a href="#">IT Blog</a></li>
                            <li><a href="#">Case Studies</a></li>
                            <li><a href="#">Locations</a></li>
                            <li><a href="#">Careers <span class="badge bg-success ms-2">We're hiring</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4 mb-sm-0">
                    <h5 class="text-primary mb-2 mb-sm-4">Support</h5>
                    <div class="footer-link">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">Forum Support</a></li>
                            <li><a href="#">Help & FAQs</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Pricing And Plans</a></li>
                            <li><a href="#">Cookies Policy</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="footer-contact-info">
                        <h5 class="text-primary mb-3">Contact {{env('APP_NAME')}}</h5>
                        <div class="contact-address">
                            <div class="contact-item">
                                <label>Address:</label>
                                <p>6580 Allison Turnpike Creminfort, AL 32808</p>
                            </div>
                            <div class="contact-item">
                                <label>Phone:</label>
                                <h4 class="mb-0 fw-bold"><a href="#">+(704) 279-1249</a></h4>
                            </div>
                            <div class="contact-item">
                                <label>Email:</label>
                                <a class="text-dark" href="#">letstalk@hisoft.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-sm-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="mb-0">©Copyright 2021 <a href="index.html"> {{env('APP_NAME')}} </a> All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=================================
    footer-->

    <!--=================================
    Back To Top-->
    <div id="back-to-top" class="back-to-top">up</div>
    <!--=================================
    Back To Top-->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/jquery.appear.js"></script>
    <script src="js/swiper/swiper.min.js"></script>
    <script src="js/swiperanimation/SwiperAnimation.min.js"></script>
    <script src="js/counter/jquery.countTo.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

</body>

</html>