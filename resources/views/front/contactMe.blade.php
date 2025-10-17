@extends('frontTheme.default')

@section('title')
Contact Me
@endsection

@section('content')
<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact Me</h2>
    <p>Get in touch to discuss your next project, request a quote, or explore how I can help grow your online presence.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Address</h3>
            <p>Nana Mava Chowk, 150-Feet Ring Road, Rajkot, Gujarat, INDIA, 360005.</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Now</h3>
            <p>+91 9327313164</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email</h3>
            <p>hpmakwana29@gmail.com</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="col-lg-8">
        <form action="{{ route('contactMe.store')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
              @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
            @if ($errors->has('subject'))
              <span class="text-danger">{{ $errors->first('subject') }}</span>
            @endif
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" placeholder="Message" rows="5"></textarea>
            @if ($errors->has('message'))
              <span class="text-danger">{{ $errors->first('message') }}</span>
            @endif
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary rounded m-3">Send Message</button>
          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->
@endsection