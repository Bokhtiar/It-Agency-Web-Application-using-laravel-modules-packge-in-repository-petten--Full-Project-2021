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
            <h2 class="mb-0">Portfolio Form</h2>
            @isset(auth()->user()->role->permission['permission']['portfolio']['add'])
            <a class="text-light btn btn-icon btn-primary" href="{{url('portfolio/create/')}}">
                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                <span class="btn-inner--text">Create Porfolio</span>
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
                  <th>Company name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Index</th>
                  <th>Tile</th>
                  <th>Cover Image</th>
                  <th>Company name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                  @foreach ($portfolios as $portfolio)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$portfolio->title}}</td>
                    @php
                    $image=json_decode($portfolio->cover_image);
                    @endphp
                    <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                    <td>{{$portfolio->company_name}}</td>
                    <td>
                        @if ($portfolio->status ==1)
                        <a class="btn btn-sm badge badge-pill btn-success" href="">Active</a>
                        @else
                        <a class="btn btn-sm badge badge-pill btn-danger" href="">Inactive</a>
                        @endif
                    </td>
                    <td>
                        @if ($portfolio->status ==0)
                        <a class="btn btn-sm badge badge-pill btn-success" href="{{url('portfolio/status/'.$portfolio->id)}}">Active</a>
                        @else
                        <a class="btn btn-sm badge badge-pill btn-danger" href="{{url('portfolio/status/'.$portfolio->id)}}">Inactive</a>
                        @endif
                        @isset(auth()->user()->role->permission['permission']['portfolio']['edit'])
                        <a class="btn btn-sm btn-success" href="{{url('portfolio/edit/'.$portfolio->id)}}"><i class="fas fa-user-edit"></i></a>
                        @endisset
                        @isset(auth()->user()->role->permission['permission']['portfolio']['delete'])
                        <a class="btn btn-sm btn-danger" href="{{url('portfolio/delete/'.$portfolio->id)}}"><i class="fas fa-trash"></i></a>
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
