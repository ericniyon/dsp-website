@extends('index')
@section('content')
  

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout8 bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/page-titles/8.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <span class="pagetitle__subheading">Trusted By The World's Best Organizations</span>
            <h1 class="pagetitle__heading">Our technology allows you to offer latest software to your possible
              customers!
            </h1>
            <a href="about-us.html" class="btn btn__primary btn__icon btn__xl mr-30">
              <span>More About Us</span><i class="icon-arrow-right"></i>
            </a>
            
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 cta-banner-wrapper d-flex justify-content-end">
            <div class="cta-banner">
              <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": true}'>
                <div class="cta-banner__item">
                  <div class="cta-banner__icon"><i class="icon-technician"></i></div>
                  <h4 class="cta-banner__title mb-0">Utilising latest timelineing solutions, and decades of work
                    experience.
                  </h4>
                </div><!-- /.cta-banner__item -->
                <div class="cta-banner__item">
                  <div class="cta-banner__icon"><i class="icon-funnel"></i></div>
                  <h4 class="cta-banner__title mb-0">Thinking insights, verified driven research, metrics make right
                    decisions!
                  </h4>
                </div><!-- /.cta-banner__item -->
              </div><!-- /.slick-carousel -->
            </div><!-- /.cta-banner -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Services Layout 2
    =========================== -->
    <section class="services-layout2 bg-no-repeat bg-size-auto bg-top-right pt-130 pb-90">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/6.png')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="heading heading-layout2 text-center mb-50">
              <h2 class="heading__subtitle">Nationwide Service, Local Expertise</h2>
              <h3 class="heading__title">Our technology allows you to offer the latest software to your possible
                customers!
              </h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-8 -->
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
                <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
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
                <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
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
                <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
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
                <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
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
                <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
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
                  <i class="icon-file"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">Backup & Recovery<br> Services</h4>
                <p class="service-item__desc">While you can???t predict unexpected events, we???ll ensure the right
                  precautions are in place to minimize downtime and keep you moving in the right direction.</p>
                <a href="it-solutions-single.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service-item__overlay bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="{{asset('frontend/assets/images/services/6.jpg')}}" alt="background"></div>
              </div><!-- /.service-item__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- ======================
    Features Layout 1
    ========================= -->
    <section id="features" class="features-layout1 pt-130 pb-220">
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

    <div class="bg-no-repeat bg-top">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/11.jpg')}}" alt="backgrounds"></div>
      <!-- =========================
        Contact layout 2
      =========================== -->
      <section id="contact" class="contact-layout2 pt-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="contact-panel d-flex flex-wrap mt--170">
                <div
                  class="contact-panel__banner bg-overlay bg-overlay-primary d-flex flex-column justify-content-between">
                  <div class="bg-img"><img src="{{asset('frontend/assets/images/banners/6.jpg')}}" alt="background"></div>
                  <div class="heading heading-layout2 heading-light">
                    <h3 class="heading__title mb-30">Perfect Solutions For Your Business!</h3>
                    <p class="heading__desc mb-30">DSP has been helping organizations throughout the World to manage
                      their
                      IT with our unique approach to technology management and consultancy solutions. </p>
                    <ul class="list-items list-items-light list-unstyled mb-40">
                      <li>Provided by experts to help challenge activities</li>
                      <li>Complemented with peer perspectives and advice</li>
                      <li>More than 450,000 client???s interactions </li>
                    </ul>
                  </div><!-- /.heading -->
                  <div class="d-flex flex-wrap">
                    <a href="request-quote.html" class="btn btn__secondary btn__secondary-style2 mr-30">
                      Request A Demo</a>
                    <a href="industries.html" class="btn btn__white btn__bordered btn__icon">
                      <span>Get Started</span><i class="icon-arrow-right"></i>
                    </a>
                  </div>
                </div><!-- /.contact-panel__banner -->
                <form class="contact-panel__form" method="post" action="{{asset('frontend/assets/php/contact.php')}}" id="contactForm">
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="contact-name">Name (required)</label>
                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                          required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="contact-email">Email (required)</label>
                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                          name="contact-email" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="contact-Phone">Inquiry (required)</label>
                        <select class="form-control">
                          <option value="0">IT Management Services</option>
                          <option value="1">IT Management Services 2</option>
                          <option value="2">IT Management Services 3</option>
                        </select>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="contact-Phone">Phone (Optional)</label>
                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                          name="contact-phone">
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <label for="contact-message">Additional Details (optional)</label>
                        <textarea class="form-control" placeholder="Describe your inquirey!" id="contact-message"
                          name="contact-message"></textarea>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center mb-20">
                        <input type="checkbox" class="custom-control-input" id="terms">
                        <label class="custom-control-label" for="terms">I accept the privacy and terms.</label>
                      </div>
                      <button type="submit" class="btn btn__secondary btn__xl btn__block">Submit Request </button>
                      <div class="contact-result"></div>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                </form><!-- /.contact-panel__form -->
              </div><!-- /.contact-panel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Contact layout 2 -->

      <!-- ========================= 
      Testimonials layout 1
      =========================  -->
      <section id="testimonials" class="testimonials testimonials-layout1 text-center pt-0">
        <div class="container">
          <div class="row mb-5">
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
                    <p class="testimonial-item__desc">If you???re looking for a rewarding career and the chance to make an
                      impact, you???ve come to the right place. We will transform your business through our techniques!
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
                    <p class="testimonial-item__desc">If you???re looking for a rewarding career and the chance to make an
                      impact, you???ve come to the right place. We will transform your business through our techniques!
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

    </div>

    <!-- =====================
           Clients
    ======================== -->
 
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

  </div><!-- /.wrapper -->
@endsection