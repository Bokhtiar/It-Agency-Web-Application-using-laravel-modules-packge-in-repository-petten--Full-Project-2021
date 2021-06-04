@extends('layouts.admin.app')
@section('admin_content')

    <div class="container-fluid">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header d-flex justify-content-between align-item-center">
                        <h2 class="mb-0">quote Form</h2>
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th>Index</th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Descrition</th>
                                    <th>Project name</th>
                                    <th>budget</th>
                                    <th>Start date</th>
                                    <th>End Date</th>
                                    <th>Requirement</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Index</th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Descrition</th>
                                    <th>Project name</th>
                                    <th>budget</th>
                                    <th>Start date</th>
                                    <th>End Date</th>
                                    <th>Requirement</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($quotes as $quote)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $quote->name }}</td>
                                        <td>{{ $quote->email }}</td>
                                        <td>{{ $quote->phone }}</td>
                                        <td>{{ $quote->description }}</td>
                                        <td>{{ $quote->project_name }}</td>
                                        <td>{{ $quote->budget }}</td>
                                        <td>{{ $quote->start_date }}</td>
                                        <td>{{ $quote->end_date }}</td>
                                        <td>
                                            @php
                                                $doc = json_decode($quote->doc);
                                            @endphp
                                            <a download="{{ asset($doc[0]) }}" href="{{ asset($doc[0]) }}">documents</a>
                                        </td>
                                        <td>
                                            @php
                                                $image = json_decode($quote->image);
                                            @endphp

                                            @php
                                                $image = json_decode($quote->image);
                                            @endphp
                                            <img src="{{ asset($image[0]) }}" height="60px" width="60px" alt="">

                                        </td>


                                        <td>
                                            @if ($quote->status == 1)
                                                <a class="btn btn-sm badge badge-pill btn-success" href="">Active</a>
                                            @else
                                                <a class="btn btn-sm badge badge-pill btn-danger" href="">Inactive</a>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($quote->status == 0)
                                                <a class="btn btn-sm badge badge-pill btn-success"
                                                    href="{{ url('quote/status/' . $quote->id) }}">Active</a>
                                            @else
                                                <a class="btn btn-sm badge badge-pill btn-danger"
                                                    href="{{ url('quote/status/' . $quote->id) }}">Inactive</a>
                                            @endif
                                            @isset(auth()->user()->role->permission['permission']['quote']['delete'])
                                                <a class="btn btn-sm btn-danger"
                                                    href="{{ url('quote/delete/' . $quote->id) }}"><i
                                                        class="fas fa-trash"></i></a>
                                            @endisset
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
