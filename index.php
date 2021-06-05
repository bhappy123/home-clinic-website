<?php require('./constants/header.php') ?>

<!-- ======= Hero Section ======= -->
<section class="hero-section" id="hero">
  <div class="wave">
    <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
          <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
        </g>
      </g>
    </svg>
  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 hero-text-image">
        <div class="row">
          <div class="col-lg-7 text-center text-lg-left">
            <h1 data-aos="fade-right">
              Get hassle free health services at doorstep
            </h1>
            <p class="mb-5 d-sm-none data-aos=" fade-right" data-aos-delay="100">
              Home Clinic created a service platform to enable at-home care
              offerings while providing better experiences for employees and
              patients alike.
            </p>
            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
              <a href="#" class="btn btn-outline-white">Get started</a>
            </p>
          </div>
          <div class="col-lg-5 iphone-wrap">
            <img src="assets/img/phone_1.png" alt="Image" class="phone-1" data-aos="fade-right" />
            <img src="assets/img/phone_2.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Hero -->

<main id="main">
  <!-- ======= Home Section ======= -->
  <?php include('constants/about.php') ?>
  <?php include('constants/join-us.php') ?>

  <section class="section">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6" data-aos="fade-up">
          <h2 class="section-heading">Why Home Clinic?</h2>
        </div>
      </div>

      <?php require('./constants/why-us.php') ?>

    </div>
  </section>

  <?php include('constants/launching-soon.php') ?>
  <!-- Our Services -->

  <section class="section our-services">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6" data-aos="fade-up">
          <h2 class="section-heading">Our services</h2>
        </div>
      </div>
      <?php include('constants/services.php') ?>
    </div>
  </section>


  <?php include('constants/mission-n-vision.php') ?>

  <!-- Joining Process -->
  <!-- <section class="section">
        <div class="container">
          <div
            class="row justify-content-center text-center mb-5"
            data-aos="fade"
          >
            <div class="col-md-6 mb-5">
              <img
                src="assets/img/undraw_svg_1.svg"
                alt="Image"
                class="img-fluid"
              />
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="step">
                <span class="number">01</span>
                <h3>Sign Up</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem,
                  optio.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number">02</span>
                <h3>Create Profile</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem,
                  optio.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number">03</span>
                <h3>Enjoy the app</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem,
                  optio.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section> -->


  <!-- ======= Testimonials Section ======= -->
  <!-- <section class="section border-top border-bottom">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-4">
              <h2 class="section-heading">Review From Our Users</h2>
            </div>
          </div>
          <div class="row justify-content-center text-center">
            <div class="col-md-7">
              <div class="owl-carousel testimonial-carousel">
                <div class="review text-center">
                  <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>Excellent App!</h3>
                  <blockquote>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Eius ea delectus pariatur, numquam aperiam dolore nam
                      optio dolorem facilis itaque voluptatum recusandae
                      deleniti minus animi, provident voluptates consectetur
                      maiores quos.
                    </p>
                  </blockquote>

                  <p class="review-user">
                    <img
                      src="assets/img/person_1.jpg"
                      alt="Image"
                      class="img-fluid rounded-circle mb-3"
                    />
                    <span class="d-block">
                      <span class="text-black">Jean Doe</span>, &mdash; App User
                    </span>
                  </p>
                </div>

                <div class="review text-center">
                  <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>This App is easy to use!</h3>
                  <blockquote>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Eius ea delectus pariatur, numquam aperiam dolore nam
                      optio dolorem facilis itaque voluptatum recusandae
                      deleniti minus animi, provident voluptates consectetur
                      maiores quos.
                    </p>
                  </blockquote>

                  <p class="review-user">
                    <img
                      src="assets/img/person_2.jpg"
                      alt="Image"
                      class="img-fluid rounded-circle mb-3"
                    />
                    <span class="d-block">
                      <span class="text-black">Johan Smith</span>, &mdash; App
                      User
                    </span>
                  </p>
                </div>

                <div class="review text-center">
                  <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>Awesome functionality!</h3>
                  <blockquote>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Eius ea delectus pariatur, numquam aperiam dolore nam
                      optio dolorem facilis itaque voluptatum recusandae
                      deleniti minus animi, provident voluptates consectetur
                      maiores quos.
                    </p>
                  </blockquote>

                  <p class="review-user">
                    <img
                      src="assets/img/person_3.jpg"
                      alt="Image"
                      class="img-fluid rounded-circle mb-3"
                    />
                    <span class="d-block">
                      <span class="text-black">Jean Thunberg</span>, &mdash; App
                      User
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
  <!-- End Testimonials Section -->
</main>
<!-- End #main -->
<?php require('./constants/footer.php') ?>