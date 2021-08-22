<!DOCTYPE html>

@include('yonetici.layouts.partials.head')


<body id="nav " class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed responsive clearfix breakpoint-975 nav-left-medium" data-active="nav " data-smooth-scrolling="1">

<div id="app">
        <div class="vd_body">
            <div class="content" >
                <div class="container" style="padding: 0px;">
                    @include('yonetici.layouts.partials.solmenu')

                    <div class="vd_content-wrapper"  >
                        <div class="vd_container">
                            <div class="vd_content clearfix">
                                <div class="vd_head-section clearfix">
                                    <div class="vd_panel-header">
                                        <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code."
                                             data-step=5 data-position="left">
                                            <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip"
                                                 data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
                                            <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip"
                                                 data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
                                            <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle"
                                                 data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vd_content-section clearfix">
                                    @yield('content')
                                </div>
                            </div>
                            <!-- .vd_content -->
                        </div>
                        <!-- .vd_container -->
                    </div>
                </div>
            </div>

            @include('yonetici.layouts.partials.footer')
        </div>
</div>
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"></i></a>

@include('yonetici.layouts.partials.js')
@yield('js')

</body>
</html>