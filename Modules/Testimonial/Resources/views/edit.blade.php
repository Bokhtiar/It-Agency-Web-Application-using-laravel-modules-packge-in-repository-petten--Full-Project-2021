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
                    <h2 class="mb-0">Testimonial Update Form</h2>
                    <a class="text-light btn btn-icon btn-primary" href="{{url('testimonial/')}}">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Testimonial List</span>
                      </a>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <form action="{{url('testimonial/store/'.$testimonial->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">Name</label>
                            <input class="form-control" type="text" name="name" value="{{$testimonial->name}}" placeholder="Testimonial Name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Designation</label>
                            <input class="form-control" type="text" name="designation" value="{{$testimonial->designation}}" placeholder="Testimonial Name" required>
                        </div>
                        <div class="form-group">
                            @php
                                $image = json_decode($testimonial->image);
                            @endphp
                            <label class="form-control-label">Choice Image</label>
                            <input class="form-control" type="file" name="image[]" multiple  >
                            <div class="my-3">
                                <img height="80px" width="80px" src="{{asset($image[0])}}" alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Testimonial Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required>{{$testimonial->description}}</textarea>
                        </div>
                          <div class=" p-3 mb-4">
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary"><span class="btn-inner--icon"><i class="ni ni-check-bold"></i><span class="btn-inner--text">Save New Testimonial</span></span></button>
                            </div>
                          </div>
                    </form>
                </div>
              </div>
        </div>
    </section>
@endsection
