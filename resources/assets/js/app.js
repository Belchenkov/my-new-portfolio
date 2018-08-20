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

const app = new Vue({
    el: '#app'
});
