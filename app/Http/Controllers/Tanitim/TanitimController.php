<?php

namespace App\Http\Controllers\Tanitim;

use App\Http\Requests\KullaniciRequest;
use App\Models\Kullanici;
use App\Models\KullaniciDetay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class TanitimController extends Controller
{
    public function __construct()
    {
        //kullanıcı girişi yapmayanlar erişsin.
        //anasayfa ve çıkış işlemi kullanıcı girişi yapılsa da erişilecek
        $this->middleware('guest')->except('oturumukapat','index');
    }

    public function index()
    {
        return view('Tanitim/tanitim_home');
    }

    public function giris_form()
    {
        return view('Tanitim/tanitim_login');
    }

    public function giris_yap()
    {

        if($_POST){

            $this->validate(request(),[
               'email' => 'required|email',
               'sifre' => 'required',
            ]);

            if(auth()->attempt(['email'=>request('email'), 'password' => request('sifre')],request()->has('benihatirla')))
            {
                request()->session()->regenerate();
                return redirect()->intended('/lotohanem');  //kullanıcı girişi yoksa giriş sayfasına gönderir. Giriş versa ilgili sayfaya gönderir.
            }else{
                $errors = ['hata'=>'Giriş Bilgileri Hatalı. Tekrar Deneyiniz.'];
                return back()->withErrors($errors);
            }
        }else{
            return Redirect::back()->withErrors(['errors', 'The Message']);
        }
    }

    public function oturumukapat()
    { 
        auth()->logout(); //çıkış yap
        request()->session()->flush();  //session sildik
        request()->session()->regenerate(); //boş bir session ürettik
        return redirect('/');
    }

    public function create()
    {
        return view('Tanitim\tanitim_register');
    }

    public function store(KullaniciRequest $request)
    {

        $kullanici = Kullanici::create([
            'adsoyad' => request('adsoyad'),
            'email' => request('email'),
            'sifre' => Hash::make(request('sifre')),
            'aktif_mi' => 0,
            'aktivasyon_anahtari' => Str::random(60),
        ]);

        $kul_detay = KullaniciDetay::create([
            'kullanici_id' => $kullanici->id,
            'ceptelefonu' => request('ceptelefonu'),
            'hizmet_sarti' => request('hizmet_sarti'),
        ]);

        auth()->login($kullanici);

        return redirect('lotohanem');
    }




    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }


}
