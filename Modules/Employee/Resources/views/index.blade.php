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
                    <h2 class="mb-0">Employee Create Form</h2>
                    @isset(auth()->user()->role->permission['permission']['employee']['add'])
                    <a class="text-light btn btn-icon btn-primary" href="{{url('employee/create')}}">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Employee create</span>
                      </a>
                    @endisset
                </div>

          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>Index</th>
                  <th>Employee Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Index</th>
                  <th>Employee Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                  @foreach ($employees as $employee)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->password}}</td>
                    <td>{{$employee->role->name}}</td>
                    <td>
                        @isset(auth()->user()->role->permission['permission']['employee']['delete'])
                        <a class="btn btn-sm btn-danger" href="{{url('employee/delete/'.$employee->id)}}"><i class="fas fa-trash"></i></a>
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
