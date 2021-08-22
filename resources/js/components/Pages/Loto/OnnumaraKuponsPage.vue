<template  lang="html">
    <div>
        <div class="col-md-6">
            <div class="panel-heading vd_bg-yellow vd_white" >
                <h3 class="panel-title"> <span class="menu-icon"> <i class="icon-pie"></i></span>
                    Bu Hafta Oynanan Kuponlar
                </h3>
            </div>
            <div>
                <vs-table search:data="allOnnumaraKupons">
                    <template slot="header">

                    </template>
                    <template slot="thead">
                        <vs-th sort-key="h_adi">  <h4>Hafta Adı </h4></vs-th>
                        <vs-th sort-key="kupon_no">  <h4>Kupon No</h4> </vs-th>
                        <vs-th sort-key="kupon_resmi"> <h4>Kupon Resmi</h4>  </vs-th>
                        <vs-th sort-key="kuponu_gor">  <h4>Kuponu Gör</h4> </vs-th>
                    </template>
                    <template slot-scope="{data}">
                        <vs-tr  :key="index" v-for="(tr,index) in allOnnumaraKupons" >
                            <vs-td :data="allOnnumaraKupons[index].hafta_slug"><h5>{{ allOnnumaraKupons[index].hafta_slug}}</h5></vs-td>
                            <vs-td :data="allOnnumaraKupons[index].kupon_no"><h5>{{ allOnnumaraKupons[index].kupon_no }}</h5></vs-td>
                            <vs-td :data="allOnnumaraKupons[index].kupon_resmi">
                                <div >
                                <img :src="'/img/photos/'+allOnnumaraKupons[index].kupon_resmi" alt="" width="100" height="100" >
                            </div>
                            </vs-td>
                            <vs-td  ><i class="fa fa-eye fa-3x" @click="modalAc(allOnnumaraKupons[index].kupon_no,index)"></i></vs-td>
                        </vs-tr>
                    </template>
                </vs-table>
            </div>
        </div>
        <modalkupondetay :kupon="kupon" :hafta="hafta" :resim="resim" :typee="typee" :dialog="dialog" :window="window"  :renk="renk" :renk2="renk2" @closeRequest="kapat"></modalkupondetay>
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
                    { text: 'Kupon No', value: 'kupon_no',align: 'center', },
                    { text: 'Kupon Resmi',value: 'kupon_resmi',align: 'center',},
                    { text: 'Kuponu Gör',value:false,},
                ],
                typee:'', window:'', renk:'', renk2:'',dialog:false,
            }
        },
        created(){
            this.fetchOnnumaraKupons();
        },
        methods: {

            ...mapActions(['fetchOnnumaraKupons','fetchOnnumaraKupon']),
            modalAc(key,ix){
                this.fetchOnnumaraKupon(key);
                this.showActive='show'
                this.renk='vd_bg-yellow'
                this.renk2='vd_bg-black'
                this.window=850
                this.dialog=true;
                this.resim=this.allOnnumaraKupons[ix].kupon_resmi;
                this.hafta = this.allOnnumaraKupons[ix].hafta_slug;
                this.kupon = this.allOnnumaraKupons[ix].kupon_no;
            },
            kapat(){
                this.dialog=false
            },
        },
        computed: {
            ...mapGetters(['allOnnumarakupon','allOnnumaraKupons']),
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