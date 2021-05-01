@extends('layouts.admin.app')
@section('admin_content')
{{$menu->name}}
{{$menu->link}}
{{$menu->description}}
@endsection
