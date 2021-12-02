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
                        <a class="nav-link" id="help-tab" data-bs-toggle="pill" href="#help" role="tab" aria-controls="technology-partners" aria-selected="false"><span class="data-hover" data-title="How we can help you">How we can help you</span></a>
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

                    <div class="tab-pane fade" id="help" role="tabpanel" aria-labelledby="help-tab">
                        <div class="row">
                            <div class="col-sm-5 align-self-lg-center mb-4 mb-sm-0">
                                <img class="img-fluid rounded" src="images/about/07.jpg" alt="">
                            </div>
                            <div class="col-sm-7 align-self-start align-self-lg-center ps-md-0 ps-lg-5">
                                <h4 class="mb-2">Let us Brand you and give you the Best business service</h4>
                                <p class="mb-4">Through the collaboration with customers in discussing needs and demand, we're able to attain mutual understanding, gain customer trust to offer appropriate advice, and bring about suggestions on suitable technology to transform your business.</p>
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