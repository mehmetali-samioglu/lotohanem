<!DOCTYPE html>

@include('Anasite.layouts.partials.head')


<body id="nav " class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix breakpoint-975 nav-left-medium" data-active="nav " data-smooth-scrolling="1">

    <div id="app">
        <div class="vd_body">
            {{--@include('Anasite.layouts.partials.header')--}}
            <ustheader kullanici="{{ Bolumle(auth()->user()->adsoyad,2) }}"></ustheader>
            <div class="content" >
                <div class="container" style="padding: 0px;">
                    @include('Anasite.layouts.partials.solmenu')
                    {{--@include('Anasite.layouts.partials.sagmenu')--}}
                        @yield('content')
                </div>
            </div>

            @include('Anasite.layouts.partials.footer')
        </div>
</div>

<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

@include('Anasite.layouts.partials.js')
@yield('js')

</body>
</html>