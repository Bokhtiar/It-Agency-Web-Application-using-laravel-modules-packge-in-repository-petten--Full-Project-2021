@extends('layouts.user.app')
@section('container')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Quote</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Quote</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
 <!-- quote section start -->
 <section class="row ">
    <div class="col-md-6 col-lg-6 col-sm-12">
        <section class="row justify-content-center">
            <div class="col-md-10">
                <form action="{{url('quote/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="card">
                    <!-- Card header -->
                    <div class="text-center card-header d-flex justify-content-between align-item-center">
                        <h2 class="mb-0 text-center">Personal Information</h2>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input class="form-control" type="text" name="email" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Phone</label>
                                <input class="form-control" type="text" name="phone" placeholder="Enter Phone" required>
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
                            <h2 class="mb-0">Project File Information</h2>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                                <div class="form-group">
                                    <label class="form-control-label">Project Requirement File</label>
                                    <input class="form-control" type="file" name="doc[]" multiple required >
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Choice multiple Image For Project Demo</label>
                                    <input class="form-control" type="file" name="images[]" multiple >
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
                                <input class="form-control" type="text" name="project_name" placeholder="Project Name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Budget</label>
                                <input class="form-control" type="number" name="budget" placeholder="Project Budget" required>
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

    <div class=" p-3 mb-4 container">
        <div class="text-center">
          <button type="submit" class="btn btn-primary"><span class="btn-inner--icon"><i class="ni ni-check-bold"></i><span class="btn-inner--text">Send Request Quote</span></span></button>
        </div>
      </div>

</form>

</section>
@endsection
