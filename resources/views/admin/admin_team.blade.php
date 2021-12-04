@extends('admin.layout')
@section('content')

<section class="space-ptb" style="padding-top: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center;">Our Team List</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::get('deleted'))
                        <div class="alert alert-success">
                            {{Session::get('deleted')}}
                        </div>
                        @endif
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_team as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->position}}</td>
                                    <td><a href="{{route('edit_team')}}?id={{$item->id}}">Edit</a></td>
                                    <td><a href="{{route('delete_team')}}?id={{$item->id}}">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-12" style=" padding-top:15px">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center;">Upload new Team member</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::get('uploaded'))
                        <div class="alert alert-success">
                            {{Session::get('uploaded')}}
                        </div>
                        @endif
                        <form action="{{route('upload_team')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Fullname">
                                    <span class="text-danger"> @error('name') {{$message}} @enderror </span>
                                </div>
                                <div class="col-lg-12 form-group" style="width: 70%; padding:15px">
                                    <label for="" style="font-weight:bolder">Position</label>
                                    <input type="text" name="position" class="form-control" placeholder="Enter member position">
                                    <span class="text-danger"> @error('position') {{$message}} @enderror </span>
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
    </div>
</section>

@stop