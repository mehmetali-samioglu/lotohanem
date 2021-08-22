<template>



     <div class="col-sm-9">
            <div class="tabs widget">
             <ul class="nav nav-tabs widget vd_bg-dark-blue">
                 <li class="active">
                     <a data-toggle="tab" href="#profile-tab">
                         SÜPER LOTO
                         <span class="menu-active"><i class="fa fa-caret-up"></i></span>
                     </a>
                 </li>
             </ul>
             <div class="tab-content">
                 <div id="profile-tab1" class="tab-pane active">
                     <div class="pd-15">
                         <div class="row"  >
                             <div class="col-md-3 col-lg-4 col-sm-6 " data-rel="sortable" v-for="(kupon,ix) in superkupons" >
                                 <div class="panel widget">
                                     <div class="panel-heading vd_bg-dark-blue">
                                         <h4 class="panel-title">
                                             <span class="menu-icon"> <i class="fa fa-circle"></i></span>
                                             Kupon: {{kupon}}
                                         </h4>
                                         <div class="vd_panel-menu">
                                             <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon">
                                                 <i class="icon-minus3"></i>
                                             </div>
                                             <div @click="getSuperKolons" data-action="refresh" data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font">
                                                 <i class="icon-cycle"></i>
                                             </div>
                                             <div data-action="close" data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon">
                                                 <i class="icon-cross"></i>
                                             </div>
                                         </div>
                                         <!-- vd_panel-menu -->
                                     </div>
                                     <div class="panel-body-list">
                                         <div class="content-list content-image menu-action-right">
                                             <div data-rel="scroll" >
                                                 <ul class="list-wrapper ">
                                                     <li style="margin:2px"  v-for="(i,index) in superkolons"  v-if="kupon>superkupons ? index<8*kupon : ((index<8*kupon) && (index>=8*(kupon-1)))  "  >
                                                         <div  style="margin-left:15px"  >
                                                             <a  class="top btn vd_btn vd_round-btn btn-xs vd_bg-blue mgr-5" >
                                                                 {{i.kolon1}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-blue mgr-5" >
                                                                 {{i.kolon2}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-blue mgr-5" >
                                                                 {{i.kolon3}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-blue mgr-5" >
                                                                 {{i.kolon4}}
                                                             </a>
                                                             <a  class="top btn vd_btn vd_round-btn btn-xs vd_bg-blue mgr-5" >
                                                                 {{i.kolon5}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-blue mgr-5" >
                                                                 {{i.kolon6}}
                                                             </a>
                                                             <div class="menu-action">
                                                                 <a @click="superkolonsil(i)" role="button"  data-original-title="Kaldır" data-toggle="tooltip" data-placement="left" class="menu-action-icon vd_red "><i class="fa fa-times"></i></a>
                                                             </div>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                             <div class="btn-group btn-group-justified mgbt-xs-5 btn-group-xs ">
                                                 <a role="button" class="btn btn-default vd_white vd_bg-green"> <i class="fa fa-check"></i> Kuponu Yatır</a>
                                                 <a role="button" class="btn btn-default vd_white vd_bg-red"> <i class="fa fa-times"></i> Kuponu İptal Et</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- row -->
                     </div>
                     <!-- pd-20 -->
                 </div>
                 <!-- home-tab -->
             </div>
             <!-- tab-content -->
         </div>
         <div class="tabs widget">
             <ul class="nav nav-tabs widget vd_bg-googleplus"  >
                 <li class="active">
                     <a data-toggle="tab" href="#profile-tab">
                         SAYISAL LOTO
                         <span class="menu-active"><i class="fa fa-caret-up"></i></span>
                     </a>
                 </li>
             </ul>
             <div class="tab-content">
                 <div id="profile-tab" class="tab-pane active">
                     <div class="pd-15">
                         <div class="row"  >
                             <div class="col-md-3 col-lg-4 col-sm-6 " data-rel="sortable" v-for="(kupon,ix) in sayisalkupons" >
                                 <div class="panel widget">
                                     <div class="panel-heading vd_bg-googleplus">
                                         <h4 class="panel-title">
                                             <span class="menu-icon"> <i class="fa fa-circle"></i></span>
                                             Kupon: {{kupon}}
                                         </h4>
                                         <div class="vd_panel-menu">
                                             <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon">
                                                 <i class="icon-minus3"></i>
                                             </div>
                                             <div @click="getSayisalKolons" data-action="refresh" data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font">
                                                 <i class="icon-cycle"></i>
                                             </div>
                                             <div data-action="close" data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon">
                                                 <i class="icon-cross"></i>
                                             </div>
                                         </div>
                                         <!-- vd_panel-menu -->
                                     </div>
                                     <div class="panel-body-list">
                                         <div class="content-list content-image menu-action-right">
                                             <div data-rel="scroll" >
                                                 <ul class="list-wrapper ">
                                                     <li style="margin:2px"  v-for="(i,index) in sayisalkolons"  v-if="kupon>sayisalkupons ? index<8*kupon : ((index<8*kupon) && (index>=8*(kupon-1)))  "  >
                                                         <div style="margin-left:15px"  >
                                                             <a  class="top btn vd_btn vd_round-btn btn-xs vd_bg-yellow mgr-5" >
                                                                 {{i.kolon1}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-yellow mgr-5" >
                                                                 {{i.kolon2}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-yellow mgr-5" >
                                                                 {{i.kolon3}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-yellow mgr-5" >
                                                                 {{i.kolon4}}
                                                             </a>
                                                             <a  class="top btn vd_btn vd_round-btn btn-xs vd_bg-yellow mgr-5" >
                                                                 {{i.kolon5}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-yellow mgr-5" >
                                                                 {{i.kolon6}}
                                                             </a>
                                                             <div class="menu-action">
                                                                <a @click="sayisalkolonsil(i)" role="button"  data-original-title="Kaldır" data-toggle="tooltip" data-placement="left" class="menu-action-icon vd_red "><i class="fa fa-times"></i></a>
                                                             </div>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                             <div class="btn-group btn-group-justified mgbt-xs-5 btn-group-xs ">
                                                 <a role="button" class="btn btn-default vd_white vd_bg-green btn-xs"> <i class="fa fa-check"></i> Kuponu Yatır</a>
                                                 <a role="button" class="btn btn-default btn-xs vd_white vd_bg-red"> <i class="fa fa-times"></i> Kuponu İptal Et</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- row -->
                     </div>
                     <!-- pd-20 -->
                 </div>
                 <!-- home-tab -->
             </div>
             <!-- tab-content -->
         </div>
         <div class="tabs widget">
             <ul class="nav nav-tabs widget vd_bg-black"  >
                 <li class="active">
                     <a data-toggle="tab" href="#profile-tab">
                         ONNUMARA
                         <span class="menu-active"><i class="fa fa-caret-up"></i></span>
                     </a>
                 </li>
             </ul>
             <div class="tab-content">
                 <div id="profile-tab" class="tab-pane active">
                     <div class="pd-15">
                         <div class="row"  >
                             <div class="col-md-6 col-lg-6 col-sm-12 " data-rel="sortable" v-for="(kupon,ix) in onnumarakupons" >
                                 <div class="panel widget">
                                     <div class="panel-heading vd_bg-black">
                                         <h4 class="panel-title">
                                             <span class="menu-icon"> <i class="fa fa-circle"></i></span>
                                             Kupon: {{kupon}}
                                         </h4>
                                         <div class="vd_panel-menu">
                                             <div data-action="minimize" data-original-title="Minimize" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon">
                                                 <i class="icon-minus3"></i>
                                             </div>
                                             <div @click="getOnnumaraKolons" data-action="refresh" data-original-title="Refresh" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon smaller-font">
                                                 <i class="icon-cycle"></i>
                                             </div>
                                             <div data-action="close" data-original-title="Close" data-toggle="tooltip" data-placement="bottom" class=" menu entypo-icon">
                                                 <i class="icon-cross"></i>
                                             </div>
                                         </div>
                                         <!-- vd_panel-menu -->
                                     </div>
                                     <div class="panel-body-list">
                                         <div class="content-list content-image menu-action-right">
                                             <div data-rel="scroll" >
                                                 <ul class="list-wrapper ">
                                                     <li style="margin:2px"  v-for="(i,index) in onnumarakolons"  v-if="kupon>onnumarakupons ? index<8*kupon : ((index<8*kupon) && (index>=8*(kupon-1)))  "  >
                                                         <div style="margin-left:15px"  >
                                                             <a  class="top btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                                                 {{i.kolon1}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                                                 {{i.kolon2}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                                                 {{i.kolon3}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                                                 {{i.kolon4}}
                                                             </a>
                                                             <a  class="top btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                                                 {{i.kolon5}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                                                 {{i.kolon6}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                                                 {{i.kolon7}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                                                 {{i.kolon8}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                                                 {{i.kolon9}}
                                                             </a>
                                                             <a class="top btn vd_btn vd_round-btn btn-xs vd_bg-black mgr-5" >
                                                                 {{i.kolon10}}
                                                             </a>
                                                             <div class="menu-action">
                                                                 <a @click="onnumarakolonsil(i)" role="button"  data-original-title="Kaldır" data-toggle="tooltip" data-placement="left" class="menu-action-icon vd_red "><i class="fa fa-times"></i></a>
                                                             </div>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                             <div class="btn-group btn-group-justified mgbt-xs-5 btn-group-xs ">
                                                 <a role="button" class="btn btn-default vd_white vd_bg-green btn-xs"> <i class="fa fa-check"></i> Kuponu Yatır</a>
                                                 <a role="button" class="btn btn-default btn-xs vd_white vd_bg-red"> <i class="fa fa-times"></i> Kuponu İptal Et</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- row -->
                     </div>
                     <!-- pd-20 -->
                 </div>
                 <!-- home-tab -->
             </div>
             <!-- tab-content -->
         </div>
     </div>



</template>

<script>
    import { eventBus } from '../../app'
    export default {
        data() {
            return {
                superkupons:[],
                sayisalkupons:[],
                onnumarakupons:[],
                superkolons: {},
                onnumarakolons: {},
                sayisalkolons: {},
                superUrl: '/lotohanem/superloto/listele',
                sayisalUrl: '/lotohanem/sayisalloto/listele',
                onnumaraUrl: '/lotohanem/onnumara/listele',
            }
        },
        mounted(){
          this.getSuperKolons()
          this.getSayisalKolons()
          this.getOnnumaraKolons()
        },
        created(){
            eventBus.$on('superkuponaEkle', (sayilar)=> {
              this.superkolons.push(sayilar)
              this.getSuperKolons();
            });
            eventBus.$on('sayisalkuponaEkle', (sayilar)=> {
                this.sayisalkolons.push(sayilar)
                this.getSayisalKolons();
            });
            eventBus.$on('onnumarakuponaEkle', (sayilar)=> {
                this.onnumarakolons.push(sayilar)
                this.getOnnumaraKolons();
            });
        },
        methods :{
            getSuperKolons(){
                let $this = this
                axios.get(this.superUrl)
                    .then((response)=>{
                        this.superkolons = response.data
                        this.superkupons=this.mathTam(response.data.length)
                    })
                    .catch((error)=>{
                        console.log('GetKolons Hatası')
                    });
            },
            getSayisalKolons(){
                let $this = this
                axios.get(this.sayisalUrl)
                    .then((response)=>{
                        this.sayisalkolons = response.data
                        this.sayisalkupons=this.mathTam(response.data.length)
                    })
                    .catch((error)=>{
                        console.log('GetKolons Hatası')
                    });
            },
            getOnnumaraKolons(){
                let $this = this
                axios.get(this.onnumaraUrl)
                    .then((response)=>{
                        this.onnumarakolons = response.data
                        this.onnumarakupons=this.mathTam(response.data.length)
                    })
                    .catch((error)=>{
                        console.log('GetKolons Hatası')
                    });
            },
            superkolonsil(i){
                var del =this.superkolons.indexOf(i)
                this.superkolons.splice(del,1);
            },
            sayisalkolonsil(i){
                var del =this.sayisalkolons.indexOf(i)
                this.sayisalkolons.splice(del,1);
            },
            onnumarakolonsil(i){
                var del =this.onnumarakolons.indexOf(i)
                this.onnumarakolons.splice(del,1);
            },
            mathKalan(a){
                return Math.ceil(a%8)
            },
            mathTam(a){
                return Math.ceil(a/8)
            }
        },
    }
</script>

<style scoped>
    #silinsin:hover{
        color:red;
    }
</style>