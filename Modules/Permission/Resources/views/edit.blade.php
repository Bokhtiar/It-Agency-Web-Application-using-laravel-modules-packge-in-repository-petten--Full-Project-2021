
@extends('layouts.admin.app')
@section('admin_content')
    <div class="container">
        <form action="{{url('permission/store/'.$permission->id)}}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="role_id" class="form-control">
                            <option value="">Please select a role</option>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}"
                                        @if($role->id===$permission->role_id) selected @endif>{{$role->name}}</option>
                            @endforeach
                        </select>
                        @error('role_id')
                        <span class="text-danger">
                              {{$message}}
                          </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-md-8">
                    <table class="table responsive-table-input-matrix">
                        <thead>
                        <tr>
                            <th>Permission</th>
                            <th>Add</th>
                            <th>Edit</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>List</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>Roles</td>
                            <td>
                                <input type="checkbox" name="permission[role][add]"
                                       @isset($permission['permission']['role']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[role][edit]"
                                       @isset($permission['permission']['role']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[role][view]"
                                       @isset($permission['permission']['role']['view']) checked @endisset
                                       value="1">

                            </td>
                            <td>
                                <input type="checkbox" name="permission[role][delete]"
                                       @isset($permission['permission']['role']['delete']) checked @endisset
                                       value="1" >
                            </td>
                            <td>
                                <input type="checkbox" name="permission[role][list]"
                                       @isset($permission['permission']['role']['list']) checked @endisset
                                       value="1">
                            </td>

                        </tr>
                        <tr>
                            <td>Permissions</td>
                            <td>
                                <input type="checkbox" name="permission[permission][add]"
                                       @isset($permission['permission']['permission']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[permission][edit]" value="1"
                                       @isset($permission['permission']['permission']['edit']) checked @endisset
                                >
                            </td>
                            <td>
                                <input type="checkbox" name="permission[permission][view]" value="1"
                                       @isset($permission['permission']['permission']['view']) checked @endisset
                                ></td>
                            <td>
                                <input type="checkbox" name="permission[permission][delete]"
                                       @isset($permission['permission']['permission']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[permission][list]"
                                       @isset($permission['permission']['permission']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>
                        <tr>
                            <td>Users</td>
                            <td>
                                <input type="checkbox" name="permission[user][add]"
                                       @isset($permission['permission']['user']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[user][edit]"
                                       @isset($permission['permission']['user']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[user][view]"
                                       @isset($permission['permission']['user']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[user][delete]"
                                       @isset($permission['permission']['user']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[user][list]"
                                       @isset($permission['permission']['user']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>


                        <tr>
                            <td>Category</td>
                            <td>
                                <input type="checkbox" name="permission[category][add]"
                                       @isset($permission['permission']['category']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[category][edit]"
                                       @isset($permission['permission']['category']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[category][view]"
                                       @isset($permission['permission']['category']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[category][delete]"
                                       @isset($permission['permission']['category']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[category][list]"
                                       @isset($permission['permission']['category']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>


                        <tr>
                            <td>Service</td>
                            <td>
                                <input type="checkbox" name="permission[service][add]"
                                       @isset($permission['permission']['service']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[service][edit]"
                                       @isset($permission['permission']['service']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[service][view]"
                                       @isset($permission['permission']['service']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[service][delete]"
                                       @isset($permission['permission']['service']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[service][list]"
                                       @isset($permission['permission']['service']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>


                        <tr>
                            <td>Portfolio</td>
                            <td>
                                <input type="checkbox" name="permission[portfolio][add]"
                                       @isset($permission['permission']['portfolio']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[portfolio][edit]"
                                       @isset($permission['permission']['portfolio']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[portfolio][view]"
                                       @isset($permission['permission']['portfolio']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[portfolio][delete]"
                                       @isset($permission['permission']['portfolio']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[portfolio][list]"
                                       @isset($permission['permission']['portfolio']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>

                        <tr>
                            <td>Testimonial</td>
                            <td>
                                <input type="checkbox" name="permission[testimonial][add]"
                                       @isset($permission['permission']['testimonial']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[testimonial][edit]"
                                       @isset($permission['permission']['testimonial']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[testimonial][view]"
                                       @isset($permission['permission']['testimonial']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[testimonial][delete]"
                                       @isset($permission['permission']['testimonial']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[testimonial][list]"
                                       @isset($permission['permission']['testimonial']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>

                        <tr>
                            <td>Expenses</td>
                            <td>
                                <input type="checkbox" name="permission[expenses][add]"
                                       @isset($permission['permission']['expenses']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[expenses][edit]"
                                       @isset($permission['permission']['expenses']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[expenses][view]"
                                       @isset($permission['permission']['expenses']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[expenses][delete]"
                                       @isset($permission['permission']['expenses']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[expenses][list]"
                                       @isset($permission['permission']['expenses']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>



                        <tr>
                            <td>Slider</td>
                            <td>
                                <input type="checkbox" name="permission[slider][add]"
                                       @isset($permission['permission']['slider']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[slider][edit]"
                                       @isset($permission['permission']['slider']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[slider][view]"
                                       @isset($permission['permission']['slider']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[slider][delete]"
                                       @isset($permission['permission']['slider']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[slider][list]"
                                       @isset($permission['permission']['slider']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>




                        <tr>
                            <td>Contact</td>
                            <td>
                                <input type="checkbox" name="permission[contact][add]"
                                       @isset($permission['permission']['contact']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[contact][edit]"
                                       @isset($permission['permission']['contact']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[contact][view]"
                                       @isset($permission['permission']['contact']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[contact][delete]"
                                       @isset($permission['permission']['contact']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[contact][list]"
                                       @isset($permission['permission']['contact']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>






                        <tr>
                            <td>Quote</td>
                            <td>
                                <input type="checkbox" name="permission[quote][add]"
                                       @isset($permission['permission']['quote']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[quote][edit]"
                                       @isset($permission['permission']['quote']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[quote][view]"
                                       @isset($permission['permission']['quote']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[quote][delete]"
                                       @isset($permission['permission']['quote']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[quote][list]"
                                       @isset($permission['permission']['quote']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>





                        <tr>
                            <td>Client</td>
                            <td>
                                <input type="checkbox" name="permission[client][add]"
                                       @isset($permission['permission']['client']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[client][edit]"
                                       @isset($permission['permission']['client']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[client][view]"
                                       @isset($permission['permission']['client']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[client][delete]"
                                       @isset($permission['permission']['client']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[client][list]"
                                       @isset($permission['permission']['client']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>



                        <tr>
                            <td>Blog</td>
                            <td>
                                <input type="checkbox" name="permission[blog][add]"
                                       @isset($permission['permission']['blog']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[blog][edit]"
                                       @isset($permission['permission']['blog']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[blog][view]"
                                       @isset($permission['permission']['blog']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[blog][delete]"
                                       @isset($permission['permission']['blog']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[blog][list]"
                                       @isset($permission['permission']['blog']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>



                        <tr>
                            <td>Employee</td>
                            <td>
                                <input type="checkbox" name="permission[employee][add]"
                                       @isset($permission['permission']['employee']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[employee][edit]"
                                       @isset($permission['permission']['employee']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[employee][view]"
                                       @isset($permission['permission']['employee']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[employee][delete]"
                                       @isset($permission['permission']['employee']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[employee][list]"
                                       @isset($permission['permission']['employee']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>




                        <tr>
                            <td>websetting</td>
                            <td>
                                <input type="checkbox" name="permission[websetting][add]"
                                       @isset($permission['permission']['websetting']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[websetting][edit]"
                                       @isset($permission['permission']['websetting']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[websetting][view]"
                                       @isset($permission['permission']['websetting']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[websetting][delete]"
                                       @isset($permission['permission']['websetting']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[websetting][list]"
                                       @isset($permission['permission']['websetting']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
@endsection

