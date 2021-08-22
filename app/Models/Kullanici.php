<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Kullanici extends Authenticatable
{
    use HasApiTokens,Notifiable;
    use SoftDeletes;

    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';
    const CREATED_AT = 'olusturulma_tarihi';

    protected $table= 'kullanici';


      //istenen alanların eklenmesine izin veriyoruz.
//    protected $fillable = [
//        'adsoyad', 'email', 'sifre','tckimlik'
//    ];

    //tüm kolonların eklenmesi sağlanıyor
    protected $guarded=[];

    protected $hidden = [ 'sifre', 'remember_token','guncelleme_tarihi',
        'silinme_tarihi',
        'olusturulma_tarihi',
        'aktivasyon_anahtari'
    ];


    public function detay()
    {
        return $this->hasMany('App\Models\KullaniciDetay');
    }

    //Kullanıcı giriş yaparken veritabanında "password"'a  değil "şifre" alanına bakacak.
    public function getAuthPassword()
    {
        return $this->sifre;
    }


}
