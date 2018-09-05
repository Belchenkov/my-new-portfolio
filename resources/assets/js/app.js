import Vue from 'vue';
window.Vue = require('vue');
require('./bootstrap');

// Vuetify
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify);

// Layouts
Vue.component('app-main', require('./components/admin/Main'));
Vue.component('app-navbar', require('./components/layouts/Navbar'));

// Admin
Vue.component('app-list-categories', require('./components/admin/ListCategories'));
Vue.component('app-list-works', require('./components/admin/ListWorks'));

// Portfolio
Vue.component('app-portfolio', require('./components/portfolio/Portfolio'));
Vue.component('app-header', require('./components/portfolio/Header'));
Vue.component('app-works', require('./components/portfolio/Works'));
Vue.component('app-contacts', require('./components/portfolio/Contacts'));
Vue.component('app-footer', require('./components/portfolio/Fotter'));

// Auth
Vue.component('app-login', require('./components/auth/Login'));

const app = new Vue({
    el: '#app'
});
