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
            <h2 class="mb-0">Expenses Create Form</h2>
            @isset(auth()->user()->role->permission['permission']['expenses']['add'])
            <a class="text-light btn btn-icon btn-primary" href="{{url('expenses/create')}}">
                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                <span class="btn-inner--text">Expenses Create</span>
            </a>
            @endisset
        </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>Index</th>
                  <th>expenses Name</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Index</th>
                    <th>expenses Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                  @foreach ($expenses as $expense)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$expense->amonut}}</td>
                    <td>{{$expense->description}}</td>
                    <td>
                        @isset(auth()->user()->role->permission['permission']['expenses']['edit'])
                        <a class="btn btn-sm btn-success" href="{{url('expenses/edit/'.$expense->id)}}"><i class="fas fa-user-edit"></i></a>
                        @endisset
                        @isset(auth()->user()->role->permission['permission']['expenses']['delete'])
                        <a class="btn btn-sm btn-danger" href="{{url('expenses/delete/'.$expense->id)}}"><i class="fas fa-trash"></i></a>
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
