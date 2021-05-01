@extends('layouts.admin.app')
@section('admin_content')
    <section>
    <h2 class="text-center">Roles</h2> <hr>
        <section class="row">
            <div class="col-md-4">
                <h3 class="text-center">Create Role</h3><hr>
                <form action="{{url('role/store')}}" method="POST">
                    @csrf
                    <div>
                        <label class="" for=""> <strong>Create Role Name</strong> </label>
                        <input type="text" class="form-control" name="name" id="" placeholder="Create New Role Name">
                    </div>
                    <div class="mt-2 float-right">
                        <input class="btn btn-success" type="submit" name="btn" value="Create New Role" id="">
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <h3 class="font-weight-bold text-center">Roles List</h3>
                <hr>
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Index</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>{{$role->name}}</td>

                            <td>

                                @isset(auth()->user()->role->permission['permission']['role']['edit'])
                                <a class="btn btn-sm btn-info text-light" href="{{url('role/edit/'.$role->id)}}">Edit</a>
                                @endisset
                                @isset(auth()->user()->role->permission['permission']['role']['delete'])
                                <a class="btn btn-sm btn-danger text-light" href="{{url('role/destroy/'.$role->id)}}">Delete</a>
                                @endisset
                            </td>
                          </tr>
                        @endforeach
                    </tbody>

                  </table>
                  <h3 style="font-size: 15px;" class="ml-auto">{{Modules\Role\Http\Controllers\RoleController::schedule()}}</h3>
            </div>
        </section>
    </section>

@endsection
