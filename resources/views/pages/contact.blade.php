
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="DSP  IT Solutions &  Services Template">
  
  <title>DSP</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
  <link rel="stylesheet" href="{{secure_asset('frontend/assets/css/libraries.css')}}">
  <link rel="stylesheet" href="{{secure_asset('frontend/assets/css/style.css')}}">
</head>

<body>
  <div class="wrapper">

    <!-- =========================
        Header 
    =========================== -->
     @include('pages.includes.header_light')

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
                    <label for="contact-name">First Name (required)</label>
                    <input type="text" class="form-control" placeholder="First Name" id="contact-name" name="contact-name"
                      required>
                  </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="contact-website">Last Name (optional)</label>
                    <input type="text" class="form-control" placeholder="Last Name (optional)" id="contact-website"
                      name="contact-website">
                  </div>
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
                  <li>KG 28 Av Kigali Rwanda</li>
                </ul>
              </div><!-- /.contact-panel__info__block -->
              <div class="contact-block">
                <h5 class="contact-block__title">Quick Contact</h5>
                <ul class="contact-block__list list-unstyled">
                  <li><a href="mailto:DSP@7oroof.com"></a>Email: dsp@gmail.com</li>
                  <li><a href="mailto:DSP@7oroof.com"></a>Support: dsp@gmail.com</li>
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
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 footer-widget footer-widget-about">
              <div class="footer-widget__content">
               <div class="contact-info mb-40">
                <h6 class="footer-widget__title">Quick Contact</h6>
                <ul class="contact-list list-unstyled mb-0">
                  <li><a href="tel:00123968574">+ (250) 700-1212-12</a></li>
                  <li><a href="mailto:DSP@7oroof.com">dsp@gmail.com</a></li>
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
                    <li><a href="faqs">Help & FAQ</a></li>
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

  <script src="{{secure_asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{secure_asset('frontend/assets/js/plugins.js')}}"></script>
  <script src="{{secure_asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>