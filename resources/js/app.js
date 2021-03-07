
require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//Route Imported
import {routes} from './routes'

// import User Class

import User from './Helpers/User'
window.User = User;

const router = new VueRouter({
    routes,
    mode: 'history'
})

const app = new Vue({
    el: '#app',
    router
});
