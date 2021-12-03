@extends('layout')
@section('content')


<!--=================================
    contact Form -->
<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h1>Contact us</h1>
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
                    <h3>Need assistance? please fill the form</h3>
                    @if(Session::get('sent'))
                    <div class="alert alert-success">
                        {{Session::get('sent')}}
                    </div>
                    @endif
                    <form class="mt-4" method="POST" action="{{route('do_contact')}}">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Full name">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone" class="form-control" id="exampleInputEnquiry" placeholder="Phone">
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" name="description" id="exampleInputEnquiry-Description" placeholder="Description of your need" rows="5"></textarea>
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
<!--=================================
    contact Form  -->

@stop