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
<div class="card">
    <!-- Card header -->
    <div class="card-header d-flex justify-content-between align-item-center">
        <h2 class="mb-0">portfolio Create Form</h2>
        <a class="text-light btn btn-icon btn-primary" href="{{url('portfolio/')}}">
            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
            <span class="btn-inner--text">portfolio List</span>
          </a>
    </div>
</div>

    <section class="row">
        <div class="col-md-6 col-lg-6 col-sm-12">
            <section class="row justify-content-center">
                <div class="col-md-10">
                    <form action="{{url('portfolio/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="card">
                        <!-- Card header -->
                        <div class="text-center card-header d-flex justify-content-between align-item-center">
                            <h2 class="mb-0">Portfolio Information</h2>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                                <div class="form-group">
                                    <select class="form-control" name="category_id" id="">
                                        <option value="" disabled>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">portfolio Title</label>
                                    <input class="form-control" type="text" name="title" placeholder="portfolio Name" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="exampleFormControlTextarea1">portfolio Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required></textarea>
                                </div>
                        </div>
                      </div>
                </div>
            </section>

            <div class=""><!-- image section start -->
                <section class="row justify-content-center">
                    <div class="col-md-10">

                        <div class="card">
                            <!-- Card header -->
                            <div class="text-center card-header d-flex justify-content-between align-item-center">
                                <h2 class="mb-0">Portfolio Image</h2>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-control-label">Choice portfolio Cover Image</label>
                                        <input class="form-control" type="file" name="cover_image[]" multiple required >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Choice portfolio Multiple Image</label>
                                        <input class="form-control" type="file" name="images[]" multiple required >
                                    </div>
                            </div>
                          </div>
                    </div>
                </section>
            </div><!--image section -->
        </div><!--portfolio info -->

        <div class="col-md-6 col-lg-6 col-sm-12">
            <section class="row justify-content-center">
                <div class="col-md-10">

                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between align-item-center">
                            <h2 class="mb-0">Project Information</h2>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">

                                <div class="form-group">
                                    <label class="form-control-label">Project Name</label>
                                    <input class="form-control" type="text" name="company_name" placeholder="Compnay Name" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Project Url</label>
                                    <input class="form-control" type="link" name="url" placeholder="Project Url" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Project Start Date</label>
                                    <input class="form-control" type="date" name="start_date" placeholder="portfolio Name" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Project End Date</label>
                                    <input class="form-control" type="date" name="end_date" placeholder="portfolio Name" required>
                                </div>
                        </div>
                      </div>
                </div>
            </section>
        </div><!--project  -->


        <div class=" p-3 mb-4">
            <div class="text-center">
              <button type="submit" class="btn btn-primary"><span class="btn-inner--icon"><i class="ni ni-check-bold"></i><span class="btn-inner--text">Save New portfolio</span></span></button>
            </div>
          </div>
    </form>

    </section>


@endsection
