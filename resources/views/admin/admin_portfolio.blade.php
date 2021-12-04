@extends('admin.layout')
@section('content')

<section class="space-ptb" style="padding-top: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style=" padding-bottom:15px">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center;">Upload Portfolio</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::get('uploaded'))
                        <div class="alert alert-success">
                            {{Session::get('uploaded')}}
                        </div>
                        @endif
                        <form action="{{route('upload_portfolio')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Title of Project</label>
                                    <input type="text" name="project" class="form-control" placeholder="Project Title">
                                    <span class="text-danger"> @error('project') {{$message}} @enderror </span>
                                </div>
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Project Desciption</label>
                                    <input type="text" name="description" class="form-control" placeholder="Project Description">
                                    <span class="text-danger"> @error('description') {{$message}} @enderror </span>
                                </div>
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Project URL/Link</label>
                                    <input type="url" name="url" class="form-control" placeholder="Project URL/Link">
                                    <span class="text-danger"> @error('url') {{$message}} @enderror </span>
                                </div>
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Upload Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <span class="text-danger"> @error('image') {{$message}} @enderror </span>
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

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="text-align: center;">OUR PORTFOLIO LISTS</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($all_portfolio as $item)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="feature-info feature-info-style-02 h-100">
                                <div class="feature-info-icon">
                                    <i class="flaticon-data"></i>
                                    <h5 class="mb-0 ms-4 feature-info-title"> {{$item->project}} </h5>
                                </div>
                                <div class="feature-info-content">
                                    <p class="mb-0"> {{$item->description}} </p>
                                    <a href="{{route('edit_port')}}?id={{$item->id}}" class="icon-btn" target="_blank"><i class="fas fa-edit"></i></a>
                                </div>
                                <div class="feature-info-bg-img" style="background-image: url(<?php echo $item->image; ?>);"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop