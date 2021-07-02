
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Mintech  IT Solutions &  Services Template">
  
  <title>DSP</title>

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
    <header class="header header-light">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
          <button type="button" class="action__btn action__btn-burgerMenu mr-30 d-none d-lg-block">
            <i class="icon-nav"></i>
          </button>
          <a class="navbar-brand" href="index.html">
            <img src="{{asset('frontend/assets/images/logo/logo-light.png')}}" class="logo-light" alt="logo">
            
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item  has-dropdown">
                <a href="/" class="nav__item-link">Home</a>
              </li><!-- /.nav-item -->
              
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Services</a>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="it-solutions.html" class="nav__item-link dropdown-menu-title">Hardware Services</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Mantainence
                              </a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Devics configration</a>
                          </li> <!-- /.nav-item -->
                          
                          
                          
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">IT Support</a>
                          </li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="industries.html" class="nav__item-link dropdown-menu-title">Software Services</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Web Application</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Android/IOs Application</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Desktop Application</a></li> <!-- /.nav-item -->
                
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="about" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="why-us" class="nav__item-link">Why Choose Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="leadership-team" class="nav__item-link">Leadership Team</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="awards" class="nav__item-link">Award & Recognition</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="pricing" class="nav__item-link">Pricing & Plans</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="faqs" class="nav__item-link">Help & FAQs</a>
                  </li> <!-- /.nav-item -->
                  
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="about" class="nav__item-link">About us</a>
              </li><!-- /.nav-item -->
               <li class="nav__item  has-dropdown">
                <a href="contact" class="nav__item-link">Contact us</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================= 
            Google Map
    =========================  -->
    <section class="google-map py-0">
      <div id="map" style="height: 500px;"></div>
      <script src="{{asset('frontend/assets/js/google-map.js')}}"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
      <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm">
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="contact-panel__title">Get In Touch</h4>
                </div>
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
                    <input type="email" class="form-control" placeholder="Email" id="contact-email" name="contact-email"
                      required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="contact-Phone">Phone (required)</label>
                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone" name="contact-phone"
                      required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="contact-website">Website (optional)</label>
                    <input type="text" class="form-control" placeholder="Website (optional)" id="contact-website"
                      name="contact-website">
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group mb-20">
                    <label for="contact-message">Additional Details (optional)</label>
                    <textarea class="form-control" placeholder="Describe your inquirey!" id="contact-message"
                      name="contact-message"></textarea>
                  </div>
                  <div class="custom-control custom-checkbox d-flex align-items-center  mb-20">
                    <input type="checkbox" class="custom-control-input" id="terms">
                    <label class="custom-control-label" for="terms">I accept the privacy and terms.</label>
                  </div>
                  <button type="submit" class="btn btn__secondary btn__block ">Submit Request</button>
                  <div class="contact-result"></div>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
            <div class="contact-panel__info bg-overlay bg-overlay-primary">
              <div class="bg-img"><img src="{{asset('frontend/assets/images/contact/1.jpg')}}" alt="banner"></div>
              <div class="contact-block">
                <h5 class="contact-block__title">Our Location</h5>
                <ul class="contact-block__list list-unstyled">
                  <li>2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <div class="contact-block">
                <h5 class="contact-block__title">Quick Contact</h5>
                <ul class="contact-block__list list-unstyled">
                  <li><a href="mailto:Mintech@7oroof.com"></a>Email: Mintech@7oroof.com</li>
                  <li><a href="mailto:Mintech@7oroof.com"></a>Support: Mintech@7oroof.com</li>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <div class="contact-block">
                <h5 class="contact-block__title">Opening Hours</h5>
                <ul class="contact-block__list list-unstyled">
                  <li>Monday - Friday</li>
                  <li>09:00 AM - 06:00 PM</li>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <a href="contacs.html" class="btn btn__white btn__bordered btn__icon btn__xl">
                <span>Find Your Solution</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->

    <!-- ==========================
       Contact Info
    ============================ -->
    <section class="contact-info pt-0 pb-70">
      <div class="container">
        
      </div><!-- /.container -->
    </section><!-- /.Contact Info -->

    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer bg-heading">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/backgrounds/2.png')}}" alt="backgrounds"></div>
      <div class="footer-contact pt-50 pb-50">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-2">
              <div class="contact-info">
                <h6 class="footer-widget__title">Quick Contact</h6>
                <ul class="contact-list list-unstyled mb-0">
                  <li><a href="tel:00123968574">+ (002) 0106-1245-741</a></li>
                  <li><a href="mailto:Mintech@7oroof.com">Mintech@7oroof.com</a></li>
                </ul>
              </div><!-- /.contact-info -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-4 col-md-4 col-lg-2">
              <div class="contact-info">
                <h6 class="footer-widget__title">Our Address</h6>
                <ul class="contact-list list-unstyled mb-0">
                  <li>2307 Beverley Rd , New York 11226 U.S.</li>
                </ul>
              </div><!-- /.contact-info -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-4 col-md-4 col-lg-2">
              <div class="contact-info">
                <h6 class="footer-widget__title">Opening Hours</h6>
                <ul class="contact-list list-unstyled mb-0">
                  <li>Mon - Fri: 8am - 7pm</li>
                  <li>Sat - Sun: 9 am - 8pm</li>
                </ul>
              </div><!-- /.contact-info -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-8 col-lg-6">
              <h6 class="footer-widget__title">Newsletter</h6>
              <form class="footer-form d-flex mb-0">
                <input type="text" class="form-control mr-20" placeholder="Your Email Address">
                <button type="submit" class="btn btn__primary btn__primary-style2">Subscribe</button>
              </form>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-contact -->
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 footer-widget footer-widget-about">
              <div class="footer-widget__content">
               
                <p class="color-gray mb-40">We are experienced professionals who understand that It services is
                  changing, and are
                  true partners who care about your future business success.</p>
                <ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul><!-- /.social-icons -->
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">Company</h6>
              <div class="footer-widget__content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="leadership-team.html">Meet Our Team</a></li>
                    <li><a href="blog.html">News & Media</a></li>
                    <li><a href="projects-grid.html">Case Studies</a></li>
                    <li><a href="contacs.html">Contacts</a></li>
                    <li><a href="#">Investors</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">Solutions</h6>
              <div class="footer-widget__content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">IT Management</a></li>
                    <li><a href="#">Cyber Security</a></li>
                    <li><a href="#">Cloud Computing</a></li>
                    <li><a href="#">IT Consulting</a></li>
                    <li><a href="#">Software Dev</a></li>
                    <li><a href="#">IT Support</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">Resources</h6>
              <div class="footer-widget__content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="pricing.html">Pricing and plans</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="faqs.html">Help & FAQ</a></li>
                    <li><a href="contacs.html">Contact Us</a></li>
                    <li><a href="#">Site map</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
              <h6 class="footer-widget__title">We're Hiring</h6>
              <div class="footer-widget__content">
                <p class="fz-14 color-white">Interested in joining the Mintech team?</p>
                <a href="careers.html" class="btn btn__primary btn__primary-style2 btn__link">
                  <span>Our Careers</span><i class="icon-arrow-right icon-outlined"></i>
                </a>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <span class="fz-14">&copy; 2020 Mintech, All Rights Reserved. With Love by</span>
              <a class="fz-14 color-primary" href="http://themeforest.net/user/7oroof">7oroof.com</a>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

    <div class="burger-menu">
      <div class="burger-menu__content">
        <button type="button" class="burger-menu__close"><i class="fas fa-times"></i></button>
        <div class="burger-menu__header">
          <img src="{{asset('frontend/assets/images/logo/logo-light.png')}}" alt="logo" class="mb-30">
          <p class="color-white">We are experienced professionals who understand that It services is changing, and are
            true partners who care about your future business success.</p>
        </div><!-- /.burger-menu__header -->
        <div class="contact-blocks-wrapper">
          <div class="contact-block contact-block-light">
            <h5 class="contact-block__title">Our Location</h5>
            <ul class="contact-block__list list-unstyled">
              <li>2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
            </ul>
          </div><!-- /.contact-panel__info__block -->
          <div class="contact-block contact-block-light">
            <h5 class="contact-block__title">Quick Contact</h5>
            <ul class="contact-block__list list-unstyled">
              <li><a href="mailto:Mintech@7oroof.com"></a>Email: Mintech@7oroof.com</li>
              <li><a href="mailto:Mintech@7oroof.com"></a>Support: Mintech@7oroof.com</li>
            </ul>
          </div><!-- /.contact-panel__info__block -->
          <div class="contact-block contact-block-light">
            <h5 class="contact-block__title">Opening Hours</h5>
            <ul class="contact-block__list list-unstyled">
              <li>Monday - Friday</li>
              <li>8 am to 7 pm</li>
            </ul>
          </div><!-- /.contact-panel__info__block -->
          <ul class="social-icons list-unstyled mb-0 mt-20">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          </ul><!-- /.social-icons -->
        </div><!-- /.contact-blocks-wrapper -->
      </div><!-- /.burger-menu__content -->
    </div><!-- /.burger-menu -->

    <div class="login-popup" id="login-popup">
      <div class="login-popup-wrapper">
        <form class="login-popup__form">
          <h3 class="login-popup__title">Login!</h3>
          <p class="login-popup__desc">Connect, organize and get things done to keep your IT business safe.</p>
          <div class="form-group mb-30">
            <label>Email (required)</label>
            <input type="text" class="form-control" placeholder="username">
          </div>
          <div class="form-group mb-20">
            <label>Password (required)</label>
            <input type="password" class="form-control" placeholder="password">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-20">
            <div class="custom-control custom-checkbox d-flex align-items-center">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Remember Me!</label>
            </div>
            <a href="#" class="fz-14 font-weight-bold color-secondary">Forget Password?</a>
          </div>
          <button type="submit" class="btn btn__secondary btn__block">Login</button>
        </form>
        <div class="d-flex justify-content-center align-items-center mt-20">
          <span class="color-white fz-14 font-weight-bold">Don’t Have An Account?</span>
          <button id="go-register" class="go-register fz-14 font-weight-bold">
            <span>Register Here</span><i class="icon-arrow-right"></i>
          </button>
        </div>
      </div>
    </div><!-- /.login-popup -->

    <div class="login-popup" id="register-popup">
      <div class="login-popup-wrapper">
        <form class="login-popup__form">
          <h3 class="login-popup__title">Register!</h3>
          <p class="login-popup__desc">Connect, organize and get things done to keep your IT business safe.</p>
          <div class="form-group mb-30">
            <label>Email (required)</label>
            <input type="text" class="form-control" placeholder="username">
          </div>
          <div class="form-group mb-20">
            <label>Password (required)</label>
            <input type="password" class="form-control" placeholder="password">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-20">
            <div class="custom-control custom-checkbox d-flex align-items-center">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">I read & agree to <a href="#">Terms &
                  Conditions</a></label>
            </div>
          </div>
          <button type="submit" class="btn btn__secondary btn__block">Register</button>
        </form>
        <div class="d-flex justify-content-center align-items-center mt-20">
          <span class="color-white fz-14 font-weight-bold">Have An Account?</span>
          <button id="go-login" class="go-login fz-14 font-weight-bold">
            <span>Login Here</span><i class="icon-arrow-right"></i>
          </button>
        </div>
      </div>
    </div><!-- /.login-popup -->
  </div><!-- /.wrapper -->

  <script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>