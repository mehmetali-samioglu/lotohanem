<?php

namespace App\Http\Controllers\Anasite;

use App\Http\Requests\ProfilRequest;
use App\Models\Kullanici;
use App\Models\KullaniciDetay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserInfoController extends Controller
{


    public function userInfo()
    {

        $user_id = auth()->user()->id;
        $kull =  Kullanici::where('id',$user_id)->get();
        $detay =  KullaniciDetay::where('kullanici_id',$user_id)->get();
        $userinfo['kull'] =  $kull;
        $userinfo['detay'] =  $detay;
        return $userinfo;
    }
    public function ayarlar()
    {
        return view('Anasite/anasayfa');
    }

    public function ayar_getir()
    {
        $u_id = auth()->user()->id;
        $ayarlar = KullaniciDetay::select('onay_tl','onay_lotopuan')->where([
            ['kullanici_id',$u_id]
        ])->get();
        return response()->json($ayarlar);
    }

    public function ayar_kaydet(Request $request)
    {
        $u_id = auth()->user()->id;
        $ayarlar = KullaniciDetay::select('onay_tl','onay_lotopuan','id')->where([
            ['kullanici_id',$u_id]
        ])->get();

        $data['kullanici'] = KullaniciDetay::find($ayarlar[0]['id']);

        if($request->odeme=="Türk Lirası") {
           $data['kullanici']['onay_tl'] = 1;
           $data['kullanici']['onay_lotopuan'] = 0;
           $data['kullanici']->save();
           return $data;
        }else{
            $data['kullanici']['onay_lotopuan'] = 1;
            $data['kullanici']['onay_tl'] = 0;
            $data['kullanici']->save();
            return $data;
        }

    }


    public function profil()
    {
        return view('Anasite/anasayfa');
    }

    public function profil_getir()
    {
        $u_id = auth()->user()->id;
        $data['kullanici'] = Kullanici::select('adsoyad','email','tckimlik')
            ->where([
            ['id',$u_id]
            ])
            ->get();

        $data['kul_detay'] = KullaniciDetay::select('adres','telefon','ceptelefonu','cinsiyet','il','ilce','dogum_tarihi','banka_1','banka_2','banka_3','banka_4','banka_5')
            ->where([
            ['kullanici_id',$u_id]
            ])
            ->get();

        return response()->json($data);
    }

    public function profil_kaydet(ProfilRequest $request)
    {
        $u_id = auth()->user()->id;
        $data['kullanici'] = Kullanici::find($u_id);
        $data['kullanicidetay'] = KullaniciDetay::where('kullanici_id',$u_id)->first();

        //ÇALIŞIYOR
//        $userd = Kullanici::with('detay')->where('kullanici.id',$u_id)->first();
//        dd($userd->detay[0]['il']);

        $data['kullanici']['adsoyad'] = $request->kull['name'];
        $data['kullanici']['tckimlik'] = $request->kull['tckimlik'];
        if($request->kull['sifre']){
            $data['kullanici']['sifre']=Hash::make($request->kull['sifre']);
        }

        $data['kullanicidetay']['adres'] = $request->kull['adres'];
        $data['kullanicidetay']['telefon'] = $request->kull['telefon'];
        $data['kullanicidetay']['ceptelefonu'] = $request->kull['ceptelefonu'];
        $data['kullanicidetay']['cinsiyet'] = $request->kull['cinsiyet'];
        $data['kullanicidetay']['il'] = $request->kull['il'];
        $data['kullanicidetay']['ilce'] = $request->kull['ilce'];
        $data['kullanicidetay']['dogum_tarihi'] = $request->kull['dtarihi'];
        $data['kullanicidetay']['banka_1'] = $request->kull['banka1'];
        $data['kullanicidetay']['banka_2'] = $request->kull['banka2'];
        $data['kullanicidetay']['banka_3'] = $request->kull['banka3'];
        $data['kullanicidetay']['banka_4'] = $request->kull['banka4'];
        $data['kullanicidetay']['banka_5'] = $request->kull['banka5'];

        if($data['kullanicidetay']->save() && $data['kullanici']->save() ){
            return 'success';
        }else{
            return 'error';
        }
//        if(){
//            Session::flash('flash_message', 'Task successfully added!');
//        }else{
//            Session::flash('flash_message', 'Task failed!');
//        }

    }



}
