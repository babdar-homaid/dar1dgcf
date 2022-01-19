
require('./bootstrap');

import Swal from 'sweetalert2'
window.Swal=Swal

const Toast = Swal.mixin({
    position: 'top-end',
    icon: 'success',
    title: 'Your work has been saved',
    showConfirmButton: false,
    timer: 1500,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
window.Toast=Toast

window.Vue = require('vue');
import VueRouter from 'vue-router'

import routes from './routes'



Vue.use(VueRouter)

  const router = new VueRouter({
    mode:'history',
    routes // short for `routes: routes`
})

Vue.component('def-component', require('./components/DefiNition.vue').default);
Vue.component('my-component', require('./components/MyComponent.vue').default);
Vue.component('bhs-component', require('./components/Bhs.vue').default);
Vue.component('t1-component', require('./components/t1.vue').default);
Vue.component('t2-component', require('./components/t2.vue').default);
Vue.component('t3-component', require('./components/t3.vue').default);



const app = new Vue({
    el: '#app',
    router,
    components:{

    }


});
