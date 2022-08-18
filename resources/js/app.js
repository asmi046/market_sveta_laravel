import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import SearchComponent from "./components/SearchComponent.vue"

import axios from 'axios'

import VueAxios from 'vue-axios'

const app = createApp({
    components:{
       SearchComponent,
    }
})

app.use(VueAxios, axios)

app.mount("#app");