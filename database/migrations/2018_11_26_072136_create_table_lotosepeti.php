<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLotosepeti extends Migration
{

    public function up()
    {
        Schema::create('lotosepeti', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('kullanici_id')->unsigned();
            $table->integer('sans_turu_id')->unsigned();
            $table->integer('hafta_id')->unsigned()->nullable();
            $table->boolean('kupon_aktif_mi')->default(0);
            $table->boolean('kupon_uret')->default(0);
            $table->string('kupon_no');
            $table->string('kupon_resmi')->default('01.jpg');
            $table->integer('kolon1');
            $table->integer('kolon2');
            $table->integer('kolon3');
            $table->integer('kolon4');
            $table->integer('kolon5');
            $table->integer('kolon6');
            $table->integer('kolon7')->nullable();
            $table->integer('kolon8')->nullable();
            $table->integer('kolon9')->nullable();
            $table->integer('kolon10')->nullable();

            $table->foreign('kullanici_id')->references('id')->on('kullanici')->onDelete('cascade');
            $table->foreign('sans_turu_id')->references('id')->on('sans_turu')->onDelete('cascade');
//            $table->foreign('hafta_id')->references('id')->on('sonuc')->onDelete('cascade');

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
        Schema::dropIfExists('lotosepeti');
    }
}
