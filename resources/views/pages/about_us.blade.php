@extends('index')
@section('content')
 
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/page-titles/1.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading">About Us</h1>
            <p class="pagetitle__desc">We are experienced professionals who understand that It services is changing, and
              are true partners who care about your success. Our team provides a consultative approach on emerging
              technology.
            </p>
            <a href="projects-grid.html" class="btn btn__primary mr-30">Our Services</a>
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
      Sevices Layout 1
    =========================== -->
    <section class="services-layout3 pt-40 pb-100">
      <div class="container">
      <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <div class="heading mb-50">
              <!-- <h2 class="heading__subtitle color-body">Latest Case Studies</h2> -->
              <h3 class="heading__title">Our Services</h3>
            </div><!-- /heading -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- service item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <div class="service-item__icon">
                  <i class="icon-server"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">IT Management <br> Services</h4>
                <p class="service-item__desc">IT management service that manages and oversees the IT infrastructure of
                  organization responsible for network and operations which includes data communication.</p>
                <!-- <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a> -->
                <a href="services-it-solutions-single.html" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
              </div><!-- /.service-content -->
              <div class="service-item__overlay bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="{{asset('frontend/assets/images/services/1.jpg')}}" alt="background"></div>
              </div><!-- /.service-item__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <div class="service-item__icon">
                  <i class="icon-cloud"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">Cyber Security<br> Services</h4>
                <p class="service-item__desc">Drive your business and manage risk with a global industry leader in
                  cybersecurity, cloud, and managed security services and extend your team with leading experts.</p>
                <!-- <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a> -->
                <a href="services-it-solutions-single.html" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
              </div><!-- /.service-content -->
              <div class="service-item__overlay bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="{{asset('frontend/assets/images/services/2.jpg')}}" alt="background"></div>
              </div><!-- /.service-item__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <div class="service-item__icon">
                  <i class="icon-hosting"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">Cloud Computing<br> Services</h4>
                <p class="service-item__desc">Cloud computing is the on-demand availability of computer system
                  resources, especially data storage and computing power, without direct active management by the user.
                </p>
                <!-- <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a> -->
                <a href="services-it-solutions-single.html" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
              </div><!-- /.service-content -->
              <div class="service-item__overlay bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="{{asset('frontend/assets/images/services/3.jpg')}}" alt="background"></div>
              </div><!-- /.service-item__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <div class="service-item__icon">
                  <i class="icon-technician"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">IT Consulting <br> Services</h4>
                <p class="service-item__desc">Trying to solve all your IT challenges internally can become costly and a
                  major distraction, Leveraging knowledgeable IT consulting firms like ushelps your business remain
                  secure.</p>
                <!-- <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a> -->
                <a href="services-it-solutions-single.html" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
              </div><!-- /.service-content -->
              <div class="service-item__overlay bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="{{asset('frontend/assets/images/services/4.jpg')}}" alt="background"></div>
              </div><!-- /.service-item__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #5 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <div class="service-item__icon">
                  <i class="icon-programming"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">Software Dev<br> Services</h4>
                <p class="service-item__desc">With shorter product cycles, rapid innovation, and mergers contributing to
                  constant change, you are faced with making business decisions every day to advance your mission.</p>
                <!-- <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a> -->
                <a href="services-it-solutions-single.html" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
              </div><!-- /.service-content -->
              <div class="service-item__overlay bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="{{asset('frontend/assets/images/services/5.jpg')}}" alt="background"></div>
              </div><!-- /.service-item__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <!-- service item #6 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <div class="service-item__icon">
                  <i class="icon-programming"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">Software Dev<br> Services</h4>
                <p class="service-item__desc">With shorter product cycles, rapid innovation, and mergers contributing to
                  constant change, you are faced with making business decisions every day to advance your mission.</p>
                <!-- <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a> -->
                <a href="services-it-solutions-single.html" class="btn btn__secondary">
                <span>Read More</span>
                <i class="icon-arrow-right"></i>
              </a>
              </div><!-- /.service-content -->
              <div class="service-item__overlay bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="{{asset('frontend/assets/images/services/5.jpg')}}" alt="background"></div>
              </div><!-- /.service-item__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- ======================
    History Timeline
    ========================= -->
    <section class="team-layout1 text-center pb-40">
      <div class="container">
      <h3 class="heading__title">Our Team</h3>
        <div class="row">
          <!-- Member #1 -->
          
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('frontend/assets/images/team/1.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons  justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Mike Dooley</h5>
                <p class="member__desc">Chief Executive</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #2 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('frontend/assets/images/team/2.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Michael Brian</h5>
                <p class="member__desc">Managing Director</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #3 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('frontend/assets/images/team/3.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Chris Wensel</h5>
                <p class="member__desc">Vice President</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
        </div> <!-- /.row -->
        <div class="row">
          <!-- Member #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('frontend/assets/images/team/4.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Richard Muldoone</h5>
                <p class="member__desc">Legal Officer</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-3 -->
          <!-- Member #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('frontend/assets/images/team/5.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons  justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Maria Andaloro</h5>
                <p class="member__desc">HR Officer</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-3 -->
          <!-- Member #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('frontend/assets/images/team/6.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Marian Chris</h5>
                <p class="member__desc">Global Sales</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-3 -->
          <!-- Member #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('frontend/assets/images/team/7.jpg')}}" alt="member img">
                <div class="member__hover">
                  <div class="member__content-inner">
                    <ul class="social-icons justify-content-center list-unstyled mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div><!-- /.member-content-inner -->
                </div><!-- /.member-hover -->
              </div><!-- /.member-img -->
              <div class="member__info">
                <h5 class="member__name">Jack Mudson</h5>
                <p class="member__desc">Manager</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-3 -->
        </div> <!-- /.row -->
      </div><!-- /.container -->
    </section>
    <!-- =========================
      Awards
      =========================== -->
    <section class="awards pt-20">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading-layout2">
              <h3 class="heading__title mb-50">Our awards and recognitions</h3>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row awards-wrapper">
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #1 -->
            <div class="fancybox-item">
              <div class="fancybox-item__icon__img">
                <img src="{{asset('frontend/assets/images/awards/icons/1.png')}}" alt="icon">
              </div><!-- /.fancybox-item__icon__img -->
              <div class="fancybox-item__content">
                <h4 class="fancybox-item__title">CSS Design Award</h4>
                <p class="fancybox-item__desc">A web design & development award platform for digital folk, UI/UX peeps
                  and inspiring leaders of the web.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #2 -->
            <div class="fancybox-item">
              <span class="pinned-ribbon"></span>
              <div class="fancybox-item__icon__img">
                <img src="{{asset('frontend/assets/images/awards/icons/2.png')}}" alt="icon">
              </div><!-- /.fancybox-item__icon__img -->
              <div class="fancybox-item__content">
                <h4 class="fancybox-item__title">W3 Design Award</h4>
                <p class="fancybox-item__desc">Awards celebrates digital by honoring outstanding Websites, Web
                  Marketing, Video, Sites, Apps & Social content.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #3 -->
            <div class="fancybox-item">
              <div class="fancybox-item__icon__img">
                <img src="{{asset('frontend/assets/images/awards/icons/3.png')}}" alt="icon">
              </div><!-- /.fancybox-item__icon__img -->
              <div class="fancybox-item__content">
                <h4 class="fancybox-item__title">The FWA Award</h4>
                <p class="fancybox-item__desc">Showcasing innovation every day since 2000, our mission is to showcase
                  cutting edge creativity, regardless
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #4 -->
            <div class="fancybox-item">
              <div class="fancybox-item__icon__img">
                <img src="{{asset('frontend/assets/images/awards/icons/4.png')}}" alt="icon">
              </div><!-- /.fancybox-item__icon__img -->
              <div class="fancybox-item__content">
                <h4 class="fancybox-item__title">WWW Awards</h4>
                <p class="fancybox-item__desc">The awards that recognize the talent and effort of the best web
                  designers, developers and agencies in the world.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <p class="fz-16 my-4">Trusted by the world's best organizations, for 15 years and running, it has been
              delivering
              smiles to hundreds of IT advisors, developers, users, and business owners.
            </p>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-7 d-flex justify-content-end">
            <a href="#" class="btn btn__primary btn__link">
              <span>Explore All Awards</span><i class="icon-arrow-right icon-outlined"></i>
            </a>
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Awards -->

    <!-- ========================= 
      Testimonials layout 1
      =========================  -->
    <section class="testimonials testimonials-layout1 testimonials-has-top-img text-center">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/4.jpg')}}" alt="backgrounds"></div>
      
      <div class="container">
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
    <section class="clients border-top pt-50 pb-50">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <div class="client">
                <img src="{{asset('frontend/assets/images/clients/1.png')}}" alt="client">
                <img src="{{asset('frontend/assets/images/clients/1.png')}}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('frontend/assets/images/clients/2.png')}}" alt="client">
                <img src="{{asset('frontend/assets/images/clients/2.png')}}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('frontend/assets/images/clients/3.png')}}" alt="client">
                <img src="{{asset('frontend/assets/images/clients/3.png')}}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('frontend/assets/images/clients/4.png')}}" alt="client">
                <img src="{{asset('frontend/assets/images/clients/4.png')}}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('frontend/assets/images/clients/5.png')}}" alt="client">
                <img src="{{asset('frontend/assets/images/clients/5.png')}}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('frontend/assets/images/clients/6.png')}}" alt="client">
                <img src="{{asset('frontend/assets/images/clients/6.png')}}" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('frontend/assets/images/clients/7.png')}}" alt="client">
                <img src="{{asset('frontend/assets/images/clients/7.png')}}" alt="client">
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients -->

    <!-- =========================
       Banner layout 2
      =========================== -->
    
    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Recent Articles</h2>
              <h3 class="heading__title">Resource Library</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Blog Item #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="post-item">
              <div class="post-item__img">
                <a href="blog-single-post.html">
                  <img src="{{asset('frontend/assets/images/blog/grid/1.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">
                  <div class="post-item__meta__cat">
                    <a href="#">Consulting</a><a href="#">Sales</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post-item__meta__date">May 13, 2020</span>
                </div>
                <h4 class="post-item__title"><a href="#">Five Ways to Develop a World Class Sales Operations
                    Function</a>
                </h4>
                <p class="post-item__desc">Outsourcing IT infrastructure is a concept that has been around for a while.
                  Characterized in terms of technicians and engineers, workstations and servers, the idea of outsourcing
                  your basic IT needs...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item #2 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="post-item">
              <div class="post-item__img">
                <a href="blog-single-post.html">
                  <img src="{{asset('frontend/assets/images/blog/grid/2.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">
                  <div class="post-item__meta__cat">
                    <a href="#">Tech</a><a href="#">Communications</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post-item__meta__date">April 17, 2020</span>
                </div>
                <h4 class="post-item__title"><a href="#">Succession Risks That Threaten Your Leadership Strategy</a>
                </h4>
                <p class="post-item__desc">Today’s organizations need a quality bench of leaders to drive business
                  outcomes and satisfy employees, customers and investors who now demand more transparency and
                  accountability...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item #3 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="post-item">
              <div class="post-item__img">
                <a href="blog-single-post.html">
                  <img src="{{asset('frontend/assets/images/blog/grid/3.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">
                  <div class="post-item__meta__cat">
                    <a href="#">Digital Business</a><a href="#">Cloud</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post-item__meta__date">March 20, 2020</span>
                </div>
                <h4 class="post-item__title"><a href="#">What Do Employee Engagement Surveys Tell You About
                    Employee?</a>
                </h4>
                <p class="post-item__desc">Outsourcing IT infrastructure is a concept that has been around for a while.
                  Characterized in terms of technicians and engineers, workstations and servers, the idea of outsourcing
                  your basic IT needs...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->


    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

@endsection
    
