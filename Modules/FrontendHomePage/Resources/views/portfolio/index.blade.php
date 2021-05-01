@extends('layouts.user.app')
@section('container')
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
                $images = json_decode($portfolio->cover_image);
            @endphp
        <div class="col-lg-4 col-md-6 portfolio-item filter-app{{$portfolio->category_id}}">
            @foreach ($images as $image)
            <img src="{{asset($image)}}" class="img-fluid" alt="">
            @endforeach

          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>App</p>
            <a href="{{asset($image[0])}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Portfolio Section -->
@endsection

