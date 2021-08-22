<template>

    <div class="centerx">

        <vs-popup class="holamundo"   title="Kupon Detay Bilgileri" :active.sync="dialog" @close="kapat" >
    <!--        <div class="headline vd_white text-center" :class="renk" style="padding: 10px">-->
    <!--                Kupon Detay Bilgileri-->
    <!--                <button type="button" class="close pull-right" @click="kapat"  ><i class="fa fa-times"></i></button>-->
    <!--        </div>-->
            <vs-row>

                <vs-card>
                    <div class="row">
                        <div class="col-md-7">
                            <div  class="text-center">
                                <h4 class=" mb-0">Kupon No:  <b>{{ kupon }}</b></h4> <br>
                                <h4 class=" mb-0">Hafta Bilgisi:  <b>{{ hafta }}</b> </h4>
                            </div>
                        </div>
                        <div class="col-md-5" v-if="resim">
                            <div  style=" height:100px;width:100px;">
                                <span>Kupon Resmi</span>
                                <expandable-image
                                        v-if="resim"
                                        style="padding:0px"
                                        class="image"
                                        :src="thumbnailDir+resim"
                                        :alt="kupon + ' Nolu Lotohanem Kuponu'"
                                        :title="kupon + ' Nolu Lotohanem Kuponu'"
                                ></expandable-image>
                            </div>
                        </div>
                    </div>
                </vs-card>

                <vs-card>
                    <div class="col-md-12 " style="margin-top:10px;">
                        <div class="content-list content-image menu-action-right ">
                            <div data-rel="scroll"  >
                                <ul class="list-wrapper " style="padding: 10px;"  >
                                    <li  style="margin:2px"   v-for="(i,index) in oneSayisalKupon"    >
                                        <div  class="text-center"  >
                                            <div class="label vd_bg-red" style="margin-right:40px;font-weight: bold;font-size: 14px;">{{index+1}} <i class="fa fa-arrow-right"></i> </div>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon1}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon2}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon3}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon4}}
                                            </a>
                                            <a  class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon5}}
                                            </a>
                                            <span style="font-size: 18px;" v-if="typee=='sanstopu'" >  +  </span>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2"  >
                                                {{i.kolon6}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon7!=null" >
                                                {{i.kolon7}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon8!=null" >
                                                {{i.kolon8}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon9!=null" >
                                                {{i.kolon9}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon10!=null" >
                                                {{i.kolon10}}
                                            </a>
                                        </div>
                                    </li>
                                    <li  style="margin:2px;"  v-for="(i,index) in oneSuperKupon"    >
                                        <div  class="text-center"  >
                                            <div class="label vd_bg-red" style="margin-right:40px;font-weight: bold;font-size: 14px;">{{index+1}} <i class="fa fa-arrow-right"></i> </div>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon1}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon2}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon3}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon4}}
                                            </a>
                                            <a  class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon5}}
                                            </a>
                                            <span style="font-size: 18px;" v-if="typee=='sanstopu'" >  +  </span>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2"  >
                                                {{i.kolon6}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon7!=null" >
                                                {{i.kolon7}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon8!=null" >
                                                {{i.kolon8}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon9!=null" >
                                                {{i.kolon9}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon10!=null" >
                                                {{i.kolon10}}
                                            </a>
                                        </div>
                                    </li>
                                    <li  style="margin:2px;"  v-for="(i,index) in oneSanstopuKupon"    >
                                        <div  class="text-center"  >
                                            <div class="label vd_bg-red" style="margin-right:40px;font-weight: bold;font-size: 14px;">{{index+1}} <i class="fa fa-arrow-right"></i> </div>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon1}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon2}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon3}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon4}}
                                            </a>
                                            <a  class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon5}}
                                            </a>
                                            <span style="font-size: 18px;" v-if="typee=='sanstopu'" >  +  </span>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2"  >
                                                {{i.kolon6}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon7!=null" >
                                                {{i.kolon7}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon8!=null" >
                                                {{i.kolon8}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon9!=null" >
                                                {{i.kolon9}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon10!=null" >
                                                {{i.kolon10}}
                                            </a>
                                        </div>
                                    </li>
                                    <li  style="margin:2px;"  v-for="(i,index) in oneOnnumaraKupon"    >
                                        <div  class="text-center"  >
                                            <div class="label vd_bg-red" style="margin-right:40px;font-weight: bold;font-size: 14px;">{{index+1}} <i class="fa fa-arrow-right"></i> </div>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon1}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon2}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon3}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon4}}
                                            </a>
                                            <a  class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" >
                                                {{i.kolon5}}
                                            </a>
                                            <span style="font-size: 18px;" v-if="typee=='sanstopu'" >  +  </span>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2"  >
                                                {{i.kolon6}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon7!=null" >
                                                {{i.kolon7}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon8!=null" >
                                                {{i.kolon8}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon9!=null" >
                                                {{i.kolon9}}
                                            </a>
                                            <a class=" btn vd_btn vd_round-btn btn-xs  mgr-5" :class="renk2" v-if="i.kolon10!=null" >
                                                {{i.kolon10}}
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </vs-card>



            </vs-row>

        </vs-popup>
    </div>

</template>

<script>
    import { mapGetters } from 'vuex';

    export default {
        props:['renk','renk2','window','typee','dialog','resim','kupon','hafta'],
        data(){
            return{
                thumbnailDir:'/img/photos/',
            }
        },
        methods:{
            kapat(){
                this.$emit('closeRequest');
                this.$store.state.superloto.superkupon=[];
                this.$store.state.sayisalloto.sayisalkupon=[];
                this.$store.state.sanstopu.sanstopukupon=[];
                this.$store.state.onnumara.onnumarakupon=[];
            },
        },
        created(){
        },
        mounted(){
        },
        computed:{
            ...mapGetters(['oneSuperKupon','oneSayisalKupon','oneSanstopuKupon','oneOnnumaraKupon']),
        },
    }
</script>

<style scoped >
    th .sort-th i{
        font-size:1.4rem
    }
</style>