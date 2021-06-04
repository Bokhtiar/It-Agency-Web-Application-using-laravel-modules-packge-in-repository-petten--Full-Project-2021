@extends('layouts.admin.app')
@section('admin_content')
    <div class="card-header d-flex justify-content-between align-item-center">
        <h2 class="mb-0">Freelancers Create Form</h2>
        <a class="text-light btn btn-icon btn-primary" href="{{ url('freelancer/create') }}">
            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
            <span class="btn-inner--text">Freelancers List</span>
        </a>
    </div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10">
                <form action="{{ isset($edit) ?  url('freelancer/store/'.$edit->id) :  url('freelancer/store') }}" method="POST" enctype="multipart/form-data" class="form-gorup">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-gorup">
                                <label for="">Enter Freelancer Name</label>
                                <input class="form-control" type="text" name="name" id="" value="{{ @$edit->name }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-gorup">
                                <label for="">Enter Freelancer Phone</label>
                                <input class="form-control" type="number" name="phone" id="" value="{{ @$edit->phone }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-gorup">
                                <label for="">Enter Freelancer Email</label>
                                <input class="form-control" type="email" name="email" id="" value="{{ @$edit->email }}">
                            </div>
                        </div>


                    </div>






                    <div class="form-gorup">
                        <label for="">Enter Freelancer Name</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="text-center my-2">
                            <input type="submit" value="Create New Freelancer" class="btn btn-primary" name="" id="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
