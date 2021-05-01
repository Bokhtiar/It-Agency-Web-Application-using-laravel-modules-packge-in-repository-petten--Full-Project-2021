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
        <h2 class="mb-0">blog Create Form</h2>
        <a class="text-light btn btn-icon btn-primary" href="{{url('blog/')}}">
            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
            <span class="btn-inner--text">blog List</span>
          </a>
    </div>
</div>

    <section class="row">
        <div class="col-md-6 col-lg-6 col-sm-12">
            <section class="row justify-content-center">
                <div class="col-md-10">
                    <form action="{{url('blog/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="card">
                        <!-- Card header -->
                        <div class="text-center card-header d-flex justify-content-between align-item-center">
                            <h2 class="mb-0">blog Information</h2>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                                <div class="form-group">
                                    <select class="form-control" name="category_id" id="">
                                        <option value="" disabled>Select Category</option>
                                        @foreach ($categories as $category)
                                            @if ($category->position == "blog")
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">blog Title</label>
                                    <input class="form-control" type="text" name="title" placeholder="blog Title" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="exampleFormControlTextarea1"> Short blog Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="short_des" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="exampleFormControlTextarea1">blog Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="3" required></textarea>
                                </div>
                        </div>
                      </div>
                </div>
            </section>
        </div><!--blog info -->

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

                            <div class="card">
                                <!-- Card header -->
                                <div class="text-center card-header d-flex justify-content-between align-item-center">
                                    <h2 class="mb-0">blog Image</h2>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-control-label">Choice blog Cover Image</label>
                                            <input class="form-control" type="file" name="cover_image[]" multiple required >
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Choice blog Multiple Image</label>
                                            <input class="form-control" type="file" name="images[]" multiple required >
                                        </div>
                                </div>
                              </div>
                        </div>
                      </div>
                </div>
            </section>
        </div><!--project  -->


        <div class=" p-3 mb-4">
            <div class="text-center">
              <button type="submit" class="btn btn-primary"><span class="btn-inner--icon"><i class="ni ni-check-bold"></i><span class="btn-inner--text">Save New blog</span></span></button>
            </div>
          </div>
    </form>

    </section>


@endsection
