<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSonuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sonuc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sans_turu_id')->unsigned();
            $table->string('hafta_slug',100);
            $table->string('hafta_adi',100);
            $table->integer('hafta_no');
            $table->boolean('aktif_mi')->default(1);
            $table->boolean('kapandi_mi')->default(0);
            $table->integer('kolon1')->nullable();
            $table->integer('kolon2')->nullable();
            $table->integer('kolon3')->nullable();
            $table->integer('kolon4')->nullable();
            $table->integer('kolon5')->nullable();
            $table->integer('kolon6')->nullable();
            $table->integer('kolon7')->nullable();
            $table->integer('kolon8')->nullable();
            $table->integer('kolon9')->nullable();
            $table->integer('kolon10')->nullable();
            $table->timestamp('baslangic_tarih')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('bitis_tarih')->default(DB::raw('CURRENT_TIMESTAMP'));


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
        Schema::dropIfExists('sonuc');
    }
}
