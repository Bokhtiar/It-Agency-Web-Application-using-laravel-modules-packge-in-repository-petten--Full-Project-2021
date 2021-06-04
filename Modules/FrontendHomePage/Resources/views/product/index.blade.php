@extends('layouts.user.app')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-12 col-lg-2">
            <ul class="list-group">
                <li class="list-group-item active my-3" aria-current="true">Categories</li>
                @foreach ($productcategories as $item)
                <li class="list-group-item"><a href="{{ url('category-ways-product/'.$item->id ) }}">{{ $item->name }}</a> </li>
                @endforeach
              </ul>
        </div>
        <div class="col-md-10 col-sm-12 col-lg-10">
            @foreach ($products as $item)
            <div class="row  my-3 bg-light p-2">

                <div class="col-md-4 col-sm-12">
                    <img src="{{ asset($item->image) }}" height="300px" width="300px" alt="">
                </div>
                <div class="col-md-4 col-sm-12">

                        <h4>{{ $item->name }}</h4>
                        <span>by {{ $item->short_des }}</span>
                        <p> <span class="h5">Software Version:</span> {{ $item->software_version }}</p>
                        <p> <span class="h5">Software Framwork:</span>   {{ $item->software_framword }}</p>
                        <p> <span class="h5">Software languse:</span>   {{ $item->languse }}</p>


                </div>
                <div class="col-md-4 col-sm-12">
                    <p>
                        <span class="h5">Price:</span> {{ $item->price }} Taka <br><br>
                    </p>
                    <p> <a class="btn btn-primary text-center" href="{{ $item->url }}">Visite Website</a> <a href="{{ url('cart/store/'.$item->id) }}" class="btn btn-primary text-center">ADD TO CART</a> </p>

                </div>




            </div>
            @endforeach
            <br>
        </div>
    </div>


</div>

@endsection
