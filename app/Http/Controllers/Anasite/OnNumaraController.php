<?php

namespace App\Http\Controllers\Anasite;

use App\Http\Requests\OnNumaraRequest;
use App\Models\Kullanici;
use App\Models\KullaniciDetay;
use App\Models\LotoSepetim;
use App\Models\SansTuru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OnNumaraController extends Controller
{

    public function index()
    {
        return view('Anasite/anasayfa');
    }

    public function onnumara_kuponlari_getir()
    {
        $u_id = auth()->user()->id;

        $kuponss = DB::table('lotosepeti')
            ->where([
                ['lotosepeti.sans_turu_id','=', 3 ],
                ['lotosepeti.kullanici_id','=', $u_id ],
                ['lotosepeti.silinme_tarihi','=', null ],
                ['lotosepeti.kupon_uret','=', 1 ],
            ])
            ->join('sonuc','sonuc.id','=','lotosepeti.hafta_id')
            ->distinct('lotosepeti.kupon_no')
            ->select('lotosepeti.hafta_id','sonuc.hafta_slug','lotosepeti.kupon_no','lotosepeti.kupon_resmi')
            ->get();
        return $kuponss;
    }


    public function create()
    {
        $u_id = auth()->user()->id;
        $listele = LotoSepetim::where([
                ['sans_turu_id',3],
                ['kullanici_id',$u_id],
                ['kupon_uret','=',0],
            ])
            ->orderBy('id')->get();
        return response()->json($listele);
    }

    public function kupon_getir($key)
    {
        $u_id = auth()->user()->id;
        $listele = LotoSepetim::whereRaw('sans_turu_id= ? and kupon_no= ? and kullanici_id=?',array(3,$key,$u_id))
            ->orderBy('id')
            ->get();
        return response()->json($listele);
    }

    public function kuponlastir(Request $kupon){

        LotoSepetim::where([
            ['kullanici_id',  auth()->user()->id],
            ['sans_turu_id' , 3],
            ['kupon_no' , $kupon->id]
        ])
            ->update([
                'kupon_uret' => 1
            ]);
        $data['ok']=true;
        return  $data;
    }

    public function son_kupon_no(){
        $sonkuponno = LotoSepetim::where([
            ['kullanici_id',  auth()->user()->id],
            ['sans_turu_id' , 3],
        ])
            ->orderBy('id','desc')
            ->limit(1)
            ->select('kupon_no')
            ->get();
        if(empty($sonkuponno)){
            $simdiki_kuponno = LotoSepetim::where([
                ['kullanici_id',  auth()->user()->id],
                ['sans_turu_id' , 3],
            ])  ->limit(1)
                ->select('kupon_no')
                ->get();
            return response()->json($simdiki_kuponno[0]['kupon_no']);
        }else{
            return response()->json($sonkuponno[0]['kupon_no']);
        }
    }



    public function store(OnNumaraRequest $request)
    {
        $user_id = auth()->user()->id;
        $user = Kullanici::select('user_tl','user_lotopuan')->where('id',$user_id)->get();
        $loto_turu =SansTuru::select('kolon_tl','kolon_lotopuan')->where('id',3)->get();
        $odeme_turu =KullaniciDetay::select('onay_tl','onay_lotopuan')->where('kullanici_id',$user_id)->get();

        $saydir = LotoSepetim::where([ ['sans_turu_id','=',3],['kullanici_id','=',$user_id] ]) ->get();

        if( ($odeme_turu[0]['onay_tl']==1 && $user[0]['user_tl'] > 0) || ( $odeme_turu[0]['onay_lotopuan']==1 && $user[0]['user_lotopuan'] > 0 )   ) {

            $data['kullanici'] = Kullanici::find($user_id);
            if($odeme_turu[0]['onay_tl']==1  && $odeme_turu[0]['onay_lotopuan']==0 ) {
                $data['kullanici']['user_tl'] = $user[0]['user_tl'] - $loto_turu[0]['kolon_tl'];
            }else{
                $data['kullanici']['user_lotopuan'] = $user[0]['user_lotopuan'] - $loto_turu[0]['kolon_lotopuan'];
            }
            $data['kullanici']->save();

            $liste = LotoSepetim::where([
                ['kullanici_id', $user_id],
                ['sans_turu_id',3]
            ])->count();

            $date = Carbon::now()->format('dmY');

            $sirala = array($request->kolon1, $request->kolon2, $request->kolon3, $request->kolon4, $request->kolon5, $request->kolon6, $request->kolon7, $request->kolon8, $request->kolon9, $request->kolon10);
            sort($sirala);
            for ($x = 0; $x < 10; $x++) {
                echo $sirala[$x];
            }

            if(count($saydir)%5 == 0){
                $yeni_kupon_no = 'On-'.Str::random(8);
            }else{
                $bos_kupon_sayisi = LotoSepetim::select(DB::raw('count(*) as saydir, kupon_no'))
                    ->where([ ['sans_turu_id','=',3],['kullanici_id','=',$user_id],['kupon_uret','=',0] ])
                    ->groupBy('kupon_no')
                    ->get();
                $yeni_kupon_no = $bos_kupon_sayisi[0]['kupon_no'];
            }

            $data['sonuca_kolon_ekle'] = LotoSepetim::create([
                'kullanici_id' => auth()->user()->id,
                'sans_turu_id' => 3,
                'hafta_id' => 1,
                'kupon_aktif_mi' => 1,
                'kupon_uret' => 0,
                'kupon_no' => $yeni_kupon_no,
                'kolon1' => $sirala[0],
                'kolon2' => $sirala[1],
                'kolon3' => $sirala[2],
                'kolon4' => $sirala[3],
                'kolon5' => $sirala[4],
                'kolon6' => $sirala[5],
                'kolon7' => $sirala[6],
                'kolon8' => $sirala[7],
                'kolon9' => $sirala[8],
                'kolon10' => $sirala[9],
            ]);
        }else{
            $data['bitti']=true;
        }
        return $data;
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

    public function destroy(Request $kolon)
    {
        $user_id = auth()->user()->id;
        $user = Kullanici::select('user_tl','user_lotopuan')->where('id',$user_id)->get();
        $loto_turu =SansTuru::select('kolon_tl','kolon_lotopuan')->where('id',3)->get();
        $odeme_turu =KullaniciDetay::select('onay_tl','onay_lotopuan')->where('kullanici_id',$user_id)->get();

        $onay = LotoSepetim::where(
            [
                ['kullanici_id',$user_id],
                ['id',$kolon->id],
                ['sans_turu_id',3]
            ])->get();


        if(count($onay)>0){
            $data['kullanici'] = Kullanici::find($user_id);
            if($odeme_turu[0]['onay_tl']==1  && $odeme_turu[0]['onay_lotopuan']==0 ) {
                $data['kullanici']['user_tl'] = $user[0]['user_tl'] + $loto_turu[0]['kolon_tl'];
            }else{
                $data['kullanici']['user_lotopuan'] = $user[0]['user_lotopuan'] + $loto_turu[0]['kolon_lotopuan'];
            }
            $data['kullanici']->save();
            $data['ok']=true;

            LotoSepetim::where('id',$kolon->id)->delete();
            return $data;
        }else{
            return false;
        }
    }
}
