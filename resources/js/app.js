
require('./bootstrap');

import Vue from 'vue'
require('vue2-animate/dist/vue2-animate.min.css');

import Snotify, { SnotifyPosition } from 'vue-snotify'
import 'vue-snotify/styles/material.css';
Vue.use(Snotify);

import {store} from './store/index'    //vuex ekledik

import VueRouter from 'vue-router'
import {routes} from './routes'
Vue.use(VueRouter);

import VueExpandableImage from 'vue-expandable-image'
Vue.use(VueExpandableImage);

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate);

import Vuesax from 'vuesax'
import 'vuesax/dist/vuesax.css' //Vuesax styles
import 'material-icons/iconfont/material-icons.css';
Vue.use(Vuesax)

//
// import Vuetify from 'vuetify'
// import 'vuetify/dist/vuetify.min.css'
// Vue.use(Vuetify)


// import 'bootstrap-css-only/css/bootstrap.min.css';
// import 'mdbvue/build/css/mdb.css';






let SepetPage =  require('./components/Pages/Sepet.vue');
let UstHeader =  require('./components/Pages/partials/ustheader');
let Modal =  require('./components/Pages/partials/modal');



const router = new VueRouter({
    mode:'history',
    routes
})

export const eventBus = new Vue();

const app = new Vue({
    components:{
        'sepet':SepetPage,
        'ustheader':UstHeader,
        'modalmodal':Modal,
    },
    router,
    el: '#app',
    store,
    mounted(){

        if(this.getUserInfo()){
            this.getUserInfo()
        }else{
            return false
        }
    },
    methods:{
        getUserInfo(){
            axios.get('/lotohanem/userinfo')
                .then((response)=>{
                    eventBus.$emit('user_tl', response.data.kull[0].user_tl)
                    eventBus.$emit('user_lotopuan', response.data.kull[0].user_lotopuan)
                    eventBus.$emit('harcama_tlmi', response.data.detay[0].onay_tl)
                })
                .catch((error)=>{
                    console.log('Genel Sayfaya Veri Getir Hatası')
                });
        },
    }
});

