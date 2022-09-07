import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import CategoryFilter from "./components/CategoryFilter.vue"

import axios from 'axios'

import VueAxios from 'vue-axios'


const app_filter = createApp({
    components:{
       CategoryFilter       
    }
})

app_filter.use(VueAxios, axios)
app_filter.mount("#sb_app");