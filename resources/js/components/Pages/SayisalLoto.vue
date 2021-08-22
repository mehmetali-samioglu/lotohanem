<template>
  <div>


    <!-- SAyısal LOTO EKLE-ÇIKAR-SIRALA -->
    <div class="col-md-3">
      <form action="#" @submit.prevent="sepete_kolonlari_ekle(sayilar)">
        <div class="panel widget light-widget panel-bd-top vd_bdt-blue">
          <div class="panel-heading">
            <h3 class="pd-20 mgbt-xs-0">  <i class="fa fa-users mgr-9"></i> Sayısal Loto  </h3>
          </div>
          <!-- vd_panel-menu -->
          <div class="panel-body" style="padding: 15px">
            <div class="panel widget light-widget panel-bd-left">
              <div class="panel-body" style="padding: 10px">
                <a
                  class="btn vd_btn vd_round-btn btn-xs vd_bg-green "
                  style="margin-right:3px"
                  @click="sayisal_topu_sil(i)"
                  v-for="(i,index) in sayilar"
                  v-if="i>0&&index<6"
                >{{i}}</a>
              </div>
            </div>
            <div class="text-center" v-if="(sayilar.length)!=6">
              <p class="bilgi"> Bu Kümeden <b>6</b> Sayı Seçiniz </p>
            </div>
            <div class="pd-5 text-center">
              <a
                role="button"
                data-action="click-trigger"
                id="sayilar"
                @click="sayisal_topu_ekle(sayi)"
                v-for="sayi in 49"
                v-if="(sayilar.length)!=6"
                class="btn vd_btn vd_round-btn btn-xs vd_bg-green top "
                style="margin: 4px;"
              >{{sayi}}</a>
              <button type="submit" v-if="(sayilar.length)==6" class="btn vd_btn btn-block vd_bg-green font-semibold"> Kolonu Kupona Ekle  <i class="fa fa-plus fa-fw"></i></button>
            </div>
          </div>
        </div>
      </form>
    </div>

    <!-- SEPETTEKİ KUPON  -->
    <div class="col-md-3">
      <div class="panel widget">
        <div class="panel-heading vd_bg-blue ">
          <h3 class="panel-title text-center "> <span class="menu-icon"> <i class="fa fa-shopping-cart"></i></span>Sepetteki Sayısal Loto Kolonları </h3>
          <h3 class="panel-title text-center" v-if="allSayisalSepet!=0">Kupon No: <b>{{sonSayisalKuponNo}}</b>  </h3>
          <div class="vd_panel-menu">
            <div   data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon "><i class="icon-minus3"></i></div>
            <div @click="allSayisalSepet" data-action="refresh" data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font"><i class="icon-cycle"></i></div>
          </div>
          <!-- vd_panel-menu -->
        </div>
        <div class="panel-body-list">
          <div class="content-list content-image menu-action-right">
            <div data-rel="scroll"  >
                <transition-group class="list-wrapper" style="padding: 10px;"  name="bounceLeft" tag="ul" enter-active-class="animated bounceInLeft" leave-active-class="animated bounceOutRight">
                <li style="margin:2px"  v-for="(i,index) in allSayisalSepet"  v-bind:key="i.id">
                  <div  style="margin-left:15px"  >
                    <a  class=" btn vd_btn vd_round-btn btn-xs vd_bg-green mgr-5" >
                      {{i.kolon1}}
                    </a>
                    <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-green mgr-5" >
                      {{i.kolon2}}
                    </a>
                    <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-green mgr-5" >
                      {{i.kolon3}}
                    </a>
                    <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-green mgr-5" >
                      {{i.kolon4}}
                    </a>
                    <a  class=" btn vd_btn vd_round-btn btn-xs vd_bg-green mgr-5" >
                      {{i.kolon5}}
                    </a>
                    <a class=" btn vd_btn vd_round-btn btn-xs vd_bg-green mgr-5" >
                      {{i.kolon6}}
                    </a>
                    <div class="menu-action">
                      <a @click="sepetteki_kolonu_sil(i)" role="button"  data-original-title="Kaldır" data-toggle="tooltip" data-placement="left" class="menu-action-icon vd_red "><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                </li>
                </transition-group>
            </div>

            <form action="#">
              <div class="btn-group btn-group-justified mgbt-xs-5 btn-group-xs" v-if="allSayisalSepet.length==8"  >
                <a role="submit" class="btn btn-default vd_white vd_bg-green"  @click="sepeti_kuponlastir(sonSayisalKuponNo)"> <i class="fa fa-check"></i>Kuponu Yatır</a>
                <!--   <a role="button" class="btn btn-default vd_white vd_bg-blue"> <i class="fa fa-times"></i> Kuponu İptal Et</a>-->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- KUPONLARIMIZ -->
    <div class="col-md-6">
      <div class="tabs widget">
        <ul class="nav nav-tabs widget vd_bg-blue">
          <li class="active">
            <a data-toggle="tab" href="#list-tab">
              <span class="menu-icon"><i class="fa fa-user"></i></span>
              Sayısal Loto <b>Kupon</b> Listesi
              <span class="menu-active"><i class="fa fa-caret-up"></i></span>
            </a>
          </li>
        </ul>
        <div class="tab-content">
          <div id="list-tab" class="tab-pane active">
            <div class="content-grid column-xs-1 column-sm-4 column-md-4 column-lg-4  height-xs-2 " >
              <div data-rel="scroll" >
                <ul class="list-wrapper">
                  <li v-for="(kupon,ix) in allSayisalKupons"  @click="modalAc(kupon.kupon_no,ix)"  >
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

    <modalkupondetay :kupon="kupon" :hafta="hafta" :window="window" :dialog="dialog"   :renk="renk" :renk2="renk2"  @closeRequest="kapat"  ></modalkupondetay>
    <vue-snotify></vue-snotify>

  </div>

</template>

<script>
  import { eventBus } from '../../app'
  import { mapGetters, mapActions}  from 'vuex'

  let modalkupondetay =  require ('./partials/modal');

  export default {
    name: "sayisalLoto",
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
        sayilar: [],
        sonkupon:'',
        cardList:{
          kolon1:'',
          kolon2:'',
          kolon3:'',
          kolon4:'',
          kolon5:'',
          kolon6:'',
        }
      };
    },
    created(){
      this.fetchSayisalSepet();
      this.fetchSayisalKupons();
      this.fetchSayisalSonKuponNo();
    },
    computed:{
      ...mapGetters(['allSayisalSepet','allSayisalKupons','sonSayisalKuponNo']),
    },
    methods: {

      ...mapActions(['fetchSayisalSepet','fetchSayisalKupons','fetchSayisalKupon','fetchSayisalSonKuponNo']),

      //INFO
      getUserInfo(){
        axios.get('/lotohanem/userinfo')
                .then((response)=>{
                  eventBus.$emit('user_tl', response.data.kull[0].user_tl);
                  eventBus.$emit('user_lotopuan', response.data.kull[0].user_lotopuan);
                  eventBus.$emit('harcama_tlmi', response.data.detay[0].onay_tl);
                })
                .catch((error)=>{
                  console.log('HATA! İnfo Gelemedi. :)')
                });
      },

      //Sayisal Loto Kuponu Ekle-Çıkar-Sırala
      sayisal_topu_ekle(sayi) {
        let vm = this;
        if (this.sayilar != "") {
          if (this.sayilar.find(item => item === sayi)) {
            vm.$snotify.remove();
            vm.$snotify.html( `<div >Yeni Kolonda <b style="color:white"> ${sayi} </b> sayısı bulunmaktadır. </div>` , { timeout: 3000, position: "leftTop",type:'warning'} );
          }else{
            if(this.sayilar.length >=6){
              vm.$snotify.remove();
              vm.$snotify.warning( "Lütfen Kolonu Kupona Ekleyin.", "Uyarı!", { timeout: 3000, position: "leftTop" } );
            }else{
              this.sayilar.push(sayi);
              this.sayisal_toplari_sirala();
              this.cardList.kolon1 =this.sayilar[0];
              this.cardList.kolon2 =this.sayilar[1];
              this.cardList.kolon3 =this.sayilar[2];
              this.cardList.kolon4 =this.sayilar[3];
              this.cardList.kolon5 =this.sayilar[4];
              this.cardList.kolon6 =this.sayilar[5];
            }
          }
        }else{
          this.sayilar.push(sayi);
          this.sayisal_toplari_sirala();
          this.cardList.kolon1 =this.sayilar[0];
        }
      },
      sayisal_topu_sil(index){
        var del =this.sayilar.indexOf(index)
        this.sayilar.splice(del,1);
        this.sayisal_toplari_sirala()
      },
      sayisal_toplari_sirala() {
        this.sayilar.sort(function(a, b) {
          if (a < b) {
            return -1;
          } else if (a > b) {
            return 1;
          }
        });
      },


      // Kupona Kolon Ekle-Çıkar
      sepete_kolonlari_ekle(){
        let vm = this;
        if(this.allSayisalSepet.length >=8 ) {
          vm.$snotify.html(`<div class="text-center">Kuponunuzda Maksimum <b style="color:white">8</b> Kolon Bulunabilir. <br/> <h4 style="color:white"> Lütfen Sepeti Kuponlaştırın</h4></div>`, { timeout: 3000,type:"error", position: "centerTop",closeOnClick: false, pauseOnHover: true, });
        }else{
          console.log(this.cardList)
          axios.post('/lotohanem/sayisalloto/kolon-ekle',this.cardList)
            .then((response)=> {
              if (response.data.bitti != true) {
                this.fetchSayisalSepet();
                this.fetchSayisalSonKuponNo();
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
              this.errors='Sayisalloto Gönderilirken Hata Oluştu.';
              console.log(this.errors)
            });
        }
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
                axios.delete('/lotohanem/sayisalloto/kolonsil/'+i['id'])
                  .then((response) => {
                    if(response.data.ok === true){
                      vm.$snotify.remove();
                      this.fetchSayisalSepet();
                      this.fetchSayisalSonKuponNo();
                      this.getUserInfo();
                      vm.$snotify.success('Sepetteki Kolon Silindi.', 'POZİTİF !', {timeout: 1000, position: "centerTop"});
                      var del =this.sayisalkolons.indexOf(i)
                      this.allSayisalSepet.splice(del,1);
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
      sepeti_kuponlastir(kupon_no){
        let vm = this;
        axios.post('/lotohanem/sayisalloto/kuponlastir/'+kupon_no)
          .then((response)=>{
            if(response.data['ok']){
              this.fetchSayisalSepet();
              this.fetchSayisalSonKuponNo();
              this.fetchSayisalKupons();
              this.getUserInfo();
              vm.$snotify.remove();
              vm.$snotify.success('Kupon Oluşturuldu.', 'BAŞARILI!!', { timeout: 2000, position: "centerTop" });
            }else{
              vm.$snotify.remove();
              vm.$snotify.error('Kupon Oluşturulamadı ', 'HATA!!', { timeout: 2000, position: "centerTop" });
            }
          });
      },

      //  Kuponlarımı listele- görüntüle
      modalAc(key,ix){
        this.fetchSayisalKupon(key);
        this.showActive='show';
        this.renk='vd_bg-blue';
        this.renk2='vd_bg-green';
        this.window=800;
        this.dialog=true;
        this.hafta = this.allSayisalKupons[ix].hafta_slug;
        this.kupon = this.allSayisalKupons[ix].kupon_no;
      },
      kapat(){
        this.dialog=false
      },


    }
  };
</script>

<style scoped>
  .bilgi{
    color:white;
    padding: 1px;
    background-color: #c7254e;
  }

  .top:hover{
    -webkit-box-shadow: 0px 0px 2px 4px black;
    box-shadow: 0px 0px 2px 4px black;
    color:white;
    opacity:0.7;
    padding:2px
  }


</style>
