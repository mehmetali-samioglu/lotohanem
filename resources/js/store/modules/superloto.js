import axios from 'axios'

const state={
    superkolons:[],
    superKupons:[],
    superkupon: [],
    supersepet: [],
    sonSuperKuponNo:''
};

const getters = {
    allSuperkupon: (state) => state.superkupon,
    allSuperKupons: (state) => state.superKupons,
    oneSuperKupon: (state) => state.superkupon,
    allSuperSepet : (state) => state.supersepet,
    sonSuperKuponNo: (state) => state.sonSuperKuponNo,
};
import { eventBus } from '../../app'
const actions ={
    async fetchSuperKupons({ commit }){
        const response = await axios.get('/lotohanem/kuponlarim/superkuponlarigetir');
        commit('setSuperKupons',response.data);
    },
    async fetchSuperlotoKupon({commit},key){
        const response = await axios.get('/lotohanem/superloto/kupon-getir/'+key);
        commit('setSuperKupon',response.data);
    },
    async fetchSuperSepet({ commit }){
        const response = await axios.get('/lotohanem/superloto/listele');
        eventBus.$emit('kolon_sayisi', response.data.length);
        commit ('setSuperSepet',response.data);
    },
    async fetchSonKuponNo({ commit }){
        const response = await axios.get('/lotohanem/superloto/sonkuponno');
        commit ('setSuperSonKuponNo',response.data);
    }
};

const mutations ={
    setSuperKupons:(state,superKupons) => (state.superKupons = superKupons),
    setSuperKupon:(state,superkupon) => (state.superkupon  = superkupon),
    setSuperSepet:(state,supersepet) => (state.supersepet  = supersepet),
    setSuperSonKuponNo:(state,sonSuperKuponNo) => (state.sonSuperKuponNo  = sonSuperKuponNo),
};

export default {
    state,
    getters,
    actions,
    mutations
}