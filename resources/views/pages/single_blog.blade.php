
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Mintech  IT Solutions &  Services Template">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>HS.G</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/libraries.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
</head>

<body>
  <div class="wrapper">
    
    <!-- =========================
        Header 
    =========================== -->
   @include('pages.includes.header_light')

    <!-- ======================
      Blog Single
    ========================= -->
    <section class="blog blog-single pt-3 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="post-item mb-0">
              <div class="position-relative">
                <div class="post-item__img">
                  <a href="#">
                    <img src="{{asset('frontend/assets/images/blog/single/1.jpg')}}" alt="blog image">
                  </a>
                </div><!-- /.post-img -->
                
              </div>
              <h1 class="post-item__title mt-50 mb-40">
                Five Ways to Develop a World 
              </h1>
              <div class="post-item__desc">
                <p>The key to the success of any logistics contract is good logistics management. The key to good
                  management is the ability to identify the needs of the client and the countries in which the work
                  will take place, as well as being in a position to advise the best way forward. In today’s
                  international and remote locations, experience and understanding of logistics operations and local
                  networks is vital. With the many years of experience in our team, we have a detailed understanding
                  of the criticality or every aspect of the logistics world.</p>
                
                <p>When travelling to a foreign country, most people are nervous of the obstacles that will be there
                  for them to overcome. When a full marine crew travels en-mass to a vessel mobilisation, it is
                  imperative that they arrive on time and safely, especially in a remote location.</p>
                
              </div><!-- /.blog-desc -->
            </div><!-- /.post-item -->
            <div class="blog-share d-flex flex-wrap justify-content-between mb-30 mt-20">
              <a href="#" class="btn btn__secondary btn__xl d-flex align-items-center">
                <i class="fab fa-facebook-f mr-20"></i><span>Share on Facebook</span>
              </a>
              <a href="#" class="btn btn__secondary btn__xl d-flex align-items-center">
                <i class="fab fa-twitter mr-20"></i><span>Share on Twitter</span>
              </a>
              <a href="#" class="btn btn__secondary btn__xl d-flex align-items-center">
                <i class="fab fa-google mr-20"></i><span>Share on Google</span>
              </a>
            </div><!-- /.blog-share -->
            
           
            <div class="blog-comments">
              <h5 class="blog-widget__title">1 comments</h5>
              <ul class="comments-list list-unstyled">
                <li class="comment__item">
                  <div class="comment__avatar">
                    <img src="{{asset('frontend/assets/images/blog/author/2.jpg')}}" alt="avatar">
                  </div>
                  <div class="comment__content">
                    <h5 class="comment__author">Jean</h5>
                    <span class="comment__date">june 28, 2021 - 08:07 pm</span>
                    <p class="comment__desc">The example about the mattress sizing page you mentioned in the last WBF
                      can be a perfect example
                      
                    <a class="comment__reply" href="#">reply</a>
                  </div>
                  
                </li><!-- /.comment -->
              </ul><!-- /.comments-list -->
            </div><!-- /.blog-comments -->
            <div class="blog-widget blog-comments-form mb-30">
              <h5 class="blog-widget__title">Leave A Reply</h5>
              <form>
                <div class="row">
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Website:">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Comment"></textarea>
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">
                    <button type="submit" class="btn btn__primary btn__icon justify-content-between btn__xxl">
                      <span>Submit Comment</span><i class="icon-arrow-right"></i>
                    </button>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.blog-comments-form -->
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar">
              <div class="widget widget-search">
                <h5 class="widget__title">Search</h5>
                <div class="widget__content">
                  <form class="widget__form-search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn" type="submit"><i class="icon-search"></i></button>
                  </form>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-search -->
              <div class="widget widget-posts">
                <h5 class="widget__title">Recent Posts</h5>
                <div class="widget__content">
                  <!-- post item #1 -->
                  <div class="widget-post-item d-flex align-items-center">
                    <div class="widget-post__img">
                      <a href="#"><img src="{{asset('frontend/assets/images/blog/grid/2.jpg')}}" alt="thumb"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget-post__content">
                      <span class="widget-post__date">jun 19, 2021</span>
                      <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your Leadership</a>
                      </h4>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                  <!-- post item #2 -->
                  <div class="widget-post-item d-flex align-items-center">
                    <div class="widget-post__img">
                      <a href="#"><img src="{{asset('frontend/assets/images/blog/grid/3.jpg')}}" alt="thumb"></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget-post__content">
                      <span class="widget-post__date">July 7, 2021</span>
                      <h4 class="widget-post__title"><a href="#">Do Employee Surveys Tell About Employee?</a>
                      </h4>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                  <!-- post item #3 -->
                  
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-categories">
                <h5 class="widget__title">Services</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    <li><a href="#"><span>Hardware</span><span class="cat-count">9</span></a></li>
                    <li><a href="#"><span>Software</span><span class="cat-count">2</span></a></li>
                    
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
              
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Single -->

    <!-- ========================
      Footer
    ========================== -->
        <footer class="footer bg-heading">  
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 footer-widget footer-widget-about">
              <div class="footer-widget__content">
               <div class="contact-info mb-40">
                <h6 class="footer-widget__title">Quick Contact</h6>
                <ul class="contact-list list-unstyled mb-0">
                  <li><a href="tel:00123968574">+ (250) 700-1212-12</a></li>
                  <li><a href="mailto:Mintech@7oroof.com">dsp@gmail.com</a></li>
                </ul>
              </div><!-- /.contact-info -->
                <ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul><!-- /.social-icons -->
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-6 col-md-6 col-lg-3 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">Company</h6>
              <div class="footer-widget__content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="about">About Us</a></li>
                    <li><a href="team">Meet Our Team</a></li>
                    <li><a href="services">Services</a></li>
                    <li><a href="pricing">Pricing</a></li>

               
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-3 -->
            <div class="col-sm-6 col-md-6 col-lg-3 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">Solutions</h6>
              <div class="footer-widget__content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="services">IT Management</a></li>
                    
                    <li><a href="services">IT Consulting</a></li>
                    <li><a href="services">Software Dev</a></li>
                    <li><a href="services">IT Support</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-3 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">Resources</h6>
              <div class="footer-widget__content">
                <nav>
                  <ul class="list-unstyled">
              
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="fasq">Help & FAQ</a></li>
                    <li><a href="contact">Contact Us</a></li>
                    <li><a href="#">Site map</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-3 -->
            
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <span class="fz-14">&copy; 2021 DSP, All Rights Reserved.</span>
              
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

  </div><!-- /.wrapper -->

  <script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>
