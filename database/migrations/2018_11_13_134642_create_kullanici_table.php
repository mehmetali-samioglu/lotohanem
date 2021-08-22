<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKullaniciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kullanici', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adsoyad',100);
            $table->string('email',150)->unique();
            $table->string('tckimlik',50)->unique()->nullable();
            $table->string('sifre',100);
            $table->string('aktivasyon_anahtari',100)->nullable();
            $table->boolean('aktif_mi')->default(0);
            $table->boolean('yonetici_mi')->default(0);
            $table->float('user_tl')->default(10);
            $table->float('user_lotopuan')->default(10);
            $table->rememberToken();

            $table->timestamp('olusturulma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('guncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('silinme_tarihi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kullanici');
    }
}