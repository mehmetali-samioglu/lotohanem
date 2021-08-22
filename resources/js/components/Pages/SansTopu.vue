<template>
    <div>

        <div class="col-md-3">
            <form action="#" @submit.prevent="sepete_kolonu_ekle(sayilar)">
                <div class="panel widget light-widget panel-bd-top vd_bdt-green">
                    <div class="panel-heading ">
                        <h3 class="pd-20 mgbt-xs-0"><i class="fa fa-users mgr-9"></i>
                            Şans Topu
                        </h3>
                    </div>
                    <!-- vd_panel-menu -->
                    <div class="panel-body" style="padding: 15px">
                        <div class="row">
                                <div class="panel widget light-widget panel-bd-left col-md-9" >
                                    <div class="panel-body" style="padding: 10px 0 10px 0">
                                        <a class="btn vd_btn vd_round-btn btn-xs vd_bg-yellow" style="margin-right:3px"
                                           @click="sayiSil(i)"
                                           v-for="(i,index) in sayilar"
                                           v-if="i>0&&index<5"  >
                                            {{i}}
                                        </a>
                                    </div>
                                </div>
                                <div class="panel widget light-widget panel-bd-left col-md-2">
                                    <div class="panel-body" style="padding: 10px 0 10px 0">
                                        <a class="btn vd_btn vd_round-btn btn-xs vd_bg-yellow" style="margin-right:3px"
                                           @click="sayiSilArti(i)"
                                           v-for="(i,index) in sayilarArti"
                                           v-if="i>0&&index<1"  >
                                            {{i}}
                                        </a>
                                    </div>
                                </div>

                        </div>
                        <div class="text-center" v-if="sayilar.length!=5">
                            <p class="bilgi"  >Bu Kümeden <b>5</b> Sayı Seçiniz</p>
                        </div>
                        <div class="pd-5 text-center ">
                            <a role="button" data-action="click-trigger"
                               @click="sanstopuEkle(sayi)"
                               v-for="sayi in 34"
                               v-if="sayilar.length!=5"
                               class="btn vd_btn vd_round-btn btn-xs vd_bg-yellow top"
                               style="margin: 4px;">
                                {{sayi}}
                            </a>
                            <button  type="submit"  v-if="(sayilarArti.length+sayilar.length)==6" class="btn vd_btn  btn-block vd_bg-green font-semibold">Kolonu Kupona Ekle<i class="fa fa-plus fa-fw"></i></button>
                        </div>
                    </div>
                </div>
                <div class="panel widget light-widget panel-bd-top vd_bdt-green" v-if="sayilarArti.length!=1">
                    <div class="panel-body" style="padding: 15px">
                        <div class="text-center" >
                            <p class="bilgi"  >Bu Kümeden <b>1</b> Sayı Seçiniz</p>
                        </div>
                        <div class="pd-5 text-center ">
                            <a role="button" data-action="click-trigger" id="sayilar"
                               @click="sanstopuEkleArti(sayi)"
                               v-for="sayi in 14"
                               class="btn vd_btn vd_round-btn btn-xs vd_bg-yellow top"
                               style="margin: 4px;">
                                {{sayi}}
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3">
            <div class="panel widget">
                <div class="panel-heading vd_bg-green ">
                    <h3 class="panel-title text-center"> <span class="menu-icon"> <i class="fa fa-shopping-cart"></i></span>Oynanan Şans Topu Kolonları </h3>
                    <h3 class="panel-title text-center" v-if="allSanstopuSepet!=0">Kupon No: <b>{{sonSanstopuKuponNo}}</b>  </h3>
                    <div class="vd_panel-menu">
                        <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"><i class="icon-minus3"></i></div>
                        <div @click="fetchSanstopuSepet" data-action="refresh" data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font"><i class="icon-cycle"></i></div>
                    </div>
                    <!-- vd_panel-menu -->
                </div>
                <div class="panel-body-list">
                    <div class="content-list content-image menu-action-right">
                        <div data-rel="scroll"  >
                            <transition-group class="list-wrapper" style="padding: 10px;"  name="bounceLeft" tag="ul" enter-active-class="animated bounceInLeft" leave-active-class="animated bounceOutRight">
                                <li style="margin:2px"  v-for="(i,index) in allSanstopuSepet" v-bind:key="i.id" >
                                    <div  style="margin-left:15px"  >
                                        <a  class=" btn vd_btn vd_round-btn btn-xs vd_bg-yellow mgr-5" >
                                            {{i.kolon1}}
                                        </a>
                                        <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-yellow mgr-5" >
                                            {{i.kolon2}}
                                        </a>
                                        <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-yellow mgr-5" >
                                            {{i.kolon3}}
                                        </a>
                                        <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-yellow mgr-5" >
                                            {{i.kolon4}}
                                        </a>
                                        <a  class=" btn vd_btn vd_round-btn btn-xs vd_bg-yellow mgr-5" >
                                            {{i.kolon5}}
                                        </a>
                                        <span style="font-size: 18px;" >  +  </span>
                                        <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-yellow mgr-5" >
                                            {{i.kolon6}}
                                        </a>
                                        <div class="menu-action">
                                            <a @click="sepetteki_kolonu_sil(i)" role="button"  data-original-title="Kaldır" data-toggle="tooltip" data-placement="left" class="menu-action-icon vd_red "><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </transition-group>
                        </div>
                        <transition name="bounce"  >
                        <form action="#"  >
                            <div class="btn-group btn-group-justified mgbt-xs-5 btn-group-xs" v-if="allSanstopuSepet.length==8"  >
                                <a role="submit" class="btn btn-default vd_white vd_bg-green"  @click="sepeti_kuponlastir(sonSanstopuKuponNo)"> <i class="fa fa-check"></i>Kuponu Yatır</a>
                                <!--   <a role="button" class="btn btn-default vd_white vd_bg-blue"> <i class="fa fa-times"></i> Kuponu İptal Et</a>-->
                            </div>
                        </form>
                        </transition>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-6">
            <div class="tabs widget">
                <ul class="nav nav-tabs widget vd_bg-green">
                    <li class="active">
                        <a data-toggle="tab" href="#list-tab">
                            <span class="menu-icon"><i class="fa fa-user"></i></span>
                            Şans Topu <b>Kupon</b> Sepeti
                            <span class="menu-active"><i class="fa fa-caret-up"></i></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="list-tab" class="tab-pane active">
                        <div class="content-grid column-xs-1 column-sm-4 column-md-4 column-lg-4  height-xs-2 " >
                            <div data-rel="scroll" >
                                <ul class="list-wrapper" >
                                    <li v-for="(kupon,ix) in allSanstopuKupons" @click="modalAc(kupon.kupon_no,ix)"  >
                                        <a href="#">
                                            <div class="menu-icon width-50"><img alt="example image" src="/img/avatar/avatar-5.jpg"></div>
                                        </a>
                                        <div class="menu-text"> {{ix+1}} nolu Kupon
                                            <div class="menu-info">
                                                <div class="menu-date"></div>
                                                <div class="menu-action"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- tabs-widget -->
        </div>

        <modalkupondetay :kupon="kupon" :hafta="hafta" :typee="typee" :dialog="dialog" :window="window"  :renk="renk" :renk2="renk2" @closeRequest="kapat"></modalkupondetay>
        <vue-snotify></vue-snotify>
    </div>

</template>

<script>
    import { eventBus } from '../../app'
    import { mapGetters, mapActions}  from 'vuex'

    let modalkupondetay =  require ('./partials/modal');

    export default {
        name: "SansTopu",
        components:{
            modalkupondetay
        },
        data() {
            return {
                hafta:'',
                kupon:'',
                dialog:false,
                typee:'',
                window:'',
                renk:'',
                renk2:'',
                sayilar:[],
                sayilarArti:[],
                cardList:{
                    kolon1 : '',
                    kolon2 : '',
                    kolon3 : '',
                    kolon4 : '',
                    kolon5 : '',
                    kolon6 : '',
                },
            }
        },
        created(){
            this.fetchSanstopuSepet();
            this.fetchSanstopuKupons();
            this.fetchSanstopuSonKuponNo();
        },
        computed:{
            ...mapGetters(['allSanstopuSepet','allSanstopuKupons','sonSanstopuKuponNo']),
        },
        methods: {
            ...mapActions(['fetchSanstopuSepet','fetchSanstopuKupons','fetchSanstopuKupon','fetchSanstopuSonKuponNo']),

            modalAc(key,ix){
                this.fetchSanstopuKupon(key);
                this.showActive='show'
                this.renk='vd_bg-green'
                this.renk2='vd_bg-yellow'
                this.window=800
                this.typee='sanstopu'
                this.dialog=true;
                this.hafta = this.allSanstopuKupons[ix].hafta_slug;
                this.kupon = this.allSanstopuKupons[ix].kupon_no;
            },
            kapat(){
                this.dialog=false
            },


            getUserInfo(){
                axios.get('/lotohanem/userinfo')
                    .then((response)=>{
                        eventBus.$emit('user_tl', response.data.kull[0].user_tl)
                        eventBus.$emit('user_lotopuan', response.data.kull[0].user_lotopuan)
                        eventBus.$emit('harcama_tlmi', response.data.detay[0].onay_tl)
                    })
                    .catch((error)=>{
                        console.log('GetsanstopuKolons Hatası')
                    });
            },


            sepetteki_kolonu_sil(i){
                let vm = this
                vm.$snotify.remove();
                vm.$snotify.confirm('Kolon Kuponunuzdan çıkarılacaktır.', 'Silelim mi?', {
                    showProgressBar: false,
                    closeOnClick: false,
                    pauseOnHover: false,
                    position:"centerTop",
                    buttons: [
                        {
                            text: 'Evet', action: (toast) =>
                            {
                                axios.delete('/lotohanem/sanstopu/kolonsil/'+i['id'])
                                    .then((response) => {
                                        if(response.data.ok === true){
                                            vm.$snotify.remove();
                                            this.fetchSanstopuSepet();
                                            this.fetchSanstopuSonKuponNo();
                                            this.getUserInfo();
                                            vm.$snotify.success('Sepetteki Kolon Silindi.', 'POZİTİF !', {timeout: 1000, position: "centerTop"});
                                            var del =this.sayisalkolons.indexOf(i)
                                            this.allSanstopuSepet.splice(del,1);
                                            vm.$snotify.remove(toast.id);
                                        }else{
                                            return false;
                                            console.log('false döndü');
                                        }
                                    })
                                    .catch((error)=>{
                                        console.log('HATA! Kupon Silinirken sorun oluştu.');
                                    })
                            }
                        },
                        {
                            text: 'Hayır', action: (toast) =>
                            {
                                vm.$snotify.remove(toast.id);
                            },
                        }
                    ]
                });
            },
            sepete_kolonu_ekle(sayi){
                let vm = this;
                if(this.allSanstopuSepet.length >=8 ) {
                    vm.$snotify.html(`<div class="text-center">Kuponunuzda Maksimum <b style="color:white">8</b> Kolon Bulunabilir. <br/> <h4 style="color:white"> Lütfen Sepeti Kuponlaştırın</h4></div>`, { timeout: 3000,type:"error", position: "centerTop",closeOnClick: false, pauseOnHover: true, });
                }else{
                    axios.post('/lotohanem/sanstopu/kolon-ekle',this.cardList)
                        .then((response)=> {
                            if (response.data.bitti != true) {
                                this.fetchSanstopuSepet();
                                this.fetchSanstopuSonKuponNo();
                                this.getUserInfo();
                                this.sayilar = [];this.sayilarArti = [];
                                vm.$snotify.remove();
                                vm.$snotify.success('Kolon Kupona Eklendi', 'POZİTİF !', { timeout: 2000,  position: "centerTop" });
                            } else {
                                vm.$snotify.remove();
                                vm.$snotify.error('Lütfen TL Yükleyiniz ', 'HATA!!', { timeout: 2000, position: "centerTop" });
                            }
                        })
                        .catch( (error) => {
                            this.errors='Sanstopu Gönderilirken Hata Oluştu.';
                            console.log(this.errors)
                        });
                }
            },
            sepeti_kuponlastir(kupon_no){
                let vm = this;
                axios.post('/lotohanem/sanstopu/kuponlastir/'+kupon_no)
                    .then((response)=>{
                        if(response.data['ok']){
                            this.fetchSanstopuSepet();
                            this.fetchSanstopuSonKuponNo();
                            this.fetchSanstopuKupons();
                            this.getUserInfo();
                            vm.$snotify.remove();
                            vm.$snotify.success('Kupon Oluşturuldu.', 'BAŞARILI!!', { timeout: 2000, position: "centerTop" });
                        }else{
                            vm.$snotify.remove();
                            vm.$snotify.error('Kupon Oluşturulamadı ', 'HATA!!', { timeout: 2000, position: "centerTop" });
                        }
                    });
            },

            //TOPLARI KOLONA EKLE  => OK
            sanstopuEkle(sayi) {
                let vm = this
                if(this.sayilar != ''){
                    if(this.sayilar.find(item => item === sayi)){
                        vm.$snotify.remove();
                        vm.$snotify.error('Yeni kuponunuzda '+ sayi+' sayisi bulunmaktadır.','Hata !',{timeout:3000,position:"leftTop"});
                    }else{
                        if(this.sayilar.length >= 5){
                            vm.$snotify.remove();
                            vm.$snotify.warning('En Fazla 5 Sayi Girebilirsiniz','Hata !',{timeout:3000,position:"leftTop"});
                        }else {
                            this.sayilar.push(sayi)
                            this.sortedSayilar()
                            this.cardList.kolon1= this.sayilar[0]
                            this.cardList.kolon2= this.sayilar[1]
                            this.cardList.kolon3= this.sayilar[2]
                            this.cardList.kolon4= this.sayilar[3]
                            this.cardList.kolon5= this.sayilar[4]
                        }
                    }
                }else{
                    this.sayilar.push(sayi)
                    this.sortedSayilar()
                }
            },
            sanstopuEkleArti(sayi) {
                let vm = this
                if(this.sayilarArti.find(item => item === sayi)){
                    vm.$snotify.remove();
                    vm.$snotify.error('Yeni kuponunuzda '+ sayi+' sayisi bulunmaktadır.','Hata !',{timeout:3000,position:"leftTop"});
                }else{
                    if(this.sayilarArti.length >= 1){
                        vm.$snotify.remove();
                        vm.$snotify.warning('En Fazla 1 Sayi Girebilirsiniz.','Hata !',{timeout:3000,position:"leftTop"});
                    }else {
                        this.sayilarArti.push(sayi)
                        this.cardList.kolon6= this.sayilarArti[0]
                    }
                }
            },
            sayiSil(index){
                var del =this.sayilar.indexOf(index)
                this.sayilar.splice(del,1);
                this.sortedSayilar()
            },
            sayiSilArti(index){
                var del =this.sayilarArti.indexOf(index)
                this.sayilarArti.splice(del,1);
            },
            sortedSayilar(){
                this.sayilar.sort(function(a,b){
                    if(a < b){
                        return -1;
                    }else if(a > b ){
                        return 1;
                    }
                });
            }
        },
    }
</script>

<style scoped>

    .top:hover{
        -webkit-box-shadow: 0px 0px 2px 4px black;
        box-shadow: 0px 0px 2px 4px black;
        color:white;
        opacity:0.7;
        padding:2px
    }
    .bilgi{
        color:white;
        padding: 1px;
        background-color: #c7254e;
    }
</style>