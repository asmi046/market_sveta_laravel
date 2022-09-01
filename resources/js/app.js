import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import SearchComponent from "./components/SearchComponent.vue"
import CategoryFilter from "./components/CategoryFilter.vue"

import axios from 'axios'

import VueAxios from 'vue-axios'

const app = createApp({
    components:{
       SearchComponent,
       CategoryFilter,
       
    }
})

app.use(VueAxios, axios)

app.mount("#app");