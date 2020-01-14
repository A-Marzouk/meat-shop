require('./bootstrap');

window.Vue = require('vue');

import ExampleComponent from './components/ExampleComponent.vue';
Vue.component('example-component', ExampleComponent);


import orderComponent from './components/OrderComponent.vue';
Vue.component('order-component', orderComponent);


if ($("#ExampleComponent").length !== 0){
    let ExampleComponent = new Vue({
        el:'#ExampleComponent'
    })
}

if ($("#orderComponent").length !== 0){
    let orderComponent = new Vue({
        el:'#orderComponent'
    })
}
