@extends('admin.layout')
@section('content')

<section class="space-ptb" style="padding-top: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style=" padding-bottom:15px">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center;">Edit Portfolio Details</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::get('updated'))
                        <div class="alert alert-success">
                            {{Session::get('updated')}}
                        </div>
                        @endif
                        <form action="{{route('do_edit_port')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$port_details['id']}}">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Title of Project</label>
                                    <input type="text" name="project" class="form-control" value="{{$port_details['project']}}">
                                </div>
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Project Desciption</label>
                                    <input type="text" name="description" class="form-control" value="{{$port_details['description']}}">
                                </div>
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Project URL/Link</label>
                                    <input type="url" name="url" class="form-control" value="{{$port_details['url']}}">
                                </div>
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Upload Image</label>
                                    <input type="file" name="image" class="form-control" value="{{$port_details['image']}}">
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