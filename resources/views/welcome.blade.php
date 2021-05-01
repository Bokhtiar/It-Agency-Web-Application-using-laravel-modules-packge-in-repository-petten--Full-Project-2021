@extends('layouts.user.app')
@section('container')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">
        @foreach ($sliders as $slider)
        @php
            $image = json_decode($slider->image);
        @endphp
        <div class="carousel-item active" style="background-image: url('{{asset($image[0])}}');">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2 class="text-center">{{$slider->name}}</h2>
              <p>{{$slider->description}}.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>
        @endforeach


      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->
<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container">

      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3>We've created more than <span>200 websites</span> this year!</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="{{url('quote')}}">Request a quote</a>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Check out <strong>our services</strong></h2>
      </div>

      <div class="row">
        @foreach ($services as $service)
        <div class="col-lg-4 col-md-6">
          <div class="icon-box" data-aos="fade-up">
            @php
                $image = json_decode($service->image);
            @endphp
            <div class="icon"> <img height="40px" width="40px" src="{{asset($image[0])}}" alt=""> </div>
            <h4 class="title"><a href="">{{$service->name}}</a></h4>
            <p class="description">{{$service->description}}</p>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Some of our <strong>recent works</strong></h2>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">

          <ul id="portfolio-flters">
            @foreach ($categories as $category)
                <li data-filter=".filter-app{{$category->id}}">{{$category->name}}</li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">
        @foreach ($portfolios as $portfolio)
        @php
                $image = json_decode($portfolio->cover_image);
            @endphp
        <div class="col-lg-4 col-md-6 portfolio-item filter-app{{$portfolio->category_id}}">
          <img src="{{asset($image[0])}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>App</p>
            <a href="{{asset($image[0])}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="{{url('portfolio/detail/'.$portfolio->slug)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Portfolio Section -->

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
