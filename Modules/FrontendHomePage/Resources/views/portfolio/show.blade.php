@extends('layouts.user.app')
@section('container')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Portfolio Details</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      <h2 class="portfolio-title">This is an example of portfolio detail</h2>
      <div class="row">

        <div class="col-lg-8" data-aos="fade-right">
            @php
                $images = json_decode($portfolio->images)
            @endphp
          <div class="owl-carousel portfolio-details-carousel">
              @foreach ($images as $image)
              <img style="!important; height:400px; width:100%" src="{{asset($image)}}" class="img-fluid" alt="">
              @endforeach
          </div>
        </div>

        <div class="col-lg-4 portfolio-info" data-aos="fade-left">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: {{$portfolio->category_id}}</li>
            <li><strong>Client</strong>: {{$portfolio->compnay_name}}</li>
            <li><strong>Project date</strong>: {{$portfolio->created_at->diffForHumans()}}</li>
            <li><strong>Project URL</strong>: <a href="" target="blank">{{$portfolio->url}}</a></li>
          </ul>

          <p>
            {{$portfolio->description}}.
          </p>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->
@endsection
