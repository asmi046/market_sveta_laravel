import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import CategoryFilter from "./components/CategoryFilter.vue"
import CitySelect from "./components/CitySelect.vue"
import Bascet from "./components/bascet/Bascet.vue"

import axios from 'axios'

import VueAxios from 'vue-axios'

import { VMaskDirective } from 'v-slim-mask'

import ModalWindow from './components/ModalWindow.vue'
import QuickViewWindow from './components/QuickViewWindow.vue'
import AddToBascetBtn from './components/AddToBascetBtn.vue'
import OneClickBuyWindow from './components/OneClickBuyWindow.vue'
import ProjectSendWindow from './components/ProjectSendWindow.vue'

const global_app = createApp({
    components:{
       CategoryFilter,
       CitySelect,
       Bascet,
       ModalWindow,
       QuickViewWindow,
       AddToBascetBtn,
       OneClickBuyWindow,
       ProjectSendWindow
    }
})

global_app.use(VueAxios, axios)
global_app.directive('mask', VMaskDirective)
global_app.mount("#global_app");
