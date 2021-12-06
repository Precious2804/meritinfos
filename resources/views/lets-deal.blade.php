@extends('layout')
@section('content')



<!--=================================
    Header Inner -->
<section class="header-inner header-inner-menu bg-overlay-black-50" style="background-image: url('images/header-inner/01.jpg');">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center position-relative">
            <div class="col-md-8">
                <div class="header-inner-title text-center">
                    <h1 class="text-white fw-normal">Let's make a deal</h1>
                    <p class="text-white mb-0">Our expertise and experience are ready to join forces with you to produce ground breaking technology</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h1>Let's make a deal</h1>
                    <p>Drop us a line! We’ll set up a time to chat over the phone or in-person to know more about your business needs. All primary conferences are free of charge.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-around position-relative pt-5">
            <div class="col-lg-4 col-md-5 mb-4">
                <div class="is-sticky">
                    <h4 class="mb-4">Let’s talk about what you want to accomplish and how we can make it happen.</h4>
                    <h5 class="text-light">This is the beginning of creating the life that you want to live.</h5>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 pe-lg-5">
                <div class="p-4 p-md-5 bg-white shadow">
                    <h3>Please fill the form to help us get to you faster</h3>
                    @if(Session::get('sent'))
                    <div class="alert alert-success">
                        {{Session::get('sent')}}
                    </div>
                    @endif
                    <form class="mt-4" method="POST" action="{{route('process_deal')}}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Full name*">
                                <span class="text-danger"> @error('name') {{$message}} @enderror</span>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email Address*">
                                <span class="text-danger"> @error('email') {{$message}} @enderror</span>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <input type="text" name="phone" class="form-control" id="exampleInputEnquiry" placeholder="Phone Number*">
                                <span class="text-danger"> @error('phone') {{$message}} @enderror</span>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <input type="text" name="organization" class="form-control" id="exampleInputEnquiry" placeholder="Your Organization (optional)">
                                <span class="text-danger"> @error('organization') {{$message}} @enderror</span>
                            </div>
                            <!-- <div class="mb-3 col-lg-6">
                                <input type="number" name="budget" class="form-control" placeholder="Your Budget">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <select name="duration" id="">
                                    <option value="" class="form-control">Availability Period</option>
                                    <option value="Immediately" class="form-control">Immediately</option>
                                    <option value="Immediately" class="form-control">Immediately</option>
                                </select>
                            </div> -->
                            <div class="mb-4 col-lg-12">
                                <textarea class="form-control" name="description" id="exampleInputEnquiry-Description" placeholder="Briefly describe what you need*" rows="5"></textarea>
                                <span class="text-danger"> @error('description') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-check ms-1">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I agree to talk about my project with {{env('APP_NAME')}}
                                </label>
                            </div>
                        </div>
                        <div class="mb-0">
                            <button type="submit" class="btn btn-primary">Send Message<i class="fas fa-arrow-right ps-3"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact-bg-logo text-center">
                <i class="fas fa-comment"></i>
            </div>
        </div>
    </div>
</section>


@stop