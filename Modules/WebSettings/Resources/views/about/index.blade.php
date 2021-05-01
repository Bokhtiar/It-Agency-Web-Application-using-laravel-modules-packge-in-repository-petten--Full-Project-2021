@extends('layouts.admin.app')
@section('admin_content')
    <h1 class="text-center ">About Page</h1>
<form action="{{url('about/store/'.$about->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <section class="">
        <div class="row">
            <div class="col-md-4">
                @php
                    $image = json_decode($about->image);
                @endphp
                <img height="260px" width="100%" src="{{asset($image[0])}}" alt="">
                <input class="form-control" type="file" name="image[]" multiple  id="" >
            </div>
            <div class="col-md-8">
                <div>
                    <label for="">Title</label>
                    <input class="form-control" type="text" name="title" value="{{$about->title}}" id="">
                </div>
                <div>
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" id="" cols="25" rows="8">{{$about->description}}</textarea>
                </div>
            </div>
        </div>
    </section>
    <input type="submit" name="bnt" value="Submit" class="btn btn-success" id="">
</form>
<br><br>
    <section><!--team section -->
        <h1 class="text-center">About Team</h1>
        <div class="row">
            <div class="col-md-3 mt-2">
                <form action="{{url('team/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        @php
                        $image = json_decode($about->image);
                        @endphp
                        <img height="260px" width="100%" src="{{asset($image[0])}}" alt="">
                        <input class="form-control" type="file" name="image[]" multiple  id="" required>
                    </div>
                    <div>
                        <input placeholder="Enter Name" class="container" type="text" name="name" id="" required>
                    </div>
                    <div>
                        <input placeholder="Enter Designation" class="container" type="text" name="designation" id="" required>
                    </div>

                    <input  type="submit" name="btn" value="Create New Team Member" class=" form-control btn btn-info" id="">
                </form>
            </div>
            <!--team show and update--->
            @foreach ($teams as $team)
            <div class="col-md-3 mt-2">
                <form action="{{url('team/store/'.$team->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        @php
                        $image = json_decode($team->image);
                        @endphp
                        <img height="260px" width="100%" src="{{asset($image[0])}}" alt="">
                        <input type="file" name="image[]" multiple class="form-control" id="">
                    </div>
                    <div>
                        <input placeholder="Enter Name" value="{{$team->name}}" class="container" type="text" name="name" id="">
                    </div>
                    <div>
                        <input placeholder="Enter Designation" value="{{$team->designation}}" class="container" type="text" name="designation" id="">
                    </div>
                    <div class="text-center my-2">
                    <input  type="submit" name="btn" value="Update" class=" btn-sm btn btn-info" id="">
                    @if($team->status==1)
                    <a class="btn btn-sm btn-success" href="{{url('team/status/'.$team->id)}}">Active</a>
                    @else
                    <a class="btn btn-sm btn-danger" href="{{url('team/status/'.$team->id)}}">Inactive</a>
                    @endif
                    <a class="btn btn-sm btn-danger" href="{{url('team/delete/'.$team->id)}}">Delete</a>
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </section>
@endsection
