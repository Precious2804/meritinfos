@extends('layout')
@section('content')

<!--=================================
    banner -->
<section class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper h-700 h-sm-500">
            <div class="swiper-slide align-items-center d-flex responsive-overlap-md bg-overlay-black-30" style="background-image:url(images/slider/01.jpg); background-size: cover; background-position: center center;">
                <div class="swipeinner container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-md-10 text-center position-relative">
                            <h1 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">A professional Software providing company for your ideas</h1>
                            <h6 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">An award-Winning software service provider & creative digital agency.</h6>
                            <a class="btn btn-dark btn-round text-white" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.75s" href="#">Get Started Now<i class="fas fa-arrow-right ps-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
    banner -->

<!--=================================
    client-logo -->
<section class="mt-n5 z-index-9 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="our-clients our-clients-style-02 bg-dark">
                    <div class="client-title ps-4">
                        <h5 class="text-white">Our Clients</h5>
                        <div class="svg-item">
                        </div>
                    </div>
                    <div class="brand-logo ps-4">
                        <div class="owl-carousel testimonial-center owl-nav-bottom-center" data-nav-arrow="false" data-items="5" data-md-items="4" data-sm-items="4" data-xs-items="3" data-xx-items="2" data-space="40" data-autoheight="true">
                            <div class="item">
                                <img class="img-fluid center-block mx-auto" src="images/client-logo/light/01.svg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid center-block mx-auto" src="images/client-logo/light/02.svg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid center-block mx-auto" src="images/client-logo/light/03.svg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid center-block mx-auto" src="images/client-logo/light/04.svg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid center-block mx-auto" src="images/client-logo/light/05.svg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid center-block mx-auto" src="images/client-logo/light/06.svg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid center-block mx-auto" src="images/client-logo/light/07.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
    client-logo  -->

<!--=================================
    Company Category -->
<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
                <div class="section-title text-center">
                    <h2>Digital services that would help you grow measurably.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-sm-5 mb-4">
                <div class="category-box category-box-style-02 text-center active">
                    <div class="category-icon">
                        <i class="flaticon-monitor"></i>
                        <h5 class="category-title mb-0">Web Development</h5>
                    </div>
                    <ul class="category-list">
                        <li><a href="#">Front-End development</a></li>
                        <li><a href="#">Back-End development</a></li>
                        <li><a href="#">Financial Technology</a></li>
                        <li><a href="#">Blockchain Technology</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-sm-5 mb-4">
                <div class="category-box category-box-style-02 text-center active">
                    <div class="category-icon">
                        <i class="flaticon-mobile-phone"></i>
                        <h5 class="category-title mb-0">Mobile Development</h5>
                    </div>
                    <ul class="category-list">
                        <li><a href="#">iOS</a></li>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">Hybrid platform</a></li>
                        <li><a href="#">User testing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-sm-5 mb-4">
                <div class="category-box category-box-style-02 text-center active">
                    <div class="category-icon">
                        <i class="flaticon-icon-253674"></i>
                        <h5 class="category-title mb-0">Branding Services</h5>
                    </div>
                    <ul class="category-list">
                        <li><a href="#">Logo design</a></li>
                        <li><a href="#">UI/UX design</a></li>
                        <li><a href="#">Visual design</a></li>
                        <li><a href="#">Video Animation</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-sm-5 mb-4">
                <div class="category-box category-box-style-02 text-center active">
                    <div class="category-icon">
                        <i class="flaticon-icon-149196"></i>
                        <h5 class="category-title mb-0">Digital Marketing</h5>
                    </div>
                    <ul class="category-list">
                        <li><a href="#">Marketing strategy</a></li>
                        <li><a href="#">Paid media</a></li>
                        <li><a href="#">Influencer marketing</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-md-flex justify-content-center align-items-center">
                <p class="mb-3 mb-md-0 mx-0 mx-md-3">Contact us to discuss the goals for your brand</p>
                <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3">Get A Quote<i class="fas fa-arrow-right ps-3"></i></a>
            </div>
        </div>
    </div>
</section>
<!--=================================
    Company Category -->

<!--=================================
    Case Study -->
<section class="space-ptb bg-dark-half-lg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
                <div class="section-title text-center position-relative">
                    <h2 class="text-white"><span class="text-primary">What's next?</span> our latest client stories</h2>
                    <p class="lead text-white">We love what we do. Our clients tell us the same thing.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 order-lg-1 order-1">
                <div class="case-study">
                    <div class="case-study-img case-study-lg" style="background-image: url('images/project/02.jpg');">
                    </div>
                    <div class="case-study-info">
                        <a class="case-study-title fw-bold" href="#">Gozzby</a>
                        <span class="case-study-services text-primary">Music</span>
                        <p>If success is a process with a number of defined steps, then it is just like any other process.</p>
                        <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 order-lg-2 order-3">
                <div class="row">
                    <div class="col-sm-6 col-lg-12">
                        <div class="case-study">
                            <div class="case-study-img" style="background-image: url('images/project/04.jpg');">
                            </div>
                            <div class="case-study-info">
                                <a class="case-study-title fw-bold" href="#">Educatgenix</a>
                                <span class="case-study-services text-primary">Education</span>
                                <p>We all carry a lot of baggage, thanks to our upbringing...</p>
                                <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-12">
                        <div class="case-study">
                            <div class="case-study-img" style="background-image: url('images/project/06.jpg');">
                            </div>
                            <div class="case-study-info">
                                <a class="case-study-title" href="#">Petfluent</a>
                                <span class="case-study-services text-primary">Pet Care</span>
                                <p>You will drift aimlessly until you arrive back at the original dock</p>
                                <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 order-lg-3 order-2">
                <div class="case-study">
                    <div class="case-study-img case-study-lg" style="background-image: url('images/project/05.jpg');">
                    </div>
                    <div class="case-study-info">
                        <a class="case-study-title fw-bold" href="#">Financeoont</a>
                        <span class="case-study-services text-primary">Finance</span>
                        <p>It is truly amazing the damage that we, as parents, can inflict on our children...</p>
                        <a href="#" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-0 mt-md-4">
                <a href="#" class="btn btn-primary-round btn-round mx-3">View all Case Study<i class="fas fa-arrow-right ps-3"></i></a>
            </div>
        </div>
    </div>
</section>
<!--=================================
    Case Study -->

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
                        <a class="nav-link" id="mission-and-vision-tab" data-bs-toggle="pill" href="#mission-and-vision" role="tab" aria-controls="mission-and-vision" aria-selected="true"><span class="data-hover" data-title="Mission and vision">Mission and vision</span></a>
                        <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#technology-partners" role="tab" aria-controls="technology-partners" aria-selected="false"><span class="data-hover" data-title="Technology partners">Technology partners</span></a>
                        <a class="nav-link" id="meet-the-our-team-tab" data-bs-toggle="pill" href="#meet-the-our-team" role="tab" aria-controls="meet-the-our-team" aria-selected="false"><span class="data-hover" data-title="Meet the our team">Meet the our team</span></a>
                        <a class="nav-link" id="careers-with-us-tab" data-bs-toggle="pill" href="#careers-with-us" role="tab" aria-controls="careers-with-us" aria-selected="false"><span class="data-hover" data-title="Careers with us">Careers with us</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mt-3 mt-md-0">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane show active" id="mission-and-vision" role="tabpanel" aria-labelledby="mission-and-vision-tab">
                        <div class="row">
                            <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                                <img class="img-fluid rounded" src="images/about/01.jpg" alt="">
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
    Service -->
<section class="space-ptb bg-dark  dark-background category category-list-style-01">
    <div class="container">
        <div class="row align-items-center pb-4 pb-md-5">
            <div class="col-lg-6">
                <h2 class="text-white mb-2 mb-lg-0">We excel in our industry so that you can get in yours.</h2>
            </div>
            <div class="col-lg-6">
                <p class="lead text-white mb-0">We offer expertise across various industries. See some of the industries we have vast experience working in as a full-service software providing agency.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <ul class="category-list">
                    <li><a href="#">Automotive</a></li>
                    <li><a href="#">Communication Services</a></li>
                    <li><a href="#">Retail</a></li>
                    <li><a href="#">Education</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4 mt-sm-0">
                <ul class="category-list">
                    <li><a href="#">Financial Services</a></li>
                    <li><a href="#">Publishing</a></li>
                    <li><a href="#">FMCG</a></li>
                    <li><a href="#">Travel</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
                <ul class="category-list">
                    <li><a href="#">Media and Entertainment</a></li>
                    <li><a href="#">Logistics and Distribution</a></li>
                    <li><a href="#">Utilities</a></li>
                    <li><a href="#">Health Care</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
                <ul class="category-list">
                    <li><a href="#">Hi-Tech</a></li>
                    <li><a href="#">Publishing</a></li>
                    <li><a href="#">Industrial & Manufacturing</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--=================================
    Service -->

<!--=================================
    Service -->
<section class="space-ptb bg-light position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title is-sticky">
                    <h2>This is what we do and we do it perfectly.</h2>
                    <p class="mb-4">Please take a look at the range of <b>IT solution</b> services we offer to your brand as a full-service software providing agency.</p>
                    <a href="#" class="btn btn-primary-round btn-round">See All Services<i class="fas fa-arrow-right ps-3"></i></a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature-info feature-info-style-01">
                            <div class="feature-info-icon">
                                <i class="flaticon-data"></i>
                            </div>
                            <div class="feature-info-content">
                                <h5 class="mb-3 feature-info-title">Information Security</h5>
                                <p class="mb-0">Do it today. Remind yourself of someone you know who died suddenly and the fact that there is no guarantee that tomorrow will come.</p>
                                <a href="service-detail.html" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="feature-info feature-info-style-01 mt-4 mt-lg-5">
                            <div class="feature-info-icon">
                                <i class="flaticon-icon-149196"></i>
                            </div>
                            <div class="feature-info-content">
                                <h5 class="mb-3 feature-info-title">Mobile Platforms</h5>
                                <p class="mb-0">We know this in our gut, but what can we do about it? How can we motivate ourselves? One of the most difficult aspects of achieving success.</p>
                                <a href="service-detail.html" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="feature-info feature-info-style-01 mt-4 mt-lg-5">
                            <div class="feature-info-icon">
                                <i class="flaticon-design"></i>
                            </div>
                            <div class="feature-info-content">
                                <h5 class="mb-3 feature-info-title">Event Processing</h5>
                                <p class="mb-0">There is really no magic to it and it’s not reserved only for a select few people. As such, success really has nothing to do with luck,</p>
                                <a href="service-detail.html" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature-info feature-info-style-01 mt-4 mt-lg-5">
                            <div class="feature-info-icon">
                                <i class="flaticon-author"></i>
                            </div>
                            <div class="feature-info-content">
                                <h5 class="mb-3 feature-info-title">Data Synchronization</h5>
                                <p class="mb-0">Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although each is successful separately.</p>
                                <a href="service-detail.html" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="feature-info feature-info-style-01 mt-4 mt-lg-5">
                            <div class="feature-info-icon">
                                <i class="flaticon-chart"></i>
                            </div>
                            <div class="feature-info-content">
                                <h5 class="mb-3 feature-info-title">Process Automation</h5>
                                <p class="mb-0">It must come from within as the natural product of your desire to achieve something and your belief that you are capable to succeed at your goal.</p>
                                <a href="service-detail.html" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="feature-info feature-info-style-01 mt-4 mt-lg-5">
                            <div class="feature-info-icon">
                                <i class="flaticon-group"></i>
                            </div>
                            <div class="feature-info-content">
                                <h5 class="mb-3 feature-info-title">Content Management</h5>
                                <p class="mb-0">There are basically six key areas to higher achievement. Some people will tell you there are four while others may tell you there are eight.</p>
                                <a href="service-detail.html" class="icon-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
    Service -->

<!--=================================
    Counter -->
<section class="bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="flaticon-emoji"></i>
                    </div>
                    <div class="counter-content">
                        <span class="timer" data-to="1790" data-speed="10000">1790</span>
                        <label>Happy Clients</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="flaticon-trophy"></i>
                    </div>
                    <div class="counter-content align-self-center">
                        <span class="timer" data-to="245" data-speed="10000">32</span>
                        <label>Skilled Experts</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="flaticon-strong"></i>
                    </div>
                    <div class="counter-content">
                        <span class="timer" data-to="491" data-speed="10000">491</span>
                        <label>Finished Projects</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="flaticon-icon-149196"></i>
                    </div>
                    <div class="counter-content">
                        <span class="timer" data-to="1090" data-speed="10000">1090</span>
                        <label>Media Posts</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
    Counter -->

<!--=================================
    Articles -->
<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="section-title text-center">
                    <h2>Latest news and inspirational stories</h2>
                    <p>Check out our latest blog posts, articles, client success stories and essential announcement.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-lg-8 mb-4">
                <div class="blog-post blog-post-sticky">
                    <div class="blog-post-image">
                        <img class="img-fluid" src="images/blog/01.jpg" alt="">
                    </div>
                    <div class="blog-post-content">
                        <div class="blog-post-info">
                            <div class="blog-post-author">
                                <a href="#" class="btn btn-light-round btn-round text-primary">Marketing</a>
                            </div>
                            <div class="blog-post-date">
                                <a href="#">Feb 4, 2020</a>
                            </div>
                        </div>
                        <div class="blog-post-details">
                            <h5 class="blog-post-title">
                                <a href="blog-detail.html">From a small startup to a leading global agency in 10 Years</a>
                            </h5>
                            <p class="mb-0">We also know those epic stories, those modern-day legends surrounding the early failures of such supremely successful folks as Michael Jordan and Bill Gates.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="blog-post mb-4">
                    <div class="blog-post-image">
                        <img class="img-fluid" src="images/blog/02.jpg" alt="">
                    </div>
                    <div class="blog-post-content">
                        <div class="blog-post-info">
                            <div class="blog-post-author">
                                <a href="#" class="btn btn-light-round btn-round text-primary">Finance</a>
                            </div>
                            <div class="blog-post-date">
                                <a href="#">Feb 15, 2020</a>
                            </div>
                        </div>
                        <div class="blog-post-details">
                            <h5 class="blog-post-title">
                                <a href="blog-detail.html">How google’s BERT algorithm affects your website traffic</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="blog-post mb-4">
                    <div class="blog-post-image">
                        <img class="img-fluid" src="images/blog/03.jpg" alt="">
                    </div>
                    <div class="blog-post-content">
                        <div class="blog-post-info">
                            <div class="blog-post-author">
                                <a href="#" class="btn btn-light-round btn-round text-primary">Operations</a>
                            </div>
                            <div class="blog-post-date">
                                <a href="#">Sep 19, 2020</a>
                            </div>
                        </div>
                        <div class="blog-post-details">
                            <h5 class="blog-post-title">
                                <a href="blog-detail.html">Five reasons why you must create a website for your company</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0 mt-4">
        <div class="row mt-4 mt-md-5">
            <div class="col-12 d-md-flex justify-content-center align-items-center text-center">
                <p class="mb-3 mb-md-0 mx-0 mx-md-3 text-light">We have articles on a range of topics</p>
                <a href="#" class="btn btn-primary-round btn-round mx-0 mx-md-3">View all Blogs<i class="fas fa-arrow-right ps-3"></i></a>
            </div>
        </div>
    </div>
</section>
<!--=================================
    Articles -->

@stop