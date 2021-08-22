<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SansTuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('sans_turu')->truncate();
        DB::table('sans_turu')->insert(['sansturu_adi'=>'Super Loto','kolon_tl'=>2,'kolon_lotopuan'=>2,'kolon_sayisi'=>6,'aktif_mi'=>1]);
        DB::table('sans_turu')->insert(['sansturu_adi'=>'Sayısal Loto','kolon_tl'=>2,'kolon_lotopuan'=>2,'kolon_sayisi'=>6,'aktif_mi'=>1]);
        DB::table('sans_turu')->insert(['sansturu_adi'=>'On Numara','kolon_tl'=>2,'kolon_lotopuan'=>2,'kolon_sayisi'=>10,'aktif_mi'=>1]);
        DB::table('sans_turu')->insert(['sansturu_adi'=>'Şans Topu','kolon_tl'=>2,'kolon_lotopuan'=>2,'kolon_sayisi'=>6,'aktif_mi'=>1]);

        DB::table('sonuc')->truncate();

        //sayısal loto
        DB::table('sonuc')->insert([
            'hafta_slug' => '1237. Hafta',
            'sans_turu_id' => 2,
            'hafta_adi' => '1237. Hafta',
            'hafta_no' => 1237,
            'baslangic_tarih' => '2019-07-18',
            'bitis_tarih' => '2019-07-20',
            'aktif_mi' => 1,
            'kapandi_mi' => 1,
            'kolon1' => 6,
            'kolon2' => 13,
            'kolon3' => 21,
            'kolon4' => 24,
            'kolon5' => 36,
            'kolon6' => 48,
            'kolon7' => null,
            'kolon8' => null,
            'kolon9' => null,
            'kolon10' => null,
        ]);

        DB::table('sonuc')->insert([
            'hafta_slug' => '1238. Hafta',
            'sans_turu_id' => 2,
            'hafta_adi' => '1238. Hafta',
            'hafta_no' => 1238,
            'baslangic_tarih' => '2019-07-21',
            'bitis_tarih' => '2019-07-24',
            'aktif_mi' => 1,
            'kapandi_mi' => 1,
            'kolon1' => 8,
            'kolon2' => 12,
            'kolon3' => 20,
            'kolon4' => 21,
            'kolon5' => 37,
            'kolon6' => 46,
            'kolon7' => null,
            'kolon8' => null,
            'kolon9' => null,
            'kolon10' => null,
        ]);

        DB::table('sonuc')->insert([
            'hafta_slug' => '1239. Hafta',
            'sans_turu_id' => 2,
            'hafta_adi' => '1239. Hafta',
            'hafta_no' => 1239,
            'baslangic_tarih' => '2019-07-24',
            'bitis_tarih' => '2019-07-27',
            'aktif_mi' => 1,
            'kapandi_mi' => 0,
            'kolon1' => null,
            'kolon2' => null,
            'kolon3' => null,
            'kolon4' => null,
            'kolon5' => null,
            'kolon6' => null,
            'kolon7' => null,
            'kolon8' => null,
            'kolon9' => null,
            'kolon10' => null,
        ]);

//        //sonuç üret
//        for ($i=1;$i<5; $i++) {
//            DB::table('sonuc')->insert([
//                'hafta_slug' => '12'.$i.' hafta',
//                'sans_turu_id' => $i,
//                'hafta_adi' => '12'.$i.' hafta İçeriği',
//                'aktif_mi' => 1,
//                'kolon1' => rand(1,33),
//                'kolon2' => rand(1,33),
//                'kolon3' => rand(1,33),
//                'kolon4' => rand(1,33),
//                'kolon5' => rand(1,33),
//                'kolon6' => rand(1,33),
//                'kolon7' => rand(1,33),
//                'kolon8' => rand(1,33),
//                'kolon9' => rand(1,33),
//                'kolon10' => rand(1,33),
//            ]);
//        }


        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
