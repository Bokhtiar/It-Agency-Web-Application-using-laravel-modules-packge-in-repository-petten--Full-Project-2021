

  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">

        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">{{$topheader->email}}</a>
        <i class="icofont-phone"></i> {{$topheader->phone}}
      </div>
      <div class="social-links">
        <a href="{{$topheader->twitter}}" class="twitter" target="_blank"><i class="icofont-twitter"></i></a>
        <a href="{{$topheader->facebook}}" class="facebook" target="_blank"><i class="icofont-facebook"></i></a>
        <a href="{{$topheader->instagram}}" class="instagram" target="_blank"><i class="icofont-instagram"></i></a>
        <a href="{{$topheader->skype}}" class="skype" target="_blank"><i class="icofont-skype"></i></a>
        <a href="{{$topheader->linkdin}}" class="linkedin" target="_blank"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{url('/')}}">{{$topheader->company_name}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('abouts/')}}">About</a></li>
          <li><a href="{{url('all-service/')}}">Services</a></li>
          <li><a href="{{url('all-portfolio')}}">Portfolio</a></li>
          <li><a href="{{url('all-testimonial')}}">Testimonials</a></li>
          <li><a href="{{url('all-blog')}}">Blog</a></li>
          @foreach ($navbars as $navbar)
          <li><a href="{{url('http://localhost:8000/navbar-menu/'.$navbar->slug)}}">{{$navbar->name}}</a></li>
          @endforeach

          <li><a href="{{url('contact/')}}">Contact</a></li>
          @if(Auth::check())
          <li class="drop-down"><a href="">{{Auth::user()->name}}</a>
            <ul>
            @if(Auth::user()->role->id==1)
              <li><a href="{{url('/')}}">Dashboard </a></li>
              <li><a href="{{url('logout/')}}">Logout</a></li>
            @elseif(Auth::user()->role->id==2)
              <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
              <li><a href="{{url('logout/')}}">Logout</a></li>
              @elseif(Auth::user()->role->id==3)
              <li><a href="{{url('manager/dashboard')}}">Dashboard</a></li>
              <li><a href="{{url('logout/')}}">Logout</a></li>
              @elseif(Auth::user()->role->id==4)
              <li><a href="{{url('staff/dashboard')}}">Dashboard</a></li>
              <li><a href="{{url('logout/')}}">Logout</a></li>
            @endif
            </ul>
          </li>
          @else
          <li><a href="{{url('login')}}">Login</a></li>
          @endif
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
