require('./bootstrap');

window.Vue = require('vue');


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


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
