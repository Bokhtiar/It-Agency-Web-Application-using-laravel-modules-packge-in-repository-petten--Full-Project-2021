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
                    <h2 class="mb-0">Expenses Create Form</h2>
                    <a class="text-light btn btn-icon btn-primary" href="{{url('expenses/')}}">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Expenses List</span>
                      </a>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <form action="{{url('expenses/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">Expenses Amount</label>
                            <input class="form-control" type="number" name="amonut" placeholder="Expenses Amount" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Expenses Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required></textarea>
                        </>
                          <div class=" p-3 mb-4">
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary"><span class="btn-inner--icon"><i class="ni ni-check-bold"></i><span class="btn-inner--text">Save New Expenses</span></span></button>
                            </div>
                          </div>
                    </form>
                </div>
              </div>
        </div>
    </section>
@endsection
