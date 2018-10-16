<template>
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
                <div class="mb-0 h5 no-wrap" id="pageTitle"></div>

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
                                    <a class="dropdown-item">
                                        <span>Inbox</span>
                                    </a>
                                    <a class="dropdown-item">
                                        <span>Todo</span>
                                    </a>
                                    <a class="dropdown-item">
                                        <span>Note</span>
                                        <span class="label primary m-l-xs">3</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item">Contact</a>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div>
                        <!-- search form -->
                        <form class="form-inline" role="search">
                            <input type="text" class="form-control b-a rounded px-3 form-control-sm"
                                   placeholder="Search projects...">
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
                              <img src="" alt="..." class="w-40 img-circle">
                            </span>
                                            <span class="clear block">
                              Use awesome <a href class="text-primary">animate.css</a><br>
                              <small class="text-muted">10 minutes ago</small>
                            </span>
                                        </li>
                                        <li class="list-group-item black lt box-shadow-z0 b">
                            <span class="pull-left m-r">
                              <img src="" alt="..." class="w-40 img-circle">
                            </span>
                                            <span class="clear block">
                              <a href class="text-primary">Joe</a> Added you as friend<br>
                              <small class="text-muted">2 hours ago</small>
                            </span>
                                        </li>
                                        <li class="list-group-item dark-white text-color box-shadow-z0 b">
                            <span class="pull-left m-r">
                              <img src="" alt="..." class="w-40 img-circle">
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
                    <img src="" alt="...">
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
                    &copy; Copyright <strong>Flatkit</strong> <span
                        class="hidden-xs-down">- Built with Love v1.1.3</span>
                    <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
                </div>
                <div class="nav">
                    <a class="nav-link" href="../../">About</a>
                    <a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Get it</a>
                </div>
            </div>
        </div>
        <div ui-view class="app-body" id="view">

            <!-- ############ PAGE START-->

            <!-- ############ PAGE END-->

        </div>
    </div>
    <!-- / content -->
</template>

<script>
    export default {
        name: 'dashboard-component',
        data() {
            return {}
        }
    }
</script>