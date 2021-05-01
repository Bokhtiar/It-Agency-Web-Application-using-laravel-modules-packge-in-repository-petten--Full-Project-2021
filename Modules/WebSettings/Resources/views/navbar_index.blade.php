@extends('layouts.admin.app')
@section('admin_content')

    <h2 class="text-center">NAVBAR MENUS</h2><hr>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#sl</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($menus as $menu)
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$menu->name}}</td>
            <td>
                @if($menu->position == 1)
                <span>Navbar</span>
                @else
                <span>Footer</span>
                @endif
            </td>
            <td>{{$menu->description}}</td>
            <td>
                <a href="{{url('navbar/edit/'.$menu->id)}}">Edit</a>
                <a href="{{url('navbar/delete/'.$menu->id)}}">Delete</a>
            </td>
          </tr>
        @endforeach

        </tbody>
      </table>


@endsection
