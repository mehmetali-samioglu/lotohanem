import axios from 'axios'

const state={
    onnumaraKupons:[],
    onnumarakupon: [],
    onnumarasepet: [],
    sonOnnumaraKuponNo:''
};

const getters = {
    allOnnumarakupon: (state) => state.onnumarakupon,
    allOnnumaraKupons: (state) => state.onnumaraKupons,
    oneOnnumaraKupon: (state) => state.onnumarakupon,
    allOnnumaraSepet : (state) => state.onnumarasepet,
    sonOnnumaraKuponNo: (state) => state.sonOnnumaraKuponNo,
};
import { eventBus } from '../../app'
const actions ={
    async fetchOnnumaraKupons({ commit }){
        const response = await axios.get('/lotohanem/kuponlarim/onnumarakuponlarigetir');
        commit('setOnnumaraKupons',response.data);
    },
    async fetchOnnumaraKupon({commit},key){
        const response = await axios.get('/lotohanem/onnumara/kupon-getir/'+key);
        commit('setOnnumaraKupon',response.data);
    },
    async fetchOnnumaraSepet({ commit }){
        const response = await axios.get('/lotohanem/onnumara/listele');
        eventBus.$emit('kolon_sayisi', response.data.length);
        commit ('setOnnumaraSepet',response.data);
    },
    async fetchOnnumaraSonKuponNo({ commit }){
        const response = await axios.get('/lotohanem/onnumara/sonkuponno');
        commit ('setSonKuponNo',response.data);
    }
};

const mutations ={
    setOnnumaraKupons:(state,onnumaraKupons) => (state.onnumaraKupons = onnumaraKupons),
    setOnnumaraKupon:(state,onnumarakupon) => (state.onnumarakupon  = onnumarakupon),
    setOnnumaraSepet:(state,onnumarasepet) => (state.onnumarasepet  = onnumarasepet),
    setSonKuponNo:(state,sonOnnumaraKuponNo) => (state.sonOnnumaraKuponNo  = sonOnnumaraKuponNo),
};

export default {
    state,
    getters,
    actions,
    mutations
}