@extends('tasks.navbarList')

@section('styles')
  .sticky-wrapper {
  	position: relative;
  }

  /*panel*/
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
  	transition: all .2s ease;
  }
  .x_title {
  	border-bottom: 2px solid #E6E9ED;
  	padding: 1px 5px 6px;
  	margin-bottom: 10px;
  }

  .panel_toolbox {
  	float: right;
  	min-width: 70px;
  }
  .navbar-right {
  	margin-right: 0;
  }
  .navbar-right {
  	float: right !important;
  	margin-right: -15px;
  }

  .x_content {
  	padding: 0 5px 6px;
  	position: relative;
  	width: 100%;
  	float: left;
  	clear: both;
  	margin-top: 5px;
  }

  .actionBar {
  	width: 100%;
  	border-top: 1px solid #ddd;
  	padding: 10px 5px;
  	text-align: right;
  	margin-top: 10px;
  }

  .form_wizard .stepContainer {
  	display: block;
  	position: relative;
  	margin: 0;
  	padding: 0;
  	border: 0 solid #CCC;
  	overflow-x: hidden;
  }

  /*/panel*/
  .wizard_horizontal ul.wizard_steps {
    display: table;
    list-style: none;
    position: relative;
    width: 100%;
    margin: 0 0 20px;
  }

  .wizard_horizontal ul.wizard_steps li {
    display: table-cell;
    text-align: center;
  }

  .wizard_horizontal ul.wizard_steps li a::before {
    content: "";
    position: absolute;
    height: 4px;
    background: #ccc;
    top: 20px;
    width: 100%;
    z-index: 4;
    left: 0;
  }

  .wizard_horizontal ul.wizard_steps li a, .wizard_horizontal ul.wizard_steps li:hover {
    display: block;
    position: relative;
    -moz-opacity: 1;
    filter: alpha(opacity=100);
    opacity: 1;
    color: #666;
    text-decoration: none;
  }

  .wizard_horizontal ul.wizard_steps li a .step_no {
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 100px;
    display: block;
    margin: 0 auto 5px;
    font-size: 16px;
    text-align: center;
    position: relative;
    z-index: 5;
  }

  .wizard_horizontal ul.wizard_steps {
    list-style: none;
  }

  .wizard_horizontal ul.wizard_steps li a.done::before, .wizard_horizontal ul.wizard_steps li a.done .step_no {
    background: #1ABB9C;
    color: #fff;
  }

  .wizard_verticle ul.wizard_steps li a.selected::before, .step_no {
    background: #ffd400 none repeat;
    color: #fff;
  }

  .wizard_horizontal ul.wizard_steps li a.selected::before, .step_no {
    background: ##ffd400 none repeat;
    color: #fff;
  }

  input{
    background: #f0f0f0 none repeat;
    border: 1px solid #ffd400;
    border-radius: 4px;

  }
@endsection

@section('registerS')
  <!-- jQuery Smart Wizard -->
 <script src="{{ URL::to('turner/js/jquery.smartWizard.js') }}"></script>

 <!-- jQuery Smart Wizard -->
 <script>
   $(document).ready(function() {
     $('#wizard').smartWizard();

     $('#wizard_verticle').smartWizard({
       transitionEffect: 'slide'
     });

     $('.buttonNext').addClass('btn btn-success');
     $('.buttonPrevious').addClass('btn btn-primary');
     $('.buttonFinish').addClass('btn btn-default');
   });
 </script>
 <!-- /jQuery Smart Wizard -->
@endsection

@section('content')
  <div class="col-md-offset-3 col-md-9">

        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel" style="border:none;">
              <div class="x_title">
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

              <div class="x_content" >

                <!-- Smart Wizard -->
                <div id="wizard" class="form_wizard wizard_horizontal">
                  <ul class="wizard_steps">
                    <li>
                      <a href="#step-1">
                        <span class="step_no">1</span>
                        <span class="step_descr">
                            Step 1<br />
                            <small>Step 1 description</small>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#step-2">
                        <span class="step_no">2</span>
                        <span class="step_descr">
                            Step 2<br />
                            <small>Step 2 description</small>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#step-3">
                        <span class="step_no">3</span>
                        <span class="step_descr">
                            Step 3<br />
                            <small>Step 3 description</small>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#step-4">
                        <span class="step_no">4</span>
                        <span class="step_descr">
                            Step 4<br />
                            <small>Step 4 description</small>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="#step-5">
                        <span class="step_no">5</span>
                        <span class="step_descr">
                            Step 5<br />
                            <small>Step 5 description</small>
                        </span>
                      </a>
                    </li>
                  </ul>
                  <div id="step-1">
                    <form class="form-horizontal form-label-left">

                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span class="required">*</span>First Name
                        </label>
                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                          <input style="background: #f0f0f0 none repeat; border: 1px solid #ffd400;border-radius: 4px;"
                           type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><span class="required">*</span>Last Name
                        </label>
                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                          <input style="background: #f0f0f0 none repeat; border: 1px solid #ffd400; border-radius: 4px;"
                          type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                          <input style="background: #f0f0f0 none repeat; border: 1px solid #ffd400; border-radius: 4px;"
                           id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input style="background: #f0f0f0 none repeat; border: 1px solid #ffd400; border-radius: 4px;"
                              type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input style="background: #f0f0f0 none repeat; border: 1px solid #ffd400; border-radius: 4px;" type="radio" name="gender" value="female"> Female
                            </label>
                          </div>
                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><span class="required">*</span>Date Of Birth
                        </label>
                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                          <input style="background: #f0f0f0 none repeat; border: 1px solid #ffd400; border-radius: 4px;" id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                    </form>
                  </div>
                  <div id="step-2">
                    <h2 class="StepTitle">Step 2 Content</h2>
                    <p>
                      do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                      fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                      in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                  <div id="step-3">
                    <h2 class="StepTitle">Step 3 Content</h2>
                    <p>
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                      eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                      in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                  <div id="step-4">
                    <h2 class="StepTitle">Step 4 Content</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                      in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                      in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                  <div id="step-5">
                    <form class="form-horizontal form-label-left" >

                      <div class="form-group">

                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                          <input style="background: #f0f0f0 none repeat; border: 1px solid #ffd400;border-radius: 4px;"
                           type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span class="required">*</span>First Name
                        </label>
                      </div>
                      <div class="form-group">

                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                          <input style="background: #f0f0f0 none repeat; border: 1px solid #ffd400; border-radius: 4px;"
                          type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><span class="required">*</span>Last Name
                        </label>
                      </div>
                      <div class="form-group">

                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                          <input style="background: #f0f0f0 none repeat; border: 1px solid #ffd400; border-radius: 4px;"
                           id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                      </div>
                      <div class="form-group">

                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input style="background: #f0f0f0 none repeat; border: 1px solid #ffd400; border-radius: 4px;"
                              type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input style="background: #f0f0f0 none repeat; border: 1px solid #ffd400; border-radius: 4px;" type="radio" name="gender" value="female"> Female
                            </label>
                          </div>
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                      </div>
                      <div class="form-group">

                        <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                          <input style="background: #f0f0f0 none repeat; border: 1px solid #ffd400; border-radius: 4px;" id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><span class="required">*</span>Date Of Birth
                        </label>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End SmartWizard Content -->
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- video-section-start -->
  <section class="video section_padding" type="hidden" style="display:none;">
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
@endsection
