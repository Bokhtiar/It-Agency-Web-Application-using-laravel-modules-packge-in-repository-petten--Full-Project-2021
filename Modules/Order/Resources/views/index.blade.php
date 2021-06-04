@extends('layouts.admin.app')
@section('admin_content')

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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Index</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>
                                            @if ($order->status == 1)
                                                <a class="btn btn-sm badge badge-pill btn-success" href="">Complete</a>
                                            @else
                                                <a class="btn btn-sm badge badge-pill btn-danger" href="">UnComplete</a>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($order->status == 0)
                                                <a class="btn btn-sm badge badge-pill btn-success"
                                                    href="{{ url('order/status/' . $order->id) }}">Complete</a>
                                            @else
                                                <a class="btn btn-sm badge badge-pill btn-danger"
                                                    href="{{ url('order/status/' . $order->id) }}">UnComplete</a>
                                            @endif

                                                <a class="btn btn-sm btn-success" href="{{ url('order/detail/' . $order->id) }}"><i
                                                        class="fas fa-eye"></i></a>

                                                <a class="btn btn-sm btn-danger" href="{{ url('order/delete/' . $order->id) }}"><i
                                                        class="fas fa-trash"></i></a>

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
