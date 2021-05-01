@extends('layouts.user.app')
@section('container')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Navbar</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Daynamic Menu Show Page</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
   <!-- ======= Services Section ======= -->
   <section id="services" class="services">
    <div class="container">
        {{$menu->name}} <br>
        {{$menu->description}}
    </div>
    </section>

@endsection
