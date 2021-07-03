@extends('index')
@section('content')

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout16 bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{asset('frontend/assets/images/page-titles/12.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading mb-10">Our Blog</h1>
            <nav>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid">
      <div class="container">
        <div class="row">
          <!-- Blog Item singleblog1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post-item__img">
                <a href="blog-single-post.html">
                  <img src="{{asset('frontend/assets/images/blog/grid/1.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">
                  <div class="post-item__meta__cat">
                    <a href="singleblog">Consulting</a><a href="singleblog">Sales</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post-item__meta__date">May 13, 2020</span>
                </div>
                <h4 class="post-item__title"><a href="singleblog">Five Ways to Develop a World Class Sales Operations
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
          <!-- Blog Item singleblog2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post-item__img">
                <a href="blog-single-post.html">
                  <img src="{{asset('frontend/assets/images/blog/grid/2.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">
                  <div class="post-item__meta__cat">
                    <a href="singleblog">Tech</a><a href="singleblog">Communications</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post-item__meta__date">April 17, 2020</span>
                </div>
                <h4 class="post-item__title"><a href="singleblog">Succession Risks That Threaten Your Leadership Strategy</a>
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
          <!-- Blog Item singleblog3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post-item__img">
                <a href="blog-single-post.html">
                  <img src="{{asset('frontend/assets/images/blog/grid/3.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">
                  <div class="post-item__meta__cat">
                    <a href="singleblog">Digital Business</a><a href="singleblog">Cloud</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post-item__meta__date">March 20, 2020</span>
                </div>
                <h4 class="post-item__title"><a href="singleblog">What Do Employee Engagement Surveys Tell You About
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
          <!-- Blog Item singleblog4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post-item__img">
                <a href="blog-single-post.html">
                  <img src="{{asset('frontend/assets/images/blog/grid/4.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">
                  <div class="post-item__meta__cat">
                    <a href="singleblog">Security</a><a href="singleblog">Support</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post-item__meta__date">Feb 9, 2020</span>
                </div>
                <h4 class="post-item__title"><a href="singleblog">New Remote Workers Visible to Security Operations? </a>
                </h4>
                <p class="post-item__desc">Many are utilizing remote working systems that have not been operationally
                  tested as part of their core security operations monitoring, likely result is fewer security alerts
                  and issues...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item singleblog5 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post-item__img">
                <a href="blog-single-post.html">
                  <img src="{{asset('frontend/assets/images/blog/grid/5.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">
                  <div class="post-item__meta__cat">
                    <a href="singleblog">Insights</a><a href="singleblog">Costs</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post-item__meta__date">Feb 3, 2020</span>
                </div>
                <h4 class="post-item__title"><a href="singleblog">Market Insights to Manage People Related Costs</a>
                </h4>
                <p class="post-item__desc">If economies stay closed, some of the hardest decisions for leaders still lie
                  ahead, and yet most leaders lack the data they need to make informed decisions about their
                  workforce...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item singleblog6 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post-item__img">
                <a href="blog-single-post.html">
                  <img src="{{asset('frontend/assets/images/blog/grid/6.jpg')}}" alt="blog image">
                </a>
              </div><!-- /.blog-img -->
              <div class="post-item__content">
                <div class="post-item__meta d-flex flex-wrap">
                  <div class="post-item__meta__cat">
                    <a href="singleblog">Sales</a><a href="singleblog">Sales</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post-item__meta__date">Jan 30, 2020</span>
                </div>
                <h4 class="post-item__title"><a href="singleblog">Embrace Proactive Customer Experience in the Business</a>
                </h4>
                <p class="post-item__desc">Concerns like these can raise volumes, increase expenses and strain your
                  staff. And they’re still just the tip of the iceberg, because customers are delaying or canceling
                  purchases...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.blog-content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <nav class="pagination-area">
              <ul class="pagination justify-content-center">
                <li><a class="current" href="singleblog">1</a></li>
                <li><a href="singleblog">2</a></li>
                <li><a href="singleblog"><i class="icon-arrow-right"></i></a></li>
              </ul>
            </nav><!-- .pagination-area -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->


    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

 @endsection