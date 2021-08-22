@extends('Tanitim.layouts.master')
@section('title',config('app.name'))

@section('css')
    <style>
        .br_red{border:1px solid #ff4c25
        }
    </style>
@endsection
@section('content')

        <div class="container">
            <div class="vd_content-wrapper" >
                <div class="vd_container">
                    <div class="vd_content clearfix">
                        <div class="vd_content-section clearfix">
                            <div class="vd_register-page">
                                <div class="heading clearfix text-center">
                                    <a href="/">
                                        <div class="logo">
                                            <h2 class="mgbt-xs-5"><img src="/img/logo.png" alt="logo"></h2>
                                        </div>
                                    </a>
                                    <h4 class="text-center font-semibold vd_grey">Lotohanem Kayıt Ekranı</h4>
                                </div>
                                <div class="panel widget">
                                    <div class="panel-body col-md-6 col-md-offset-3">
                                        <form class="form-horizontal" method="POST"  action="{{route('kullanici.kayitol')}}" role="form" id="register-form">
                                            {{csrf_field()}}
                                            @if(count($errors)>0)
                                            <div class="alert alert-danger ">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                                                <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Hata !</strong> Lütfen Bilgileri Tam Giriniz.
                                            </div>
                                            @endif
                                            <div class="form-group " >
                                                <div class="col-md-12">
                                                    <div class="label-wrapper">
                                                        <label class="control-label">Ad-Soyad <span class="vd_red">*</span></label>
                                                    </div>
                                                    <div class="vd_input-wrapper {{ $errors->has('adsoyad') ? "br_red": '' }} "     id="first-name-input-wrapper" > <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                                                        <input type="text" placeholder="Ad-Soyad" class="required" value="{{old('adsoyad')}}"  name="adsoyad" id="adsoyad">
                                                    </div>

                                                    @if($errors->has('adsoyad'))
                                                    <span class="help-block vd_red">{{$errors->first('adsoyad')}}</span>
                                                    @endif
                                                </div>
                                            </div>
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
                                            <div class="form-group ">
                                                <div class="col-md-12">
                                                    <div class="label-wrapper">
                                                        <label class="control-label">Cep Telefonu <span class="vd_red">*</span></label>
                                                    </div>
                                                    <div class="vd_input-wrapper {{$errors->has('ceptelefonu') ? 'br_red' : ''}}" id="phone-input-wrapper"><span class="menu-icon"> <i class="fa fa-phone"></i> </span>
                                                        <input type="text" value="{{old('ceptelefonu')}}" placeholder="Cep Telefonu" class="required"   name="ceptelefonu" id="phone">
                                                    </div>
                                                    @if($errors->has('ceptelefonu'))
                                                        <span class="help-block vd_red">{{$errors->first('ceptelefonu')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <div class="label-wrapper">
                                                        <label class="control-label">Şifre <span class="vd_red">*</span></label>
                                                    </div>
                                                    <div class="vd_input-wrapper {{$errors->has('sifre') ? 'br_red': ''}}" id="password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                                                        <input type="password" placeholder="Şifre" class="required"   name="sifre" id="password">
                                                    </div>
                                                    @if($errors->has('sifre'))
                                                        <span class="help-block vd_red">{{$errors->first('sifre')}}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="label-wrapper">
                                                        <label class="control-label">Şifre Tekrarı <span class="vd_red">*</span></label>
                                                    </div>
                                                    <div class="vd_input-wrapper {{$errors->has('sifre') ? 'br_red' : ''}}" id="confirm-password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                                                        <input type="password" placeholder="Şifre Tekrarı" class="required"   name="sifre_confirmation" id="confirmpass">
                                                    </div>
                                                    @if ($errors->has('sifre'))
                                                        <span class="help-block vd_red">{{$errors->first('sifre')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Please fill the necessary field </div>
                                            <div class="form-group">
                                                <div class="col-md-12 mgbt-xs-10 mgtp-20">
                                                    <div class="vd_checkbox {{$errors->has('hizmet_sarti') ? 'br_red' : ''}}">
                                                        <input type="checkbox" id="checkbox-2"  name="hizmet_sarti" {{old('hizmet_sarti') ? 'checked ' : ''}} >
                                                        <label for="checkbox-2"> Hizmet şartlarını <a href="#">kabul ediyorum.(sonra yapılacak)</a></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center mgbt-xs-5">
                                                    <button class="btn vd_bg-green vd_white width-100" type="submit" id="submit-register" name="submit-register">Kayıt Ol</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Panel Widget -->
                                <div class="register-panel text-center font-semibold"> Kayıt Olduysanız? <br/>
                                    <a href="{{route('kullanici.oturumac')}}">
                                        LOTOHANEME GİRİŞ YAP
                                        <span class="menu-icon">
                                            <i class="fa fa-angle-double-right fa-fw"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- vd_login-page -->

                        </div>
                        <!-- .vd_content-section -->

                    </div>
                    <!-- .vd_content -->
                </div>
                <!-- .vd_container -->
            </div>
            <!-- .vd_content-wrapper -->

        </div>
        <!-- .container -->

@endsection