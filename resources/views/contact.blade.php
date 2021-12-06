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
                    <p>Contact our 24/7 Support line for further discovery of our organization. And as well how we could be of help to you. Thank you</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-around position-relative pt-5">
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
                            <textarea class="form-control" name="description" id="exampleInputEnquiry-Description" placeholder="Message description" rows="5"></textarea>
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