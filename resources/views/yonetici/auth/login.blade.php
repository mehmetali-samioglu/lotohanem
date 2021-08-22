<!DOCTYPE html> <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <title>Login Pages HTML Template - Responsive Multipurpose Admin Templates | Vendroid</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid" />
    <meta name="description" content="Login Pages - Responsive Admin HTML Template">
    <meta name="author" content="Venmond">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/img/ico/favicon.png">


    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="/css/font-awesome-ie7.min.css"><![endif]-->
    <link href="/css/font-entypo.css" rel="stylesheet" type="text/css">

    <!-- Fonts CSS -->
    <link href="/css/fonts.css"  rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="/plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">
    <!-- Specific CSS -->


    <!-- Theme CSS -->
    <link href="/css/theme.min.css" rel="stylesheet" type="text/css">
    <link href="/css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->



    <!-- Responsive CSS -->
    <link href="/css/theme-responsive.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="/custom/custom.css" rel="stylesheet" type="text/css">

    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="/js/modernizr.js"></script>
    <script type="text/javascript" src="/js/mobile-detect.min.js"></script>
    <script type="text/javascript" src="/js/mobile-detect-modernizr.js"></script>

</head>

<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1">
<div class="vd_body">
    <!-- Header Start -->

    <!-- Header Ends -->
    <div class="content">
        <div class="container">

            <!-- Middle Content Start -->

            <div class="vd_content-wrapper">
                <div class="vd_container">
                    <div class="vd_content clearfix">
                        <div class="vd_content-section clearfix">
                            <div class="vd_login-page">
                                <div class="heading clearfix">
                                    <div class="logo">
                                        <h2 class="mgbt-xs-5"><img src="/img/logo.png" alt="logo"></h2>
                                    </div>
                                    <h4 class="text-center font-semibold vd_grey">LOTOHANEM YÖNETİCİ GİRİŞİ</h4>
                                </div>
                                <div class="panel widget">
                                    <div class="panel-body">
                                        <div class="login-icon entypo-icon"> <i class="icon-key"></i> </div>
                                        <form class="form-horizontal" id="login-form" method="POST" action="{{ route('yonetici.login') }}" role="form">
                                            @csrf
                                            <div class="form-group  mgbt-xs-20">
                                                <div class="col-md-12">
                                                    <div class="label-wrapper sr-only">
                                                        <label class="control-label" for="email">Email</label>
                                                    </div>
                                                    <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="label-wrapper">
                                                        <label class="control-label sr-only" for="password">Password</label>
                                                    </div>
                                                    <div class="vd_input-wrapper" id="password-input-wrapper" > <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                                                        <input placeholder="Şifre" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Please fill the necessary field </div>
                                            <div class="form-group">
                                                <div class="col-md-12 text-center mgbt-xs-5">
                                                    <button class="btn vd_bg-green vd_white width-100" type="submit" id="login-submit">Login</button>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="vd_checkbox">
                                                                <input type="checkbox"  value="1" name="remember" id="checkbox-1" {{ old('remember') ? 'checked' : '' }}>
                                                                <label for="checkbox-1"> Beni Hatırla</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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

            <!-- Middle Content End -->

        </div>
        <!-- .container -->
    </div>
    <!-- .content -->

</div>

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src='/plugins/jquery-ui/jquery-ui.custom.min.js'></script>

<script type="text/javascript" src="/custom/custom.js"></script>

</html>
</body>