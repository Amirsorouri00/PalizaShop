@extends('tasks.navbarList')

@section('styles')
  /* *********  /moris  **************************** */
  /* *********  ecommerce  **************************** */
  .price {
    font-size: 40px;
    font-weight: 400;
    color: #26B99A;
    margin: 0; }

  .prod_title {
    border-bottom: 1px solid #DFDFDF;
    padding-bottom: 5px;
    margin: 30px 0;
    font-size: 20px;
    font-weight: 400; }

  .product-image img {
    width: 90%; }

  .prod_color li {
    margin: 0 10px; }

  .prod_color li p {
    margin-bottom: 0; }

  .prod_size li {
    padding: 0; }

  .prod_color .color {
    width: 25px;
    height: 25px;
    border: 2px solid rgba(51, 51, 51, 0.28) !important;
    padding: 2px;
    border-radius: 50px; }

  .product_gallery a {
    width: 100px;
    height: 100px;
    float: left;
    margin: 10px;
    border: 1px solid #e5e5e5; }

  .product_gallery a img {
    width: 100%;
    margin-top: 15px; }

  .product_price {
    margin: 20px 0;
    padding: 5px 10px;
    background-color: #FFFFFF;
    text-align: left;
    border: 2px dashed #E0E0E0; }

  .price-tax {
    font-size: 18px; }

  .product_social {
    margin: 20px 0; }

  .product_social ul li a i {
    font-size: 35px; }

  /* *********  /ecommerce  **************************** */


  .bg-white {
    background: #fff !important;
    border: 1px solid #fff !important;
    color: #73879C; }

  .bg-green {
    background: #1ABB9C !important;
    border: 1px solid #1ABB9C !important;
    color: #fff; }

  .bg-red {
    background: #E74C3C !important;
    border: 1px solid #E74C3C !important;
    color: #fff; }

  .bg-blue {
    background: #3498DB !important;
    border: 1px solid #3498DB !important;
    color: #fff; }

  .bg-orange {
    background: #F39C12 !important;
    border: 1px solid #F39C12 !important;
    color: #fff; }

  .bg-purple {
    background: #9B59B6 !important;
    border: 1px solid #9B59B6 !important;
    color: #fff; }

  .bg-blue-sky {
    background: #50C1CF !important;
    border: 1px solid #50C1CF !important;
    color: #fff; }
    .x_panel {
      position: relative;
      width: 100%;
      margin-bottom: 10px;
      padding: 10px 17px;
      display: inline-block;
      background: #fff;
      border: 1px solid #E6E9ED;
      -webkit-column-break-inside: avoid;
      -moz-column-break-inside: avoid;
      column-break-inside: avoid;
      opacity: 1;
      transition: all .2s ease; }

    .x_title {
      border-bottom: 2px solid #E6E9ED;
      padding: 1px 5px 6px;
      margin-bottom: 10px; }

    .x_title .filter {
      width: 40%;
      float: right; }

    .x_title h2 {
      margin: 5px 0 6px;
      float: left;
      display: block;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap; }

    .x_title h2 small {
      margin-left: 10px; }

    .x_title span {
      color: #BDBDBD; }

    .x_content {
      padding: 0 5px 6px;
      position: relative;
      width: 100%;
      float: left;
      clear: both;
      margin-top: 5px; }

    .x_content h4 {
      font-size: 16px;
      font-weight: 500; }

@endsection


@section('content')

  <div class="clearfix">

  </div>
  <div class="row" style="margin:100px 0;">
    <div class="container">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>E-commerce page design</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="col-md-7 col-sm-7 col-xs-12">
              <div class="product-image">
                <img src="{{ URL::to('turner/image/prod1.jpg') }}" alt="..." />
              </div>
              <div class="product_gallery">
                <a>
                  <img src="{{ URL::to('turner/image/prod2.jpg') }}" alt="..." />
                </a>
                <a>
                  <img src="{{ URL::to('turner/image/prod3.jpg') }}" alt="..." />
                </a>
                <a>
                  <img src="{{ URL::to('turner/image/prod4.jpg') }}" alt="..." />
                </a>
                <a>
                  <img src="{{ URL::to('turner/image/prod5.jpg') }}" alt="..." />
                </a>
              </div>
            </div>

            <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

              <h3 class="prod_title">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>

              <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
              <br />

              <div class="">
                <h2>Available Colors</h2>
                <ul class="list-inline prod_color">
                  <li>
                    <p>Green</p>
                    <div class="color bg-green"></div>
                  </li>
                  <li>
                    <p>Blue</p>
                    <div class="color bg-blue"></div>
                  </li>
                  <li>
                    <p>Red</p>
                    <div class="color bg-red"></div>
                  </li>
                  <li>
                    <p>Orange</p>
                    <div class="color bg-orange"></div>
                  </li>

                </ul>
              </div>
              <br />

              <div class="">
                <h2>Size <small>Please select one</small></h2>
                <ul class="list-inline prod_size">
                  <li>
                    <button type="button" class="btn btn-default btn-xs">Small</button>
                  </li>
                  <li>
                    <button type="button" class="btn btn-default btn-xs">Medium</button>
                  </li>
                  <li>
                    <button type="button" class="btn btn-default btn-xs">Large</button>
                  </li>
                  <li>
                    <button type="button" class="btn btn-default btn-xs">Xtra-Large</button>
                  </li>
                </ul>
              </div>
              <br />

              <div class="">
                <div class="product_price">
                  <h1 class="price">Ksh80.00</h1>
                  <span class="price-tax">Ex Tax: Ksh80.00</span>
                  <br>
                </div>
              </div>

              <div class="">
                <button type="button" class="btn btn-default btn-lg">Add to Cart</button>
                <button type="button" class="btn btn-default btn-lg">Add to Wishlist</button>
              </div>

              <div class="product_social">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-envelope-square"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-rss-square"></i></a>
                  </li>
                </ul>
              </div>

            </div>


            <div class="col-md-12">

              <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Home</a>
                  </li>
                  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
                  </li>
                  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                  </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                      synth. Cosby sweater eu banh mi, qui irure terr.</p>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                      booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                      photo booth letterpress, commodo enim craft beer mlkshk </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

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
