<!-- Header Start -->
<header class="header-2" id="header">
    <div class="vd_top-menu-wrapper vd_bg-white light-top-menu">
        <div class="container">
            <div class="vd_top-nav vd_nav-width  ">
                <div class="vd_panel-header">
                    <div class="logo">
                        <a href="/"><img alt="logo" src="/img/logo.png"></a>
                    </div>
                    <!-- logo -->
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
                        <div class="vd_mega-menu-wrapper horizontal-menu">
                            <div class="vd_mega-menu">
                                <ul class="mega-ul nav">
                                    <li class="mega-li">
                                        <a href="#" class="mega-link" data-waypoint="home">
                                            <span class="menu-text"><i class="fa fa-home font-md hidden-xs"></i><span class="visible-xs">Home</span></span>
                                        </a>

                                    </li>
                                    <li class="mega-li">
                                        <a href="#" class="mega-link" data-waypoint="services">
                                            <span class="menu-text">Services</span>
                                        </a>

                                    </li>
                                    <li class="mega-li">
                                        <a href="#" class="mega-link" data-waypoint="features">
                                            <span class="menu-text">Features</span>
                                        </a>

                                    </li>
                                    <li class="mega-li">
                                        <a href="#" class="mega-link" data-waypoint="clients">
                                            <span class="menu-text">Clients</span>
                                        </a>

                                    </li>
                                    <li class="mega-li">
                                        <a href="#" class="mega-link" data-waypoint="contact">
                                            <span class="menu-text">Contact</span>
                                        </a>

                                    </li>
                                    <li class="hover-trigger mega-li">
                                        <a href="#" class="mega-link" data-action="click-trigger">
                                            <span class="menu-text">Go</span>  <i class="fa fa-caret-down prepend-icon"></i>
                                        </a>
                                        <div class="vd_mega-menu-content  width-xs-2  right-xs hover-target no-top" data-action="click-target">
                                            <div class="child-menu">
                                                <div class="content-list content-menu">
                                                    <ul class="list-wrapper">
                                                        <li> <a href="front-1.html"> Front 1 </a> </li>
                                                        <li> <a href="front-2.html"> Front 2</a> </li>
                                                        <li> <a href="front-blog.html"> Front Blog</a> </li>
                                                        <li> <a href="front-blog-content.html"> Front Blog Content</a> </li>
                                                        <li> <a href="index-2.html"> Admin Panel </a> </li>
                                                        <li> <a href="http://themeforest.net/item/vendroid-super-flexible-multipurpose-admin-theme/7717536?ref=Venmond"> Buy This Theme </a> </li>
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
                    <div class="col-sm-4 col-xs-12">
                        <div class="vd_mega-menu-wrapper">
                            <div class="vd_mega-menu pull-right">
                                <ul class="mega-ul">
                                    @guest
                                    <li id="top-menu-1" class="one-icon mega-li">
                                        <a href="{{route('kullanici.oturumac')}}" class="btn vd_btn vd_btn-bevel vd_bg-yellow font-semibold">Giriş</a>
                                    </li>
                                    <li id="top-menu-2" class="one-icon mega-li">
                                        <a href="{{route('kullanici.kayit')}}" class="btn vd_btn vd_btn-bevel vd_bg-yellow font-semibold">Kayıt Ol</a>
                                    </li>
                                    @endguest
                                    @auth
                                        <li id="top-menu-2" class="one-icon mega-li">
                                            <a href="{{route('lotohanem')}}" class="btn vd_btn vd_btn-bevel vd_bg-yellow font-semibold">Lotohanem</a>
                                        </li>
                                    @endauth
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