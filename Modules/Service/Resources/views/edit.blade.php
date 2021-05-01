@extends('layouts.admin.app')
@section('admin_content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <section class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <!-- Card header -->
                <div class="card-header d-flex justify-content-between align-item-center">
                    <h2 class="mb-0">Service Edit Form</h2>
                    <a class="text-light btn btn-icon btn-primary" href="{{url('service/')}}">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Service List</span>
                      </a>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <form action="{{url('service/store/'.$service->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">Service Name</label>
                            <input class="form-control" type="text" name="name" value="{{$service->name}}" placeholder="Service Name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Choice Service Image</label>
                            <input class="form-control" type="file"  name="image[]" multiple >
                            @php
                            $image=json_decode($service->image);
                            @endphp
                            <td><span>Present image: </span> <img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Service Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required>{{$service->description}}</textarea>
                        </div>
                          <div class=" p-3 mb-4">
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary"><span class="btn-inner--icon"><i class="ni ni-check-bold"></i><span class="btn-inner--text">Save New Service</span></span></button>
                            </div>
                          </div>
                    </form>
                </div>
              </div>
        </div>
    </section>
@endsection
