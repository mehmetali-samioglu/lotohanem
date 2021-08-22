<div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-right   vd_bg-black-60">
    <div class="navbar-tabs-menu clearfix">
        <span class="expand-menu" data-action="expand-navbar-tabs-menu">
          <span class="menu-icon menu-icon-left">
            <i class="fa fa-ellipsis-h"></i>
            <span class="badge vd_bg-red">
              20
            </span>
          </span>
          <span class="menu-icon menu-icon-right">
            <i class="fa fa-ellipsis-h"></i>
            <span class="badge vd_bg-red">
              20
            </span>
          </span>
        </span>
        <div class="menu-container">
            <div class="vd_mega-menu-wrapper">
                <div class="vd_mega-menu" data-intro="<strong>Tabs Menu</strong><br/>Can be placed for dropdown menu, tabs, or user profile. Responsive for medium and small size navigation." data-step=3>
                    <ul class="mega-ul">
                        <li class="one-icon mega-li">
                            <a class="mega-link  vd_bg-blue" href="javascript:void(0);" data-action="click-trigger">
                                <span class="mega-icon">
                                  <i class="fa fa-cloud"></i>
                                </span>
                                <span class="badge vd_bg-red">10</span>
                            </a>  <!-- vd_mega-menu-content -->
                        </li>
                        <li id="tabs-menu-tasks" class="one-icon mega-li">
                            <a class="mega-link  vd_bg-green" href="javascript:void(0);" data-action="click-trigger">
                                <span class="mega-icon">
                                  <i class="fa fa-tasks"></i>
                                </span>
                                <span class="badge vd_bg-red">8</span>
                            </a>
                        </li>
                        <li class="one-icon mega-li">
                            <a class="mega-link vd_bg-yellow " href="javascript:void(0);" data-action="click-trigger">
                                <span class="mega-icon">
                                  <i class="fa fa-pencil"></i>
                                </span>
                            </a>
                        </li>
                        <li class="one-icon mega-li">
                            <a class="mega-link vd_bg-red" href="javascript:void(0);" data-action="click-trigger">
                                <span class="mega-icon">
                                  <i class="fa fa-plus"></i>
                                </span>
                            </a>
                            <div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target">
                                <div class="child-menu">
                                    <div class="content-list content-menu">
                                        <ul class="list-wrapper pd-lr-10">
                                            <li> <a href="#"> <span class="menu-icon"><i class=" fa fa-user"></i></span> <span class="menu-text">WriteArticle</span> </a> </li>
                                            <li> <a href="#"> <span class="menu-icon"><i class=" fa fa-trophy"></i></span> <span class="menu-text">Write News</span> </a> </li>
                                            <li> <a href="#"> <span class="menu-icon"><i class=" fa fa-flask"></i></span> <span class="menu-text">AddProduct</span> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- vd_mega-menu-content  -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-menu clearfix"  >
        <div class="vd_panel-menu hidden-xs">
            <span data-original-title="Expand All" data-toggle="tooltip" data-placement="bottom" data-action="expand-all"
                class="menu" data-intro="<strong>Expand Button</strong><br/>To expand all menu on left navigation menu."
                data-step=4>
            <i class="fa fa-sort-amount-asc"></i>
            </span>
        </div>
        <h3 class="menu-title hide-nav-medium hide-nav-small">UI Features</h3>
        <div class="vd_menu">
            <ul>
                <li>
                    <a href="javascript:void(0);" data-action="click-trigger">
                        <span class="menu-icon"><i class="fa fa-dashboard"></i></span>
                        <span class="menu-text">Dashboard</span>
                        <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
                    </a>
                    <div class="child-menu" data-action="click-target">
                        <ul>
                            <li>
                                <a href="index-2.html">
                                    <span class="menu-text">Default Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="index-ecommerce.html">
                                    <span class="menu-text">E-Commerce Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="index-analytics.html">
                                    <span class="menu-text">Analytics Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="index-blogging.html">
                                    <span class="menu-text">Blogging Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="index-event-management.html">
                                    <span class="menu-text">Event Management Dashboard</span>
                                    <span class="menu-badge"><span class="badge vd_bg-yellow">NEW</span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <router-link to="/lotohanem/sayisalloto">
                        <span class="menu-icon"><i class="fa fa-envelope"></i></span>
                        <span class="menu-text">Sayısal Loto</span>
                        <span class="menu-badge"><span class="badge vd_bg-red">78</span></span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/lotohanem/superloto">
                        <span class="menu-icon"><i class="fa fa-code"></i></span>
                        <span class="menu-text">Süper Loto</span>
                        <span class="menu-badge"><span class="badge vd_bg-yellow"><i class="fa fa-star"></i></span></span>
                    </router-link>
                </li>
                <li>
                    <router-link to="/lotohanem/onnumara">
                        <span class="menu-icon"><i class="fa fa-code"></i></span>
                        <span class="menu-text">On Numara</span>
                        <span class="menu-badge"><span class="badge vd_bg-yellow"><i class="fa fa-star"></i></span></span>
                    </router-link>
                </li>
            </ul>
            <!-- Head menu search form ends -->
        </div>
    </div>
    <div class="navbar-spacing clearfix">
    </div>
    <div class="vd_menu vd_navbar-bottom-widget">
        <ul>
            <li>
                <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit()">
                    <form style="display: none;" id="logout-form" action="{{route('kullanici.oturumukapat')}}" method="POST" >
                        {{csrf_field()}}
                    </form>
                    <span class="menu-icon"><i class="fa fa-sign-out"></i></span>
                    <span class="menu-text">Çıkış</span>
                </a>
            </li>
        </ul>
    </div>
</div>