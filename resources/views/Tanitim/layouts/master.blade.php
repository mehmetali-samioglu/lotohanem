<!DOCTYPE html>

@include('Tanitim.layouts.partials.head')

<body id="login-page" class="middle-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar front-layout   clearfix" data-active="login-page "  data-smooth-scrolling="1">
<div class="vd_body">
            @include('Tanitim.layouts.partials.header')
    <div class="content">
            @yield('content')
    </div>
    @include('Tanitim.layouts.partials.footer')
</div>

<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

@include('Tanitim.layouts.partials.js')
@yield('js')

</body>
</html>