<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SansTuru extends Model
{
    use SoftDeletes;
    protected $table='sans_turu';
    protected $guarded = [];

    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';
    const CREATED_AT = 'olusturulma_tarihi';

    protected $hidden= ['olusturulma_tarihi','silinme_tarihi','guncelleme_tarihi'];

}
