@extends('Tanitim.layouts.master')
@section('title',config('app.name'))
@section('css')
    <style>
        .br_red{border:1px solid #ff4c25}
    </style>
@endsection
@section('content')
    <div class="content">
        <div class="container">
            <div class="vd_content-wrapper">
                <div class="vd_container">
                    <div class="vd_content clearfix">
                        <div class="vd_content-section clearfix">
                            <div class="vd_login-page">
                                <div class="heading clearfix text-center">
                                    <div class="logo">
                                        <a href="/">
                                            <h2 class="mgbt-xs-5"><img src="/img/logo.png" alt="logo"></h2>
                                        </a>
                                    </div>
                                    <h4 class="text-center font-semibold vd_grey">Lotohanem Giriş Ekranı</h4>
                                </div>
                                <div class="panel widget">
                                    <div class="panel-body col-md-6 col-md-offset-3">
                                        <form class="form-horizontal" method="POST" action="{{route('kullanici.giris')}}"  id="login-form"  role="form">
                                            @if (count($errors)>0)
                                                <div class="alert alert-danger ">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                                                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Hata !</strong> {{$errors->first('hata')}}
                                                </div>
                                            @endif
                                             {{csrf_field()}}
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="label-wrapper">
                                                        <label class="control-label">Email <span class="vd_red">*</span></label>
                                                    </div>
                                                    <div class="vd_input-wrapper {{$errors->has('email') ? 'br_red' : ''}} " id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                                                        <input type="email" value="{{old('email')}}" placeholder="E-Posta" class="required"   name="email" id="email">
                                                    </div>
                                                    @if($errors->has('email'))
                                                        <span class="help-block vd_red">{{$errors->first('email')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="label-wrapper">
                                                        <label class="control-label">Şifre <span class="vd_red">*</span></label>
                                                    </div>
                                                    <div class="vd_input-wrapper {{$errors->has('sifre') ? 'br_red' : ''}} " id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                                                        <input type="password" placeholder="Şifre" class="required"   name="sifre" >
                                                    </div>
                                                    @if($errors->has('email'))
                                                        <span class="help-block vd_red">{{$errors->first('sifre')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12 text-center mgbt-xs-5">
                                                    <button class="btn vd_bg-green vd_white width-100" type="submit" id="login-submit">Giriş</button>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="vd_checkbox">
                                                                <input type="checkbox" id="checkbox-1" value="1" name="benihatirla">
                                                                <label for="checkbox-1"> Beni Hatırla ! </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 text-right">
                                                            <div class=""> <a href="pages-forget-password.html">Şifremi Unuttum ! </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Panel Widget -->
                                <div class="register-panel text-center font-semibold"> <a href="{{route('kullanici.kayit')}}">LOTOHANEME YENİ KAYIT OL <span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a> </div>
                            </div>
                            <!-- vd_login-page -->

                        </div>
                        <!-- .vd_content-section -->

                    </div>
                    <!-- .vd_content -->
                </div>
                <!-- .vd_container -->
            </div>
        </div>
    </div>

@endsection