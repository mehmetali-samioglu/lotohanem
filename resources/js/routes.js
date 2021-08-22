
let Anasayfa =  require('./components/Anasayfa.vue');
let SayisalLoto =  require('./components/Pages/SayisalLoto.vue');
let SuperLoto =  require('./components/Pages/SuperLoto.vue');
let OnNumara =  require('./components/Pages/OnNumara.vue');
let SansTopu =  require('./components/Pages/SansTopu.vue');
let Ayarlar =  require('./components/Pages/partials/ayarlar');
let Profil =  require('./components/Pages/Profil');

//Datatable
let SuperKuponsPage =  require('./components/Pages/Loto/SuperKuponsPage');
let SayisalKuponsPage =  require('./components/Pages/Loto/SayisalKuponsPage');
let OnNumaraKuponsPage =  require('./components/Pages/Loto/OnnumaraKuponsPage');
let SanstopuKuponsPage =  require('./components/Pages/Loto/SanstopuKuponsPage');

//YONETİCİ
let Y_Sayisalloto =  require('./components/Pages/Yonetici/Pages/Y_Sayisalloto');
let Y_Superloto =  require('./components/Pages/Yonetici/Pages/Y_Superloto');
let Y_Onnumara =  require('./components/Pages/Yonetici/Pages/Y_Onnumara');
let Y_Sanstopu =  require('./components/Pages/Yonetici/Pages/Y_Sanstopu');
let Y_Ayarlar =  require('./components/Pages/Yonetici/Pages/Ayarlar');



export const routes = [
    { path: '/lotohanem/sayisalloto', component: SayisalLoto },
    { path: '/lotohanem', component: Anasayfa },
    { path: '/lotohanem/superloto', component: SuperLoto },
    { path: '/lotohanem/onnumara', component: OnNumara },
    { path: '/lotohanem/sanstopu', component: SansTopu },
    { path: '/lotohanem/ayarlar', component: Ayarlar },
    { path: '/lotohanem/profil', component: Profil },


    { path: '/lotohanem/kuponlarim/superkuponlari', component: SuperKuponsPage },
    { path: '/lotohanem/kuponlarim/sayisalkuponlari', component: SayisalKuponsPage },
    { path: '/lotohanem/kuponlarim/onnumarakuponlari', component: OnNumaraKuponsPage },
    { path: '/lotohanem/kuponlarim/sanstopukuponlari', component: SanstopuKuponsPage },

    { path: '/yonetici/superkuponlari', component: Y_Superloto },
    { path: '/yonetici/sayisalkuponlari', component: Y_Sayisalloto },
    { path: '/yonetici/onnumarakuponlari', component: Y_Onnumara },
    { path: '/yonetici/sanstopukuponlari', component: Y_Sanstopu },
    { path: '/yonetici/ayarlar', component: Y_Ayarlar },


];