@extends('admin.layout')
@section('content')

<section class="space-ptb" style="padding-top: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style=" padding-bottom:15px">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center;">Edit Team member Details</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::get('updated'))
                        <div class="alert alert-success">
                            {{Session::get('updated')}}
                        </div>
                        @endif
                        <form action="{{route('do_edit_team')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$team_details['id']}}">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Full name</label>
                                    <input type="text" name="name" class="form-control" value="{{$team_details['name']}}">
                                </div>
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Position</label>
                                    <input type="text" name="position" class="form-control" value="{{$team_details['position']}}">
                                </div>
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Upload Image</label>
                                    <input type="file" name="image" class="form-control" value="{{$team_details['image']}}">
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