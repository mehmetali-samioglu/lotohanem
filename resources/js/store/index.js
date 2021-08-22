import Vue from 'vue'
import Vuex from 'vuex'
import superloto from './modules/superloto'
import sayisalloto from './modules/sayisalloto'
import sanstopu from './modules/sanstopu'
import onnumara from './modules/onnumara'

//YONET
import y_superloto from './modules/yonet/y_superloto'

Vue.use(Vuex);

const state = {
}
const getters = {
}
const mutations  = {
}
const actions = {

}

export const store = new Vuex.Store({
    modules:{
        superloto,sayisalloto,sanstopu,onnumara,y_superloto
    },
    state,
    getters,
    mutations,
    actions
});