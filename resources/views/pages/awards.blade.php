@extends('index')
@section('content')
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout4 text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/page-titles/4.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading mb-10">Awards</h1>
            <p class="pagetitle__desc">Trusted by the world's best organizations, for 15 years and running, it has been
              delivering smiles to hundreds of IT advisors, developers, users, and business owners.
            </p>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      Secondary Nav
    =========================== -->
   @include('pages.includes.second_nav')
    <!-- =========================
      Awards
      =========================== -->
    <section class="awards">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3 text-center">
            <div class="heading-layout2">
              <h3 class="heading__title mb-50">Our awards and<br> recognitions</h3>
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
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <a href="#" class="btn btn__primary btn__link">
              <span>Get Started</span><i class="icon-arrow-right icon-outlined"></i>
            </a>
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Awards -->

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
    <section class="banner-layout2 pt-0 pb-100">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/8.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <div class="banner-text">
              <div class="heading-layout2 heading-light mb-40">
                <h3 class="heading__title mb-30">Timely service delivery & incident resolutions!!</h3>
                <p class="heading__desc">Provide users with appropriate view and access permissions to requests,
                  problems, changes, contracts, assets, solutions, and reports with our experienced professionals.
                </p>
              </div><!-- /.heading -->
              <a href="pricing.html" class="btn btn__white btn__bordered btn__hi mb-30">Pricing & Plans</a>
            </div>
          </div><!-- /.col-xl-6 -->
          
        </div><!-- /.row -->
        <div class="row counters-wrapper counters-light mt-70">
          <!-- counter item #1 -->
          <div class="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">6,154</h4>
              <p class="counter-item__desc">Projects And Software Developed in 2021</p>
            </div><!-- /.counter-item -->
          </div><!-- /.col-lg-3 -->
          <!-- counter item #2 -->
          <div class="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">2,512</h4>
              <p class="counter-item__desc">Qualified Employees And Developers With Us</p>
            </div><!-- /.counter-item -->
          </div><!-- /.col-lg-3 -->
          <!-- counter item #3 -->
          <div class="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">1,784</h4>
              <p class="counter-item__desc">Satisfied Clients We Have Served Globally</p>
            </div><!-- /.counter-item -->
          </div><!-- /.col-lg-3 -->
          <!-- counter item #4 -->
          <div class="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">0,25</h4>
              <p class="counter-item__desc">Years Of Experience In The IT & Software Industry</p>
            </div><!-- /.counter-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 2 -->

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