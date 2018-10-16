<template>
    <!-- aside -->
    <div id="aside" class="app-aside modal nav-expand" data-backdrop="true" data-dismiss="modal">
        <div class="left navside black dk" layout="column">
            <div class="navbar no-radius">
                <!-- brand -->
                <a class="navbar-brand">
                    <img :src="$parent.images.logo" alt=".">
                    <span class="hidden-folded inline">FansAlive</span>
                </a>
                <!-- / brand -->
            </div>
            <div flex-no-shrink>
                <div>
                    <div class="nav-fold">
                        <a href="">
                <span class="pull-left">
                  <img src="" alt="FAL" class="w-40 r">
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
                            <a href="">
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
                                    <a href="">
                                        <span class="nav-text">America</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="nav-text">Africa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="nav-text">Asia</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                                <span class="nav-text">Countries</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                                <span class="nav-text">States</span>
                            </a>
                        </li>

                        <li>
                            <a href="">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                                <span class="nav-text">Cities</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                                <span class="nav-text">Players</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                                <span class="nav-text">Clubs</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                                <span class="nav-text">Coaches</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                                <span class="nav-text">Managers</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
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
                            <a href="">
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;</i>
                  </span>
                                <span class="nav-text">Create User</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
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
                            <li>
                                <div class="b-b b m-v-sm"></div>
                            </li>
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
                            <li>
                                <div class="b-b b m-t-sm"></div>
                            </li>
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

</template>

<script>
    export default {
        name: 'side-bar-component',
        data() {
            return {

            }
        }
    }
</script>