import Vue from "vue";

require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy'

import 'buefy/dist/buefy.css'

/**
 * Adding Buefy for some visualization
 */
Vue.use(Buefy);

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
 * Mixins
 * Global helper functions
 */
Vue.mixin({
    data() {
        return {
            configuration: {
                name: "FansAlive",
                title: "Data Entry",
                host: "dev.theadmin",
                images: {
                    logo: "http://" + window.location.host + "/images/logo.png"
                }
            }
        }
    },
    created() {
        this.setDocumentTitle()
    },
    methods: {
        /**
         * Set title of current page
         * @param title
         * @returns {string}
         */
        setDocumentTitle(title = "") {
            return window.document.title = (title ? title + " | " : "") + this.configuration.name + " | " + this.configuration.title;
        },
        /**
         * This method will be in charge of going through any response gotten from the
         * request before sending the result for us to make use of
         *
         * @param response
         */
        startResponseCleansing: function (response) {
            //todo: cleanse response data
            switch (response.statusCode()) {
                case '':
                    break;
                default:
                    break;
            }
        },
        sendPostRequest(url, data = {}, headers = false) {
        	const loadingComponent = this.$loading.open();

            axios.post(url, data, {
                headers: headers ? headers : {
                    'Content-Type': 'application/json'
                }
            })
                .then(response => {
                    /**
                     * Lets clean the response by going through possible errors
                     * and dealing with them.
                     */
                    this.startResponseCleansing(response);
                })
                .catch(error => {

                	let errorResult = error.response

                	if(errorResult.status >= 500){
                		this.showToast(errorResult.data.data.error, 4000, 'is-danger');
                	}else{
                		this.showToast(errorResult.data.data.error, 4000, 'is-warning');
                	}

                    loadingComponent.close();
                })
        },
        showToast(message,
        	duration = 3000,
        	type = 'is-success')
        {
        	this.$toast.open({
                    duration,
                    message,
                    position: 'is-top',
                    type
                })
        }
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const vm = new Vue({
    router: routerObject
}).$mount('#app');
