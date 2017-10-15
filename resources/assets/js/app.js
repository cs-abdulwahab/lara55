
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import  AdminLte from 'admin-lte'
import icheck from 'icheck'

//import 'bootstrap-vue/dist/bootstrap-vue.css'
//import 'bootstrap/dist/css/bootstrap.css'
/*
window.Vue = require('vue');

Vue.use(BootstrapVue);*/

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
/*
const app = new Vue({
    el: '#app'
});*/


var demo = new Vue({
    el: '#example-3',
    data: {
        checkedNames: []
    }
});


//iCheck for checkbox and radio inputs
$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
});
