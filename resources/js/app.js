import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import SearchComponent from "./components/SearchComponent.vue"

const app = createApp({
    components:{
       SearchComponent,
    }
});

app.mount("#app");