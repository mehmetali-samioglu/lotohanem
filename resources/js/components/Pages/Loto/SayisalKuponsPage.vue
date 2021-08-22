<template>
    <div>
        <div class="col-md-6">
            <div class="panel-heading vd_bg-blue  vd_white" >
                <h3 class="panel-title"> <span class="menu-icon"> <i class="icon-pie"></i></span>
                    Bu Hafta Oynanan Kuponlar
                </h3>
            </div>
            <div>
                <vs-table search:data="allSayisalKupons">
                    <template slot="header">

                    </template>
                    <template slot="thead">
                        <vs-th sort-key="h_adi">  <h4>Hafta Adı </h4></vs-th>
                        <vs-th sort-key="kupon_no">  <h4>Kupon No</h4> </vs-th>
                        <vs-th sort-key="kupon_resmi"> <h4>Kupon Resmi</h4>  </vs-th>
                        <vs-th sort-key="kuponu_gor">  <h4>Kuponu Gör</h4> </vs-th>
                    </template>
                    <template slot-scope="{data}">
                        <vs-tr  :key="index" v-for="(tr,index) in allSayisalKupons" >
                            <vs-td :data="allSayisalKupons[index].hafta_slug"><h5>{{ allSayisalKupons[index].hafta_slug}}</h5></vs-td>
                            <vs-td :data="allSayisalKupons[index].kupon_no"><h5>{{ allSayisalKupons[index].kupon_no }}</h5></vs-td>
                            <vs-td :data="allSayisalKupons[index].kupon_resmi">
                                <div >
                                    <img :src="'/img/photos/'+allSayisalKupons[index].kupon_resmi" alt="" width="100" height="100" >
                                </div>
                            </vs-td>s
                            <vs-td  ><i class="fa fa-eye fa-3x" @click="modalAc(allSayisalKupons[index].kupon_no,index)"></i></vs-td>
                        </vs-tr>
                    </template>
                </vs-table>
            </div>
        </div>
        <modalkupondetay :kupon="kupon" :hafta="hafta" :resim="resim"  :typee="typee" :dialog="dialog" :window="window"  :renk="renk" :renk2="renk2" @closeRequest="kapat"></modalkupondetay>
        <vue-snotify></vue-snotify>
    </div>
</template>

<script>
    let modalkupondetay =  require ('../partials/modal');
    import { mapGetters, mapActions } from 'vuex';

    export default {
        components:{
            modalkupondetay
        },
        data() {
            return {
                kupon:'',
                hafta:'',
                resim: '',
                search: '',
                pagination: {
                    sortBy: 'hafta_slug'
                },
                selected: [],
                headers: [
                    { text: 'Hafta Adı', align: 'left', sortable: false,  value: 'hafta_slug' },
                    { text: 'Kupon No', value: 'kupon_no' },
                    { text: 'Kupon Resmi',value: 'kupon_resmi',align: 'center',},
                    { text: 'Kuponu Gör',value:false},
                ],
                typee:'', window:'', renk:'', renk2:'',dialog:false,
            }
        },
        created(){
            this.fetchSayisalKupons();
        },
        methods: {
            ...mapActions(['fetchSayisalKupons','fetchSayisalKupon']),
            modalAc(key,ix){
                this.fetchSayisalKupon(key);
                this.showActive='show';
                this.renk='vd_bg-blue';
                this.renk2='vd_bg-green';
                this.window=800;
                this.dialog=true;
                this.resim=this.allSayisalKupons[ix].kupon_resmi;
                this.hafta = this.allSayisalKupons[ix].hafta_slug;
                this.kupon = this.allSayisalKupons[ix].kupon_no;
            },
            kapat(){
                this.dialog=false
            },
        },
        computed: {
            ...mapGetters(['allSayisalkupon','allSayisalKupons']),
            pages () {
                if (this.pagination.rowsPerPage == null ||
                    this.pagination.totalItems == null
                ) return
                return Math.ceil(this.pagination.totalItems / this.pagination.rowsPerPage)
            }
        },
    }
</script>

<style scoped>

</style>