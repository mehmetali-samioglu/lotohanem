<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SansKolonuEkleSeeder extends Seeder
{

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('lotosepeti')->truncate();



        $date = Carbon::now()->format('dmY');



        //süper loto üret
        for ($i=0;$i<15; $i++) {

            DB::table('lotosepeti')->insert([
                'kullanici_id' => 1,
                'sans_turu_id' => 1,
                'hafta_id' => 1,
                'kupon_aktif_mi' => 0,
                'kupon_uret' => ($i/8)<1 ? 1 : 0,
                'kupon_no'=>'super-'.floor($i/8).'-'.$date,
                'kolon1' => rand(1, 54),
                'kolon2' => rand(1, 54),
                'kolon3' => rand(1, 54),
                'kolon4' => rand(1, 54),
                'kolon5' => rand(1, 54),
                'kolon6' => rand(1, 54),
            ]);
        }

        //sayısal loto üret
        for ($i=0;$i<15; $i++){
            DB::table('lotosepeti')->insert([
                'kullanici_id'=> 1,
                'sans_turu_id'=>2,
                'hafta_id'=> 1,
                'kupon_no'=> 'sayisal-'.floor($i/8).'-'.$date,
                'kupon_aktif_mi' => 0,
                'kupon_uret' =>  ($i/8)<1 ? 1 : 0,
                'kolon1' => rand(1,49),
                'kolon2' => rand(1,49),
                'kolon3' => rand(1,49),
                'kolon4' => rand(1,49),
                'kolon5' => rand(1,49),
                'kolon6' => rand(1,49),
            ]);
        }
//
//        //onnumara üret
//        $dd=0;
//        for ($i=0;$i<14; $i++) {
//            DB::table('lotosepeti')->insert([
//                'kullanici_id' => 1,
//                'sans_turu_id' => 3,
//                'hafta_id' => 1,
//                'kupon_aktif_mi' => 0,
//                'kupon_uret' => ($i/5) < 2 ? 1 : 0,
//                'kupon_no' => 'onnumara-'.floor($i/5).'-'.$date,
//                'kolon1' => rand(1, 80),
//                'kolon2' => rand(1, 80),
//                'kolon3' => rand(1, 80),
//                'kolon4' => rand(1, 80),
//                'kolon5' => rand(1, 80),
//                'kolon6' => rand(1, 80),
//                'kolon7' => rand(1, 80),
//                'kolon8' => rand(1, 80),
//                'kolon9' => rand(1, 80),
//                'kolon10' => rand(1, 80),
//            ]);
//        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
