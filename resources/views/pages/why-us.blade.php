@extends('index')
@section('content')
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout2 bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/page-titles/2.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <span class="pagetitle__subheading">Nationwide Service, Local Expertise</span>
            <h1 class="pagetitle__heading">Our technology allows you to offer the <span class="text-underlined">latest
                software</span> to your possible customers!
            </h1>
            <a href="about-us.html" class="btn btn__primary btn__icon btn__xl mt-20">
              <span>More About Us</span><i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      Secondary Nav
    =========================== -->
    @include('pages.includes.second_nav')
    <!-- ========================
      About Layout 2
    =========================== -->
    <section class="about-layout2 pb-130">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <div class="about__img">
              <img src="{{asset('frontend/assets/images/about/2.jpg')}}" alt="about">
              <div class="cta-banner">
                <h4 class="cta-banner__title mb-30">Thinking insights, verified driven research, and metrics data help
                  you make the right decisions!
                </h4>
                <a href="case-studies-modern.html" class="btn btn__primary btn__link">
                  <span>Read Case Studies</span><i class="icon-arrow-right icon-outlined"></i>
                </a>
              </div><!-- /.cta-banner -->
            </div><!-- /.about-img -->
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="heading-layout2 mb-30">
              <h2 class="heading__subtitle">Trusted By The World's Best Organizations</h2>
              <h3 class="heading__title mb-30">Manages service delivery across various business like, HR, Legal and
                other IT departments!!
              </h3>
            </div><!-- /heading -->
            <div class="about__Text">
              <p>Mintech has been helping organizations throughout the World to manage their IT with our unique approach
                to technology management and consultancy solutions. </p>
              <p>As one of the world's largest ITService Providers, our deep pool of over 130 certified engineers and IT
                support staff are ready to help.</p>
              <ul class="list-items list-unstyled mb-0">
                <li>Delivered in more than 450,000 client’s interactions </li>
                <li>Provided by experts to help challenge critical activities</li>
                <li>Complemented with peer perspectives and advice</li>
              </ul>
            </div>
          </div><!-- /.col-xl-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->

    <!-- ======================
    Features Layout 1
    ========================= -->
    <section class="features-layout1 pt-130">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/10.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="heading heading-layout2 mb-40">
              <h2 class="heading__subtitle color-body">Ensure High Availability of Your Services</h2>
              <h3 class="heading__title color-white">Easy solutions for all difficult IT problems, keep business safe &
                ensure high availability.</h3>
            </div>
            <a href="contact-us.html" class="btn btn__white btn__bordered btn__xl btn__icon minwidth-170">
              <span>Get Started</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="row features-wrapper mt-40">
              <!-- Feature item #1 -->
              <div class="col-sm-6 feature-item">
                <div class="feature-item__icon">
                  <i class="icon-statistic"></i>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <h4 class="feature-item__title mb-0">Software Asset Management</h4>
                  <a href="#"><i class="icon-arrow-right icon-outlined"></i></a>
                </div>
              </div><!-- /.feature-item -->
              <!-- Feature item #2 -->
              <div class="col-sm-6 feature-item">
                <div class="feature-item__icon">
                  <i class="icon-management"></i>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <h4 class="feature-item__title mb-0">Privileged Access Management</h4>
                  <a href="#"><i class="icon-arrow-right icon-outlined"></i></a>
                </div>
              </div><!-- /.feature-item -->
              <!-- Feature item #3 -->
              <div class="col-sm-6 feature-item">
                <div class="feature-item__icon">
                  <i class="icon-software"></i>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <h4 class="feature-item__title mb-0">Software License Management</h4>
                  <a href="#"><i class="icon-arrow-right icon-outlined"></i></a>
                </div>
              </div><!-- /.feature-item -->
              <!-- Feature item #4 -->
              <div class="col-sm-6 feature-item">
                <div class="feature-item__icon">
                  <i class="icon-relational"></i>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <h4 class="feature-item__title mb-0">Enterprise Service Management</h4>
                  <a href="#"><i class="icon-arrow-right icon-outlined"></i></a>
                </div>
              </div><!-- /.feature-item -->
            </div><!-- /.row -->
            <div class="row mt-50 contact-text">
              <div class="col-sm-9 px-0">
                <strong class="color-white">If you have any questions or need help, feel free to contact with our team,
                  or call
                  <a href="#">(002) 01061245741</a></strong>
              </div><!-- /.col-sm-9 -->
              <div class="col-sm-3 px-0 d-flex justify-content-end">
                <a href="contact-us.html" class="btn btn__primary btn__primary-style2 minwidth-120">Contact Us</a>
              </div><!-- /.col-sm-3 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features Layout 1 -->

    <!-- =========================== 
      portfolio layout 2
    ============================= -->
 
    <!-- ========================= 
      Testimonials layout 1
      =========================  -->
    <section class="testimonials testimonials-layout1 testimonials-has-top-img text-center">
          

      <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/4.jpg')}}" alt="backgrounds"></div>
      
      <div class="container">
      {{-- <h1 class="heading__title">Testimonials</h1> --}}

        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="heading">
              <h3 class="heading__title mb-0">1500 Satisfied Users Over The Globe</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="testimonials-wrapper">
              <div class="slider-with-navs">
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <p class="testimonial-item__desc">If you’re looking for a rewarding career and the chance to make an
                    impact, you’ve come to the right place. We will transform your business through our techniques!
                  </p>
                  <div class="testimonial-item__meta">
                    <h4 class="testimonial-item__meta__title">John Peter</h4>
                    <p class="testimonial-item__meta__desc">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <p class="testimonial-item__desc">My project was a simple & small task, but the persistence and
                    determination turned it into an awesome and great project which make me happy.
                  </p>
                  <div class="testimonial-item__meta">
                    <h4 class="testimonial-item__meta__title">Ahmed Abdallah</h4>
                    <p class="testimonial-item__meta__desc">Web Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <p class="testimonial-item__desc">If you’re looking for a rewarding career and the chance to make an
                    impact, you’ve come to the right place. We will transform your business through our techniques!
                  </p>
                  <div class="testimonial-item__meta">
                    <h4 class="testimonial-item__meta__title">Ayman</h4>
                    <p class="testimonial-item__meta__desc">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <p class="testimonial-item__desc">My project was a simple & small task, but the persistence and
                    determination turned it into an awesome and great project which make me happy.
                  </p>
                  <div class="testimonial-item__meta">
                    <h4 class="testimonial-item__meta__title">John Peter</h4>
                    <p class="testimonial-item__meta__desc">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <p class="testimonial-item__desc">My project was a simple & small task, but the persistence and
                    determination turned it into an awesome and great project which make me happy .
                  </p>
                  <div class="testimonial-item__meta">
                    <h4 class="testimonial-item__meta__title">John Peter</h4>
                    <p class="testimonial-item__meta__desc">7oroof Inc</p>
                  </div><!-- /.testimonial-meta -->
                </div><!-- /. testimonial-item -->
              </div>
    
              <div class="slider-nav">
                <div class="testimonial-item__thumb">
                  <img src="{{asset('frontend/assets/images/testimonials/thumbs/1.png')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial-item__thumb">
                  <img src="{{asset('frontend/assets/images/testimonials/thumbs/2.png')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial-item__thumb">
                  <img src="{{asset('frontend/assets/images/testimonials/thumbs/3.png')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial-item__thumb">
                  <img src="{{asset('frontend/assets/images/testimonials/thumbs/2.png')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial-item__thumb">
                  <img src="{{asset('frontend/assets/images/testimonials/thumbs/3.png')}}" alt="author thumb">
                </div><!-- /.testimonial-thumb -->
              </div><!-- /.slcik-nav -->
            </div>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.testimonials 1 -->

   <!-- =====================
           Clients
    ======================== -->

@endsection