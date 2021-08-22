<template>
     <div class="col-md-12">
         <vs-row>
             <vs-col  vs-w="12">
                 <form action="#">
                     <vs-card>
                         <vs-card>
                             <div slot="header"><h3>Kulanıcı Bilgileri</h3></div>
                             <div vs-w="3" >
                                 <vs-input label-placeholder="Ad Soyad" v-model="kull.name"  required/>
                                 <vs-input label-placeholder="E-mail"  disabled="true" v-model="kull.email"  required/>
                                 <vs-input label-placeholder="TC Kimlik" v-model="kull.tckimlik"  required/>
                                 <vs-input label-placeholder="Şifre" v-model="kull.sifre"  required/>
                                 <span style="color:red">Boş Bırakırsanız Şifreniz <b>AYNI</b> Kalacaktır.</span>
                             </div>
                         </vs-card>
                         <vs-card>
                             <div slot="header"><h3>Kulanıcı Detay Bilgileri</h3></div>
                             <div vs-w="9" >
                                 <div vs-w="3" >
                                     <vs-textarea label="Adres Bilgisi" v-model="kull.adres" required/>
                                     <vs-input label-placeholder="Telefon"v-model="kull.telefon"  required/>
                                     <vs-input label-placeholder="Cep Telefonu" v-model="kull.ceptelefonu"  required/>
                                 </div>
                                 <div vs-w="3" >
                                     <vs-textarea label="İl" v-model="kull.il" required/>
                                     <vs-input label-placeholder="İlçe"v-model="kull.ilce"  required/>
                                     <vs-input label-placeholder="Cep Telefonu" v-model="kull.dtarihi"  required/>
                                 </div>
                             </div>
                         </vs-card>
                     </vs-card>

                 </form>
             </vs-col>
         </vs-row>

            <v-flex  >
                <form >
                    <div class="col-md-3">
                        <v-card>
                            <v-toolbar color="yellow darken-1">
                                <v-toolbar-title class="white--text" >Kulanıcı Bilgileri</v-toolbar-title>
                            </v-toolbar>
                            <v-container>
                                <v-text-field
                                        v-model="kull.name"
                                        label="AdSoyad"
                                        required
                                        @input="$v.kull.name.$touch()"
                                ></v-text-field>
                                <v-text-field
                                        disabled
                                        v-model="kull.email"
                                        label="E-mail"
                                        required
                                ></v-text-field>
                                <v-text-field
                                        v-model="kull.tckimlik"
                                        label="TC Kimlik"
                                        :counter="11"
                                ></v-text-field>
                                <v-text-field
                                        v-model="kull.sifre"
                                        outline
                                        label="Şifre"
                                        required
                                ></v-text-field>
                                <span style="color:red">Boş Bırakırsanız Şifreniz <b>AYNI</b> Kalacaktır.</span>
                            </v-container>
                        </v-card>
                    </div>
                    <div class="col-md-9">
                        <v-card>
                            <v-toolbar color="yellow darken-1">
                                <v-toolbar-title class="white--text" >Kullanıcı Detay Bilgileri</v-toolbar-title>
                            </v-toolbar>
                            <v-container>
                                <div class="col-md-3">
                                    <v-textarea
                                            box
                                            v-model="kull.adres"
                                            label="Adres"
                                    ></v-textarea>
                                    <v-text-field
                                            v-model="kull.telefon"
                                            label="Telefon"
                                            :counter="11"
                                            required
                                    ></v-text-field>
                                    <v-text-field
                                            v-model="kull.ceptelefonu"
                                            label="Cep Telefonu"
                                            required
                                    ></v-text-field>
                                </div>
                                <div class="col-md-3">
                                    <v-text-field
                                            v-model="kull.il"
                                            label="İl"
                                            required
                                    ></v-text-field>
                                    <v-text-field
                                            v-model="kull.ilce"
                                            label="İlçe"
                                            required
                                    ></v-text-field>
                                    <v-dialog
                                            ref="dialog"
                                            v-model="modal"
                                            :return-value.sync="kull.dtarihi"
                                            persistent
                                            lazy
                                            full-width
                                            width="290px"
                                    >
                                        <v-text-field
                                                slot="activator"
                                                v-model="kull.dtarihi"
                                                label="Doğum Tarihi"
                                                prepend-icon="event"
                                                readonly
                                        ></v-text-field>
                                        <v-date-picker v-model="kull.dtarihi" scrollable locale="tr-tr"
                                        >
                                            <v-spacer></v-spacer>
                                            <v-btn flat color="primary" @click="modal = false">İptal</v-btn>
                                            <v-btn flat color="primary" @click="$refs.dialog.save(kull.dtarihi)">Tamam</v-btn>
                                        </v-date-picker>
                                    </v-dialog>
                                    <v-radio-group v-model="kull.cinsiyet">
                                        <v-radio    label="Erkek" value="1"></v-radio>
                                        <v-radio    label="Bayan" value="0"></v-radio>

                                    </v-radio-group>
                                </div>
                                <div class="col-md-6">
                                    <v-text-field
                                            slot="activator"
                                            v-model="kull.banka1"
                                            label="1. Banka"
                                            prepend-icon="attach_money"
                                    ></v-text-field>
                                    <v-text-field
                                            slot="activator"
                                            v-model="kull.banka2"
                                            label="2. Banka"
                                            prepend-icon="attach_money"
                                    ></v-text-field>
                                    <v-text-field
                                            slot="activator"
                                            v-model="kull.banka3"
                                            label="3. Banka"
                                            prepend-icon="attach_money"
                                    ></v-text-field>
                                    <v-text-field
                                            slot="activator"
                                            v-model="kull.banka4"
                                            label="4. Banka"
                                            prepend-icon="attach_money"
                                    ></v-text-field>
                                    <v-text-field
                                            slot="activator"
                                            v-model="kull.banka5"
                                            label="5. Banka"
                                            prepend-icon="attach_money"
                                    ></v-text-field>
                                </div>
                            </v-container>
                        </v-card>
                    </div>

                    <v-btn   color="primary"  @click="SaveData"  >Profil Bilgilerini Kaydet</v-btn>
                </form>
            </v-flex>
        <vue-snotify></vue-snotify>
    </div>

</template>

<script>
    import { required, maxLength, email } from 'vuelidate/lib/validators'

    export default {
        mounted(){
            this.getProfil()
        },
        methods: {
            submit () {
                this.$v.$touch()
            },
            SaveData(){
                let vm = this;
                axios.post('/lotohanem/profil-kaydet',{kull:this.kull})
                    .then((response)=>{
                        vm.$snotify.remove();
                        if(response.data=='success'){
                            vm.$snotify.success('Profil Bilgileri Güncellendi', 'POZİTİF !', {timeout: 1000, position: "rightTop"});
                            this.kull.sifre=''
                        }else{
                            vm.$snotify.error('Profil Bilgileri Güncellenemedi', 'HATAA !', {timeout: 1000, position: "rightTop"});
                        }
                    })
                    .catch((error)=>{
                        console.log('Ayar Getir Hatası')
                    });
            },
            getProfil(){
                axios.get('/lotohanem/profil-getir')
                    .then((response)=>{
                        this.kull.name = response.data.kullanici[0]['adsoyad'];
                        this.kull.tckimlik = response.data.kullanici[0]['tckimlik'];
                        this.kull.email = response.data.kullanici[0]['email'];
                        this.kull.adres = response.data.kul_detay[0]['adres'];
                        this.kull.telefon = response.data.kul_detay[0]['telefon'];
                        this.kull.ceptelefonu = response.data.kul_detay[0]['ceptelefonu'];
                        this.kull.cinsiyet = response.data.kul_detay[0]['cinsiyet'];
                        this.kull.il = response.data.kul_detay[0]['il'];
                        this.kull.ilce = response.data.kul_detay[0]['ilce'];
                        this.kull.dtarihi = response.data.kul_detay[0]['dogum_tarihi'];
                        this.kull.banka1 = response.data.kul_detay[0]['banka_1'];
                        this.kull.banka2 = response.data.kul_detay[0]['banka_2'];
                        this.kull.banka3 = response.data.kul_detay[0]['banka_3'];
                        this.kull.banka4 = response.data.kul_detay[0]['banka_4'];
                        this.kull.banka5 = response.data.kul_detay[0]['banka_5'];
                    })
                    .catch((error)=>{
                        console.log('Profil Getir Hatası')
                    });
            },
        },
        data: () => ({
            modal: false,
            kull: {
                name: '', tckimlik: '', sifre: '', email: '', cinsiyet: '', dtarihi: '',
                adres: '', telefon: '', ceptelefonu: '',
                il: '', ilce: '',
                banka1: '', banka2: '', banka3: '', banka4: '', banka5: '',
            }
        }),
    }
</script>

<style scoped>
input{
  border:none;
}
</style>