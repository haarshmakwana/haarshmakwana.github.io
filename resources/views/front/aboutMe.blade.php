@extends('frontTheme.default')

@section('title')
About Me
@endsection

<style>
  /* Base transition for smooth animation */
.progress-bar {
  transition: all 0.4s ease-in-out;
}

/* Optional: Change skill label color on hover */
.progress:hover .skill span {
  color: #007bff;
  transition: color 0.3s ease;
}

.progress:hover .progress-bar {
  background: linear-gradient(90deg, #007bff, #00c6ff);
  box-shadow: 0 0 20px rgba(0, 198, 255, 0.8);
  transform: scaleY(1.05);
}
</style>

@section('content')
<!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About Me</h2>
    <p>Curious by nature and driven by creativity, I love solving real-world problems through code. Every project is an opportunity to learn, innovate, and craft something meaningful that leaves a lasting digital impact.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 justify-content-center">
      <div class="col-lg-4">
        <img src="{{ asset('frontTheme/assets/img/hm.jpeg')}}" class="img-fluid rounded" alt="">
      </div>
      <div class="col-lg-8 content">
        <h2>Web Developer &amp; Web Designer.</h2>
        <p class="fst-italic py-3">
          I’m a passionate and detail-oriented Web Developer with a strong focus on creating user-friendly, responsive, and visually appealing websites. I enjoy turning complex problems into simple, beautiful, and intuitive digital experiences. With a solid foundation in front-end and back-end development, I build clean, efficient, and scalable solutions. I’m constantly exploring new technologies and improving my skills to stay up to date with modern web standards. My goal is to help individuals and businesses bring their ideas to life through powerful, functional, and elegant web applications.
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Harsh Makwana</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+91 9327313164</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Rajkot, Gujarat, India.</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>M.Sc (CA&IT)</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>hpmakwana29@gmail.com</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
            </ul>
          </div>
        </div>
        <p class="py-3">
          My approach to web development centers around understanding the client’s vision and transforming it into a digital reality. I aim to deliver websites that not only meet technical standards but also resonate with the target audience and achieve real results.
        </p>
      </div>
    </div>

  </div>

</section><!-- /About Section -->


<!-- ----------- Stats Section ----------- -->


<!-- Stats Section -->
<section id="stats" class="stats section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
        <i class="bi bi-emoji-smile"></i>
        <div class="stats-item">
          <span data-purecounter-start="0" data-purecounter-end="1.5" data-purecounter-duration="1" class="purecounter"></span>
          <p>Year Experience</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
        <i class="bi bi-journal-richtext"></i>
        <div class="stats-item">
          <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
          <p>Projects</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
        <i class="bi bi-headset"></i>
        <div class="stats-item">
          <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hours Of Support</p>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section><!-- /Stats Section -->


<!-- ----------- Skills ----------- -->


<!-- Skills Section -->
<section id="skills" class="skills section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Skills</h2>
    <p>Here are the core skills I’ve developed through hands-on experience in building modern, responsive, and user-friendly websites.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row skills-content skills-animation">

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><span>Bootstrap</span> <i class="val">95%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><span>jQuery</span> <i class="val">85%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><span>Laravel</span> <i class="val">75%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

      </div>

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill"><span>CSS</span> <i class="val">95%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><span>JavaScriptS</span> <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><span>Php</span> <i class="val">78%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><span>Livewire</span> <i class="val">70%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

      </div>

    </div>

  </div>

</section><!-- /Skills Section -->
@endsection