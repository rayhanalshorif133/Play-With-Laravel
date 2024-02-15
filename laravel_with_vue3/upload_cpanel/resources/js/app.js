/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue,{ createApp } from 'vue';

import HelloWorld from './components/HelloWorld.vue';
// import WelcomeComponent from './components/Welcome.vue';
// import ProductListComponent from './components/ProductListComponent.vue';


window.Vue = require('vue').default;

Vue.component('hello-world', HelloWorld);
// Vue.component('welcome-component', WelcomeComponent);
// Vue.component('product-list-component', ProductListComponent);

new Vue({
    el: '#app',
});

