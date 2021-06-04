@extends('layouts.user.app')
@section('container')
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>About</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= About Us Section ======= -->
  <section id="about-us" class="about-us">
    <div class="container">

      <div class="row no-gutters">
        <div class=" col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right">
            @php
            $image = json_decode($abouts->image);
        @endphp
            <img height="250px" width="100%" src="{{asset($image[0])}}" alt="">
        </div>


        <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
          <div class="content d-flex flex-column justify-content-center">
            <h3 data-aos="fade-up">{{$abouts->title}}</h3>
            <p>
              {{$abouts->description}}
            </p>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Our <strong>Team</strong></h2>
        <p>Members work better together than individually. When team members perform better as a group than alone, collective performance exceeds individual.</p>
      </div>

      <div class="row">
        @foreach ($teams as $team)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up">
            <div class="member-img">
                @php
                    $image = json_decode($team->image)
                @endphp
              <img style="width:100% height:200px" src="{{asset($image[0])}}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>{{$team->name}}</h4>
              <span>{{$team->designation}}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Our Team Section -->

  <!-- ======= Our Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Our <strong>Clients</strong></h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
        @foreach ($clients as $client)
        <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
                @php
                    $image = json_decode($client->image);
                @endphp
              <img src="{{asset($image[0])}}" class="img-fluid" alt="">
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Our Clients Section -->
@endsection
