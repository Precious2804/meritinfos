@extends('admin.layout')
@section('content')

<section class="space-ptb" style="padding-top: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style=" padding-bottom:15px">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center;">Update Service</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::get('updated'))
                        <div class="alert alert-success">
                            {{Session::get('updated')}}
                        </div>
                        @endif
                        <form action="do_edit_service" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$service_details['id']}}">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Name of Service</label>
                                    <input type="text" name="name" class="form-control" value="{{$service_details['name']}}">
                                </div>
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
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