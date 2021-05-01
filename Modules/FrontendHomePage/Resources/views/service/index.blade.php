@extends('layouts.user.app')
@section('container')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Services</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="row">
        @foreach ($services as $service)
        <div class="col-lg-4 col-md-6">
            @php
                $image = json_decode($service->image);
            @endphp
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"> <img height="40px" width="40px" src="{{asset($image[0])}}" alt=""> </div>
                <h4 class="title"><a href="">{{$service->name}}</a></h4>
                <p class="description">{{$service->description}}</p>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Some <strong>Features</strong> we do provide</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                <h4>Modi sit est</h4>
                <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-toggle="tab" href="#tab-2">
                <h4>Unde praesentium sed</h4>
                <p>Voluptas vel esse repudiandae quo excepturi.</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-toggle="tab" href="#tab-3">
                <h4>Pariatur explicabo vel</h4>
                <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
              </a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-toggle="tab" href="#tab-4">
                <h4>Nostrum qui quasi</h4>
                <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-7 ml-auto" data-aos="fade-left" data-aos-delay="100">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <figure>
                <img src="{{asset('frontend')}}/assets/img/features-1.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-2">
              <figure>
                <img src="{{asset('frontend')}}/assets/img/features-2.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-3">
              <figure>
                <img src="{{asset('frontend')}}/assets/img/features-3.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-4">
              <figure>
                <img src="{{asset('frontend')}}/assets/img/features-4.png" alt="" class="img-fluid">
              </figure>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

@endsection
