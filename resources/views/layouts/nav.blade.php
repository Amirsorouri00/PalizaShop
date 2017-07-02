<!DOCTYPE html><!DOCTYPE html>
<!--[if IE 7]>    <html class="no-js oldie ie7 ie" lang="en-US" prefix="og: http://ogp.me/ns#" > <![endif]-->
<!--[if IE 8]>    <html class="no-js oldie ie8 ie" lang="en-US" prefix="og: http://ogp.me/ns#" > <![endif]-->
<!--[if IE 9 ]>   <html class="no-js       ie9 ie" lang="en-US" prefix="og: http://ogp.me/ns#" > <![endif]-->
<!--[if (gt IE 9)|!(IE)] -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TURNER</title>
  	<!-- fonts -->
  	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  	<!-- bootstrap -->


    <link href="{{ URL::asset('./turner/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- fontawesome -->
    <link href="{{ URL::asset('./turner/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- animate -->
    <link href="{{ URL::asset('./turner/css/animate.css') }}" rel="stylesheet">
    <link  rel="stylesheet" type="text/css" href="css/animate.css"/>
    <!-- owl-carousel -->
    <link href="{{ URL::asset('./turner/css/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <!-- slicknav -->
    <link href="{{ URL::asset('./turner/css/slicknav.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/slicknav.css">
    <!-- style css -->
    <link href="{{ URL::asset('./turner/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- slider css -->
    <link href="{{ URL::asset('./turner/mainSlider.css') }}" rel="stylesheet">
    <!-- responsive -->
    <link href="{{ URL::asset('./turner/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/responsive.css"/>
    <!-- favicon -->
    <link href="{{ URL::asset('./turner/images/icon.ico') }}" rel="stylesheet">
    <link rel="shortcut icon" href="images/icon.ico" />


    <style>
      @yield('styles')
      #nav0 li {
      	float: right;
      	padding: 15px 0;
      }

      #nav a {
      	margin: 0;
      	padding: 0;
      }

      .nav > li > a {
      	position: relative;
      	display: block;
      	padding: 0px 15px;
      }

      .is-sticky #nav0 a {
      	color: #000000;
      }
      .sticky-wrapper {
          left: 0;
          position: relative;
          top: 0;
          width: 100%;
          z-index: 999;
      }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="main_" data-spy="scroll" data-target="#navbar-example">
  	<div id="home"></div>
  	<!-- header-section-start -->
      <header>
    		<div class="container">
    			<div class="row">
    				<nav class="mainmenu" style="float:right; ">

              <!--<div class="logo" style="float:right; padding:15px 0px;">
                <a id="logo_2" href="" style="float:right;"><img src="{{ URL::to('./turner/images/logo-2.png') }}" alt="" /></a>
              </div>-->
              <ul class="nav nav-tabs" id="nav0">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li class="logo">	<a id="logo_2" href="" style="float:right;">
                        <img style="max-width:100%;" src="{{ URL::to('./turner/images/logo-2.png') }}" alt="" />
                      </a></li>
                      <li class="logo">	<a id="logo_1" href="" style="float:right;">
                        <img style="max-width:100%;" src="{{ URL::to('./turner/images/logo-1.png') }}" alt="" />
                      </a></li>
                      <li><a href="{{ url('/login') }}">Login</a></li>
                      <li><a href="{{ url('/register') }}">Register</a></li>

                  @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                          </ul>
                      </li>
                  @endif
              </ul>

    				</nav>


    				<nav class="mainmenu"  id="navbar-example" style="float:left">
    					<ul id="nav" class="nav nav-tabs" role="tablist">
                @yield('navList')
    					</ul>
    				</nav>
    			</div>

    		</div>
  	</header>
  	<!-- header-section-end -->

    @yield('slider')

    @yield('content')

    @yield('script1')

    <script src="{{ URL::asset('./turner/') }}" ></script>
    <!-- jquery-1.11.3 -->
    <script src="{{ URL::asset('./turner/js/jquery-1.11.3.min.js') }}" ></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{ URL::asset('./turner/js/bootstrap.min.js') }}" ></script>
    <script src="js/bootstrap.min.js"></script>

    @yield('registerS')


    <!-- slicknav js -->
    <script src="{{ URL::asset('./turner/js/jquery.slicknav.min.js') }}" ></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <!-- sticky -->
    <script src="{{ URL::asset('./turner/js/jquery.sticky.js') }}" ></script>
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp -->
    <script src="{{ URL::asset('./turner/js/jquery.scrollUp.js') }}" ></script>
    <script src="js/jquery.scrollUp.js"></script>
    <!-- wow -->
    <script src="{{ URL::asset('./turner/js/wow.min.js') }}" ></script>
    <script src="js/wow.min.js"></script>
    <!-- owl-carousel -->
    <script src="{{ URL::asset('./turner/js/jquery.nicescroll.min.js') }}" ></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <!-- owl-carousel -->
    <script src="{{ URL::asset('./turner/js/owl.carousel.min.js') }}" ></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- main js -->
    <script src="{{ URL::asset('./turner/js/main.js') }}" ></script>
    <script src="js/main.js"></script>


    @yield('script2')
  </body>
</html>
