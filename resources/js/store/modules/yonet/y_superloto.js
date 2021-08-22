import axios from 'axios'

const state={
    y_superlotoKupons:[],
};

const getters = {
    y_allSuperlotokupons: (state) => state.y_superlotoKupons,
};

const actions ={
    async y_fetchSuperlotoKupons({ commit }){
        const response = await axios.get('/yonetici/superkuponlari-getir');
        commit('y_setSuperlotoKupons',response.data);
    },
};

const mutations ={
    y_setSuperlotoKupons:(state,y_superlotoKupons) => (state.y_superlotoKupons = y_superlotoKupons),
};

export default {
    state,
    getters,
    actions,
    mutations
}