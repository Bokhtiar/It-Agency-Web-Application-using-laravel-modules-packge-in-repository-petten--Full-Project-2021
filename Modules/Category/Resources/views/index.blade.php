@extends('layouts.admin.app')
@section('admin_content')



    <section class="row">
        <div class="col-md-4 col-sm-12 col-lg-4">
            <section class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header ">
                            <h2 class="mb-0">category Form</h2>
                            <a class="text-light btn btn-icon btn-primary" href="{{url('category/')}}">
                                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                <span class="btn-inner--text">category List</span>
                              </a>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form action="{{url('category/store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">category Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="category Name" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Select Position</label>
                                    <select name="position" class="form-control" id="" required>
                                        <option value="" disabled>Select Position</option>
                                        <option value="portfolio">Portfolio</option>
                                        <option value="blog">Blog</option>
                                    </select>
                                </div>
                                  <div class=" p-3 mb-4">
                                    <div class="text-center">
                                      <button type="submit" class="btn btn-primary"><span class="btn-inner--icon"><i class="ni ni-check-bold"></i><span class="btn-inner--text">Save New Category</span></span></button>
                                    </div>
                                  </div>
                            </form>
                        </div>
                      </div>
                </div>
            </section>
        </div><!--add form end -->
        <div class="col-md-8 col-sm-12 col-lg-8">
            <div class="container-fluid">
                <!-- Table -->
                <div class="row">
                <div class="col">
                    <div class="card">
                    <!-- Card header -->
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                        <thead class="thead-light">
                            <tr>
                            <th>Index</th>
                            <th>category Name</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Index</th>
                                <th>Category Name</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->position}}</td>
                                <td>
                                    @if ($category->status ==1)
                                    <a class="btn btn-sm badge badge-pill btn-success" href="">Active</a>
                                    @else
                                    <a class="btn btn-sm badge badge-pill btn-danger" href="">Inactive</a>
                                    @endif
                                </td>
                                <td>
                                    @if ($category->status ==0)
                                    <a class="btn btn-sm badge badge-pill btn-success" href="{{url('category/status/'.$category->id)}}">Active</a>
                                    @else
                                    <a class="btn btn-sm badge badge-pill btn-danger" href="{{url('category/status/'.$category->id)}}">Inactive</a>
                                    @endif
                                    @isset(auth()->user()->role->permission['permission']['category']['edit'])
                                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-form{{$category->id}}"><i class="fas fa-user-edit"></i></button>
                                    @endisset
                                    @isset(auth()->user()->role->permission['permission']['category']['delete'])
                                    <a class="btn btn-sm btn-danger" href="{{url('category/delete/'.$category->id)}}"><i class="fas fa-trash"></i></a>
                                    @endisset
                                </td>
                            </tr>
                            <!-- modal edit form start -->
                            <div class="col-md-4">
                                <div class="modal fade" id="modal-form{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                  <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <section class="row justify-content-center">
                                            <div class="col-md-8">

                                                <div class="card">
                                                    <!-- Card header -->
                                                    <div class="card-header ">
                                                        <h2 class="mb-0">category Update</h2>
                                                        <a class="text-light btn btn-icon btn-primary" href="{{url('category/')}}">
                                                            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                                            <span class="btn-inner--text">category List</span>
                                                          </a>
                                                    </div>
                                                    <!-- Card body -->
                                                    <div class="card-body">
                                                        <form action="{{url('category/store/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label class="form-control-label">category Name</label>
                                                                <input class="form-control" type="text" name="name" value="{{$category->name}}" placeholder="category Name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Select Position</label>
                                                                <select name="position" class="form-control" id="" required>
                                                                    <option value="" disabled>Select Position</option>
                                                                    <option value="portfolio">Portfolio</option>
                                                                    <option value="blog">Blog</option>
                                                                </select>
                                                            </div>
                                                              <div class=" p-3 mb-4">
                                                                <div class="text-center">
                                                                  <button type="submit" class="btn btn-primary"><span class="btn-inner--icon"><i class="ni ni-check-bold"></i><span class="btn-inner--text">Save New Category</span></span></button>
                                                                </div>
                                                              </div>
                                                        </form>
                                                    </div>
                                                  </div>
                                            </div>
                                        </section>
                                    </div>
                                  </div>
                                </div>
                              </div><!-- modal edit form end -->
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
                    </div><!--category list table end-->
                </section>







@endsection
