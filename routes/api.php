<?php

use Illuminate\Http\Request;



Route::get('kolonlar','Anasite\SuperlotoController@create');
Route::get('kolon/ekle','Anasite\SuperlotoController@store')->name('kolon.ekle');

Route::post('login','Anasite\AuthController@login')->name('api.login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

