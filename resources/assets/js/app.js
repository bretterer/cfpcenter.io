require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import router from './routes.js';

window.Vue = Vue;
Vue.use(VueRouter);
Vue.use(VueResource);

const app = new Vue({
  el: '#app',
  router,
});