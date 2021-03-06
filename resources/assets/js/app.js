
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

let HeaderComponent = require('./components/includes/HeaderComponent.vue');
let FooterComponent = require('./components/includes/FooterComponent.vue');
let Home = require('./components/pages/HomeComponent.vue');
let About = require('./components/pages/AboutComponent.vue');

const routes = [
    { path: '/', component: Home },
    { path: '/about', component: About }
  ]

  const router = new VueRouter({
    routes,
    mode: 'history'
  })

const app = new Vue({
    el: '#app',
    router,
    components: {HeaderComponent, FooterComponent}
});
