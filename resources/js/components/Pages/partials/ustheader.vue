<template>
<div>
    <!-- Header Start -->
    <header class="header-1" id="header">
        <div class="vd_top-menu-wrapper">
            <div class="container "   >
                <div class="vd_top-nav vd_nav-width  ">
                    <div class="vd_panel-header">
                        <div class="logo">
                            <router-link to="/lotohanem"><img alt="logo" src="/img/logo.png"></router-link>
                        </div>
                        <!-- logo -->
                        <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation."
                             data-step=1>
                        <span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom"
                              data-original-title="Medium Nav Toggle" data-action="nav-left-medium">
                            <i class="fa fa-bars"></i>
                        </span>
                            <span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Small Nav Toggle" data-action="nav-left-small">
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        </div>
                        <div class="vd_panel-menu left-pos visible-sm visible-xs">
                        <span class="menu" data-action="toggle-navbar-left">
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        </div>
                        <div class="vd_panel-menu visible-sm visible-xs">
                        <span class="menu visible-xs" data-action="submenu">
                            <i class="fa fa-bars"></i>
                        </span>
                        </div>
                        <!-- vd_panel-menu -->
                    </div>
                    <!-- vd_panel-header -->
                </div>
                <div class="vd_container">
                    <div class="row">
                        <div class="col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="vd_status-widget widget text-center" style="background: #242729;">
                                        <div class="panel-heading vd_bg-blue vd_white" style="padding:2px">
                                            <h5 class="panel-title"> Sepetteki Kolon Sayısı </h5>
                                        </div>
                                        <a class="panel-body" href="#" style="padding: 2px;">
                                            <div class="clearfix">
                                                <h2 style="margin: 2px;" class="font-semi-bold"><strong>{{kolon_sayisi}}</strong></h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="vd_status-widget widget text-center" style="background: #242729;">
                                        <div class="panel-heading vd_bg-blue vd_white" style="padding:2px">
                                            <h5 class="panel-title">TL Hesabı </h5>
                                        </div>
                                        <a class="panel-body" href="#" style="padding: 2px;">
                                            <div class="clearfix">
                                                <h2 style="margin: 2px;" class="font-semi-bold"><strong>{{user_tl}}</strong></h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="vd_status-widget widget text-center" style="background: #242729;">
                                        <div class="panel-heading vd_bg-blue vd_white" style="padding:2px">
                                            <h5 class="panel-title"> Loto Kolon Miktarı </h5>
                                        </div>
                                        <a class="panel-body" href="#" style="padding: 2px;">
                                            <div class="clearfix">
                                                <h2 style="margin: 2px;" class="font-semi-bold"><strong>{{user_lotopuan}}</strong></h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="vd_status-widget widget text-center" style="background: #242729;">
                                        <div class="panel-heading vd_bg-blue vd_white" style="padding:2px">
                                            <h5 class="panel-title"> Oynama Şekli </h5>
                                        </div>
                                        <a class="panel-body" href="#" style="padding: 2px;">
                                            <div class="clearfix">
                                                <h2 style="margin: 2px;" class="font-semi-bold"><strong v-if="harcama_tlmi==1">Türk Lirası</strong></h2>
                                                <h2 style="margin: 2px;" class="font-semi-bold"><strong v-if="harcama_tlmi!=1">Loto Puan</strong></h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="vd_mega-menu-wrapper">
                                <div class="vd_mega-menu pull-right">
                                    <ul class="mega-ul">
                                        <li id="top-menu-1" class="one-icon mega-li">
                                            <a href="index-2.html" class="mega-link" data-action="click-trigger">
                                                <span class="mega-icon"><i class="fa fa-users"></i></span>
                                                <span class="badge vd_bg-red">1</span>
                                            </a>
                                            <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 right-xs left-sm" data-action="click-target">
                                                <div class="child-menu">
                                                    <div class="title">Friend Requests
                                                        <div class="vd_panel-menu">
                                                        <span data-original-title="Find User" data-toggle="tooltip" data-placement="bottom" class="menu">
                                                            <i class="fa fa-search"></i>
                                                        </span>
                                                            <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                                                            <i class="fa fa-cog"></i>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="content-grid column-xs-2 column-sm-3 height-xs-4">
                                                        <div data-rel="scroll">
                                                            <ul class="list-wrapper">
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="menu-icon"><img alt="example image" src="/img/avatar/avatar.jpg"></div>
                                                                    </a>
                                                                    <div class="menu-text"> Gabriella Montagna
                                                                        <div class="menu-info">
                                                                            <div class="menu-date">San Diego</div>
                                                                            <div class="menu-action">
                                                                            <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="fa fa-check"></i>
                                                                            </span>
                                                                                <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="fa fa-times"></i>
                                                                            </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="closing text-center" style="">
                                                            <a href="#">See All Requests <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div> <!-- child-menu -->
                                            </div> <!-- vd_mega-menu-content -->
                                        </li>

                                        <li id="top-menu-profile" class="profile mega-li">
                                            <a href="#" class="mega-link" data-action="click-trigger">
                                            <span class="mega-image">
                                                <img src="/img/avatar/avatar.jpg" alt="example image" />
                                            </span>
                                                <span class="mega-name">
                                                {{kullanici}}  <i class="fa fa-caret-down fa-fw"></i>
                                            </span>
                                            </a>
                                            <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm"  data-action="click-target">
                                                <div class="child-menu">
                                                    <div class="content-list content-menu">
                                                        <ul class="list-wrapper pd-lr-10">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="menu-icon"><i class=" fa fa-envelope"></i></div>
                                                                    <div class="menu-text">Mesajlar</div>
                                                                    <div class="menu-badge">
                                                                        <div class="badge vd_bg-red">10</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <router-link to="/lotohanem/profil">
                                                                    <span class="menu-icon"><i class="fa fa-user"></i></span>
                                                                    <span class="menu-text">Profil</span>
                                                                </router-link>
                                                            </li>
                                                            <li>
                                                                <router-link to="/lotohanem/ayarlar">
                                                                    <span class="menu-icon"><i class="fa fa-gear "></i></span>
                                                                    <span class="menu-text">Ayarlar</span>
                                                                </router-link>
                                                            </li>
                                                            <li class="line"></li>
                                                            <li>
                                                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                                                    <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>
                                                                    <div @click="cikis" class="menu-text">Çıkış</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- Head menu search form ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- vd_primary-menu-wrapper -->
    </header>
    <!-- Header Ends -->
</div>
    
</template>

<script>
    import { eventBus } from '../../../app'
    export default {
        props:['kullanici'],
        data() {
            return {
                user_tl: '',
                user_lotopuan: '',
                kolon_sayisi: '',
                harcama_tlmi: ''
            }
        },
        created(){
            this.calistir()
        },
        methods:{
            calistir(){
                eventBus.$on('user_tl', (user_tl)=>{
                    this.user_tl = user_tl
                })
                eventBus.$on('kolon_sayisi', (kolon_sayisi)=>{
                    this.kolon_sayisi = kolon_sayisi
                })
                eventBus.$on('user_lotopuan', (user_lotopuan)=>{
                    this.user_lotopuan = user_lotopuan
                })
                eventBus.$on('harcama_tlmi', (tlmi)=>{
                    this.harcama_tlmi = tlmi
                })

            },
            cikis(){
                axios.post('/kullanici/oturumukapat').then(response => {
                    location.reload();
                }).catch(error => {
                });
            },
        }
    }
</script>

<style scoped>
    .container{
        padding: 0px;
    } 
</style>