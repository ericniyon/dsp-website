@extends('index')
@section('content')
<section class="slider">
      <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="{{asset('frontend/assets/images/sliders/1.jpg')}}" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide-item__content">
                  <h2 class="slide-item__title">Digital <br> Service Pump</h2>
                  <p class="slide-item__desc">We are experienced professionals who understand that It services is
                    changing,
                    and are true partners who care about your success. Our team provides a consultative approach on
                    emerging technology.</p>
                  <a href="projects-grid.html" class="btn btn__primary btn__primary-style2 btn__hi mr-30">Our
                    Services</a>
                  </a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="{{asset('frontend/assets/images/sliders/2.jpg')}}" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide-item__content">
                  <h2 class="slide-item__title">Thinking Insights & Verified Driven Research Data!</h2>
                  <p class="slide-item__desc">We are experienced professionals who understand that It services is
                    changing,
                    and are true partners who care about your success. Our team provides a consultative approach on
                    emerging technology.</p>
                  <a href="projects-grid.html" class="btn btn__primary btn__primary-style2 btn__hi mr-30">Our
                    Services</a>
                  </a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ========================
      About Layout 5
    =========================== -->
    <section class="about-layout5 pt-130 pb-0">
      <div class="container">
        <div class="row heading-layout2">
          <div class="col-12">
            <h2 class="heading__subtitle color-body">Nation Service, Local Expertise</h2>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h3 class="heading__title mb-30">Our technology allows you to provide <span class="underlined-text">better service
                </span> to your  customers!
            </h3>
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 offset-xl-1">
            <div class="about__Text">
              <p>Improve efficiency, leverage tech, and provide better customer experiences with the modern technology
                services available allover the world. Our skilled personnel, utilising the latest processing software,
                combined with decades of experience.</p>
            </div>
            <ul class="list-items list-items-layout2 list-horizontal list-unstyled d-flex flex-wrap mt-40 mb-30">
              <li>Eliminate Repeat Entry</li>
              <li>Simpliy Communication</li>
              <li>Drive Business Process</li>
              <li>Speed Up Transactions</li>
              <li>Structure Data & Docs</li>
              <li>Automate Workflows</li>
            </ul>
            
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 5 -->

    <!-- ========================
        Services Layout 2
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
                <div class="bg-img"><img src="assets/images/services/3.jpg" alt="background"></div>
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
                <div class="bg-img"><img src="assets/images/services/4.jpg" alt="background"></div>
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
                <div class="bg-img"><img src="assets/images/services/5.jpg" alt="background"></div>
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
                <div class="bg-img"><img src="assets/images/services/5.jpg" alt="background"></div>
              </div><!-- /.service-item__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- ========================
      About Layout 2
    =========================== -->
    <section class="about-layout2 pb-130 bg-gray">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <div class="about__img">
              <img src="assets/images/about/2.jpg" alt="about">
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
              <p>We has been helping organizations throughout the World to manage their IT with our unique approach
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
    </section>

    <!-- =========================== 
      portfolio layout 2
    ============================= -->
    <section class="pricing pt-0 bg-gray">
      <div class="container">
        <div class="row row-no-gutter pricing-wrapper">
          <!-- pricing item #1-->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="pricing-item">
              <div>
                <div class="pricing-item__header">
                  <div class="pricing-item__price">
                    <span class="pricing-item__currency">$</span><span>50</span><span class="pricing-item__time">/Card</span>
                  </div>
                  <!-- <h5 class="pricing-item__title mb-0">Starter Plan</h5> -->
                </div><!-- /.pricing-item__header  -->
                <div class="pricing-item__content">
                  <p class="pricing-item__desc">Fast project turnaround time, substantial cost savings &amp; quality
                    standards.
                  </p>
                  <ul class="pricing-item__list list-items list-items-layout2 list-unstyled">
                    <li>Five Brand Monitors</li>
                    <li>Five Keyword Monitors</li>
                    <li>Full Social Profiles</li>
                  </ul>
                </div><!-- /.pricing-item__content  -->
              </div>
              <div class="pricing-item__footer">
                <a href="#" class="btn btn__secondary btn__block btn__icon">
                  <span>Purchase Now</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.pricing-item__footer  -->
            </div><!-- /.pricing-item -->
          </div><!-- /.col-lg-4 -->
          <!-- pricing item #2-->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="pricing-item">
              <div>
                <div class="pricing-item__header">
                  <div class="pricing-item__price">
                    <span class="pricing-item__currency">$</span><span>70</span><span class="pricing-item__time">/DSP System </span>
                  </div>
                  <h5 class="pricing-item__title mb-0">Basic Plan</h5>
                </div><!-- /.pricing-item__header  -->
                <div class="pricing-item__content">
                  <p class="pricing-item__desc">Fast project turnaround time, substantial cost savings &amp; quality
                    standards.
                  </p>
                  <ul class="pricing-item__list list-items list-items-layout2 list-unstyled">
                    <li>Five Brand Monitors</li>
                    <li>Five Keyword Monitors</li>
                    <li>Full Social Profiles</li>
                    <li>500 Search Results </li>
                  </ul>
                </div><!-- /.pricing-item__content  -->
              </div>
              <div class="pricing-item__footer">
                <a href="#" class="btn btn__primary btn__block btn__icon">
                  <span>Purchase Now</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.pricing-item__footer  -->
            </div><!-- /.pricing-item -->
          </div><!-- /.col-lg-4 -->
          <!-- pricing item #3-->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="pricing-item">
              <div>
                <div class="pricing-item__header">
                  <div class="pricing-item__price">
                    <span class="pricing-item__currency">$</span><span>90</span><span class="pricing-item__time">/DSPFull plan</span>
                  </div>
                  <h5 class="pricing-item__title mb-01">Advanced Plan</h5>
                </div><!-- /.pricing-item__header  -->
                <div class="pricing-item__content">
                  <p class="pricing-item__desc">Fast project turnaround time, substantial cost savings &amp; quality
                    standards.
                  </p>
                  <ul class="pricing-item__list list-items list-items-layout2 list-unstyled">
                    <li>Five Brand Monitors</li>
                    <li>Five Keyword Monitors</li>
                    <li>Basic Quota </li>
                    <li>PDF reports</li>
                    <li>Full Social Profiles</li>
                    <li>500 Search Results </li>
                  </ul>
                </div><!-- /.pricing-item__content  -->
              </div>
              <div class="pricing-item__footer">
                <a href="#" class="btn btn__secondary btn__block btn__icon">
                  <span>Purchase Now</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.pricing-item__footer  -->
            </div><!-- /.pricing-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 d-flex flex-wrap justify-content-center align-items-center mt-10">
            <a href="contact-us.html" class="btn btn__secondary btn__bordered mx-3">Find Your Solution</a>
            <a href="industries.html" class="btn btn__primary btn__link mx-3">
              <span>Explore All Products</span><i class="icon-arrow-right icon-outlined"></i>
            </a>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <!-- ========================= 
      Testimonials layout 1
      =========================  -->
    


   
    <!-- =========================
       Banner layout 1
      =========================== -->
    <section class="banner-layout1 pt-90 pb-90 bg-overlay bg-overlay-primary">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/banners/3.jpg')}}" alt="background"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="col-inner">
              <div class="heading-layout2 heading-light mb-40">
                <h3 class="heading__title mb-30">Timely service delivery & incident resolutions!!</h3>
                <p class="heading__desc">Provide users with appropriate view and access permissions to requests,
                  problems,
                  changes, contracts, assets, solutions, and reports with our experienced professionals.
                </p>
                <p class="heading__desc">As one of the world's largest ITService Providers, our deep pool of certified
                  engineers and IT staff are ready to help.
                </p>
              </div><!-- /.heading -->
              
              <div class="client-story mt-150">
                
                <p class="client__quote">“We never knew the importance of IT help desk ticketing software until we got
                  one, and got the
                  right one. We chose DSP Service Desk Plus and it has never disappointed us.”
                </p>
                <div>
                  <span class="client__signature">Martin Qube,</span>
                  <span class="client__signature__title">Digital Media Manager</span>
                </div>
              </div><!-- /.client-story -->
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="contact-panel">
              <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <h4 class="contact-panel__title">Request A Service</h4>
                  </div> <!-- /.col-lg-12 -->
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
              </form>
            </div>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 1 -->

    <!-- ======================
      Blog Grid
    ========================= -->
   <!-- =========================
      Awards
      =========================== -->
    <section class="awards pt-20 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading-layout2">
              <h3 class="heading__title mb-50">Our Missions and actions</h3>
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
                <h4 class="fancybox-item__title"> Design</h4>
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
@endsection