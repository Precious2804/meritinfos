@extends('layout')
@section('content')


<!--=================================
    Header Inner -->
<section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/15.jpg');">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="header-inner-title text-center position-relative">
                    <h1 class="text-white fw-normal">Meet Our Team</h1>
                    <p class="text-white mb-0">Let success motivate you. Find a picture of what epitomizes success to you and then pull it out when you are in need of motivation.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<!--=================================
    Header Inner -->
<!--=================================
    team -->
<section class="space-pb overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="section-title text-center">
                    <h2>Meet our heroes</h2>
                    <p class="lead">Our team is friendly, talkative, well-skilled and fully reliable.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($all_team as $item)
            <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                <div class="team">
                    <div class="team-bg"></div>
                    <div class="team-img">
                        <img class="img-fluid" src="{{$item->image}}" alt="">
                    </div>
                    <div class="team-info">
                        <a href="#" class="team-name">{{$item->name}}</a>
                        <p>{{$item->position}}</p>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                <div class="team apply-position">
                    <div class="team-icon">
                        <i class="far fa-user-circle"></i>
                    </div>
                    <div class="team-info">
                        <a href="#" class="btn btn-link">Apply for Possition<i class="fas fa-arrow-right text-dark ps-1"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
    team -->

@stop