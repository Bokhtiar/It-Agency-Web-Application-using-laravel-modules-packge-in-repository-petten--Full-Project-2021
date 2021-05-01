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
          <!-- Card header -->
          <div class="card-header d-flex justify-content-between align-item-center">
            <h2 class="mb-0">blog Form</h2>
            @isset(auth()->user()->role->permission['permission']['blog']['add'])
            <a class="text-light btn btn-icon btn-primary" href="{{url('blog/create/')}}">
                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                <span class="btn-inner--text">Create Blog</span>
              </a>
            @endisset
            </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>Index</th>
                  <th>Tile</th>
                  <th>Cover Image</th>
                  <th>Short Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Index</th>
                    <th>Tile</th>
                    <th>Cover Image</th>
                    <th>Short Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                  @foreach ($blogs as $blog)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$blog->title}}</td>
                    @php
                    $image=json_decode($blog->cover_image);
                    @endphp
                    <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                    <td>{{$blog->short_des}}</td>
                    <td>
                        @if ($blog->status ==1)
                        <a class="btn btn-sm badge badge-pill btn-success" href="">Active</a>
                        @else
                        <a class="btn btn-sm badge badge-pill btn-danger" href="">Inactive</a>
                        @endif
                    </td>
                    <td>
                        @if ($blog->status ==0)
                        <a class="btn btn-sm badge badge-pill btn-success" href="{{url('blog/status/'.$blog->id)}}">Active</a>
                        @else
                        <a class="btn btn-sm badge badge-pill btn-danger" href="{{url('blog/status/'.$blog->id)}}">Inactive</a>
                        @endif
                        @isset(auth()->user()->role->permission['permission']['blog']['edit'])
                        <a class="btn btn-sm btn-success" href="{{url('blog/edit/'.$blog->id)}}"><i class="fas fa-user-edit"></i></a>
                        @endisset
                        @isset(auth()->user()->role->permission['permission']['blog']['delete'])
                        <a class="btn btn-sm btn-danger" href="{{url('blog/delete/'.$blog->id)}}"><i class="fas fa-trash"></i></a>
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
</div>
@endsection
