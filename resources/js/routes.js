window.Vue = require('vue');

import LoginComponent from "./components/forms/LoginComponent";
import SideBarComponent from "./components/layouts/SideBarComponent";
import DashboardComponent from "./components/pages/DashboardComponent";
import NotFoundPage from "./components/pages/NotFoundPage"

/**
 * Components Registration
 */
Vue.component('side-bar-component', SideBarComponent);
Vue.component('dashboard-component', DashboardComponent);
Vue.component('login-component', LoginComponent);
Vue.component('side-bar', SideBarComponent);

/**
 * Defining routes for the front end
 */
export default [
    { path: "/", component: LoginComponent, name: 'Login'},
    { path: "/dashboard", component: LoginComponent, name: 'Dashboard', meta: {requiresAuth: true}},
    { path: "*", component: NotFoundPage, name: 'NotFound', meta: {requiresAuth: true}}
];

