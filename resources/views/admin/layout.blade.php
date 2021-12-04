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
    <link rel="shortcut icon" href="favicon.ico" />

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
                                <a href="mailto: {{env('EMAIL')}} "><i class="far fa-envelope me-2 fa-flip-horizontal text-primary"></i> {{env('EMAIL')}} </a>
                            </div>
                            <div class="me-auto d-inline-block py-1">
                                <a href="tel:{{env('PHONE')}}"><i class="fas fa-map-marker-alt text-primary me-2"></i> {{env('LOCATION')}} </a>
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
                <a class="navbar-brand" href="{{route('/')}}" style="padding: 0; height:130px">
                    <img class="img-fluid" src="{{asset('images/meritinfos.png')}}" alt="logo" style="width: 100%; height:100%">
                </a>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('dashboard')}}" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin_services')}}" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin_portfolio')}}" class="nav-link">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin_team')}}" class="nav-link">Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin_general')}}" class="nav-link">General</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('logout')}}" class="nav-link">Logout</a>
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
    footer-->
    <footer class="footer">
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
    <script src="js/counter/jquery.countTo.js"></script>
    <script src="js/jarallax/jarallax.min.js"></script>
    <script src="js/jarallax/jarallax-video.min.js"></script>
    <script src="js/horizontal-timeline/horizontal-timeline.js"></script>
    <script src="js/shuffle/shuffle.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

</body>

</html>