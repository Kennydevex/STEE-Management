require('./bootstrap');

window.Vue = require('vue');

// var comps = Vue.component;

Vue.component('example', require('./components/Example.vue'));
Vue.component('user', require('./components/backComponents/User.vue'));

const app = new Vue({
    el: '#app'
});
