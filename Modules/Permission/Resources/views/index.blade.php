@extends('layouts.admin.app')
@section('admin_content')
    <section>
    <h2 class="text-center">Permission</h2> <hr>

        <section class="row justify-content-center">
            <div class="col-md-8">
                @isset(auth()->user()->role->permission['permission']['permission']['add'])
                <a class="btn btn-info text-light" href="{{url('permission/create')}}">Create Permission</a>
                @endisset
                <h3 class="font-weight-bold text-center">Permission List</h3>
                <hr>
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Index</th>
                        <th scope="col">Name</th>
                        <th scope="col">Create</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>{{$permission->role->name}}</td>
                            <td>{{$permission->created_at->diffForHumans()}}</td>
                            <td>
                                @isset(auth()->user()->role->permission['permission']['permission']['edit'])
                                <a class="btn btn-sm btn-info text-light" href="{{url('permission/edit/'.$permission->id)}}">Edit</a>
                                @endisset
                                @isset(auth()->user()->role->permission['permission']['permission']['delete'])
                                <a class="btn btn-sm btn-danger text-light" href="{{url('permission/destroy/'.$permission->id)}}">Delete</a>
                                @endisset
                            </td>
                          </tr>
                        @endforeach
                    </tbody>

                  </table>
                  <h3 style="font-size: 15px;" class="ml-auto">{{Modules\Permission\Http\Controllers\PermissionController::schedule()}}</h3>
            </div>
        </section>
    </section>

@endsection
