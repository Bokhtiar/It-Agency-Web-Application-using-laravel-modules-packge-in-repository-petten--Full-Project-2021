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
<div class="container-fluid">
    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-item-center">
                <h2 class="mb-0">Testimonial Create Form</h2>
                <a class="text-light btn btn-icon btn-primary" href="{{url('testimonial/create')}}">
                    <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                    <span class="btn-inner--text">Testimonial Create</span>
                  </a>
            </div>
          <!-- Card header -->
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>Index</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Designation</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Index</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Designation</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                  @foreach ($testimonials as $testimonial)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$testimonial->name}}</td>
                    @php
                    $image=json_decode($testimonial->image);
                    @endphp
                    <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                    <td>{{$testimonial->designation}}</td>
                    <td>{{$testimonial->description}}</td>
                    <td>
                        @if ($testimonial->status ==1)
                        <a class="btn btn-sm badge badge-pill btn-success" href="">Active</a>
                        @else
                        <a class="btn btn-sm badge badge-pill btn-danger" href="">Inactive</a>
                        @endif
                    </td>
                    <td>
                        @if ($testimonial->status ==0)
                        <a class="btn btn-sm badge badge-pill btn-success" href="{{url('testimonial/status/'.$testimonial->id)}}">Active</a>
                        @else
                        <a class="btn btn-sm badge badge-pill btn-danger" href="{{url('testimonial/status/'.$testimonial->id)}}">Inactive</a>
                        @endif
                        @isset(auth()->user()->role->permission['permission']['testimonial']['edit'])
                        <a class="btn btn-sm btn-success" href="{{url('testimonial/edit/'.$testimonial->id)}}"><i class="fas fa-user-edit"></i></a>
                        @endisset
                        @isset(auth()->user()->role->permission['permission']['testimonial']['delete'])
                        <a class="btn btn-sm btn-danger" href="{{url('testimonial/delete/'.$testimonial->id)}}"><i class="fas fa-trash"></i></a>
                        @endisset
                    </td>


                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection
