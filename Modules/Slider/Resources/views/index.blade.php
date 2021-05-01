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
                    <h2 class="mb-0">Slider Create Form</h2>
                    <a class="text-light btn btn-icon btn-primary" href="{{url('slider/create')}}">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Slider Create</span>
                      </a>
                </div>
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Datatable</h3>
            <p class="text-sm mb-0">
              This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
            </p>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>Index</th>
                  <th>slider Name</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Index</th>
                    <th>slider Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                  @foreach ($sliders as $slider)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$slider->name}}</td>
                    @php
                    $image=json_decode($slider->image);
                    @endphp
                    <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                    <td>{{$slider->description}}</td>

                    <td>
                        @if ($slider->status ==1)
                        <a class="btn btn-sm badge badge-pill btn-success" href="">Active</a>
                        @else
                        <a class="btn btn-sm badge badge-pill btn-danger" href="">Inactive</a>
                        @endif
                    </td>
                    <td>
                        @if ($slider->status ==0)
                        <a class="btn btn-sm badge badge-pill btn-success" href="{{url('slider/status/'.$slider->id)}}">Active</a>
                        @else
                        <a class="btn btn-sm badge badge-pill btn-danger" href="{{url('slider/status/'.$slider->id)}}">Inactive</a>
                        @endif
                        @isset(auth()->user()->role->permission['permission']['slider']['edit'])
                        <a class="btn btn-sm btn-success" href="{{url('slider/edit/'.$slider->id)}}"><i class="fas fa-user-edit"></i></a>
                        @endisset
                        @isset(auth()->user()->role->permission['permission']['slider']['delete'])
                        <a class="btn btn-sm btn-danger" href="{{url('slider/delete/'.$slider->id)}}"><i class="fas fa-trash"></i></a>
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

