<?php

Route::group(['namespace' => 'Yonetici'], function() {
    Route::get('/', 'HomeController@index')->name('yonetici.home');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('yonetici.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('yonetici.logout');

    // Register
//    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('yonetici.register');
//    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
//    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('yonetici.password.email');
//    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('yonetici.password.request');
//    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('yonetici.password.reset');

    // Must verify email
//    Route::get('email/resend','Auth\VerificationController@resend')->name('yonetici.verification.resend');
//    Route::get('email/verify','Auth\VerificationController@show')->name('yonetici.verification.notice');
//    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('yonetici.verification.verify');


    Route::get('/ayarlar','HomeController@ayarlar')->name('yonetici.ayarlar');
    Route::get('/superkuponlari','HomeController@superloto')->name('yonetici.superloto');
    Route::get('/sayisalkuponlari','HomeController@sayisalloto')->name('yonetici.sayisalloto');
    Route::get('/sanstopukuponlari','HomeController@sanstopu')->name('yonetici.sanstopu');
    Route::get('/onnumarakuponlari','HomeController@onnumara')->name('yonetici.onnumara');

    Route::get('/superkuponlari-getir','KuponlarigetirController@superloto')->name('yonetici.superloto');




});