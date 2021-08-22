<template>
    <div>


        <div class="col-md-3">
            <form action="#" @submit.prevent="sepete_kolonlari_ekle(sayilar)"  >
                <div class="panel widget light-widget panel-bd-top vd_bdt-yellow">
                    <div class="panel-heading ">
                        <h3 class="pd-20 mgbt-xs-0"><i class="fa fa-users mgr-9"></i>
                            On Numara
                        </h3>
                    </div>
                    <!-- vd_panel-menu -->
                    <div class="panel-body" style="padding: 15px">
                        <div class="panel widget light-widget panel-bd-left">
                            <div class="panel-body" style="padding: 10px">
                                <a class="btn vd_btn vd_round-btn btn-xs vd_bg-black" style="margin-right:3px"
                                   @click="sayiSil(i)"
                                   v-for="(i,index) in sayilar"
                                   v-if="i>0&&index<10"  >
                                    {{i}}
                                </a>
                            </div>
                        </div>
                        <div class="text-center" v-if="(sayilar.length)!=10">
                            <p class="bilgi"  >Bu Kümeden <b>10</b> Sayı Seçiniz</p>
                        </div>
                        <div class="pd-5 text-center ">
                            <a role="button" data-action="click-trigger" id="sayilar"
                               @click="onnumara_topu_ekle(sayi)"
                               v-for="sayi in 80"
                               v-if="(sayilar.length)!=10"
                               class="btn vd_btn vd_round-btn btn-xs vd_bg-black top"
                               style="margin: 4px;">
                                {{sayi}}
                            </a>
                            <button  type="submit" block  v-if="(sayilar.length)==10" class=" btn vd_btn btn-block vd_bg-green font-semibold">Kolonu Kupona Ekle<i class="fa fa-plus fa-fw"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>



        <div class="col-md-4">
            <div class="panel widget">
                <div class="panel-heading vd_bg-yellow ">
                    <h3 class="panel-title text-center"> <span class="menu-icon"> <i class="fa fa-shopping-cart"></i></span>  Oynanan On Numara Kolonları </h3>
                    <h3 class="panel-title text-center" v-if="allOnnumaraSepet!=0">Kupon No: <b>{{sonOnnumaraKuponNo}}</b>  </h3>
                    <div class="vd_panel-menu">
                        <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon"><i class="icon-minus3"></i></div>
                        <div @click="allOnnumaraSepet" data-action="refresh" data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font"><i class="icon-cycle"></i></div>
                    </div>
                    <!-- vd_panel-menu -->
                </div>
                <div class="panel-body-list">
                    <div class="content-list content-image menu-action-right">
                        <div data-rel="scroll"  >
                            <transition-group class="list-wrapper" style="padding: 10px;"  name="bounceLeft" tag="ul"  enter-active-class="animated bounceInLeft" leave-active-class="animated bounceOutRight">
                                <li style="margin:2px"  v-for="(i,index) in allOnnumaraSepet" v-bind:key="i.id"  >
                                    <div  style="margin-left:15px"  >
                                        <a  class=" btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                            {{i.kolon1}}
                                        </a>
                                        <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                            {{i.kolon2}}
                                        </a>
                                        <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                            {{i.kolon3}}
                                        </a>
                                        <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                            {{i.kolon4}}
                                        </a>
                                        <a  class=" btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                            {{i.kolon5}}
                                        </a>
                                        <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                            {{i.kolon6}}
                                        </a>
                                        <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                            {{i.kolon7}}
                                        </a>
                                        <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                            {{i.kolon8}}
                                        </a>
                                        <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                            {{i.kolon9}}
                                        </a>
                                        <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                            {{i.kolon10}}
                                        </a>
                                        <div class="menu-action">
                                            <a @click="sepetteki_kolonu_sil(i)" role="button"  data-original-title="Kaldır" data-toggle="tooltip" data-placement="left" class="menu-action-icon vd_red "><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </transition-group>
                        </div>
                        <form action="#">
                            <div class="btn-group btn-group-justified mgbt-xs-5 btn-group-xs" v-if="allOnnumaraSepet.length==5"  >
                                <a role="submit" class="btn btn-default vd_white vd_bg-green"  @click="sepeti_kuponlastir(sonOnnumaraKuponNo)"> <i class="fa fa-check"></i>Kuponu Yatır</a>
                                <!--   <a role="button" class="btn btn-default vd_white vd_bg-blue"> <i class="fa fa-times"></i> Kuponu İptal Et</a>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-5">
            <div class="tabs widget">
                <ul class="nav nav-tabs widget vd_bg-yellow">
                    <li class="active">
                        <a data-toggle="tab" href="#list-tab">
                            <span class="menu-icon"><i class="fa fa-user"></i></span>
                            On Numara <b>Kupon</b> Sepeti
                            <span class="menu-active"><i class="fa fa-caret-up"></i></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="list-tab" class="tab-pane active">
                        <div class="content-grid column-xs-1 column-sm-4 column-md-4 column-lg-4  height-xs-2 " >
                            <div data-rel="scroll" >
                                <ul class="list-wrapper" >
                                    <li v-for="(kupon,ix) in allOnnumaraKupons" @click="modalAc(kupon.kupon_no,ix)"  >
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
        <!--<modalkupondetay :window="window" :renk="renk" :renk2="renk2" :openmodal="showActive" @closeRequest="kapat"></modalkupondetay>-->
        <modalkupondetay  :kupon="kupon" :hafta="hafta" :window="window" :dialog="dialog"  :renk="renk" :renk2="renk2" @closeRequest="kapat"></modalkupondetay>
        <vue-snotify></vue-snotify>

    </div>


</template>

<script>
    import { eventBus } from '../../app'
    import { mapGetters, mapActions}  from 'vuex'

    let modalkupondetay =  require ('./partials/modal');

    export default {
        components:{
          modalkupondetay
        },
        data() {
            return {
                hafta:'',
                kupon:'',
                dialog:false,
                window:'',
                renk:'',
                renk2:'',
                sayilar:[],
                cardList:{
                    kolon1 : '',
                    kolon2 : '',
                    kolon3 : '',
                    kolon4 : '',
                    kolon5 : '',
                    kolon6 : '',
                    kolon7 : '',
                    kolon8 : '',
                    kolon9 : '',
                    kolon10 : '',
                },
            }
        },
        created(){
            this.fetchOnnumaraSepet();
            this.fetchOnnumaraKupons();
            this.fetchOnnumaraSonKuponNo();
        },
        computed:{
            ...mapGetters(['allOnnumaraSepet','allOnnumaraKupons','sonOnnumaraKuponNo']),
        },
        methods: {

            ...mapActions(['fetchOnnumaraSepet','fetchOnnumaraKupons','fetchOnnumaraKupon','fetchOnnumaraSonKuponNo']),

            modalAc(key,ix){
                this.fetchOnnumaraKupon(key)
                this.showActive='show'
                this.renk='vd_bg-yellow'
                this.renk2='vd_bg-black'
                this.window=800
                this.dialog=true;
                this.hafta = this.allOnnumaraKupons[ix].hafta_slug;
                this.kupon = this.allOnnumaraKupons[ix].kupon_no;
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
                        console.log('GetSuperKolons Hatası')
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
                                axios.delete('/lotohanem/onnumara/kolonsil/'+i['id'])
                                    .then((response) => {
                                        if(response.data.ok === true){
                                            vm.$snotify.remove();
                                            this.fetchOnnumaraSepet();
                                            this.fetchOnnumaraSonKuponNo();
                                            this.getUserInfo();
                                            vm.$snotify.success('Sepetteki Kolon Silindi.', 'POZİTİF !', {timeout: 1000, position: "centerTop"});
                                            var del =this.onnumarakolons.indexOf(i)
                                            this.allOnnumaraSepet.splice(del,1);
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
            sepete_kolonlari_ekle(sayi){
                let vm = this;
                if(this.allOnnumaraSepet.length >=5 ) {
                    vm.$snotify.html(`<div class="text-center">Kuponunuzda Maksimum <b style="color:white">5</b> Kolon Bulunabilir. <br/> <h4 style="color:white"> Lütfen Sepeti Kuponlaştırın</h4></div>`, { timeout: 3000,type:"error", position: "centerTop",closeOnClick: false, pauseOnHover: true, });
                }else{
                    console.log(this.cardList)
                    axios.post('/lotohanem/onnumara/kolon-ekle',this.cardList)
                        .then((response)=> {
                            if (response.data.bitti != true) {
                                this.fetchOnnumaraSepet();
                                this.fetchOnnumaraSonKuponNo();
                                this.getUserInfo();
                                this.sayilar = [];
                                vm.$snotify.remove();
                                vm.$snotify.success('Kolon Kupona Eklendi', 'POZİTİF !', { timeout: 2000,  position: "centerTop" });
                            } else {
                                vm.$snotify.remove();
                                vm.$snotify.error('Lütfen TL Yükleyiniz ', 'HATA!!', { timeout: 2000, position: "centerTop" });
                            }
                        })
                        .catch( (error) => {
                            this.errors='Onnumaraloto Gönderilirken Hata Oluştu.';
                            console.log(this.errors)
                        });
                }
            },
            sepeti_kuponlastir(kupon_no){
                let vm = this;
                axios.post('/lotohanem/onnumara/kuponlastir/'+kupon_no)
                    .then((response)=>{
                        if(response.data['ok']){
                            this.fetchOnnumaraSepet();
                            this.fetchOnnumaraSonKuponNo();
                            this.fetchOnnumaraKupons();
                            this.getUserInfo();
                            vm.$snotify.remove();
                            vm.$snotify.success('Kupon Oluşturuldu.', 'BAŞARILI!!', { timeout: 2000, position: "centerTop" });
                        }else{
                            vm.$snotify.remove();
                            vm.$snotify.error('Kupon Oluşturulamadı ', 'HATA!!', { timeout: 2000, position: "centerTop" });
                        }
                    });
            },
            onnumara_topu_ekle(sayi) {
                let vm = this
                if(this.sayilar != ''){
                    if(this.sayilar.find(item => item === sayi)){
                        vm.$snotify.remove();
                        vm.$snotify.error('Yeni kuponunuzda '+ sayi+' sayisi bulunmaktadır.','Hata !',{timeout:3000,position:"leftTop"});
                    }else{
                        if(this.sayilar.length >= 10){
                            vm.$snotify.remove();
                            vm.$snotify.warning('Lütfen Yeni Kolonu KUPONA ekleyiniz.','Hata !',{timeout:3000,position:"leftTop"});
                        }else {
                            this.sayilar.push(sayi)
                            this.sortedSayilar()
                            this.cardList.kolon1= this.sayilar[0]
                            this.cardList.kolon2= this.sayilar[1]
                            this.cardList.kolon3= this.sayilar[2]
                            this.cardList.kolon4= this.sayilar[3]
                            this.cardList.kolon5= this.sayilar[4]
                            this.cardList.kolon6= this.sayilar[5]
                            this.cardList.kolon7= this.sayilar[6]
                            this.cardList.kolon8= this.sayilar[7]
                            this.cardList.kolon9= this.sayilar[8]
                            this.cardList.kolon10= this.sayilar[9]
                        }
                    }
                }else{
                    this.sayilar.push(sayi)
                    this.sortedSayilar()
                }
            },
            sayiSil(index){
                var del =this.sayilar.indexOf(index)
                this.sayilar.splice(del,1);
                this.sortedSayilar()
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