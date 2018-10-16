require('./bootstrap');

window.Vue = require('vue');

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import apiRoutes from "./apiRoutes";
import VueRouter from 'vue-router';
import routes from './routes';

window.apiRoutes = apiRoutes.apiRoutes;


/**
 * Adding Vue Router to Vue plugin list
 */
Vue.use(VueRouter);

const routerObject = new VueRouter({
    mode: 'history',
    routes
});

routerObject.beforeEach((to, from, next) => {
    /**
     * Authentication Middleware/Guard
     * Prevents Un-Authorized access to routes
     */
    if (to.matched.some(record => record.meta.requiresAuth)) {
        // this route requires auth, check if logged in
        // if not, redirect to login page.
        // if (!auth.loggedIn()) {
            //Todo: Complete Authentication middleware
        // } else {
            next()
        // }
    } else {
        next() // make sure to always call next()!
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const vm = new Vue({
    router: routerObject,
    data() {
        return {
            name: "FansAlive",
            title: "Data Entry",
            host: "dev.theadmin",
            images: {
                logo: "http://" + window.location.host + "/images/logo.png"
            }
        }
    }
}).$mount('#app');
