<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>@yield('title') | {{env('APP_NAME')}} | {{env('APP_TITLE')}}</title>
  <meta name="robot" content="no-index, no-follow">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="{{asset('images/logo.png')}}">
  <meta name="apple-mobile-web-app-title" content="FansAlive">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="{{asset('images/logo.png')}}">
  
  <!-- style -->
  <link rel="stylesheet" href="{{asset('animate.css/animate.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('glyphicons/glyphicons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('material-design-icons/material-design-icons.css')}}" type="text/css" />

  <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" />
  <!-- build:css styles/app.min.css -->
  <link rel="stylesheet" href="{{asset('styles/app.css')}}" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="{{asset('styles/font.css')}}" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal fade nav-expand">
    <div class="left navside black dk" layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        	<div ui-include="'../assets/images/logo.svg'"></div>
        	<img src="../assets/images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">FansAlive</span>
        </a>
        <!-- / brand -->
      </div>
      <div flex-no-shrink>
        <div>
          <div class="nav-fold">
            <a href="">
                <span class="pull-left">
                  <img src="../assets/images/a2.jpg" alt="FAL" class="w-40 r">
                </span>
                <span class="clear hidden-folded p-x">
                  <span class="block _500">Jack Perez</span>
                  <small class="block text-muted">Administrator</small>
                </span>
            </a>
          </div>

        </div>
      </div>
      <div flex class="hide-scroll">
        <nav class="scroll nav-stacked nav-active-primary">
          
            <ul class="nav" ui-nav>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Main</small>
              </li>
              
              <li>
                <a href="dashboard.html" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe3fc;
                    </i>
                  </span>
                  <span class="nav-text">Dashboard</span>
                </a>
              </li>
          
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <b class="label rounded label-sm primary">5</b>
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                      <span ui-include="'../assets/images/i_1.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Apps</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="inbox.html" >
                      <span class="nav-text">Inbox</span>
                    </a>
                  </li>
                  <li>
                    <a href="contact.html" >
                      <span class="nav-text">Contacts</span>
                    </a>
                  </li>
                  <li>
                    <a href="calendar.html" >
                      <span class="nav-text">Calendar</span>
                    </a>
                  </li>
                </ul>
              </li>
          
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;
                      <span ui-include="'../assets/images/i_2.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Layouts</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="headers.html" >
                      <span class="nav-text">Header</span>
                    </a>
                  </li>
                  <li>
                    <a href="asides.html" >
                      <span class="nav-text">Aside</span>
                    </a>
                  </li>
                  <li>
                    <a href="footers.html" >
                      <span class="nav-text">Footer</span>
                    </a>
                  </li>
                </ul>
              </li>
          
              <li>
                <a href="widget.html" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8d2;
                      <span ui-include="'../assets/images/i_3.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Widgets</span>
                </a>
              </li>
          
              <li class="nav-header hidden-folded">
                <small class="text-muted">Components</small>
              </li>
          
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-label">
                    <b class="label label-sm accent">8</b>
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe429;
                    </i>
                  </span>
                  <span class="nav-text">UI kit</span>
                </a>
                <ul class="nav-sub nav-mega nav-mega-3">
                  <li>
                    <a href="arrow.html" >
                      <span class="nav-text">Arrow</span>
                    </a>
                  </li>
                </ul>
              </li>
          
          
              <li class="nav-header hidden-folded">
                <small class="text-muted">Help</small>
              </li>
            </ul>
        </nav>
      </div>
      <div flex-no-shrink>
        <div>
          <nav ui-nav>
              <ul class="nav">
                <li><div class="b-b b m-v-sm"></div></li>
                <li class="no-bg">
                  <a class="auto">
                    <span class="nav-icon">
                      <i class="material-icons inline">&#xe835;</i>
                      <i class="material-icons text-warn none">&#xe834;</i>
                    </span>
                    <span class="nav-text">Filter</span>
                  </a>
                </li>
                <li class="no-bg">
                  <a>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe83a;</i>
                    </span>
                    <span class="nav-text">
                      Star<small class="block text-muted">Border</small>
                    </span>
                  </a>
                </li>
                <li><div class="b-b b m-t-sm"></div></li>
                <li class="no-bg">
                  <a>
                    <span class="nav-icon">
                     <i class="material-icons">&#xe8ac;</i>
                    </span>
                    <span class="nav-text">Logout</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
      </div>
    </div>
  </div>
  <!-- / aside -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z1" role="main">
    <div class="app-header white box-shadow">
        <div class="navbar navbar-toggleable-sm flex-row align-items-center">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->
        
            <!-- Page title - Bind to $state's title -->
            <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>
        
            <!-- navbar collapse -->
            <div class="collapse navbar-collapse" id="collapse">
              <!-- link and dropdown -->
              <ul class="nav navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link" href data-toggle="dropdown">
                    <i class="fa fa-fw fa-plus text-muted"></i>
                    <span>New</span>
                  </a>
                  <div ui-include="'../views/blocks/dropdown.new.html'"></div>
                </li>
              </ul>
        
              <div ui-include="'../views/blocks/navbar.form.html'"></div>
              <!-- / -->
            </div>
            <!-- / navbar collapse -->
        
            <!-- navbar right -->
            <ul class="nav navbar-nav ml-auto flex-row">
              <li class="nav-item dropdown pos-stc-xs">
                <a class="nav-link mr-2" href data-toggle="dropdown">
                  <i class="material-icons">&#xe7f5;</i>
                  <span class="label label-sm up warn">3</span>
                </a>
                <div ui-include="'../views/blocks/dropdown.notification.html'"></div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="../assets/images/a0.jpg" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div ui-include="'../views/blocks/dropdown.user.html'"></div>
              </li>
              <li class="nav-item hidden-md-up">
                <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                  <i class="material-icons">&#xe5d4;</i>
                </a>
              </li>
            </ul>
            <!-- / navbar right -->
        </div>
    </div>
    <div class="app-footer">
      <div class="p-2 text-xs">
        <div class="pull-right text-muted py-1">
          &copy; Copyright <strong>Flatkit</strong> <span class="hidden-xs-down">- Built with Love v1.1.3</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="../">About</a>
          <a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Get it</a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
      @yield('content')
<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / content -->


<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="{{asset('js/jquery/jquery/dist/jquery.js')}}"></script>
<!-- Bootstrap -->
  <script src="{{asset('js/jquery/tether/dist/js/tether.min.js')}}"></script>
  <script src="{{asset('js/jquery/bootstrap/dist/js/bootstrap.js')}}"></script>
  <script src="{{asset('js/scripts/ui-nav.js')}}"></script>
  <script src="{{asset('js/scripts/ui-scroll-to.js')}}"></script>
  <script src="{{asset('js/scripts/ui-device.js')}}"></script>
  <script src="{{asset('js/scripts/ui-form.js')}}"></script>
  <script src="{{asset('js/scripts/ui-toggle-class.js')}}"></script>
<!-- endbuild -->
</body>
</html>
