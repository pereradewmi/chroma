<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - College Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('front-assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('front-assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="{{asset('front-assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: College
  * Template URL: https://bootstrapmade.com/college-bootstrap-education-template/
  * Updated: Jun 19 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-end">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('front-assets/img/logo.jpg')}}" alt="Chroma Logo" class="img-fluid">
        {{-- <h1 class="sitename">College</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li class="dropdown"><a href="about.html"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="admissions.html">Admissions</a></li>
              <li><a href="academics.html">Academics</a></li>
              <li><a href="faculty-staff.html">Faculty &amp; Staff</a></li>
              <li><a href="campus-facilities.html">Campus &amp; Facilities</a></li>
            </ul>
          </li>

          <li><a href="students-life.html">Students Life</a></li>
          <li><a href="news.html">News</a></li>
          <li><a href="events.html">Events</a></li>
          {{-- <li class="dropdown"><a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="news-details.html">News Details</a></li>
              <li><a href="event-details.html">Event Details</a></li>
              <li><a href="privacy.html">Privacy</a></li>
              <li><a href="terms-of-service.html">Terms of Service</a></li>
              <li><a href="404.html">Error 404</a></li>
              <li><a href="starter-page.html">Starter Page</a></li>
            </ul>
          </li> --}}

          {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="hero-wrapper">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-delay="100">
              <h1>A Life–Concept Store Exploring Every Shade of Art & Living</h1>
              <p>Inspired by the idea of chroma — the depth and intensity of color shaped by light and shade — this space celebrates creativity, expression, and mindful living.</p>
              {{-- <div class="stats-row">
                <div class="stat-item">
                  <span class="stat-number">96%</span>
                  <span class="stat-label">Employment Rate</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">12:1</span>
                  <span class="stat-label">Student-Teacher Ratio</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">50+</span>
                  <span class="stat-label">Programs</span>
                </div>
              </div> --}}
              <div class="action-buttons">
                <a href="#" class="btn-primary">Start Your Journey</a>
                <a href="#" class="btn-secondary">Virtual Tour</a>
              </div>
            </div>
            <div class="col-lg-6 hero-media" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{ asset('front-assets/img/home/header.jpg') }}" alt="Education" class="img-fluid main-image">
              <div class="image-overlay">
                <div class="badge-accredited">
                  <i class="bi bi-patch-check-fill"></i>
                  <span>Accredited Excellence</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="feature-cards-wrapper" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-book-fill"></i>
                </div>
                <div class="feature-content">
                  <h3>Innovative Curriculum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget lacus id tortor facilisis.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-card active">
                <div class="feature-icon">
                  <i class="bi bi-laptop-fill"></i>
                </div>
                <div class="feature-content">
                  <h3>Modern Facilities</h3>
                  <p>Donec gravida risus at sollicitudin luctus. Nullam feugiat odio vitae justo pharetra.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="feature-content">
                  <h3>Expert Faculty</h3>
                  <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="upcoming-event" data-aos="fade-up" data-aos-delay="400">
        <div class="container">
          <div class="event-content">
            <div class="event-date">
              <span class="day">15</span>
              <span class="month">NOV</span>
            </div>
            <div class="event-info">
              <h3>Spring Semester Open House</h3>
              <p>Join us to explore campus facilities, meet our faculty, and learn about scholarship opportunities.</p>
            </div>
            <div class="event-action">
              <a href="#" class="btn-event">RSVP Now</a>
              <span class="countdown">Starts in 3 weeks</span>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-content" data-aos="fade-up" data-aos-delay="200">
              <h3>Our Story</h3>
              <h2>Educating Minds, Inspiring Hearts</h2>
              <p>Chroma is a thoughtfully designed concept store envisioned and architected by Malinda (Pl. Chromas). Inspired by the idea of chroma — the depth and intensity of color shaped by light and shade — this space celebrates creativity, expression, and mindful living.</p>

              <div class="timeline">
                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h4>Where Color Becomes a Way of Life</h4>
                    <p>Chroma is more than a store — it is a living canvas. A space that brings together art, culture, and lifestyle under one roof, exploring how colors influence emotions, creativity, and everyday life. </p>
                    <br>
                    <p>From handcrafted pottery and expressive paintings to murals, antiques, and wellness practices, Chroma curates experiences that engage both the senses and the soul.</p>
                  </div>
                </div>

                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h4>Inspired by Color. Curated with Purpose.</h4>
                    <p>The essence of Chroma lies in the relationship between color, light, and form. Just as a hue changes with the presence of white or black, Chroma adapts and evolves — creating a dynamic environment where art, movement, and human connection coexist.</p>
                    <br>
                    <p>Each element in the space is intentionally chosen to reflect balance, creativity, and authenticity.</p>
                  </div>
                </div>

                {{-- <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h4>1998</h4>
                    <p>Suspendisse potenti. Nullam lacinia dictum auctor. Phasellus euismod sem at dui imperdiet, ac tincidunt mi placerat.</p>
                  </div>
                </div> --}}

                {{-- <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="timeline-content">
                    <h4>2010</h4>
                    <p>Vestibulum ultrices magna ut faucibus sollicitudin. Sed eget venenatis enim, nec imperdiet ex.</p>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-image" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{ asset('front-assets/img/home/chroma.jpg') }}" alt="Campus" class="img-fluid rounded">

              <div class="mission-vision" data-aos="fade-up" data-aos-delay="400">
                <div class="mission">
                  <h3>Our Mission</h3>
                  <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                </div>

                <div class="vision">
                  <h3>Our Vision</h3>
                  <p>Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-12">
            <div class="core-values" data-aos="fade-up" data-aos-delay="500">
              <h3 class="text-center mb-4">Core Values</h3>
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-book"></i>
                    </div>
                    <h4>Academic Excellence</h4>
                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                  </div>
                </div>

                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-people"></i>
                    </div>
                    <h4>Community Engagement</h4>
                    <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                  </div>
                </div>

                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-lightbulb"></i>
                    </div>
                    <h4>Innovation</h4>
                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                  </div>
                </div>

                <div class="col">
                  <div class="value-card">
                    <div class="value-icon">
                      <i class="bi bi-globe"></i>
                    </div>
                    <h4>Global Perspective</h4>
                    <p>Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Featured Programs Section -->
    <section id="featured-programs" class="featured-programs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Programs</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div class="program-banner">
              <div class="banner-image">
                <img src="{{ asset('front-assets/img/home/art.jpg') }}" alt="Program" class="img-fluid" loading="lazy">
                <div class="banner-badge">
                  <span class="badge-text">Popular</span>
                </div>
              </div>
              <div class="banner-info">
                <div class="program-header">
                  <h3>Painting Class</h3>
                  <div class="program-stats">
                    <span><i class="bi bi-people-fill"></i> 450+ Students</span>
                    <span><i class="bi bi-award-fill"></i> 95% Success Rate</span>
                  </div>
                </div>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="program-details">
                  <div class="detail-item">
                    <i class="bi bi-calendar-check"></i>
                    <span>Duration: 4 Years</span>
                  </div>
                  <div class="detail-item">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span>Bachelor's Degree</span>
                  </div>
                </div>
                <a href="#" class="discover-btn">Discover Program</a>
              </div>
            </div>
          </div><!-- End Program Banner -->

          <div class="col-lg-6">
            <div class="programs-grid">
              <div class="row g-3">
                <div class="col-12" data-aos="fade-left" data-aos-delay="200">
                  <div class="program-item">
                    <div class="item-icon">
                      <img src="{{ asset('front-assets/img/home/yoga.jpg') }}" alt="Program" class="img-fluid">
                    </div>
                    <div class="item-content">
                      <h4>Yoga Class & Sessions</h4>
                      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                      <div class="meta-info">
                        <span>3 Years</span>
                        <span>Master's Degree</span>
                      </div>
                    </div>
                    <div class="item-arrow">
                      <i class="bi bi-arrow-right"></i>
                    </div>
                  </div>
                </div>

                <div class="col-12" data-aos="fade-left" data-aos-delay="300">
                  <div class="program-item">
                    <div class="item-icon">
                      <img src="{{ asset('front-assets/img/home/pottery.jpg') }}" alt="Program" class="img-fluid">
                    </div>
                    <div class="item-content">
                      <h4>Pottery Class </h4>
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                      <div class="meta-info">
                        <span>2 Years</span>
                        <span>Certificate</span>
                      </div>
                    </div>
                    <div class="item-arrow">
                      <i class="bi bi-arrow-right"></i>
                    </div>
                  </div>
                </div>

                <div class="col-12" data-aos="fade-left" data-aos-delay="400">
                  <div class="program-item">
                    <div class="item-icon">
                      <img src="{{ asset('front-assets/img/education/education-8.webp') }}" alt="Program" class="img-fluid">
                    </div>
                    <div class="item-content">
                      <h4>Karate Class</h4>
                      <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe.</p>
                      <div class="meta-info">
                        <span>5 Years</span>
                        <span>Bachelor's Degree</span>
                      </div>
                    </div>
                    <div class="item-arrow">
                      <i class="bi bi-arrow-right"></i>
                    </div>
                  </div>
                </div>

                <div class="col-12" data-aos="fade-left" data-aos-delay="500">
                  <div class="program-item">
                    <div class="item-icon">
                      <img src="{{ asset('front-assets/img/education/education-10.webp') }}" alt="Program" class="img-fluid">
                    </div>
                    <div class="item-content">
                      <h4>VocLal Class </h4>
                      <p>Et harum quidem rerum facilis est et expedita distinctio nam libero tempore.</p>
                      <div class="meta-info">
                        <span>3 Years</span>
                        <span>Bachelor's Degree</span>
                      </div>
                    </div>
                    <div class="item-arrow">
                      <i class="bi bi-arrow-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Programs Grid -->

        </div>

      </div>

    </section><!-- /Featured Programs Section -->

    

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonial-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>

          <div class="swiper-wrapper">

            <!-- Testimonial Slide 1 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="testimonial-header">
                  <img src="{{ asset('front-assets/img/person/person-f-12.webp') }}" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit sed eiusmod tempor.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Jessica Martinez</h5>
                  <span>UX Designer</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 2 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="300">
                <div class="testimonial-header">
                  <img src="{{ asset('front-assets/img/person/person-m-8.webp') }}" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>David Rodriguez</h5>
                  <span>Software Engineer</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 3 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="400">
                <div class="testimonial-header">
                  <img src="{{ asset('front-assets/img/person/person-f-6.webp') }}" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Amanda Wilson</h5>
                  <span>Creative Director</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 4 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="500">
                <div class="testimonial-header">
                  <img src="{{ asset('front-assets/img/person/person-m-12.webp') }}" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Ryan Thompson</h5>
                  <span>Business Analyst</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 5 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="600">
                <div class="testimonial-header">
                  <img src="{{ asset('front-assets/img/person/person-f-10.webp') }}" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Rachel Chen</h5>
                  <span>Project Manager</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

          </div>

          <div class="swiper-navigation">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Events</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ asset('front-assets/img/education/events-3.webp') }}" alt="Workshop" class="img-fluid" loading="lazy">
                <div class="event-date-overlay">
                  <span class="date">MAR<br>18</span>
                </div>
              </div>
              <div class="event-details">
                <div class="event-category">
                  <span class="badge academic">Academic</span>
                  <span class="event-time">2:00 PM</span>
                </div>
                <h3>Advanced Mathematics Workshop</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="event-info">
                  <div class="info-row">
                    <i class="bi bi-geo-alt"></i>
                    <span>Room 205, Science Building</span>
                  </div>
                  <div class="info-row">
                    <i class="bi bi-people"></i>
                    <span>25 Participants</span>
                  </div>
                </div>
                <div class="event-footer">
                  <a href="#" class="register-btn">More Info</a>
                  <div class="event-share">
                    <i class="bi bi-share"></i>
                    <i class="bi bi-heart"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ asset('front-assets/img/education/events-5.webp') }}" alt="Tournament" class="img-fluid" loading="lazy">
                <div class="event-date-overlay">
                  <span class="date">APR<br>05</span>
                </div>
              </div>
              <div class="event-details">
                <div class="event-category">
                  <span class="badge sports">Sports</span>
                  <span class="event-time">9:00 AM</span>
                </div>
                <h3>Inter-School Basketball Championship</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class="event-info">
                  <div class="info-row">
                    <i class="bi bi-geo-alt"></i>
                    <span>Sports Complex Gym</span>
                  </div>
                  <div class="info-row">
                    <i class="bi bi-people"></i>
                    <span>8 Teams</span>
                  </div>
                </div>
                <div class="event-footer">
                  <a href="#" class="register-btn">More Info</a>
                  <div class="event-share">
                    <i class="bi bi-share"></i>
                    <i class="bi bi-heart"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ asset('front-assets/img/education/events-7.webp') }}" alt="Art Exhibition" class="img-fluid" loading="lazy">
                <div class="event-date-overlay">
                  <span class="date">APR<br>12</span>
                </div>
              </div>
              <div class="event-details">
                <div class="event-category">
                  <span class="badge arts">Arts</span>
                  <span class="event-time">6:00 PM</span>
                </div>
                <h3>Student Art Exhibition Opening</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <div class="event-info">
                  <div class="info-row">
                    <i class="bi bi-geo-alt"></i>
                    <span>Art Gallery, First Floor</span>
                  </div>
                  <div class="info-row">
                    <i class="bi bi-people"></i>
                    <span>Open to All</span>
                  </div>
                </div>
                <div class="event-footer">
                  <a href="#" class="register-btn">More Info</a>
                  <div class="event-share">
                    <i class="bi bi-share"></i>
                    <i class="bi bi-heart"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ asset('front-assets/img/education/events-2.webp') }}" alt="Science Fair" class="img-fluid" loading="lazy">
                <div class="event-date-overlay">
                  <span class="date">MAY<br>03</span>
                </div>
              </div>
              <div class="event-details">
                <div class="event-category">
                  <span class="badge academic">Academic</span>
                  <span class="event-time">10:00 AM</span>
                </div>
                <h3>Annual Science Fair Competition</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="event-info">
                  <div class="info-row">
                    <i class="bi bi-geo-alt"></i>
                    <span>Main Auditorium Hall</span>
                  </div>
                  <div class="info-row">
                    <i class="bi bi-people"></i>
                    <span>45 Projects</span>
                  </div>
                </div>
                <div class="event-footer">
                  <a href="#" class="register-btn">More Info</a>
                  <div class="event-share">
                    <i class="bi bi-share"></i>
                    <i class="bi bi-heart"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ asset('front-assets/img/education/events-8.webp') }}" alt="Community Event" class="img-fluid" loading="lazy">
                <div class="event-date-overlay">
                  <span class="date">MAY<br>15</span>
                </div>
              </div>
              <div class="event-details">
                <div class="event-category">
                  <span class="badge community">Community</span>
                  <span class="event-time">3:00 PM</span>
                </div>
                <h3>Family Fun Day Celebration</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <div class="event-info">
                  <div class="info-row">
                    <i class="bi bi-geo-alt"></i>
                    <span>School Playground Area</span>
                  </div>
                  <div class="info-row">
                    <i class="bi bi-people"></i>
                    <span>All Families</span>
                  </div>
                </div>
                <div class="event-footer">
                  <a href="#" class="register-btn">More Info</a>
                  <div class="event-share">
                    <i class="bi bi-share"></i>
                    <i class="bi bi-heart"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="event-item">
              <div class="event-image">
                <img src="{{ asset('front-assets/img/education/events-6.webp') }}" alt="Music Concert" class="img-fluid" loading="lazy">
                <div class="event-date-overlay">
                  <span class="date">JUN<br>02</span>
                </div>
              </div>
              <div class="event-details">
                <div class="event-category">
                  <span class="badge arts">Arts</span>
                  <span class="event-time">7:30 PM</span>
                </div>
                <h3>Summer Music Concert Finale</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class="event-info">
                  <div class="info-row">
                    <i class="bi bi-geo-alt"></i>
                    <span>Music Hall Theater</span>
                  </div>
                  <div class="info-row">
                    <i class="bi bi-people"></i>
                    <span>300 Seats</span>
                  </div>
                </div>
                <div class="event-footer">
                  <a href="#" class="register-btn">More Info</a>
                  <div class="event-share">
                    <i class="bi bi-share"></i>
                    <i class="bi bi-heart"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="events-navigation" data-aos="fade-up" data-aos-delay="500">
          <div class="row align-items-center">
            <div class="col-md-8">
              <div class="filter-tabs">
                <button class="filter-tab active" data-filter="all">All Events</button>
                <button class="filter-tab" data-filter="academic">Academic</button>
                <button class="filter-tab" data-filter="sports">Sports</button>
                <button class="filter-tab" data-filter="arts">Arts</button>
                <button class="filter-tab" data-filter="community">Community</button>
              </div>
            </div>
            <div class="col-md-4 text-end">
              <a href="#" class="view-calendar-btn">
                <i class="bi bi-calendar3"></i>
                View Calendar
              </a>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Events Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">College</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">MyWebsite</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> | <a href="https://bootstrapmade.com/tools/">DevTools</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('front-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('front-assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('front-assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('front-assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('front-assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('front-assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('front-assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('front-assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('front-assets/js/main.js')}}"></script>
  
</body>

</html>