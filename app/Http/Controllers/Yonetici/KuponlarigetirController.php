<?php

namespace App\Http\Controllers\Yonetici;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KuponlarigetirController extends Controller
{
    public function __construct()
    {
        $this->middleware('yonetici.auth:yonetici');
    }

    public function ayarlar() {
        return view('yonetici.home');
    }

    public function superloto() {
        $kuponss = DB::table('lotosepeti')
            ->where([
                ['lotosepeti.sans_turu_id','=', 1 ],
                ['lotosepeti.kupon_uret','=', 1 ],
            ])
            ->join('sonuc','sonuc.id','=','lotosepeti.hafta_id')
            ->distinct('lotosepeti.kupon_no')
            ->select('lotosepeti.hafta_id','sonuc.hafta_slug','lotosepeti.kupon_no','lotosepeti.kupon_resmi')
            ->get();
//        return $kuponss;
        return response()->json($kuponss);
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


    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
