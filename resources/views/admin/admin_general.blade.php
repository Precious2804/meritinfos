@extends('admin.layout')
@section('content')

<section class="space-ptb" style="padding-top: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center;">General Settings</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::get('updated'))
                        <div class="alert alert-success">
                            {{Session::get('updated')}}
                        </div>
                        @endif
                        <form action="{{route('edit_setting')}}" method="POST">
                            @csrf
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-6 form-group">
                                    <label for="" style="font-weight:bolder">Number of Clients</label>
                                    <input type="text" name="clients" class="form-control" value="{{$settings['clients']}}">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="" style="font-weight:bolder">Number of Media Posts</label>
                                    <input type="text" name="posts" class="form-control" value="{{$settings['posts']}}">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="" style="font-weight:bolder">Number of Completed Projects</label>
                                    <input type="text" name="finished" class="form-control" value="{{$settings['finished']}}">
                                </div>
                                <div class="col-lg-12 form-group" style="text-align: center;">
                                    <br>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@stop