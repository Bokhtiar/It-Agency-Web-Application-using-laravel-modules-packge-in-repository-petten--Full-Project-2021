@extends('layouts.admin.app')
@section('admin_content')



<div class="container-fluid">
    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-item-center">
                    <h2 class="mb-0">Freelancers List</h2>
                    <a class="text-light btn btn-icon btn-primary" href="{{url('freelancer/create')}}">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Freelancers Create</span>
                      </a>
            </div>
          <!-- Card header -->
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>Index</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <td>image</td>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                  @foreach ($freelancers as $free)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$free->name}}</td>
                    <td>{{$free->email}}</td>
                    <th>{{$free->phone}}</th>
                    <td><img src="{{asset($free->image)}}" height="80px" width="80px" alt=""></td>

                    <td>

                      <a class="btn btn-sm btn-info" href="{{url('freelancer/edit/'.$free->id)}}"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="{{url('freelancer/delete/'.$free->id)}}"><i class="fas fa-trash"></i></a>

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
