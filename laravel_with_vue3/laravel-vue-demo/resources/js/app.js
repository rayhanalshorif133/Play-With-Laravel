require('./bootstrap');

import {createApp} from 'vue'
import vue from "vue";
window.Vue = vue;

import App from './App.vue'

createApp(App).mount("#app")
