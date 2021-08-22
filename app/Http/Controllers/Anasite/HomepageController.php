<?php

namespace App\Http\Controllers\Anasite;

use App\Http\Requests\SuperLotoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class HomepageController extends Controller
{

    public function index()
    {
        return view('Anasite/anasayfa');
    }

    public function superlotokupons()
    {
        return view('Anasite/anasayfa');
    }

    public function sayisallotokupons()
    {
        return view('Anasite/anasayfa');
    }

    public function onnumarakupons()
    {
        return view('Anasite/anasayfa');
    }

    public function sanstopukupons()
    {
        return view('Anasite/anasayfa');
    }


}
