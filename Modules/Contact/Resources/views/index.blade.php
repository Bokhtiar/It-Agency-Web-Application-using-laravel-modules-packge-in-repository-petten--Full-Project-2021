@extends('layouts.admin.app')
@section('admin_content')

<div class="container-fluid">
    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-item-center">
                    <h2 class="mb-0">contact Create Form</h2>
                    <a class="text-light btn btn-icon btn-primary" href="{{url('contact/')}}">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">contact List</span>
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
                  <th>Subject</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Index</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                  @foreach ($contacts as $contact)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <th>{{$contact->subject}}</th>
                    <td>{{$contact->description}}</td>
                    <td>
                        @if ($contact->status ==1)
                        <a class="btn btn-sm badge badge-pill btn-danger" href="">Unseen</a>
                        @else
                        <a class="btn btn-sm badge badge-pill btn-success" href="">Seen</a>
                        @endif
                    </td>
                    <td>
                        @if ($contact->status ==0)
                        <a class="btn btn-sm badge badge-pill btn-danger" href="{{url('contact-list/status/'.$contact->id)}}">Unseen</a>
                        @else
                        <a class="btn btn-sm badge badge-pill btn-success" href="{{url('contact-list/status/'.$contact->id)}}">Seen</a>
                        @endif
                        @isset(auth()->user()->role->permission['permission']['contact']['delete'])
                        <a class="btn btn-sm btn-danger" href="{{url('contact-list/delete/'.$contact->id)}}"><i class="fas fa-trash"></i></a>
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
