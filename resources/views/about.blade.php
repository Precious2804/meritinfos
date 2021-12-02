@extends('layout')
@section('content')



<!--=================================
    Header Inner -->
<section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg');">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center position-relative">
            <div class="col-md-8">
                <div class="header-inner-title text-center">
                    <h1 class="text-white fw-normal">About {{env('APP_NAME')}}</h1>
                    <p class="text-white mb-0">Our Expertise. Know more about what we do</p>
                </div>
            </div>
        </div>
    </div>
    <div class="header-inner-nav">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link active" href="about-us.html">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="careers.html">Careers</a></li>
                        <li class="nav-item"><a class="nav-link" href="how-we-work.html">How we work</a></li>
                        <li class="nav-item"><a class="nav-link" href="our-team.html">Our team</a></li>
                        <li class="nav-item"><a class="nav-link" href="mission-vision.html">Mission and vision</a></li>
                        <li class="nav-item"><a class="nav-link" href="our-value.html">Our values</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<!--=================================
    Header Inne -->
<!--=================================
    History -->
<!--=================================
    Tab -->
<section class="space-pb">
    <div class="container">
        <div class="row justify-content-center pb-4 pb-md-5">
            <div class="col-lg-10">
                <div class="d-md-flex align-items-center">
                    <div class="me-4">
                        <p class="mb-0">Established in</p>
                        <h3 class="display-2 fw-bold text-primary mb-0">2018</h3>
                    </div>
                    <div class="me-3">
                        <h2 class="mb-0">We enable constant enterprise transformation at great speed and scale.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="d-flex h-100">
                    <div class="nav flex-column nav-pills w-100 align-self-lg-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link" id="what-we-do-tab" data-bs-toggle="pill" href="#what-we-do" role="tab" aria-controls="what-we-do" aria-selected="true"><span class="data-hover" data-title="Who we are">What we do</span></a>
                        <a class="nav-link" id="mission-and-vision-tab" data-bs-toggle="pill" href="#mission-and-vision" role="tab" aria-controls="mission-and-vision" aria-selected="true"><span class="data-hover" data-title="Mission and vision">Mission and vision</span></a>
                        <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#technology-partners" role="tab" aria-controls="technology-partners" aria-selected="false"><span class="data-hover" data-title="Technology partners">Technology partners</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mt-3 mt-md-0">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane show active" id="what-we-do" role="tabpanel" aria-labelledby="what-we-do-tab">
                        <div class="row">
                            <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                                <img class="img-fluid rounded" src="images/meritinfos_logo.png" alt="">
                            </div>
                            <div class="col-sm-7 align-self-start align-self-lg-center ps-md-0 ps-lg-5">
                                <h4><i class="flaticon-monitor text-primary me-2"></i> Who we are/What we do</h4>
                                <p class="mb-4"> {{env('APP_NAME')}} is a software development service provider, that is poised towards meeting the digital needs of her patners and business friends. </p>
                                <p>With expertise in building diverse kinds of digital systems, {{env('APP_NAME')}} are guaranteed to be the best technological service provider that you would want to work and patner with</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="mission-and-vision" role="tabpanel" aria-labelledby="mission-and-vision-tab">
                        <div class="row">
                            <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                                <img class="img-fluid rounded" src="images/meritinfos.png" alt="">
                            </div>
                            <div class="col-sm-7 align-self-start align-self-lg-center ps-md-0 ps-lg-5">
                                <h4><i class="flaticon-target text-primary me-2"></i> Our Mission</h4>
                                <p class="mb-4">Our mission is to be the industry's premier service provider company concentrated on fulfilling the maximum to our clients. </p>
                                <h4><i class="flaticon-eye text-primary me-2"></i> Our Vision</h4>
                                <p class="mb-4">Our Vision is to be a top Web Design company in the IT sector and progress in our current position in the market. </p>
                                <h6 class="fw-normal text-muted mt-4">Our Vision and Mission are both encouraging our team to accomplish the goal. We recognize the clients' requirements, analyze them, and provide the best solutions. We satisfy our clients by our services and implements it with more capable software solution approaches.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="technology-partners" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                                <img class="img-fluid rounded" src="images/about/03.jpg" alt="">
                            </div>
                            <div class="col-sm-7 align-self-start align-self-lg-center ps-md-0 ps-lg-5">
                                <h4 class="text-dark">Our Technology Partners</h4>
                                <p>We partnered with Technology Managers to increase its skills at every step of the software development process.</p>
                                <div class="row">
                                    <div class="col-lg-4 mb-4">
                                        <img class="img-fluid grayscale p-2" src="images/client-logo/01.svg" alt="">
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <img class="img-fluid grayscale p-2" src="images/client-logo/02.svg" alt="">
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <img class="img-fluid grayscale p-2" src="images/client-logo/03.svg" alt="">
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <img class="img-fluid grayscale p-2" src="images/client-logo/04.svg" alt="">
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <img class="img-fluid grayscale p-2" src="images/client-logo/06.svg" alt="">
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <img class="img-fluid grayscale p-2" src="images/client-logo/07.svg" alt="">
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <img class="img-fluid grayscale p-2" src="images/client-logo/05.svg" alt="">
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <img class="img-fluid grayscale p-2" src="images/client-logo/01.svg" alt="">
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a class="btn btn-primary-round btn-round" href="#">Become a Partner</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="meet-the-our-team" role="tabpanel" aria-labelledby="meet-the-our-team-tab">
                        <div class="row">
                            <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                                <img class="img-fluid rounded" src="images/about/02.jpg" alt="">
                            </div>
                            <div class="col-sm-7 align-self-start align-self-lg-center ps-md-0 ps-lg-5">
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <h4 class="text-dark">Meet Our Leaders</h4>
                                        <p>Meet our leaders and the hard-working personalities who deliver innovative concepts to corporations like yours.</p>
                                    </div>
                                    <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                                        <div class="team">
                                            <div class="team-bg"></div>
                                            <div class="team-img">
                                                <img class="img-fluid" src="images/team/01.jpg" alt="">
                                            </div>
                                            <div class="team-info">
                                                <a href="#" class="team-name">Avalon Carey</a>
                                                <p>Chief People Officer</p>
                                                <ul class="list-unstyled">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                                        <div class="team">
                                            <div class="team-bg"></div>
                                            <div class="team-img">
                                                <img class="img-fluid" src="images/team/02.jpg" alt="">
                                            </div>
                                            <div class="team-info">
                                                <a href="#" class="team-name">Homer Reyes</a>
                                                <p>Vice President</p>
                                                <ul class="list-unstyled">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                                        <div class="team">
                                            <div class="team-bg"></div>
                                            <div class="team-img">
                                                <img class="img-fluid" src="images/team/03.jpg" alt="">
                                            </div>
                                            <div class="team-info">
                                                <a href="#" class="team-name">Alice Williams</a>
                                                <p>Team Leader</p>
                                                <ul class="list-unstyled">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <a class="btn btn-primary-round btn-round" href="#">View Our Team</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="careers-with-us" role="tabpanel" aria-labelledby="careers-with-us-tab">
                        <div class="row">
                            <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                                <img class="img-fluid rounded" src="images/about/07.jpg" alt="">
                            </div>
                            <div class="col-sm-7 align-self-start align-self-lg-center ps-md-0 ps-lg-5">
                                <h4 class="mb-2">Are you the best?</h4>
                                <p class="mb-4">There’s always room for intelligent people who are excited about the digital world and are continually looking forward to seeing what’s next.</p>
                                <h5>Why work with us?</h5>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <ul class="list list-unstyled">
                                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Flexible Time Off </span></li>
                                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>24/7 parking. </span></li>
                                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Full medical benefits </span></li>
                                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Pto / vacation</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list list-unstyled">
                                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Flexible hours</span></li>
                                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Collaborative environment</span></li>
                                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Health, Dental, And Vision</span></li>
                                            <li class="d-flex"><i class="fas fa-check pe-2 pt-1 text-primary"></i><span>Collaborative environment</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary-round btn-round mt-2">View Available Positions<i class="fas fa-arrow-right ps-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
    Tab -->
<!--=================================
    History -->

@stop