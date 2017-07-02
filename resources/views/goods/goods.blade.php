@extends('tasks.navbarList')

@section('styles')

  .isotope .isotope-item {
  	-webkit-transition-property: -webkit-transform, opacity;
  	-moz-transition-property: -moz-transform, opacity;
  	-ms-transition-property: -ms-transform, opacity;
  	-o-transition-property: -o-transform, opacity;
  	transition-property: transform, opacity;
  }
  .isotope, .isotope .isotope-item {
  	-webkit-transition-duration: 0.8s;
  	-moz-transition-duration: 0.8s;
  	-ms-transition-duration: 0.8s;
  	-o-transition-duration: 0.8s;
  	transition-duration: 0.8s;
  }

  .isotope-hidden.isotope-item {
  	pointer-events: none;
  	z-index: 1;
  }

  .isotope-item {
  	z-index: 2;
  }

  #thumbs li {
  	list-style-type: none;
  }

  .page {
    //background: #2F3238;
    padding: 100px 0;
    position: relative;
    z-index: 99;
  }
  .page .container {
    margin-right: auto;
    margin-left: auto;
  }

  .page .row::before, .row::after {
    display: table;
    line-height: 0;
    content: "";
  }
  .page .row::after {
    clear: both;
  }

  .span3 {
    width: 270px;
  }

  .myspan {
    min-height: 1px;
  }

  .work-nav #filters {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .work-nav #filters li {
    //margin: 0 0 30px 0;
    padding: 0;
  }

  .list-group-item {
  	position: relative;
  	display: block;
  	padding: 10px 15px;
  	margin-bottom: -1px;
  	background-color: #fff;
  	border: 1px solid #ddd;
  }

  .list-group-item:last-child {
  	margin-bottom: 0;
  	border-bottom-right-radius: 0px;
  	border-bottom-left-radius: 0px;
  }
  .list-group-item:first-child {
  	border-top-left-radius: 0px;
  	border-top-right-radius: 0px;
  }

  .type-work {
    color: #FFFFFF;
    font-size: 24px;
    font-weight: 300;
    margin-bottom: 30px;
    line-height: 1em;
    text-transform: uppercase;
  }

  .work-nav #filters li a {
    color: #7F8289;
    font-size: 16px;
    display: block;
    text-decoration: none;
    cursor: pointer;
    transition: color 0.1s linear 0s;
  }

  .col-md-55 {
    width: 100%;
    margin-bottom: 10px;
    float: left;
  }

  @media (min-width: 768px) {
    .col-md-55 {
      width: 20%; } }
  @media (min-width: 992px) {
    .col-md-55 {
      width: 20%; } }
  @media (min-width: 1200px) {
    .col-md-55 {
      width: 90%; } }

  .thumbnail {
    height: 190px;
    overflow: hidden;
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: border .2s ease-in-out;
    line-height: 1.42857143;
  }

  .thumbnail .image {
    height: 120px;
    overflow: hidden;
  }

  .view {
    overflow: hidden;
    position: relative;
    text-align: center;
    box-shadow: 1px 1px 2px #e6e6e6;
    cursor: default; }

  .view .mask, .view .content {
    position: absolute;
    width: 100%;
    overflow: hidden;
    top: 0;
    left: 0; }

  .view img {
    display: block;
    position: relative; }

  .view .tools {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    position: relative;
    font-size: 17px;
    padding: 3px;
    background: rgba(0, 0, 0, 0.35);
    margin: 43px 0 0 0; }

  .mask.no-caption .tools {
    margin: 90px 0 0 0; }

  .view .tools a {
    display: inline-block;
    color: #FFF;
    font-size: 18px;
    font-weight: 400;
    padding: 0 4px; }

  .view p {
    font-family: Georgia, serif;
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #fff;
    padding: 10px 20px 20px;
    text-align: center; }

  .view a.info {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    background: #000;
    color: #fff;
    text-transform: uppercase;
    box-shadow: 0 0 1px #000; }

  .view-first img {
    transition: all 0.2s linear; }

  .view-first .mask {
    opacity: 0;
    background-color: rgba(0, 0, 0, 0.5);
    transition: all 0.4s ease-in-out; }

  .view-first .tools {
    transform: translateY(-100px);
    opacity: 0;
    transition: all 0.2s ease-in-out; }

  .view-first p {
    transform: translateY(100px);
    opacity: 0;
    transition: all 0.2s linear; }

  .view-first:hover img {
    transform: scale(1.1); }

  .view-first:hover .mask {
    opacity: 1; }

  .view-first:hover .tools, .view-first:hover p {
    opacity: 1;
    transform: translateY(0px); }

  .view-first:hover p {
    transition-delay: 0.1s; }
    .span12 {
      float: left;
      min-height: 1px;
      margin-left: 30px;width: 1170px;
    }
    .span12 .title-page {
      text-align: center;
      margin-bottom: 100px;
    }
    .span12 .title-page .title {
      font-size: 48px;
      margin: 0 0 10px 0;color: #FFFFFF;
      font-weight: 300;
      font-family: 'Titillium Web', sans-serif;
      line-height: 1.5em;text-rendering: optimizelegibility;
    }
    .categories {
      color: #7F8289; font-size: 16px;display: block;
      text-decoration: none; cursor: pointer;transition: color 0.1s linear 0s;
    }
@endsection

@section('script2')
  <!-- FastClick -->
  <script src="{{ URL::asset('./turner/vendors/fastclick/lib/fastclick.js') }}" ></script>
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="{{ URL::asset('./turner/build/js/custom.min.js') }}" ></script>
  <script src="../build/js/custom.min.js"></script>

  <script src="{{ URL::asset('./turner/js/jquery.isotope.js') }}"></script> <!-- Isotope Filter -->
  <script src="{{ URL::asset('./turner/js/brushIsotop.js') }}"></script> <!-- Isotope Filter -->

  <script>
    jQuery(function($){
      if($('#projects').length > 0){
        var $container = $('#projects');

        $container.imagesLoaded(function() {
          $container.isotope({
            // options
            animationEngine: 'best-available',
            itemSelector : '.item-thumbs',
            layoutMode : 'fitRows'
          });
        });


        // filter items when filter link is clicked
        var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

          $optionLinks.click(function(){
          var $this = $(this);
          // don't proceed if already selected
          if ( $this.hasClass('selected') ) {
            return false;
          }
          var $optionSet = $this.parents('.option-set');
          $optionSet.find('.selected').removeClass('selected');
          $this.addClass('selected');

          // make option object dynamically, i.e. { filter: '.my-filter-class' }
          var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
          // parse 'false' as false boolean
          value = value === 'false' ? false : value;
          options[ key ] = value;
          if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
            // changes in layout modes need extra logic
            changeLayoutMode( $this, options )
          } else {
            // otherwise, apply new options
            $container.isotope( options );
          }

          return false;
        });
      }

    });
  </script>
@endsection

@section('content')
  <!-- Our Work Section -->
    <div id="work" class="" style="background:white none repeat; padding:20px; margin:30px 0 100px 0;">
        <!-- Title Page -->
          <div class="row">
              <div class="span12" style="width:100%;">
                  <div class="title-page" style="">
                      <h2 class="title" style="color:#ffd400">Our Work</h2>
                      <h3 class="title-description">Check Out Our Projects on <a href="#" style="color:#ffd400">Dribbble</a>.</h3>
                  </div>
              </div>
          </div>
          <!-- End Title Page -->
          <!-- Portfolio Projects -->
            <div class="row">
              <div class="col-md-12" dir="rtl">
                  <div class="span3 myspan" style="float:right; width:20%; border:2px solid #e3e3e3; padding:15px;position:fixed;">
                      <!-- Filter -->
                      <nav id="options" class="work-nav" dir="rtl">
                          <ul id="filters" class="option-set" data-option-key="filter" style="">
                            <li class="type-work" style="color:#ffd400">دسته بندی هدایا</li>
                              <li style="margin: 0 0 30px 0;padding: 0;">
                                  <a href="#filter" data-option-value="*" class="categories selected" style="">زنانه</a>
                              </li>
                              <li style="margin: 0 0 30px 0;padding: 0;">
                                  <a href="#filter" data-option-value=".design" class="categories" style="">مردانه</a>
                              </li>
                              <li style="margin: 0 0 30px 0;padding: 0;">
                                <a href="#filter" data-option-value=".photography" class="categories" style="">پسرانه</a>
                              </li>
                              <li style="margin: 0 0 30px 0;padding: 0;">
                                <a href="#filter" data-option-value=".videos" class="categories" style="">دخترانه</a>
                              </li>
                          </ul>
                      </nav>
                      <!-- End Filter -->
                  </div>

                  <div class="span9" style="float:left; width: 75%;min-height: 1px; margin-left: 30px; border:2px solid #e3e3e3;" >
                    <div class="clearfix" style="margin:0;padding:15px;">

                      <section id="projects">
                        <ul id="thumbs">
                          <li class="item-thumbs col-md-4 design" style="">
                            <div class="col-md-55" style="margin:auto;">
                              <div class="thumbnail" >
                                <div class="image view view-first">
                                  <img style="width: 100%; display: block;" src="{{ URL::to('/turner/image/4.jpg') }}" alt="image" />
                                  <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                      <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                      <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i></a>

                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Snow and Ice Incoming for the South</p>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li class="item-thumbs col-md-4 videos" style="">
                            <div class="col-md-55" style="">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img style="width: 100%; display: block;" src="{{ URL::to('/turner/image/4.jpg') }}" alt="image" />
                                  <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                      <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                      <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Snow and Ice Incoming for the South</p>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li class="item-thumbs col-md-4 photography" style="">
                            <div class="col-md-55" style="">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img style="width: 100%; display: block;" src="{{ URL::to('/turner/image/4.jpg') }}" alt="image" />
                                  <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                      <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                      <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Snow and Ice Incoming for the South</p>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li class="item-thumbs col-md-4 videos" style="">
                            <div class="col-md-55" style="">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img style="width: 100%; display: block;" src="{{ URL::to('/turner/image/4.jpg') }}" alt="image" />
                                  <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                      <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                      <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Snow and Ice Incoming for the South</p>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li class="item-thumbs col-md-4 design" style="">
                            <div class="col-md-55" style="">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img style="width: 100%; display: block;" src="{{ URL::to('/turner/image/4.jpg') }}" alt="image" />
                                  <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                      <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                      <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Snow and Ice Incoming for the South</p>
                                </div>
                              </div>
                            </div>
                          </li>


                          <li class="item-thumbs col-md-4 photography" style="">
                            <div class="col-md-55" style="">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img style="width: 100%; display: block;" src="{{ URL::to('/turner/image/4.jpg') }}" alt="image" />
                                  <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                      <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                      <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Snow and Ice Incoming for the South</p>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item-thumbs col-md-4 photography" style="">
                            <div class="col-md-55" style="">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img style="width: 100%; display: block;" src="{{ URL::to('/turner/image/4.jpg') }}" alt="image" />
                                  <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                      <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                      <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Snow and Ice Incoming for the South</p>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item-thumbs col-md-4 design" style="">
                            <div class="col-md-55" style="">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img style="width: 100%; display: block;" src="{{ URL::to('/turner/image/4.jpg') }}" alt="image" />
                                  <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                      <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                      <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Snow and Ice Incoming for the South</p>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item-thumbs col-md-4 design" style="">
                            <div class="col-md-55" style="">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img style="width: 100%; display: block;" src="{{ URL::to('/turner/image/4.jpg') }}" alt="image" />
                                  <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                      <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                      <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Snow and Ice Incoming for the South</p>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="item-thumbs col-md-4 videos" style="">
                            <div class="col-md-55" style="">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                  <img style="width: 100%; display: block;" src="{{ URL::to('/turner/image/4.jpg') }}" alt="image" />
                                  <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                      <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                      <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="caption">
                                  <p>Snow and Ice Incoming for the South</p>
                                </div>
                              </div>
                            </div>
                          </li>

                        </ul>



                      </section>

                    </div>
                  </div>
              </div>
            </div>
          <!-- End Portfolio Projects -->
  </div>
  <!-- End Our Work Section -->

  <!-- video-section-start -->
    <section class="video section_padding" style="display:none;">
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

  <!-- footer-section-start -->
    <footer style="margin-bottom:0; width:100%;">
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
