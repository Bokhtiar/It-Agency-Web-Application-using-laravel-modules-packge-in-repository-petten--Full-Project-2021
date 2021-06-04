@extends('layouts.admin.app')
@section('admin_content')



    <section class="row">
        <div class="col-md-4 col-sm-12 col-lg-4">
            <section class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header ">
                            <h2 class="mb-0">productCategory Form</h2>
                            <a class="text-light btn btn-icon btn-primary" href="{{ url('productcategory/') }}">
                                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                <span class="btn-inner--text">productCategory List</span>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <form action="{{ url('productcategory/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">productCategory Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="product Category Name"
                                        required>
                                </div>
                                <div class=" p-3 mb-4">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary"><span class="btn-inner--icon"><i
                                                    class="ni ni-check-bold"></i><span class="btn-inner--text">Save New
                                                    productCategory</span></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--add form end -->
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
                                            <th>productCategory Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Index</th>
                                            <th>productCategory Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($productcategories as $productCategory)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $productCategory->name }}</td>
                                                <td>
                                                    @if ($productCategory->status == 1)
                                                        <a class="btn btn-sm badge badge-pill btn-success"
                                                            href="">Active</a>
                                                    @else
                                                        <a class="btn btn-sm badge badge-pill btn-danger"
                                                            href="">Inactive</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($productCategory->status == 0)
                                                        <a class="btn btn-sm badge badge-pill btn-success"
                                                            href="{{ url('productcategory/status/' . $productCategory->id) }}">Active</a>
                                                    @else
                                                        <a class="btn btn-sm badge badge-pill btn-danger"
                                                            href="{{ url('productcategory/status/' . $productCategory->id) }}">Inactive</a>
                                                    @endif

                                                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                                        data-target="#modal-form{{ $productCategory->id }}"><i
                                                            class="fas fa-user-edit"></i></button>


                                                    <a class="btn btn-sm btn-danger"
                                                        href="{{ url('productcategory/delete/' . $productCategory->id) }}"><i
                                                            class="fas fa-trash"></i></a>

                                                </td>
                                            </tr>
                                            <!-- modal edit form start -->
                                            <div class="col-md-4">
                                                <div class="modal fade" id="modal-form{{ $productCategory->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="modal-form"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <section class="row justify-content-center">
                                                                <div class="col-md-8">

                                                                    <div class="card">
                                                                        <!-- Card header -->
                                                                        <div class="card-header ">
                                                                            <h2 class="mb-0">productCategory Update</h2>
                                                                            <a class="text-light btn btn-icon btn-primary"
                                                                                href="{{ url('productcategory/') }}">
                                                                                <span class="btn-inner--icon"><i
                                                                                        class="ni ni-fat-add"></i></span>
                                                                                <span
                                                                                    class="btn-inner--text">productCategory
                                                                                    List</span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- Card body -->
                                                                        <div class="card-body">
                                                                            <form
                                                                                action="{{ url('productcategory/store/' . $productCategory->id) }}"
                                                                                method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="form-control-label">productCategory
                                                                                        Name</label>
                                                                                    <input class="form-control" type="text"
                                                                                        name="name"
                                                                                        value="{{ $productCategory->name }}"
                                                                                        placeholder="productCategory Name"
                                                                                        required>
                                                                                </div>

                                                                                <div class=" p-3 mb-4">
                                                                                    <div class="text-center">
                                                                                        <button type="submit"
                                                                                            class="btn btn-primary"><span
                                                                                                class="btn-inner--icon"><i
                                                                                                    class="ni ni-check-bold"></i><span
                                                                                                    class="btn-inner--text">Update
                                                                                                    New
                                                                                                    productCategory</span></span></button>
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
            </div>
            <!--productCategory list table end-->
    </section>







@endsection
