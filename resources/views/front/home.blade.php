@extends('frontTheme.default')

@section('title')
Home
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


<!-- ----------- Home ----------- -->


<!-- Hero Section -->
<section id="hero" class="hero section light-background">

  <img src="{{ asset('frontTheme/assets/img/bg.jpg')}}" alt="">

  <div class="container" data-aos="zoom-out">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <h2>Harsh Makwana </h2>
        <p>I'm <span class="typed" data-typed-items="Web Developer, Freelancer, Web Designer">Web Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
        <div class="social-links">
          <a href="https://www.facebook.com/profile.php?id=100054807945874"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/haarsh_.29/"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/in/harsh-makwana-9a89b4345/"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->


<!-- ----------- About Me ----------- -->


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


<!-- ----------- Educational & Working Information ----------- -->


<!-- Resume Section -->
<section id="resume" class="resume section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Eductional & Working Information</h2>
    <p>My learning journey and work experience reflect a constant drive for growth, creativity, and innovation in the world of web development.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

        <h3 class="resume-title">Education</h3>
        <div class="resume-item">
          <h4>Bachelor of Science In Computer Appication &amp; Information Technology</h4>
          <h5>2020 - 2023</h5>
          <p><em>KS School of Business Management &amp; Information Technology, Ahmedabad, Gujarat, INDIA.</em></p>
          <p>Developed a strong foundation in programming, database management, and web technologies. Gained hands-on experience in building dynamic web applications using PHP, JavaScript, and MySQL.</p>
        </div><!-- Edn Resume Item -->

        <div class="resume-item">
          <h4>Master of Science In Computer Appication &amp; Information Technology</h4>
          <h5>2023 - 2025</h5>
          <p><em>KS School of Business Management &amp; Information Technology, Ahmedabad, Gujarat, INDIA.</em></p>
          <p>Focused on advanced software development, modern frameworks, and project-based learning. Currently enhancing expertise in Laravel, API integration, and full-stack web application development.</p>
        </div><!-- Edn Resume Item -->

      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <h3 class="resume-title">Professional Experience</h3>
        <div class="resume-item">
          <h4>Intern & Junior Web Developer</h4>
          <h5>feb, 2025 - Present</h5>
          <p><em>Aatman Infotech, Rajkot, Gujarat, INDIA. </em></p>
          <ul>
			<li>Collaborated with senior developers to design and develop responsive web applications using Laravel, Livewire, and Bootstrap.</li>
			<li>Assisted in backend development, database management, and API integration to enhance site functionality and performance.</li>
			<li>Developed reusable front-end components with HTML, CSS, JavaScript, and jQuery to improve UI consistency and user experience.</li>
			<li>Participated in code reviews, debugging sessions, and deployment processes to ensure high-quality and efficient project delivery.</li>
			<li>Worked closely with clients and team members to understand project requirements and deliver tailored web solutions on time.</li>
		</ul>
        </div><!-- Edn Resume Item -->

      </div>

    </div>

  </div>

</section><!-- /Resume Section -->


<!-- ----------- Services ----------- -->


<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>Providing end-to-end web development and design services tailored to your business needs. I build responsive, high-performing websites that ensure a seamless user experience and a strong digital presence.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item item-cyan position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
            </svg>
            <i class="bi bi-activity"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Web Development</h3>
          </a>
          <p>Transforming ideas into fully functional digital solutions with clean code, modern frameworks, and smooth performance on all devices.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item item-orange position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
            </svg>
            <i class="bi bi-chat-square-text"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Web Designing</h3>
          </a>
          <p>Creating unique and professional web designs that help your business stand out, communicate effectively, and convert visitors into customers.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item item-teal position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
            </svg>
            <i class="bi bi-easel"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Logo Designing</h3>
          </a>
          <p>Your logo is the face of your brand — I craft distinctive designs that communicate your values, vision, and professionalism at first glance.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item item-teal position-relative">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
            </svg>
            <i class="bi bi-calendar4-week icon"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Video Editing</h3>
          </a>
          <p>Creating visually compelling and high-quality videos that help brands connect with their audience, boost engagement, and deliver powerful messages.</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->


<!-- ----------- Contact Me ----------- -->


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