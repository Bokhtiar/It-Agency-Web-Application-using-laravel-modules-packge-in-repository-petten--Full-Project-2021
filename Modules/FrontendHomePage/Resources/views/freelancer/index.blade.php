@extends('layouts.user.app')
@section('container')
  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Our <strong>Freelancer's Team</strong></h2>
        <p>Members work better together than individually. When team members perform better as a group than alone, collective performance exceeds individual.</p>
      </div>

      <div class="row">
        @foreach ($freelancers as $team)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up">
            <div class="member-img">
                <img style="width:100% height:200px" src="{{asset($team->image)}}" class="img-fluid" alt="">

            </div>
            <div class="member-info">
              <h4>{{$team->name}}</h4>
              <span>{{$team->phone}}</span>
              <span>{{$team->email}}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Our Team Section -->
@endsection
