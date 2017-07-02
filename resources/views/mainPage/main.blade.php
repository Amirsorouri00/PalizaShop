@extends('tasks.navbarList')

@section('slider')
  <!-- slider-section-start -->
  <section class="slider_area">
    <div id="image_carousel_1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators slider_indicators">
        <li data-target="#image_carousel_1" data-slide-to="0" class="active"></li>
        <li data-target="#image_carousel_1" data-slide-to="1"></li>
        <li data-target="#image_carousel_1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="single_slide">
            <div class="slider_bg slide-1"></div>
            <div class="container">
              <div class="slide_text">
                <div class="table">
                  <div class="table-cell" >
                    <h1 style="font-size:48px"> <br />خرید هدیه</h1>
                    <p style="font-size:16px">شسیشب یشیش شسیشی لبلیل اتفلقثل ثصقصق لااااا سیبسب سیبسیبس زدئز ئظئطدین نشسمین مشنتیو خضهت <br /> نستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشی.</p>
                    <a class="digital" href="#portfolio">ورود به سایت</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="single_slide">
            <div class="slider_bg slide-2"></div>
            <div class="container">
              <div class="slide_text">
                <div class="table">
                  <div class="table-cell">
                    <h1>best way to present <br /> your app</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br /> Lorem Ipsum has been the standard dummy text.</p>
                    <a class="digital" href="#portfolio">learn more</a>
                    <a class="digital" href="#portfolio">download</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="single_slide">
            <div class="slider_bg slide-3"></div>
            <div class="container">
              <div class="slide_text">
                <div class="table">
                  <div class="table-cell">
                    <h1>best way to present <br /> your app</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br /> Lorem Ipsum has been the standard dummy text.</p>
                    <a class="digital" href="#portfolio">learn more</a>
                    <a class="digital" href="#portfolio">download</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="left fawesome-control" href="#image_carousel_1" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right fawesome-control" href="#image_carousel_1" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
    </div>
  </section>
  <!-- slider-section-end -->
@endsection

@section('content')
  <!-- about-section-start -->
  <section class="about section_padding" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="about_title section-title wow slideInLeft" data-wow-delay="0.3s">
            <h1>هدیه های خود را از ما بخواهید</h1>
            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="about_text wow flipInY" data-wow-delay="0.6s">
                <div class="about_icon">
                  <i class="fa fa-eye"></i>
                </div>
                <a href="#"><h3>Retina Ready</h3></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
              <div class="about_text wow flipInY" data-wow-delay="0.6s">
                <div class="about_icon">
                  <i class="fa fa-bar-chart"></i>
                </div>
                <a href="#"><h3>Coutom menus</h3></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="about_text wow flipInY" data-wow-delay="0.6s">
                <div class="about_icon">
                  <i class="fa fa-pencil"></i>
                </div>
                <a href="#"><h3>Easy to customize</h3></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
              <div class="about_text wow flipInY" data-wow-delay="0.6s">
                <div class="about_icon">
                  <i class="fa fa-dot-circle-o"></i>
                </div>
                <a href="#"><h3>Custom Pages</h3></a>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="about_right wow slideInRight" data-wow-delay="0.3s">
            <img id="right_img_1" src="images/about/gift_boxes.jpg" alt="" />
            <img id="right_img_2" src="images/about/about-image-2.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about-section-end -->
  <!-- video-section-start -->
  <section class="video section_padding">
    <video id="bgvid" loop>
      <source src="video/demo-video.mp4" type="video/mp4">
    </video>
    <div class="video_text">
      <div class="amazing_title col-text-center text-center section-title  wow flipInX" data-wow-delay="0.3s">
        <h1>از ما بخواهید</h1>
      </div>
      <div id="polina">
        <button><i class="fa fa-play"></i></button>
      </div>
    </div>
  </section>
  <!-- video-section-end -->
  <!-- features-section-start -->
  <!--<section class="features section_padding" id="features">
    <div class="container">
      <div class="row">
        <div class="amazing_title col-text-center text-center section-title  wow flipInX" data-wow-delay="0.3s">
          <h1>Amazing Features</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="about_text amazing_text wow slideInLeft" data-wow-delay="0.3s">
            <div class="about_icon">
              <i class="fa fa-cog"></i>
            </div>
            <a href="#"><h3>Powerfull Theme</h3></a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
          <div class="about_text amazing_text wow slideInLeft" data-wow-delay="0.3s">
            <div class="about_icon">
              <i class="fa fa-camera"></i>
            </div>
            <a href="#"><h3>Unlimited Features</h3></a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
          <div class="about_text amazing_text wow slideInLeft" data-wow-delay="0.3s">
            <div class="about_icon">
              <i class="fa fa-bug"></i>
            </div>
            <a href="#"><h3>High Resolution & Retina Ready</h3></a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="about_right amazing_text wow fadeInUp animated text-center">
            <img src="images/amazing.png" alt="" />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="about_text amazing_text wow slideInRight" data-wow-delay="0.3s">
            <div class="about_icon">
              <i class="fa fa-code"></i>
            </div>
            <a href="#"><h3>Easy to customize</h3></a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
          <div class="about_text amazing_text wow slideInRight" data-wow-delay="0.3s">
            <div class="about_icon">
              <i class="fa fa-pagelines"></i>
            </div>
            <a href="#"><h3>Different Colors</h3></a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
          <div class="about_text amazing_text wow slideInRight" data-wow-delay="0.3s">
            <div class="about_icon">
              <i class="fa fa-clock-o"></i>
            </div>
            <a href="#"><h3>52/4 Support</h3></a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!-- features-section-end -->
  <!-- testimonials-we-do-section-start -->
  <section class="testimonials text-center">
    <div id="fawesome_carousel_3" class="carousel slide" data-ride="carousel">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-8 col-text-center text-center">
            <ol class="carousel-indicators testimonials_indicators">
              <li data-target="#fawesome_carousel_3" data-slide-to="0" class="active"><img src="images/client/client-1.png" alt="" /></li>
              <li data-target="#fawesome_carousel_3" data-slide-to="1"><img src="images/client/client-2.png" alt="" /></li>
              <li data-target="#fawesome_carousel_3" data-slide-to="2"><img src="images/client/client-3.png" alt="" /></li>
              <li data-target="#fawesome_carousel_3" data-slide-to="3"><img src="images/client/client-4.png" alt="" /></li>
              <li data-target="#fawesome_carousel_3" data-slide-to="4"><img src="images/client/client-5.png" alt="" /></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="single_testimonials">
                  <p>نستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشینستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشینستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشینستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشی.</p>
                  <h4>Margaret Thatcher - Marketplaces</h4>
                </div>
              </div>
              <div class="item">
                <div class="single_testimonials">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <h4>CALVIN COOLIDGE - THEMEFOREST</h4>
                </div>
              </div>
              <div class="item">
                <div class="single_testimonials">
                  <p>نستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشینستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشینستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشینستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشی</p>
                  <h4>MARGARET THATCHER - MARKETPLACES</h4>
                </div>
              </div>
              <div class="item">
                <div class="single_testimonials">
                  <p>نستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشینستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشینستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشینستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشی</p>
                  <h4>POPE PAUL - APPSTORM</h4>
                </div>
              </div>
              <div class="item">
                <div class="single_testimonials">
                  <p>نستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشینستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشینستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشینستیال شتینیتل مشنشتسن نشسعهثق ئزدرن نشئنست تیئمین خثهعب ئستعی نهتاشی</p>
                  <h4>POPE PAUL - APPSTORM</h4>
                </div>
              </div>
            </div>
          </div>
          <a class="left fawesome-control" href="#fawesome_carousel_3" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
          <a class="right fawesome-control" href="#fawesome_carousel_3" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonials-section-end -->
  <!-- screenshot-section-start -->
  <section class="service section_padding" id="screenshot">
    <div class="container">
      <div class="row">
        <div class="amazing_title screenshot_title col-text-center text-center section-title wow flipInX" data-wow-delay="0.3s">
          <h1>آخرین اجناس</h1>
        </div>
      </div>
      <div class="row">
        <div id="owl-demo" class="owl-carousel owl-theme">
          <div class="item">
            <img src="{{ URL::to('/turner/images/screenshot/screenshot-4.png') }}" alt="Screenshot Image">
          </div>
          <div class="item">
            <img src="{{ URL::to('/turner/images/screenshot/screenshot-6.png') }}" alt="Screenshot Image">
          </div>
          <div class="item">
            <img src="{{ URL::to('/turner/images/screenshot/screenshot-5.png') }}" alt="Screenshot Image">
          </div>
          <div class="item">
            <img src="{{ URL::to('/turner/images/screenshot/screenshot-1.png') }}" alt="Screenshot Image">
          </div>
          <div class="item">
            <img src="{{ URL::to('/turner/images/screenshot/screenshot-2.png') }}" alt="Screenshot Image">
          </div>
          <div class="item">
            <img src="{{ URL::to('/turner/images/screenshot/screenshot-3.png') }}" alt="Screenshot Image">
          </div>
        </div>
        <div class="customNavigation">
          <a class="btn prev"><i class="fa fa-angle-left"></i></a>
          <a class="btn next"><i class="fa fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- screenshot-section-end -->
  <!-- blog-section-start -->
  <!--<section class="blog section_padding text-center" id="blog">
    <div class="container">
      <div class="row">
        <div class="amazing_title col-text-center text-center section-title wow flipInX" data-wow-delay="0.3s">
          <h1>Latest Blog Fost & News</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="single_blog wow fadeInLeft" data-wow-delay="0.3s">
            <div class="blog_img">
              <a href="#"><img src="images/blog/blog-post1.png" alt="" /></a>
            </div>
            <div class="blog_text">
              <h4>Single Image Post</h4>
              <span>by admin . in logo . 1 comment</span>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <a href="#">Read More</a></p>
            </div>
          </div>
          <div class="single_blog wow fadeInLeft" data-wow-delay="0.3s">
            <div class="blog_img">
              <a href="#"><img src="images/blog/blog-post2.png" alt="" /></a>
            </div>
            <div class="blog_text">
              <h4>Single Image Post</h4>
              <span>by admin . in logo . 1 comment</span>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <a href="#">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="single_blog wow fadeInUp" data-wow-delay="0.3s">
            <div class="blog_img">
              <a href="#"><img src="images/blog/blog-post3.png" alt="" /></a>
            </div>
            <div class="blog_text">
              <h4>Single Image Post</h4>
              <span>by admin . in logo . 1 comment</span>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <a href="#">Read More</a></p>
            </div>
          </div>
          <div class="single_blog wow fadeInUp" data-wow-delay="0.3s">
            <div class="blog_img">
              <a href="#"><img src="images/blog/blog-post4.png" alt="" /></a>
            </div>
            <div class="blog_text">
              <h4>Single Image Post</h4>
              <span>by admin . in logo . 1 comment</span>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <a href="#">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="single_blog wow fadeInRight" data-wow-delay="0.3s">
            <div class="blog_img">
              <a href="#"><img src="images/blog/blog-post5.png" alt="" /></a>
            </div>
            <div class="blog_text">
              <h4>Single Image Post</h4>
              <span>by admin . in logo . 1 comment</span>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <a href="#">Read More</a></p>
            </div>
          </div>
          <div class="single_blog wow fadeInRight" data-wow-delay="0.3s">
            <div class="blog_img">
              <a href="#"><img src="images/blog/blog-post6.png" alt="" /></a>
            </div>
            <div class="blog_text">
              <h4>Single Image Post</h4>
              <span>by admin . in logo . 1 comment</span>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <a href="#">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!-- blog-section-end -->
  <!-- pricing-section-start -->
  <!--<section class="pricing section_padding text-center" id="pricing">
    <div class="container">
      <div class="row">
        <div id="pricing-table" class="clear">
          <div class="col-sm-6 col-md-3">
            <div class="plan wow slideInLeft">
              <h3>Enterprise<span>$59</span></h3>
              <a class="signup" href="">Sign up</a>
              <ul>
                <li><b>10GB</b> Disk Space</li>
                <li><b>100GB</b> Monthly Bandwidth</li>
                <li><b>20</b> Email Accounts</li>
                <li><b>Unlimited</b> subdomains</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="plan wow fadeInUp">
              <h3>Porfessional<span>$29</span></h3>
              <a class="signup" href="">Sign up</a>
              <ul>
                <li><b>5GB</b> Disk Space</li>
                <li><b>50GB</b> Monthly Bandwidth</li>
                <li><b>10</b> Email Accounts</li>
                <li><b>Unlimited</b> subdomains</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="plan wow fadeInUp">
              <h3>Standard<span>$17</span></h3>
              <a class="signup" href="">Sign up</a>
              <ul>
                <li><b>3GB</b> Disk Space</li>
                <li><b>25GB</b> Monthly Bandwidth</li>
                <li><b>5</b> Email Accounts</li>
                <li><b>Unlimited</b> subdomains</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="plan wow slideInRight">
              <h3>Basic<span>$9</span></h3>
              <a class="signup" href="">Sign up</a>
              <ul>
                <li><b>1GB</b> Disk Space</li>
                <li><b>10GB</b> Monthly Bandwidth</li>
                <li><b>2</b> Email Accounts</li>
                <li><b>Unlimited</b> subdomains</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!-- pricing-section-end -->
  <!-- subcribe-clients-section-start -->
  <section class="subcribe section_padding">
    <div class="container">
      <div class="amazing_title subcribe_title col-text-center text-center section-title wow flipInX" data-wow-delay="0.3s">
        <h1>دریافت اخبار</h1>
      </div>
      <div class="row wow fadeInDown text-center">
        <div class="col-sm-offset-2 col-sm-5">
          <div class="subcribe_text">
            <input type="text" placeholder="Your Email" name="email">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="subcribe_btn text-left">
            <input type="button" class="btn-black " value="send message" name="subcribe" id="contact-button">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- subcribe-section-end -->
  <!-- download-clients-section-start -->
  <section class="download section_padding" id="download">
    <div class="container">
      <div class="amazing_title subcribe_title col-text-center text-center section-title wow flipInX" data-wow-delay="0.3s">
        <h1>دریافت اپلیکیشن</h1>
      </div>
      <div class="row wow fadeInDown text-center">
        <div class="col-sm-12 col-md-8 col-text-center">
          <div class="download_text">
            <a href="#"><i class="fa fa-android"></i>android User</a>
            <a href="#"><i class="fa fa-apple"></i>los app store</a>
            <a href="#"><i class="fa fa-windows"></i>Windows</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- download-section-end -->
  <!-- contact-section-start -->
  <section class="contact section_padding" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="about_hello wow fadeInLeft">
            <h3>About Pres</h3>
            <p id="about_p_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
        <div class="col-sm-4 wow fadeInUp">
          <div class="about_hello">
            <h3>Contact Us Today</h3>
            <p><i class="fa fa-mobile"></i>Call Us 666 777 888 OR 11 33 22</p>
            <p><i class="fa fa-envelope" id="envel"></i>Send an Email On Contact devitems@gmail.com</p>
            <p><i class="fa fa-map-marker"></i>Visit UK 123 Fake Street-London United Kingdom 12345</p>
          </div>
          <div class="social_icon">
            <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
            <a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
            <a href="www.google.com"><i class="fa fa-google-plus"></i></a>
            <a href="www.dribbble.com"><i class="fa fa-dribbble"></i></a>
            <a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="quick_contack about_hello subcribe_btn wow fadeInRight">
            <h3>Quick Contact</h3>
            <input type="text" placeholder="Your Name" name="name">
            <div class="message_text">
              <textarea name="message" placeholder="Message" required></textarea>
            </div>
            <input type="button" class="btn-black " value="send message" name="send message" id="contact-button">
                    </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact-section-end -->
  <!-- footer-section-start -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="footer_copyright">
          <p>&copy;2015 PRES IS PROUDLY POWERED BY <a href="http://devitems.com/author/rakib9382/">RAKIB</a>.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer-section-end -->
@endsection
