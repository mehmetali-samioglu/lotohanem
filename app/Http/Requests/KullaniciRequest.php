<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class KullaniciRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'adsoyad' => 'required|min:5|max:25',
            'email' => 'required|email|unique:kullanici',
            'sifre' => 'required|confirmed|min:5|max:15',
            'ceptelefonu' =>'required|min:10|max:11',
            'hizmet_sarti' =>'accepted',
        ];
    }


    public function attributes()
    {
        return [
            'adsoyad' => 'Ad-Soyad',
            'email' => 'Email',
            'sifre' => 'Şifre',
            'ceptelefonu' => 'Cep Telefonu'
        ];
    }
}
