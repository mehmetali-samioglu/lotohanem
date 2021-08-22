<?php

namespace App\Http\Controllers\Yonetici;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    protected $redirectTo = '/yonetici/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('yonetici.auth:yonetici');
    }

    /**
     * Show the Yonetici dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('yonetici.home');
    }

    public function ayarlar() {
        return view('yonetici.home');
    }

    public function superloto() {
        return view('yonetici.home');
    }

    public function sayisalloto() {
        return view('yonetici.home');
    }

    public function sanstopu() {
        return view('yonetici.home');
    }

    public function onnumara() {
        return view('yonetici.home');
    }



}