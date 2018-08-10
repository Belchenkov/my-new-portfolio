import Vue from 'vue';
window.Vue = require('vue');
require('./bootstrap');

// Vuetify
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify);

Vue.component('app-main', require('./components/admin/Main'));

const app = new Vue({
    el: '#app'
});
