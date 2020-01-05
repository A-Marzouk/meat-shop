require('./bootstrap');

window.Vue = require('vue');

import ExampleComponent from './components/ExampleComponent.vue';
Vue.component('example-component', ExampleComponent);


if ($("#ExampleComponent").length !== 0){
    let ExampleComponent = new Vue({
        el:'#ExampleComponent'
    })
}
