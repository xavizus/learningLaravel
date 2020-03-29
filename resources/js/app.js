require('./bootstrap');
require('./forfun');
window.Vue = require('vue');

Vue.component('funtest', require('./components/funtest').default);
$(init);

function init() {

   

    new Vue({
        el: '#app',
        mounted() {
            console.log('Vue mounted!');
        },
    });
};