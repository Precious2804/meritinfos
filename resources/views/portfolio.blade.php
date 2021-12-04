@extends('layout')
@section('content')

<!--=================================
    Header Inner -->
<section class="header-inner bg-overlay-black-50" style="background-image: url('images/header-inner/18.jpg');">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="header-inner-title text-center position-relative">
                    <h1 class="text-white fw-bold">Let our ground breaking projects and software establishments speaks of our expertise to you</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
    Header Inner -->

<!--=================================
    Category -->
<section class="space-ptb">
    <div class="container">
        <div class="row">
            <h5 style="text-align: center;">OUR PORTFOLIO</h5>
            @foreach($all_portfolio as $item)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature-info feature-info-style-02 h-100">
                    <div class="feature-info-icon">
                        <i class="flaticon-data"></i>
                        <h5 class="mb-0 ms-4 feature-info-title"> {{$item->project}} </h5>
                    </div>
                    <div class="feature-info-content">
                        <p class="mb-0"> {{$item->description}} </p>
                        <a href="{{$item->url}}" class="icon-btn" target="_blank"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                    <div class="feature-info-bg-img" style="background-image: url(<?php echo $item->image; ?>);"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@stop