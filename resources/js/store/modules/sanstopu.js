import axios from 'axios'

const state={
    sanstopuKupons:[],
    sanstopukupon: [],
    sanstopusepet: [],
    sonSanstopuKuponNo:''
};

const getters = {
    allSanstopukupon: (state) => state.sanstopukupon,
    allSanstopuKupons: (state) => state.sanstopuKupons,
    oneSanstopuKupon: (state) => state.sanstopukupon,
    allSanstopuSepet : (state) => state.sanstopusepet,
    sonSanstopuKuponNo: (state) => state.sonSanstopuKuponNo,
};
import { eventBus } from '../../app'
const actions ={
    async fetchSanstopuKupons({ commit }){
        const response = await axios.get('/lotohanem/kuponlarim/sanstopukuponlarigetir');
        commit('setSanstopuKupons',response.data);
    },
    async fetchSanstopuKupon({commit},key){
        const response = await axios.get('/lotohanem/sanstopu/kupon-getir/'+key);
        commit('setSanstopuKupon',response.data);
    },
    async fetchSanstopuSepet({ commit }){
        const response = await axios.get('/lotohanem/sanstopu/listele');
        eventBus.$emit('kolon_sayisi', response.data.length);
        commit ('setSanstopuSepet',response.data);
    },
    async fetchSanstopuSonKuponNo({ commit }){
        const response = await axios.get('/lotohanem/sanstopu/sonkuponno');
        commit ('setSonKuponNo',response.data);
    }
};

const mutations ={
    setSanstopuKupons:(state,sanstopuKupons) => (state.sanstopuKupons = sanstopuKupons),
    setSanstopuKupon:(state,sanstopukupon) => (state.sanstopukupon  = sanstopukupon),
    setSanstopuSepet:(state,sanstopusepet) => (state.sanstopusepet  = sanstopusepet),
    setSonKuponNo:(state,sonSanstopuKuponNo) => (state.sonSanstopuKuponNo  = sonSanstopuKuponNo),
};

export default {
    state,
    getters,
    actions,
    mutations
}