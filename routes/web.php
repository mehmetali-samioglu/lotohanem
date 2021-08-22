<?php


#Kullanıcı ANASİTESİ#
Route::group(['middleware'=>'auth'],function(){ //kullanıcı girişi yapanlar girebilir.
    Route::group(['prefix' => 'lotohanem'], function () {

        Route::get('/','Anasite\HomePageController@index')->name('lotohanem');

        Route::get('/ayarlar','Anasite\UserInfoController@ayarlar')->name('lotohanem.ayarlar');
        Route::get('/ayar-getir','Anasite\UserInfoController@ayar_getir')->name('lotohanem.ayar-getir');
        Route::post('/ayar-kaydet','Anasite\UserInfoController@ayar_kaydet')->name('lotohanem.ayar-kaydet');

        Route::get('/profil','Anasite\UserInfoController@profil')->name('lotohanem.profil');
        Route::get('/profil-getir','Anasite\UserInfoController@profil_getir')->name('lotohanem.profil-getir');
        Route::post('/profil-kaydet','Anasite\UserInfoController@profil_kaydet')->name('lotohanem.profil-kaydet');


        Route::group(['prefix' => 'kuponlarim'], function () {
            Route::get('/','Anasite\HomePageController@index')->name('lotohanem.kuponlarim');
            Route::get('/superkuponlari','Anasite\HomePageController@superlotokupons');

            Route::get('/superkuponlarigetir','Anasite\SuperlotoController@super_kuponlari_getir');
            Route::get('/sayisalkuponlarigetir','Anasite\SayisallotoController@sayisal_kuponlari_getir');
            Route::get('/sanstopukuponlarigetir','Anasite\SansTopuController@sanstopu_kuponlari_getir');
            Route::get('/onnumarakuponlarigetir','Anasite\OnNumaraController@onnumara_kuponlari_getir');

            Route::get('/sayisalkuponlari','Anasite\HomePageController@sayisallotokupons');
            Route::get('/onnumarakuponlari','Anasite\HomePageController@onnumarakupons');
            Route::get('/sanstopukuponlari','Anasite\HomePageController@sanstopukupons');
            Route::get('/onnumarakuponlari','Anasite\HomePageController@onnumarakupons');
        });

        Route::group(['prefix'=>'userinfo'],function (){
           Route::match(['get','post'],'/','Anasite\UserInfoController@userInfo')->name('lotohanem.userinfo');
        });

        Route::group(['prefix'=>'superloto'],function(){
            Route::match(['get','post'],'/','Anasite\SuperlotoController@index')->name('lotohanem.superloto');
            Route::post('/kolon-ekle','Anasite\SuperLotoController@store')->name('lotohanem.superloto.kolon-ekle');
            Route::get('/listele','Anasite\SuperLotoController@create')->name('lotohanem.superloto.listele');
            Route::get('/kupon-getir/{key}','Anasite\SuperLotoController@kupon_getir')->name('lotohanem.superloto.kupon-getir');
            Route::delete('/kolonsil/{id}','Anasite\SuperLotoController@destroy')->name('lotohanem.superloto.kolonsil');
            Route::post('/kuponlastir/{id}','Anasite\SuperLotoController@kuponlastir')->name('lotohanem.superloto.kuponlastir');
            Route::get('/sonkuponno','Anasite\SuperLotoController@son_kupon_no')->name('lotohanem.superloto.sonkuponno');
        });

        Route::group(['prefix'=>'sayisalloto'],function(){
            Route::match(['get','post'],'/','Anasite\SayisallotoController@index')->name('lotohanem.superloto');
            Route::post('/kolon-ekle','Anasite\SayisallotoController@store')->name('lotohanem.sayisalloto.kolon-ekle');
            Route::get('/listele','Anasite\SayisallotoController@create')->name('lotohanem.sayisalloto.listele');
            Route::get('/kupon-getir/{key}','Anasite\SayisallotoController@kupon_getir')->name('lotohanem.sayisalloto.kupon-getir');
            Route::delete('/kolonsil/{id}','Anasite\SayisalLotoController@destroy')->name('lotohanem.sayisalloto.kolonsil');
            Route::post('/kuponlastir/{id}','Anasite\SayisalLotoController@kuponlastir')->name('lotohanem.sayisalloto.kuponlastir');
            Route::get('/sonkuponno','Anasite\SayisalLotoController@son_kupon_no')->name('lotohanem.sayisalloto.sonkuponno');

        });

        Route::group(['prefix'=>'sanstopu'],function(){
            Route::match(['get','post'],'/','Anasite\SansTopuController@index')->name('lotohanem.sanstopu');
            Route::post('/kolon-ekle','Anasite\SansTopuController@store')->name('lotohanem.sanstopu.kolon-ekle');
            Route::get('/listele','Anasite\SansTopuController@create')->name('lotohanem.sanstopu.listele');
            Route::get('/kupon-getir/{key}','Anasite\SansTopuController@kupon_getir')->name('lotohanem.sanstopu.kupon-getir');
            Route::delete('/kolonsil/{id}','Anasite\SansTopuController@destroy')->name('lotohanem.sanstopu.kolonsil');
            Route::post('/kuponlastir/{id}','Anasite\SansTopuController@kuponlastir')->name('lotohanem.sanstopu.kuponlastir');
            Route::get('/sonkuponno','Anasite\SansTopuController@son_kupon_no')->name('lotohanem.sanstopu.sonkuponno');
        });

        Route::group(['prefix'=>'onnumara'],function(){
            Route::match(['get','post'],'/','Anasite\OnNumaraController@index')->name('lotohanem.onnumara');
            Route::post('/kolon-ekle','Anasite\OnNumaraController@store')->name('lotohanem.onnumara.kolon-ekle');
            Route::get('/listele','Anasite\OnNumaraController@create')->name('lotohanem.onnumara.listele');
            Route::get('/kupon-getir/{key}','Anasite\OnNumaraController@kupon_getir')->name('lotohanem.onnumara.kupon-getir');
            Route::delete('/kolonsil/{id}','Anasite\OnNumaraController@destroy')->name('lotohanem.onnumara.kolonsil');
            Route::post('/kuponlastir/{id}','Anasite\OnNumaraController@kuponlastir')->name('lotohanem.onnumara.kuponlastir');
            Route::get('/sonkuponno','Anasite\OnNumaraController@son_kupon_no')->name('lotohanem.onnumara.sonkuponno');
        });
    });
});



#Kullanıcı TANITIM Sitesi#
Route::get('/','Tanitim\TanitimController@index')->name('anasayfa');


Route::group(['prefix' => 'kullanici'], function () {
    Route::get('/','Tanitim\TanitimController@giris_yap')->name('kullanici');
    Route::get('/oturumac','Tanitim\TanitimController@giris_form')->name('kullanici.oturumac');
    Route::post('/giris','Tanitim\TanitimController@giris_yap')->name('kullanici.giris');
    Route::post('/cikis','Tanitim\TanitimController@oturumukapat')->name('kullanici.oturumukapat');
    Route::get('/kayit','Tanitim\TanitimController@create')->name('kullanici.kayit');
    Route::post('/kayitol','Tanitim\TanitimController@store')->name('kullanici.kayitol');
});



#Admin DASHBOARD#
//Route::group(['prefix'=>'yonetim'], function () {
//    Route::get('/','Yonetim\YonetimController@index')->name('yonetim');
//});
