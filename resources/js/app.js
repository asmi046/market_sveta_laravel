import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import SearchComponent from "./components/SearchComponent.vue"
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

const app_search = createApp({
    components:{
       SearchComponent       
    }
})

app_search.use(VueAxios, axios)
app_search.mount("#search_app");