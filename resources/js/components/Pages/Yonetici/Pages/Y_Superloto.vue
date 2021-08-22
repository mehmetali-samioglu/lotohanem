<template>
    <div>

        <router-link  to="/yonetici" >
            <button>SELAM</button>
        </router-link>



<!--        <modalkupondetay :kupon="kupon" :hafta="hafta" :resim="resim" :typee="typee" :dialog="dialog" :window="window"  :renk="renk" :renk2="renk2" @closeRequest="kapat"></modalkupondetay>-->
        <vue-snotify></vue-snotify>
    </div>
</template>

<script>

    import { mapGetters, mapActions}  from 'vuex'

    export default {
        name:'YonetimSuperloto',
        data(){
            return{
                popupActivo:false,
                search:'',kupon:'',hafta:'', resim: '', typee:'', window:'', renk:'', renk2:'',dialog:false,
            }
        },
        created(){
            this.y_fetchSuperlotoKupons();
        },
        computed:{
            ...mapGetters(['y_allSuperlotokupons']),
        },
        methods:{
            ...mapActions(['y_fetchSuperlotoKupons']),
        },
    }
</script>

<style scoped>
    #create .v-speed-dial {
        position: absolute;
    }

    #create .v-btn--floating {
        position: relative;
    }
</style>