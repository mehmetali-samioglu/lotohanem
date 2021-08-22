<template>

        <div class="col-md-12">
            <div class="panel widget light-widget panel-bd-top vd_bdt-green">
                <div class="panel-heading ">
                    <h3 class="pd-20 mgbt-xs-0"><i class="fa fa-users mgr-9"></i>
                        Kişisel Ayar Listesi
                    </h3>
                </div>
                <div class="panel-body">
                    <div  class="col-md-3 col-sm-3 " >
                        <div class="panel widget hoverx ">
                            <div class="panel-heading  vd_bg-blue">
                                <h3 class="panel-title" style="color:white"> <span class="menu-icon"> <i class="icon-pie"></i> </span> Kupon Yatırma Ayarı </h3>
                            </div>
                            <div class="panel-body  ">
                                <vs-radio v-model="odeme" vs-name="radios1" vs-value="Türk Lirası">Türk Lirası</vs-radio>
                                <vs-radio v-model="odeme" vs-name="radios1" vs-value="Loto Kolon">Loto Kolon</vs-radio>
                                <br>
                                <h5> Kupon <span class="font-semibold" ><strong>{{odeme}}</strong></span> ile oynanacaktır. </h5>
                            </div>
                            <vs-button   color="success" type="relief" @click="RefreshData">Ayarları Kaydet</vs-button>
                        </div>
                    </div>
                </div>
            </div>
            <vue-snotify></vue-snotify>

        </div>
</template>

<script>
    import { eventBus } from '../../../app'
    export default {
        data() {
            return {
                odeme:''
            }
        },
        mounted(){
          this.getAyar()
        },
        methods:{
            getAyar(){
                axios.get('/lotohanem/ayar-getir')
                    .then((response)=>{
                        if(response.data[0].onay_tl==1){
                            this.odeme='Türk Lirası'
                        }else{
                            this.odeme='Loto Kolon'
                        }
                    })
                    .catch((error)=>{
                        console.log('Ayar Getir Hatası')
                    });
            },
            RefreshData(){
                let vm = this;
                axios.post('/lotohanem/ayar-kaydet',{odeme:this.odeme})
                    .then((response)=>{
                        vm.$snotify.remove();
                        vm.$snotify.success('Oynama şekli '+ this.odeme +' olarak güncellendi', 'POZİTİF !', {timeout: 1000, position: "rightTop"});
                        eventBus.$emit('harcama_tlmi', response.data.kullanici['onay_tl'])
                    })
                    .catch((error)=>{
                        console.log('Ayar Getir Hatası')
                    });
            }
        }
    }
</script>

<style scoped>
    .hoverx{
        box-shadow: #888888 1px 1px 2px;
    }
.hoverx:hover{
    box-shadow: #888888 2px 2px 30px;
}
</style>