@extends('layouts.admin.app')
@section('admin_content')

<div class="container-fluid">
    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header d-flex justify-content-between align-item-center">
            <h2 class="mb-0">product Form</h2>

            <a class="text-light btn btn-icon btn-primary" href="{{url('product/create/')}}">
                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                <span class="btn-inner--text">Create product</span>
              </a>
            </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>Index</th>
                  <th>Tile</th>
                  <th>Cover Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Index</th>
                    <th>Tile</th>
                    <th>Cover Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                  @foreach ($products as $product)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$product->name}}</td>

                    <td><img src="{{asset($product->image)}}" height="60px" width="60px" alt=""> </td>
                    <td>
                        @if ($product->status ==1)
                        <a class="btn btn-sm badge badge-pill btn-success" href="">Active</a>
                        @else
                        <a class="btn btn-sm badge badge-pill btn-danger" href="">Inactive</a>
                        @endif
                    </td>
                    <td>
                        @if ($product->status ==0)
                        <a class="btn btn-sm badge badge-pill btn-success" href="{{url('product/status/'.$product->id)}}">Active</a>
                        @else
                        <a class="btn btn-sm badge badge-pill btn-danger" href="{{url('product/status/'.$product->id)}}">Inactive</a>
                        @endif
                        <a class="btn btn-sm btn-success" href="{{url('product/edit/'.$product->id)}}"><i class="fas fa-user-edit"></i></a>
                        <a class="btn btn-sm btn-success" href="{{url('product/show/'.$product->id)}}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-sm btn-danger" href="{{url('product/delete/'.$product->id)}}"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

