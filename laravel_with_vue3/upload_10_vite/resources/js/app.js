import './bootstrap';

import {createApp} from 'vue'

import Welcome from './components/Welcome.vue'
createApp(Welcome).mount("#welcome")

import User from './components/User.vue'
createApp(User).mount("#user")

// import Product from './components/Product.vue'
// createApp(Product).mount("#product")
