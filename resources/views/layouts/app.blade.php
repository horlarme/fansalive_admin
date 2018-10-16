<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>@yield('title') | {{env('APP_NAME')}} | {{env('APP_TITLE')}}</title>
  <meta name="robot" content="no-index, no-follow">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="{{asset('images/logo.png')}}">
  <meta name="apple-mobile-web-app-title" content="FansAlive">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="{{asset('images/logo.png')}}">

  <!-- style -->
  <link rel="stylesheet" href="{{asset('css/animate.css/animate.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('css/glyphicons/glyphicons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('css/material-design-icons/material-design-icons.css')}}" type="text/css" />

  <link rel="stylesheet" href="{{asset('css/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" />
  <!-- build:css styles/app.min.css -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="{{asset('css/font.css')}}" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal nav-expand" data-backdrop="true" data-dismiss="modal">
    <div class="left navside black dk" layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        	<img src="{{asset('images/logo.png')}}" alt=".">
        	<span class="hidden-folded inline">FansAlive</span>
        </a>
        <!-- / brand -->
      </div>
      <div flex-no-shrink>
        <div>
          <div class="nav-fold">
            <a href="{{route('profile')}}">
                <span class="pull-left">
                  <img src="{{asset('images/a2.jpg')}}" alt="FAL" class="w-40 r">
                </span>
                <span class="clear hidden-folded p-x">
                  <span class="block _500">Lawal Oladipupo</span>
                  <small class="block text-muted">Data Entry</small>
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
                <a href="{{route('dashboard')}}" >
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
                  <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;</i>
                  </span>
                  <span class="nav-text">Continents</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="{{route('continent', 'America')}}" >
                      <span class="nav-text">America</span>
                    </a>
                  </li>
                    <li>
                    <a href="{{route('continent', 'America')}}" >
                      <span class="nav-text">Africa</span>
                    </a>
                  </li>
                    <li>
                    <a href="{{route('continent', 'America')}}" >
                      <span class="nav-text">Asia</span>
                    </a>
                  </li>
                </ul>
              </li>

                <li>
                    <a href="{{route('countries')}}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                        <span class="nav-text">Countries</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('states')}}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                        <span class="nav-text">States</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('cities')}}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                        <span class="nav-text">Cities</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('cities')}}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                        <span class="nav-text">Players</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('cities')}}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                        <span class="nav-text">Clubs</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('cities')}}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                        <span class="nav-text">Coaches</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('cities')}}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                        <span class="nav-text">Managers</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('cities')}}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                        <span class="nav-text">Stadiums</span>
                    </a>
                </li>

                <li class="nav-header">
                    <span class="text-muted">Entry Users</span>
                </li>

                <li>
                    <a href="{{route('cities')}}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                        <span class="nav-text">Create User</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('cities')}}" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                        <span class="nav-text">All Users</span>
                    </a>
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
                  <a href="https://fansalive.com">
                    <span class="nav-icon">
                      <i class="material-icons">&#xe83a;</i>
                    </span>
                    <span class="nav-text">
                      FansAlive.com<small class="block text-muted">go-to</small>
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
                  <div>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" ui-sref="app.inbox.compose">
                          <span>Inbox</span>
                        </a>
                        <a class="dropdown-item" ui-sref="app.todo">
                          <span>Todo</span>
                        </a>
                        <a class="dropdown-item" ui-sref="app.note.list">
                          <span>Note</span>
                          <span class="label primary m-l-xs">3</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" ui-sref="app.contact">Contact</a>
                    </div>
                  </div>
                </li>
              </ul>

              <div>
                <!-- search form -->
                <form class="form-inline" role="search">
                      <input type="text" class="form-control b-a rounded px-3 form-control-sm" placeholder="Search projects...">
                </form>
                <!-- / search form -->

              </div>
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
                <div>
                  <!-- dropdown -->
                  <div class="dropdown-menu dropdown-menu-overlay pull-right w-xl animated fadeInUp no-bg no-border no-shadow">
                      <div class="scrollable" style="max-height: 220px">
                        <ul class="list-group list-group-gap m-0">
                          <li class="list-group-item black lt box-shadow-z0 b">
                            <span class="pull-left m-r">
                              <img src="../assets/images/a0.jpg" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear block">
                              Use awesome <a href class="text-primary">animate.css</a><br>
                              <small class="text-muted">10 minutes ago</small>
                            </span>
                          </li>
                          <li class="list-group-item black lt box-shadow-z0 b">
                            <span class="pull-left m-r">
                              <img src="../assets/images/a1.jpg" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear block">
                              <a href class="text-primary">Joe</a> Added you as friend<br>
                              <small class="text-muted">2 hours ago</small>
                            </span>
                          </li>
                          <li class="list-group-item dark-white text-color box-shadow-z0 b">
                            <span class="pull-left m-r">
                              <img src="../assets/images/a2.jpg" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear block">
                              <a href class="text-primary">Danie</a> sent you a message<br>
                              <small class="text-muted">1 day ago</small>
                            </span>
                          </li>
                        </ul>
                      </div>
                  </div>
                  <!-- / dropdown -->

                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="{{asset('images/a0.jpg')}}" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div>
                  <div class="dropdown-menu dropdown-menu-overlay pull-right">
                      <a class="dropdown-item" ui-sref="app.inbox.list">
                        <span>Inbox</span>
                        <span class="label warn m-l-xs">3</span>
                      </a>
                      <a class="dropdown-item" ui-sref="app.page.profile">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" ui-sref="app.page.setting">
                        <span>Settings</span>
                        <span class="label primary m-l-xs">3/9</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" ui-sref="app.docs">
                        Need help?
                      </a>
                      <a class="dropdown-item" ui-sref="access.signin">Sign out</a>
                    </div>

                </div>
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
  </div>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/jquery/tether/dist/js/tether.min.js')}}"></script>
  <script src="{{asset('js/scripts/ui-nav.js')}}"></script>
  <script src="{{asset('js/scripts/ui-scroll-to.js')}}"></script>
  <script src="{{asset('js/scripts/ui-device.js')}}"></script>
  <script src="{{asset('js/scripts/ui-form.js')}}"></script>
  <script src="{{asset('js/scripts/ui-toggle-class.js')}}"></script>
  <!-- endbuild -->
</body>
</html>
