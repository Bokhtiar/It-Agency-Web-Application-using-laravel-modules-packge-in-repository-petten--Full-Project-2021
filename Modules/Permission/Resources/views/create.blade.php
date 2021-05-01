@extends('layouts.admin.app')
@section('admin_content')
    <div class="container">
        <form action="{{url('permission/store')}}" method="POST">
            @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for=""><strong>Required* Select One</strong> </label>
                    <select name="role_id" class="form-control">
                        <option value="">Please select a role</option>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                    <span class="text-danger">
                              {{$message}}
                          </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create Permission</button>
            </div>
            <div class="col-md-8">
                <table class="table responsive-table-input-matrix">
                    <thead class="text-center">
                    <tr>
                        <th>Permission</th>
                        <th>Add</th>
                        <th>Edit</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>List</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">

                    <tr>
                        <td>Roles</td>
                        <td><input type="checkbox" name="permission[role][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[role][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[role][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[role][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[role][list]" value="1"></td>

                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td><input type="checkbox" name="permission[permission][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[permission][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[permission][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[permission][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[permission][list]" value="1"></td>
                    </tr>
                    <tr>
                        <td>Users</td>
                        <td><input type="checkbox" name="permission[user][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[user][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[user][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[user][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[user][list]" value="1"></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td><input type="checkbox" name="permission[category][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[category][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[category][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[category][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[category][list]" value="1"></td>
                    </tr>

                    <tr>
                        <td>Service</td>
                        <td><input type="checkbox" name="permission[service][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[service][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[service][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[service][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[service][list]" value="1"></td>
                    </tr>

                    <tr>
                        <td>Portfolio</td>
                        <td><input type="checkbox" name="permission[portfolio][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[portfolio][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[portfolio][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[portfolio][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[portfolio][list]" value="1"></td>
                    </tr>

                    <tr>
                        <td>Testimonial</td>
                        <td><input type="checkbox" name="permission[testimonial][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[testimonial][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[testimonial][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[testimonial][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[testimonial][list]" value="1"></td>
                    </tr>

                    <tr>
                        <td>Expenses</td>
                        <td><input type="checkbox" name="permission[expenses][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[expenses][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[expenses][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[expenses][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[expenses][list]" value="1"></td>
                    </tr>

                    <tr>
                        <td>Slider</td>
                        <td><input type="checkbox" name="permission[slider][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[slider][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[slider][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[slider][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[slider][list]" value="1"></td>
                    </tr>

                    <tr>
                        <td>contact</td>
                        <td><input type="checkbox" name="permission[contact][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[contact][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[contact][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[contact][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[contact][list]" value="1"></td>
                    </tr>


                    <tr>
                        <td>Quote</td>
                        <td><input type="checkbox" name="permission[quote][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[quote][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[quote][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[quote][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[quote][list]" value="1"></td>
                    </tr>


                    <tr>
                        <td>Client</td>
                        <td><input type="checkbox" name="permission[client][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[client][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[client][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[client][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[client][list]" value="1"></td>
                    </tr>


                    <tr>
                        <td>websetting</td>
                        <td><input type="checkbox" name="permission[websetting][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[websetting][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[websetting][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[websetting][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[websetting][list]" value="1"></td>
                    </tr>


                    <tr>
                        <td>Blog</td>
                        <td><input type="checkbox" name="permission[blog][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[blog][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[blog][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[blog][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[blog][list]" value="1"></td>
                    </tr>

                    <tr>
                        <td>Employee</td>
                        <td><input type="checkbox" name="permission[employee][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[employee][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[employee][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[employee][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[employee][list]" value="1"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </form>
    </div>
@endsection

