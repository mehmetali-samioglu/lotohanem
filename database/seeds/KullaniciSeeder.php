<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KullaniciSeeder extends Seeder
{

    public function run(Faker\Generator $faker)
    {

        $id = DB::table('kullanici')->insertGetId(
            [
                'adsoyad' => 'Mehmet Ali Şamioğlu',
                'email' => 'sami@sami.com',
                'sifre' => Hash::make('sami123'),
                'aktivasyon_anahtari' => '0Zk14L4DfcSDOinAx3CeUeLyb1aioyZGuPHWM4SH5RO0RPpXdQcTVcHSXsI6',
                'aktif_mi' => 1,
                'yonetici_mi' => 1,
                'user_tl' => 100,
                'user_lotopuan' => 3,
            ]
        );

        DB::table('kullanicidetay')->insert(
            [
                'kullanici_id' => $id,
                'hizmet_sarti' => 1,
                'adres' => $faker->address,
                'telefon' => $faker->tollFreePhoneNumber,
                'ceptelefonu' => $faker->tollFreePhoneNumber,
            ]
        );

        $id = DB::table('kullanici')->insertGetId(
            [
                'adsoyad' => 'Mehmet Ali Şamioğlu Deney',
                'email' => 'sami1@sami.com',
                'sifre' => Hash::make('sami123'),
                'aktivasyon_anahtari' => '0Zk14L4DfcSDOinAx3CeUeLyb1aioyZGuPHWM4SH5RO0RPpXdQcTVcHSXsI6',
                'aktif_mi' => 1,
                'yonetici_mi' => 1,
                'user_tl' => 12.5,
                'user_lotopuan' => 2,
            ]
        );

        DB::table('kullanicidetay')->insert(
            [
                'kullanici_id' => $id,
                'hizmet_sarti' => 1,
                'adres' => $faker->address,
                'telefon' => $faker->tollFreePhoneNumber,
                'ceptelefonu' => $faker->tollFreePhoneNumber,
            ]
        );



    }
}
