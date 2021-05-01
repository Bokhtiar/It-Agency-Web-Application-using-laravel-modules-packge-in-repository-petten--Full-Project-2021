@extends('layouts.user.app')
@section('container')


    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Blog</h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Blog</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container">

          <div class="row">

            <div class="col-lg-8 entries">

              @foreach ($blogs as $blog)
              <article class="entry" data-aos="fade-up">

                <div class="entry-img">
                    @php
                        $image = json_decode($blog->cover_image)
                    @endphp
                  <img width="100%" src="{{asset($image[0])}}" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                  <a href="blog-single.html">{{$blog->title}}</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Admin</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$blog->created_at->diffForHumans()}}</time></a></li>
                    <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html"></a></li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    {{$blog->short_des}}
                  </p>
                  <div class="read-more">
                    <a href="{{url('blog/detail/'.$blog->slug)}}">Read More</a>
                  </div>
                </div>

              </article><!-- End blog entry -->

              @endforeach

              <div class="blog-pagination">
                <ul class="justify-content-center">
                  <li class="disabled"><i class="icofont-rounded-left"></i></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                </ul>
              </div>

            </div><!-- End blog entries list -->

            <div class="col-lg-4">

              <div class="sidebar" data-aos="fade-left">

                <h3 class="sidebar-title">Search</h3>
                <div class="sidebar-item search-form">
                  <form action="">
                    <input type="text">
                    <button type="submit"><i class="icofont-search"></i></button>
                  </form>

                </div><!-- End sidebar search formn-->

                <h3 class="sidebar-title">Categories</h3>
                <div class="sidebar-item categories">
                  <ul>
                      @foreach ($categories as $category)
                      @if($category->position == "blog")
                      @php
                          $count = 0;
                      @endphp
                      <li><a href="#"> {{$category->name}} <span>({{$count +=$category->id == $blog->category_id}})</span></a></li>
                      @endif
                      @endforeach
                  </ul>

                </div><!-- End sidebar categories-->

                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                    @foreach ($blogs as $blog)
                    <div class="post-item clearfix">
                        @php
                            $image = json_decode($blog->cover_image);
                        @endphp
                        <img src="{{asset($image[0])}}" alt="">
                        <h4><a href="{{url('blog/detail/'.$blog->slug)}}">{{$blog->title}}</a></h4>
                        <time datetime="2020-01-01">{{$blog->created_at->diffForHumans()}}</time>
                      </div>
                    @endforeach
                </div><!-- End sidebar recent posts-->


              </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

          </div>

        </div>
      </section><!-- End Blog Section -->


@endsection
