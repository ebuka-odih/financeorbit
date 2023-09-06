<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Whirl Wind Invts- Personal Portfolio">
    <meta name="author" content="Whirl Wind Invts - Personal Portfolio">
    <meta name="keywords" content="Whirl Wind Invts - Personal Portfolio">
    <!-- Favicon -->
    <link rel="icon" href="../main/assets/img/brand/favicon.ico" type="image/x-icon" />
    <!-- Title -->
    <title>{{ env('APP_NAME') }} - Trading Center</title>

    <!-- Bootstrap css-->
    <link id="style" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Icons css-->
    <link href="../main/assets/web-fonts/icons.css" rel="stylesheet" />
    <link href="{{ asset('client/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('client/css/plugin.css') }}" rel="stylesheet" />

    <!-- Style css-->
    <link href="{{ asset('client/css/1style.css') }}" rel="stylesheet">
    <link href="{{ asset('client/css/plugins.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('client/css/sweetalert2.min.css') }}">
    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('client/css/switcher.css') }}" rel="stylesheet" />
    <link href="{{ asset('client/css/demo.css') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="//code.jivosite.com/widget/Q5TnyuKOGs" async></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>

<body class="main-body leftmenu ltr dark-theme dark-menu">
<style>
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:nth-of-type(1), div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:nth-of-type(2), div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:nth-of-type(3){display:none;}

    div#google_translate_element div.goog-te-gadget-simple {margin:0px; padding:10px; display:inline-block; background-color:#000000; border:1px solid #000;}
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value {color:white;}
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value::after{content:"Translate Site"; padding-right:5px;}

    div#google_translate_element div.goog-te-gadget-simple img:nth-of-type(1) {display:none;}

</style>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



<!-- Page -->
<div  class="page">

    <!-- Main Header-->
    <div  class="main-header side-header sticky" >
        <div class="main-container container-fluid">
            <div class="main-header-left">
                <a class="main-header-menu-icon" href="javascript:;" id="mainSidebarToggle">
                    <svg class="header-menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M2.5,10.5h11c0.276123,0,0.5-0.223877,0.5-0.5s-0.223877-0.5-0.5-0.5h-11C2.223877,9.5,2,9.723877,2,10S2.223877,10.5,2.5,10.5z M2.5,6.5h19C21.776123,6.5,22,6.276123,22,6s-0.223877-0.5-0.5-0.5h-19C2.223877,5.5,2,5.723877,2,6S2.223877,6.5,2.5,6.5z M21.8446045,9.3519897C21.609314,9.0689697,21.189209,9.0303345,20.90625,9.265625l-2.6660156,2.2226562c-0.0315552,0.0261841-0.0606079,0.0552368-0.086792,0.086792c-0.2346802,0.2826538-0.1958008,0.7019653,0.086792,0.9366455L20.90625,14.734375c0.1194458,0.1005249,0.2706299,0.1555176,0.4267578,0.1552734c0.1973267-0.0002441,0.3843994-0.0878906,0.5109253-0.2393188c0.236145-0.2826538,0.1984863-0.7032471-0.0841675-0.9393921L19.7080078,12l2.0517578-1.7109375C22.0414429,10.0534668,22.0794067,9.6343384,21.8446045,9.3519897z M2.5,14.5h11c0.276123,0,0.5-0.223877,0.5-0.5s-0.223877-0.5-0.5-0.5h-11C2.223877,13.5,2,13.723877,2,14S2.223877,14.5,2.5,14.5z M21.5,17.5h-19C2.223877,17.5,2,17.723877,2,18s0.223877,0.5,0.5,0.5h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17.5,21.5,17.5z"/></svg>
                </a>
                <div class="hor-logo">
                    <a class="main-logo" href="{{ route('index') }}">
                        {{--                        <h3 style="font-weight: bolder; color: white">{{ env('APP_NAME') }}</h3>--}}
                        <img src="{{ asset('img/btc.png') }}" class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{ asset('img/btc.png') }}" class="header-brand-img desktop-logo-dark" alt="logo">

                    </a>
                </div>
            </div>
            <div class="main-header-center">
                <div class="responsive-logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('img/btc.png') }}" class="mobile-logo" alt="logo">
                        <h3 style="font-weight: bolder; color: white">{{ env('APP_NAME') }}</h3>

                    </a>

                </div>
            </div>
            <div class="main-header-right">


                <div class="dropdown d-flex main-profile-menu">
                    <a class="d-flex" href="javascript:;">
                        <span style="margin-right: 10px;">{!! auth()->user()->status() !!}</span>
                        <span class="main-img-user">
								<img alt="avatar" src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=">
							</span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="header-navheading">
                            <h6 class="main-notification-title"> </h6>

                        </div>
                        <a class="dropdown-item border-top" href="{{ route('user.profile') }}">
                            <i class="fe fe-user"></i> My Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fe fe-power"></i> Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Main Header-->

    <!-- Free Dashboard -->


    <!-- Sidemenu -->
    <div class="sticky" >
        <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
            <div class="main-sidebar-header main-container-1 active">
                <div class="sidemenu-logo">
                    <a class="main-logo" href="{{ route('index') }}">
                        <img src="{{ asset('img/btc.png') }}" class="header-brand-img icon-logo" alt="logo">
                    </a>
                </div>
                <div class="main-sidebar-body main-body-1">
                    <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                    <ul class="menu-nav nav sidebar-active">
                        <li class="nav-item active">
                            <a class="nav-link with-sub" href="{{ route('user.dashboard') }}">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                                <span class="sidemenu-label">Dashboards</span>
                            </a>
                        </li>

                        <li class="nav-item  ">
                            <a class="nav-link with-sub" href="{{ route('user.copy-trader.create') }}">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M96 352V96c0-35.3 28.7-64 64-64H416c35.3 0 64 28.7 64 64V293.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7H160c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16v48H208c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h48v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V256h48c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H320V144c0-8.8-7.2-16-16-16H272zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24H136C60.9 512 0 451.1 0 376V152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88H296z"/></svg>
                                <span class="sidemenu-label">Copy Trade</span>
                            </a>
                        </li>


                        <li class="nav-item ">
                            <a class="nav-link with-sub " href="{{ route('user.deposit') }}">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                                <span class="sidemenu-label">Deposit</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link with-sub " href="{{ route('user.signals.index') }}">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                                <span class="sidemenu-label">Daily Signals</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link with-sub " href="{{ route('user.withdraw') }}">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM184 232H328c13.3 0 24 10.7 24 24s-10.7 24-24 24H184c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/></svg>
                                <span class="sidemenu-label">Withdrawal</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link with-sub " href="{{ route('user.copy-trader.index') }}">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                                <span class="sidemenu-label">My Copy Trades</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link with-sub " href="{{ route('user.trade') }}">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84.1 96c0-11.1-9-20.1-20.1-20.1s-20.1 9-20.1 20.1v6c-5.6 1.2-10.9 2.9-15.9 5.1c-15 6.8-27.9 19.4-31.1 37.7c-1.8 10.2-.8 20 3.4 29c4.2 8.8 10.7 15 17.3 19.5c11.6 7.9 26.9 12.5 38.6 16l2.2 .7c13.9 4.2 23.4 7.4 29.3 11.7c2.5 1.8 3.4 3.2 3.8 4.1c.3 .8 .9 2.6 .2 6.7c-.6 3.5-2.5 6.4-8 8.8c-6.1 2.6-16 3.9-28.8 1.9c-6-1-16.7-4.6-26.2-7.9l0 0 0 0 0 0 0 0c-2.2-.8-4.3-1.5-6.3-2.1c-10.5-3.5-21.8 2.2-25.3 12.7s2.2 21.8 12.7 25.3c1.2 .4 2.7 .9 4.4 1.5c7.9 2.7 20.3 6.9 29.8 9.1V416c0 11.1 9 20.1 20.1 20.1s20.1-9 20.1-20.1v-5.5c5.4-1 10.5-2.5 15.4-4.6c15.7-6.7 28.4-19.7 31.6-38.7c1.8-10.4 1-20.3-3-29.4c-3.9-9-10.2-15.6-16.9-20.5c-12.2-8.8-28.3-13.7-40.4-17.4l-.8-.2c-14.2-4.3-23.8-7.3-29.9-11.4c-2.6-1.8-3.4-3-3.6-3.5c-.2-.3-.7-1.6-.1-5c.3-1.9 1.9-5.2 8.2-8.1c6.4-2.9 16.4-4.5 28.6-2.6c4.3 .7 17.9 3.3 21.7 4.3c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-4.4-1.2-14.4-3.2-21-4.4V224z"/></svg>
                                <span class="sidemenu-label">Trades/ROI</span>
                            </a>
                        </li>

                        <!---	<li class="nav-item ">
                                <a class="nav-link with-sub " href="copy.php">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M352 128c0 70.7-57.3 128-128 128s-128-57.3-128-128S153.3 0 224 0s128 57.3 128 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/></svg>
                                    <span class="sidemenu-label">Copy Experts</span>
                                </a>
                            </li>---->

                        <li class="nav-item ">
                            <a class="nav-link with-sub " href="{{ route('user.buy') }}">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"/></svg>
                                <span class="sidemenu-label">Buy Bitcoin</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link with-sub" href="">
                                <i class="sidemenu-icon menu-icon fa fa-piggy-bank text-white"></i>
                                <span class="sidemenu-label">Investment</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link with-sub" href="{{ route('user.sub.plans') }}">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M64 32C28.7 32 0 60.7 0 96v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM344 152c-13.3 0-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24s-10.7 24-24 24zm96-24c0 13.3-10.7 24-24 24s-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24zM64 288c-35.3 0-64 28.7-64 64v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V352c0-35.3-28.7-64-64-64H64zM344 408c-13.3 0-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24s-10.7 24-24 24zm104-24c0 13.3-10.7 24-24 24s-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24z"/></svg>
                                <span class="sidemenu-label">Subscription</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link with-sub " href="{{ route('user.verify') }}">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                                <span class="sidemenu-label">Verify Account</span>
                            </a>
                        </li>
                        <!----	<li id="foot" class="nav-item card custom-card card-body">
                                    <a href="#" class="d-flex align-items-center text-white text-decoration-none">
                                        <img src="https://github.com/mdo.png" alt="hugenerd" width="50" height="50" class="sidemenu-icon menu-icon rounded-circle">
                                        &nbsp; &nbsp;<span class="sidemenu-label">Pongdev Inc Starter Account</span>
                                    </a>
                            </li>--->
                        <li id="foots" class="nav-item">
                            <a class="nav-link with-sub" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96C43 32 0 75 0 128V384c0 53 43 96 96 96h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H96c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32h64zM504.5 273.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32H320v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg>
                                <span class="sidemenu-label">Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidemenu -->

    <style>
        .button {
            float: left;
            margin: 15px 15px 15px 15px;
            width: 100px;
            height: 40px;
            position: relative;
            display: block;
            margin: 0 auto;
        }

        .button label,
        .button input {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .button input[type="radio"] {
            opacity: 0.011;
            z-index: 100;
        }

        .button input[type="radio"]:checked + label {
            background: transparent;
            border-radius: 4px;
        }

        .button label {
            cursor: pointer;
            z-index: 90;
            line-height: 1.8em;
            width: 100px;
            height: 40px;
        }

    </style>
    <!-- Main Content-->
    <div class="main-content side-content pt-0">

        @yield('content')
        <br><br><br> <br><br> <br><br><br>


        <script src="{{ asset('js/jquery.min.js') }}"></script>

        <!-- Scroll modal -->
        <div class="modal fade" id="depositmodal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Select Account</h6>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                    </div>
                    <div class="modal-body modal-body pd-y-20 pd-x-20">
                        <h5>Select an account to deposit into:</h5>

                        <form class="form" method="POST" action="demodep.php">
                            <div class="text-wrap">
                                <div class="example">
                                    <button type="submit" name="demoupdate" class="btn">
                                        <p class="btn ripple btn-warning-transparent">Practice</p> <font color="orange"><strong>Practice Account </strong></font>
                                        <input type="number" name="amount" value="10000" hidden>
                                        <p>	<i><font color="white">Deposit to your practice account. You will get $10,000 to trade and practice trading with. This balance cannot be withdrawn.</font></i></p></button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <div class="text-wrap">
                            <div class="example">
                                <a href="{{ route('user.deposit') }}">
                                    <p class="btn ripple btn-success-transparent">Live</p> <font color="teal"><strong>Live Account </strong></font>
                                    <p>	<i><font color="white">Deposit into your actual account. This account can be withdrawn, subscribed from and traded with. Any profits you make with this account are real.</font></i></p></a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End Scroll modal -->


        <!-- End Main Content-->

        <script type="text/javascript">
            $(function () {
                $("#withdrawalMethod").change(function () {
                    if ($(this).val() == "crypto") {
                        $("#beneficiaryField1").fadeIn();
                        $("#beneficiaryField2").hide();
                        $("#beneficiaryField3").hide();
                        $("#beneficiaryField4").hide();
                        $("#beneficiaryField5").hide();
                        $("#beneficiaryField6").hide();
                    } else if ($(this).val() == "forex") {
                        $("#beneficiaryField2").fadeIn();
                        $("#beneficiaryField1").hide();

                        $("#beneficiaryField3").hide();

                    } else if ($(this).val() == "vip") {
                        $("#beneficiaryField3").fadeIn();
                        $("#beneficiaryField1").hide();
                        $("#beneficiaryField2").hide();

                    }
                });
            });
        </script>



        <!-- Main Footer-->
        <div class="main-footer text-center">
            <div class="container">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <span>Copyright © {{ Date('Y') }} {{ env('APP_NAME') }}.  All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
        <!--End Footer-->


    </div>





    <!-- End Page -->
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <!-- Jquery js-->
    <script src="{{ asset('client/js/jquery.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('client/js/popper.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('client/js/select2.min.js') }}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{ asset('js/dataTables.min.js') }}"></script>
    <script src="../main/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{ asset('client/dataTables.responsive.min.js') }}"></script>

    <!-- Perfect-scrollbar js -->
    <script src="../main/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('client/js/pscroll1.js') }}"></script>

    <!-- Apex charts js -->
    <script src="{{ asset('client/js/apexcharts.js') }}"></script>

    <script src="{{ asset('client/js/form-elements.js') }}"></script>

    <!-- Sidemenu js -->
    <script src="{{ asset('client/js/sidemenu.js') }}"></script>

    <!-- Internal Fileuploads js-->
    <script src="{{ asset('client/js/fileupload.js') }}"></script>
    <script src="{{ asset('client/js/file-upload.js') }}"></script>


    <!-- Internal Clipboard js-->
    <script src="{{ asset('client/js/clipboard.min.js') }}"></script>
    <script src="{{ asset('client/js/clipboard.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('client/js/sidebar.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('client/js/sticky.js') }}"></script>

    <!-- Internal Dashboard js-->
    <script src="{{ asset('client/js/index.js') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('client/js/circle-progress.min.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('client/js/themeColors.js') }}"></script>

    <!-- swither styles js -->
    <script src="{{ asset('client/js/swither-styles.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('client/js/custom.js') }}"></script>


    <script>
        function toggleBeneficiaryFields() {
            const pairType = document.getElementById('withdrawalMethod').value;
            const beneficiaryField1 = document.getElementById('beneficiaryField1');
            const beneficiaryField2 = document.getElementById('beneficiaryField2');
            const beneficiaryField3 = document.getElementById('beneficiaryField3');
            const beneficiaryField4 = document.getElementById('beneficiaryField4');
            const beneficiaryField5 = document.getElementById('beneficiaryField5');
            const beneficiaryField6 = document.getElementById('beneficiaryField6');
            const beneficiaryField7 = document.getElementById('beneficiaryField7');
            const beneficiaryField8 = document.getElementById('beneficiaryField8');
            const beneficiaryField9 = document.getElementById('beneficiaryField9');

            if (pairType === 'Bank Transfer') {
                beneficiaryField1.style.display = 'block';
                beneficiaryField2.style.display = 'block';
                beneficiaryField3.style.display = 'block';
                beneficiaryField4.style.display = 'block';
                beneficiaryField5.style.display = 'none';
                beneficiaryField6.style.display = 'none';
                beneficiaryField7.style.display = 'none';
                beneficiaryField8.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            } else if (pairType === 'PayPal') {
                beneficiaryField5.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField6.style.display = 'none';
                beneficiaryField7.style.display = 'none';
                beneficiaryField8.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            }else if (pairType === 'Bitcoin') {
                beneficiaryField6.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField5.style.display = 'none';
                beneficiaryField7.style.display = 'none';
                beneficiaryField8.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            }else if (pairType === 'cashapp') {
                beneficiaryField7.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField5.style.display = 'none';
                beneficiaryField6.style.display = 'none';
                beneficiaryField8.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            }else if (pairType === 'skrill') {
                beneficiaryField8.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField5.style.display = 'none';
                beneficiaryField6.style.display = 'none';
                beneficiaryField7.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            }else if (pairType === 'ethereum') {
                beneficiaryField9.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField5.style.display = 'none';
                beneficiaryField6.style.display = 'none';
                beneficiaryField7.style.display = 'none';
                beneficiaryField8.style.display = 'none';
            }
        }
    </script>

</body>

</html>
