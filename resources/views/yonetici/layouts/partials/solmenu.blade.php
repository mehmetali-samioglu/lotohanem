<div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left   vd_bg-black-60 ">

    <div class="navbar-tabs-menu clearfix">
        <span class="expand-menu" data-action="expand-navbar-tabs-menu">
          <span class="menu-icon menu-icon-left">
            <i class="fa fa-ellipsis-h"></i>
            <span class="badge vd_bg-red">
              20
            </span>
          </span>
        </span>
        <div class="menu-container" style="width:100%">
            <div class="vd_mega-menu-wrapper">
                <div class="vd_mega-menu" data-intro="<strong>Tabs Menu</strong><br/>Can be placed for dropdown menu, tabs, or user profile. Responsive for medium and small size navigation." data-step=3>
                    <ul class="mega-ul">
                        <li class="one-icon mega-li">
                            <a class="mega-link  vd_bg-blue" href="javascript:void(0);" data-action="click-trigger">
                                <span class="mega-icon">
                                  <i class="fa fa-cloud"></i>
                                </span>
                                <span class="badge vd_bg-red">5</span>
                            </a>
                        </li>
                        <li id="tabs-menu-tasks" class="one-icon mega-li">
                            <a class="mega-link  vd_bg-green" href="javascript:void(0);" data-action="click-trigger">
                                <span class="mega-icon">
                                  <i class="fa fa-tasks"></i>
                                </span>
                                <span class="badge vd_bg-red">7</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-menu clearfix"  >
        <div class="vd_panel-menu hidden-xs">
            <span data-original-title="Expand All" data-toggle="tooltip" data-placement="bottom" data-action="expand-all"
                  class="menu" data-intro="<strong>Expand Button</strong><br/>To expand all menu on left navigation menu."data-step=4>
            <i class="fa fa-sort-amount-asc"></i>
            </span>
        </div>
        <div class="vd_menu">
            <ul>
                <li class="vd_bg-blue" >
                    <router-link to="/yonetici" >
                        <span class="menu-icon"><i class="fa fa-code"></i></span>
                        <span class="menu-text">Admin</span>
                        <span class="menu-badge"><span class="badge vd_bg-yellow"><i class="fa fa-star"></i></span></span>
                    </router-link>
                </li>
                <li>
                    <a href="javascript:void(0);" data-action="click-trigger">
                        <span class="menu-icon"><i class="fa fa-dashboard"></i></span>
                        <span class="menu-text">Kuponlar</span>
                        <span class="menu-badge"><span class="badge vd_bg-black-20"><i class="fa fa-angle-down"></i></span></span>
                    </a>
                    <div class="child-menu" data-action="click-target">
                        <ul>
                            <li >
                                <router-link to="/yonetici/superkuponlari">
                                    <span class="menu-text">Super Loto Kuponlar</span>
                                </router-link>
                            </li>
                            <li >
                                <router-link to="/yonetici/sayisalkuponlari">
                                    <span class="menu-text">Sayısal Loto Kuponlar</span>
                                </router-link>
                            </li>
                            <li >
                                <router-link  to="/yonetici/sanstopukuponlari">
                                    <span class="menu-text">Şans Topu Kuponlar</span>
                                </router-link>
                            </li>
                            <li >
                                <router-link to="/yonetici/onnumarakuponlari">
                                    <span class="menu-text">On Numara Kuponlar</span>
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="vd_bg-red" >
                    <router-link to="/yonetici/ayarlar" >
                        <span class="menu-icon"><i class="fa fa-code"></i></span>
                        <span class="menu-text">Ayarlar</span>
                        <span class="menu-badge"><span class="badge vd_bg-yellow"><i class="fa fa-star"></i></span></span>
                    </router-link>
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-spacing clearfix"> </div>
    <div class="vd_menu vd_navbar-bottom-widget">
        <ul>
            <li>
                <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit()">
                    <form style="display: none;" id="logout-form" action="{{route('yonetici.logout')}}" method="POST" >
                        {{csrf_field()}}
                    </form>
                    <span class="menu-icon"><i class="fa fa-sign-out"></i></span>
                    <span class="menu-text">Çıkış</span>
                </a>
            </li>
        </ul>
    </div>

</div>