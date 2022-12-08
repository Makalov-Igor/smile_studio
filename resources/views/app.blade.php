<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Студия улыбки</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('images/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,400i,700,700i,800&subset=cyrillic" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('css/lightgallery.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
</head>
<body class="index-template">

<a id="top"></a>
<!-- * * * * * * Preloader * * * * * * -->
<div id="preloader">
    <div class="table">
        <div class="table-cell">
            <div class="cssload-loader">
                <div class="cssload-inner cssload-one"></div>
                <div class="cssload-inner cssload-two"></div>
                <div class="cssload-inner cssload-three"></div>
            </div>
        </div>
    </div>
</div>
<!-- * * * * * * Preloader: end * * * * * * -->

<div class="menu-button hidden-md hidden-lg">
        <span class="icon-menu-burger">
            <span class="icon-menu-burger__line"></span>
        </span>
</div>
<!-- Mobile menu -->
<div class="mobile-menu" id="mobmenu">
    <div class="menu-button">
            <span class="icon-menu-burger">
                <span class="icon-menu-burger__line"></span>
            </span>
    </div>
    <div class="mobile-menu-info white">
        <a href="#callback" class="btn fancyboxModal"><i class="material-icons">settings_phone</i> Обратный звонок</a>
        <div class="push10"></div>
    </div>
    <div class="uMenuH">
        <ul class="uMenuRoot">
            <li class="active"><a href="#top">Главная</a></li>
            <li><a href="#services">Услуги</a></li>
            <li><a href="#about">О компании</a></li>
            <li><a href="#team">Наши специалисты</a></li>
            <li><a href="#spec">Специальные предложения</a></li>
            <li><a href="#reviews">Отзывы</a></li>
            <li><a href="#contacts">Контакты</a></li>
        </ul>
    </div>
    <div class="push30"></div>
    <div class="mobile-menu-info white">
        <div class="mob-contacts">
            <div class="mob-menu-address f12 weight300">
                г. Ростов-на-Дону, пер. Днепровский 115Б
            </div>
            <div class="push10"></div>
            <div class="mob-menu-tel weight800">8(9999) 22-88-88</div>
            <div class="mob-menu-email">
                <a href="mailto:finance-group@ultron.pro" class="white f12">finance-group@ultron.pro</a>
            </div>
        </div>
        <div class="push10"></div>
        <div class="mob-shedule f12 weight300">
            <div class="inner">
                Режим работы:
                <div class="element">
                    с 9.00 - 19.00 <br />
                    пн-сб
                </div>
            </div>
        </div>
        <div class="push30"></div>

    </div>
    <div class="push30"></div>
</div>
<div class="overlay"></div>

<div class="main-wrapper">
    <div class="header-wrapper">
        <div class="container">
            <div class="header relative">
                <a href="#callback" class="header-callback-btn fancyboxModal hidden-xs"><i class="material-icons">settings_phone</i> Обратный звонок</a>
                <div class="logo">
                    <div class="table">
                        <div class="table-cell">
                            <a href="/"><img src="{{asset('images/logo.png')}}" alt="logo" /></a>
                        </div>
                    </div>
                </div>
                <div class="header-contacts hidden-xs">
                    <div class="row min">
                        <div class="col-md-6 col-lg-4 visible-md visible-lg">
                            <div class="element el1 relative">
                                <i class="material-icons">place</i>
                                г. Ростов-на-Дону, пер. Днепровский,
                                д. 115Б
                            </div>
                        </div>
                        <div class="col-lg-4 visible-lg">
                            <div class="element el2 relative">
                                <i class="material-icons">access_time</i>
                                Режим работы: с 9.00 - 19.00 <br />
                                пн-сб
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="element el3 relative">
                                <div class="header-tel">
                                    <i class="material-icons">phone</i>8(9999) 22-88-88
                                </div>
                                <div class="header-email">
                                    <a href="mailto:finance-group@ultron.pro"><i class="material-icons">email</i>finance-group@ultron.pro</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-bar-wrapper visible-md visible-lg">
        <div class="inner">
            <div class="container">
                <div class="top-bar relative">
                    <div class="top-menu">
                        <div class="uMenuH">
                            <ul class="uMenuRoot">
                                <li class="active"><a href="#top">Главная</a></li>
                                <li><a href="#services">Услуги</a></li>
                                <li><a href="#about">О компании</a></li>
                                <li><a href="#team">Наши специалисты</a></li>
                                <li><a href="#spec">Специальные предложения</a></li>
                                <li><a href="#reviews">Отзывы</a></li>
                                <li><a href="#contacts">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-bar-wrapper-push"></div>
    @yield('content')

    <div class="footer-push"></div>
</div>
<div class="footer-wrapper">

    <div class="inner">
        <div class="container">
            <div class="push50"></div>

            <div class="text-center">
                <a href="/"><img class="footer_logo" src="images/footer-logo.png" /></a>
                <div class="push30"></div>
                <div class="copyright f13"> © 2022 Студия улыбки. Все права защищены.</div>
                <div class="push30"></div>

            </div>

            <div class="push30"></div>
        </div>
    </div>
</div>

<span id="up"><i class="fa fa-angle-up"></i></span>



<div class="modal" id="responseMessage">
    <div class="title-h3">Статус отправки формы:</div>
    <div class="modal-content"></div>
    <div class="push25"></div>
    <a href="#" class="btn fancyClose min">ok</a>
</div>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{asset('js/modernizr.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/jquery.maskedinput.js')}}"></script>
<script src="{{asset('js/plugins-scroll.js')}}"></script>
<script src="{{asset('js/jquery.mousewheel.js')}}"></script>
<script src="{{asset('js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/jquery.viewportchecker.js')}}"></script>
<script src="{{asset('feedback/js/feedback.js')}}"></script>
<script src="{{asset('js/onReady.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/maps.js')}}"></script>

</body>
</html>
