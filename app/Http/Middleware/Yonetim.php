<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Yonetim
{

    public function handle($request, Closure $next)
    {
        if(Auth::guard('yonetim')->check() && Auth::guard('yonetim')->user()->yonetici_mi )
        {
            return $next($request);  //isteği çalıştır
        }
        return redirect()->route('kullanici.oturumac');
    }
}
