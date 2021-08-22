<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKullaniciDetayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kullanicidetay', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kullanici_id')->unsigned();
            $table->text('adres')->nullable();
            $table->string('telefon',20)->nullable();
            $table->string('ceptelefonu',25)->nullable();
            $table->string('cinsiyet')->default(1);
            $table->string('il',50)->nullable();
            $table->string('ilce',50)->nullable();
            $table->date('dogum_tarihi')->nullable();
            $table->string('hizmet_sarti',25);
            $table->string('banka_1',150)->nullable();
            $table->string('banka_2',150)->nullable();
            $table->string('banka_3',150)->nullable();
            $table->string('banka_4',150)->nullable();
            $table->string('banka_5',150)->nullable();
            $table->boolean('onay_tl')->default(1);
            $table->boolean('onay_lotopuan')->default(0);


            $table->foreign('kullanici_id')->references('id')->on('kullanici')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kullanici_detay');
    }
}
