@extends('layouts.admin.app')
@section('admin_content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <img src="{{ asset($detail->image) }}" height="300px" width="300px" alt="">
        </div>
        <div class="col-md-4 col-sm-12">
            <p>
                <h3>{{ $detail->name }}</h3>
                <span>by {{ $detail->short_des }}</span>
                <p> <span class="h5">Software Version:</span> {{ $detail->software_version }}</p>
                <p> <span class="h5">Software Framwork:</span>   {{ $detail->software_framword }}</p>
                <p> <span class="h5">Software languse:</span>   {{ $detail->languse }}</p>
                <p> <a class="btn btn-primary text-center" href="{{ $detail->url }}">Visite Website</a>  </p>
            </p>
        </div>
        <div class="col-md-4 col-sm-12">
            <p>
                <span class="h5">Price:</span> {{ $detail->price }} Taka
            </p>
        </div>
    </div>
</div>

@endsection
