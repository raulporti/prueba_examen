import Vue from "vue";
import Vuex from "vuex";
Vue.use(Vuex);

import Ventas from './modulos/ventas';

const store = new Vuex.Store({
    modules: {
        Ventas
    }
})
export default store;