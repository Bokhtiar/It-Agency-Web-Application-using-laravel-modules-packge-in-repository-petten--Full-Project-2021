  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3> {{$topheader->company_name}}</h3>
            <p>
                {{$topheader->location}}<br>
             <br>
              <strong>Phone:</strong> {{$topheader->phone}}<br>
              <strong>Email:</strong> {{$topheader->email}}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
            @foreach($footers as $footer)
            @if($footer->footerSl==2)
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('http://localhost:8000/footer/'.$footer->slug)}}">{{$footer->name}}</a></li>
            @endif
            @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
                <ul>
                    @foreach($footers as $footer)
                    @if($footer->footerSl==3)
                      <li><i class="bx bx-chevron-right"></i> <a href="{{url('http://localhost:8000/footer/'.$footer->slug)}}">{{$footer->name}}</a></li>
                    @endif
                    @endforeach
                    </ul>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>About Us</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="">

        </div>
        <div class="credits">

        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
