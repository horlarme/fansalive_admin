<template>
    <div>
        <div class="app-footer white">
            <div>
                <div class="p-2 text-xs">
                    <div class="pull-right text-muted py-1">
                        &copy; Copyright <strong>{{$parent.name}}</strong> <span
                            class="hidden-xs-down">- Built with Love</span>
                        <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
                    </div>
                    <div class="nav">
                        <a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Theme
                            Design
                            Download Link</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="app-body amber bg-auto w-full">
            <div class="text-center pos-rlt p-y-md">
                <h1 class="text-shadow m-0 text-white text-4x">
                    <span class="text-2x font-bold block m-t-lg">404</span>
                </h1>
                <h2 class="h1 m-y-lg text-black">OOPS!</h2>
                <p class="h5 m-y-lg text-u-c font-bold text-black">Sorry! the page you are looking for doesn't
                    exist.</p>
                <router-link :to="LogIn" class="md-btn amber-700 md-raised p-x-md">
                    <span class="text-white">Go to the home page</span>
                </router-link>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: 'not-found-page'
    }
</script>