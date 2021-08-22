import axios from 'axios'

const state={
    sayisalKupons:[],
    sayisalkupon: [],
    sayisalsepet: [],
    sonSayisalKuponNo:''
};

const getters = {
    allSayisalkupon: (state) => state.sayisalkupon,
    allSayisalKupons: (state) => state.sayisalKupons,
    oneSayisalKupon: (state) => state.sayisalkupon,
    allSayisalSepet : (state) => state.sayisalsepet,
    sonSayisalKuponNo: (state) => state.sonSayisalKuponNo,
};
import { eventBus } from '../../app'
const actions ={
    async fetchSayisalKupons({ commit }){
        const response = await axios.get('/lotohanem/kuponlarim/sayisalkuponlarigetir');
        commit('setSayisalKupons',response.data);
    },
    async fetchSayisalKupon({commit},key){
        const response = await axios.get('/lotohanem/sayisalloto/kupon-getir/'+key);
        commit('setSayisalKupon',response.data);
    },
    async fetchSayisalSepet({ commit }){
        const response = await axios.get('/lotohanem/sayisalloto/listele');
        eventBus.$emit('kolon_sayisi', response.data.length);
        commit ('setSayisalSepet',response.data);
    },
    async fetchSayisalSonKuponNo({ commit }){
        const response = await axios.get('/lotohanem/sayisalloto/sonkuponno');
        commit ('setSonKuponNo',response.data);
    }
};

const mutations ={
    setSayisalKupons:(state,sayisalKupons) => (state.sayisalKupons = sayisalKupons),
    setSayisalKupon:(state,sayisalkupon) => (state.sayisalkupon  = sayisalkupon),
    setSayisalSepet:(state,sayisalsepet) => (state.sayisalsepet  = sayisalsepet),
    setSonKuponNo:(state,sonSayisalKuponNo) => (state.sonSayisalKuponNo  = sonSayisalKuponNo),
};

export default {
    state,
    getters,
    actions,
    mutations
}

// MODAL A KUPON DETAYLARINI GÖNDERMEYE BAKILACAK. Şu an yanlış calısıyor