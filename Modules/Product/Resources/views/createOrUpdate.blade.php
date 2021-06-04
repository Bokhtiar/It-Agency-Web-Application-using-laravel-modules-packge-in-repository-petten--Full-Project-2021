@extends('layouts.admin.app')
@section('admin_content')

<div class="card">
    <!-- Card header -->
    <div class="card-header d-flex justify-content-between align-item-center">
        <h2 class="mb-0">product Create Form</h2>
        <a class="text-light btn btn-icon btn-primary" href="{{url('product/')}}">
            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
            <span class="btn-inner--text">product List</span>
          </a>
    </div>
</div>

    <section class="row">
        <div class="col-md-6 col-lg-6 col-sm-12">
            <section class="row justify-content-center">
                <div class="col-md-10">
                    <form action="{{ isset($edit) ? url('product/store/'.$edit->id) :  url('product/store/') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="card">
                        <!-- Card header -->
                        <div class="text-center card-header d-flex justify-content-between align-item-center">
                            <h2 class="mb-0">product Information</h2>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                                <div class="form-group">
                                    <select class="form-control" name="category_id" id="" required>
                                        <option value="" disabled>Select Category</option>
                                        @foreach ($productcategories as $category)

                                            <option value="{{$category->id}}">{{$category->name}}</option>

                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">product Title</label>
                                    <input class="form-control" type="text" value="{{ @$edit->name }}" name="name" placeholder="Product Title" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="exampleFormControlTextarea1"> Short product Description</label>
                                    <textarea class="form-control" minlength="10" maxlength="30" id="exampleFormControlTextarea1" name="short_des" rows="3" required>{{ @$edit->short_des }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">product price</label>
                                    <input class="form-control" type="text" value="{{ @$edit->price }}" name="price" placeholder="Product price" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">product url</label>
                                    <input class="form-control" value="{{ @$edit->url }}" type="text" name="url" placeholder="Product url" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">product languse</label>
                                    <input class="form-control" type="text" value="{{ @$edit->languse }}" name="languse" placeholder="Product languse" required>
                                </div>


                        </div>
                      </div>
                </div>
            </section>
        </div><!--product info -->

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
                                    <h2 class="mb-0">product Image</h2>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    @if(!isset($edit->image))
                                    <div class="form-group">
                                        <label class="form-control-label">Choice product  Image</label>
                                        <input class="form-control" type="file" name="image"  required >
                                    </div>
                                    @endif
                                        @if(isset($edit->image))
                                        <div class="form-group">
                                            <label class="form-control-label">Choice product  Image</label>
                                            <input class="form-control" type="file" name="image"   >
                                            <p>Present Imae</p>
                                            <img src="{{ asset($edit->image) }}" height="60px" width="60px" alt="">
                                        </div>
                                        @endif
                                </div>
                              </div>


                              <div class="card">
                                <!-- Card header -->
                                <div class="text-center card-header d-flex justify-content-between align-item-center">
                                    <h2 class="mb-0">Software Version</h2>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">

                                    <div class="form-group">
                                        <label class="form-control-label">product software version</label>
                                        <input class="form-control" value="{{ @$edit->software_version }}" type="text" name="software_version" placeholder="Product software version" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">product software framword</label>
                                        <input class="form-control" value="{{ @$edit->software_framword }}" type="text" name="software_framword" placeholder="Product software framword" required>
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
              <button type="submit" class="btn btn-primary"><span class="btn-inner--icon"><i class="ni ni-check-bold"></i><span class="btn-inner--text">Save New product</span></span></button>
            </div>
          </div>
    </form>

    </section>


@endsection
