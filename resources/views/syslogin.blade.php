@extends('layout')
@section('content')

<br>
<br>
<section>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 style="text-align: center;">Admin Login Here</h3>
                    </div>
                    <div class="card-body">
                        @if(Session::get('info'))
                        <div class="alert alert-danger">
                            {{Session::get('info')}}
                        </div>
                        @endif
                        @if(Session::get('infoEmail'))
                        <div class="alert alert-danger">
                            {{Session::get('infoEmail')}}
                        </div>
                        @endif
                        <form action="{{route('do_login')}}" method="POST">
                            @csrf
                            <div class="row d-flex justify-content-center">
                                <div class=" col-lg-12 form-group" style="padding: 15px;">
                                    <label for="" style="font-weight: bolder;">Admin Email address</label>
                                    <input type="email" name="email" placeholder="Enter email address" class="form-control">
                                    <span class="text-danger"> @error('email') {{$message}} @enderror </span>
                                </div>
                                <div class="col-lg-12 form-group" style="padding: 15px;">
                                    <label for="" style="font-weight:bolder">Admin Password</label>
                                    <input type="password" name="password" placeholder="Enter password" class="form-control">
                                    <span class="text-danger"> @error('password') {{$message}} @enderror </span>
                                </div>
                                <div class="form-group col-lg-12" style="text-align: center;">
                                    <button type="submit" class="btn btn-primary">Login now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

@stop