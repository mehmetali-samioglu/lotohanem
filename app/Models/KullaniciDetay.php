<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KullaniciDetay extends Model
{
    protected $table = 'kullanicidetay';
    public $timestamps=false;

    //tüm kolonların eklenmesi sağlanıyor
    protected $guarded=[];

    public function kullanici()
    {
        return $this->belongsTo('App\Models\Kullanici');
    }

}
