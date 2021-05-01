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
                    <h2 class="mb-0">Client Create Form</h2>
                    <a class="text-light btn btn-icon btn-primary" href="{{url('client/')}}">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Client List</span>
                      </a>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <form action="{{url('client/store/'.$client->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">Client Name</label>
                            <input class="form-control" type="text" name="name" value="{{$client->name}}" placeholder="Client Name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Choice Client Image</label>
                            <input class="form-control" type="file" name="image[]" multiple  >
                        </div>
                        @php
                        $image=json_decode($client->image);
                        @endphp
                        <td><span>Present image: </span> <img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>

                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Client Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required>{{$client->description}}</textarea>
                        </div>

                          <div class=" p-3 mb-4">
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary"><span class="btn-inner--icon"><i class="ni ni-check-bold"></i><span class="btn-inner--text">Save New Client</span></span></button>
                            </div>
                          </div>
                    </form>
                </div>
              </div>
        </div>
    </section>
@endsection
