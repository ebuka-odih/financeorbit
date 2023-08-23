<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="{{ env('APP_NAME') }} | Smooth Trading In Forex, CFDs, Stocks, Bonds And Cryptocurrency Trading Etc">
    <meta name="keywords" content="mega, profitx, profit, megaprofit, trade, fx, forex, stocks, copy trading, bonds">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#313131">
    <!-- Site Properties -->
    <title>{{ env('APP_NAME') }} - Smooth Trading In Stocks, Cryptocurrency, Forex, CFDs, and Bonds Etc  </title>
    <!-- Critical preload -->
    <link rel="preload" href="{{ asset('js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('css/stylehome.css') }}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="">
    <!-- Font preload -->
    <link rel="preload" href="fonts/rubik-v9-latin-500.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="fonts/rubik-v9-latin-300.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="preload" href="fonts/rubik-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin="">
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylehome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/review.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('en/style/translator.css') }}" >
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/security.js') }}"></script>
    <script src="//code.tidio.co/h5vmr199gnnhgnhy5szfedabpubn3d9v.js" async></script>

</head>

<body>
<!-- preloader begin -->
<div class="in-loader">
    <div></div>
    <div></div>
    <div></div>
</div>
<!-- preloader end -->
<header>
    <!-- header content begin -->
    <div class="uk-section uk-padding-remove-vertical in-header-home ">
        <!-- module navigation begin -->
        <nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;">
            <div class="uk-container" data-uk-navbar="">
                <div class="uk-navbar-left uk-width-auto">
                    <div class="uk-navbar-item" style="padding-top:20px;">
                        <!-- module logo begin -->
                        <div>
                            <a class="" href="{{ route('index') }}">
                                <img class="uk-margin-small-right in-offset-top-10" style="margin-top: 3px" src="{{ asset('img2/logo.png') }}" data-src="{{ asset('img2/logo.png') }}" alt="{{ env('APP_NAME') }}" width="134" height="23" data-uk-img=""> </a>
                            <div id="google_translate_element"></div>
                        </div>
                        <!-- module logo begin -->
                    </div>
                </div>
                <div class="uk-navbar-right uk-width-expand uk-flex uk-flex-right">
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a  class=""  href="{{ route('index') }}">Home</a>

                        </li>
                        <li><a href="#">Markets<i class="fas fa-chevron-down"></i></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{ route('stocks') }}">Stocks</a></li>
                                    <li><a href="{{ route('forex') }}">Forex</a></li>
                                    <li><a href="{{ route('index') }}">Cryptocurrency</a></li>
                                    <li><a href="{{ route('mining') }}">Crypto Mining</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Company<i class="fas fa-chevron-down"></i></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ route('terms') }}">Terms &amp; Conditions</a></li>
                                    <li><a href="{{ route('faq') }}">FAQs</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{ route('copy-trader') }}">Copy Trading</a></li>

                    </ul>
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <a href="{{ route('login') }}" class="uk-button uk-button-text"><i class="fas fa-user-circle uk-margin-small-right"></i>Login</a>
                        <a href="{{ route('register') }}" class=" register uk-button uk-button-primary uk-button-small uk-border-pill">Sign up</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- module navigation end -->
    </div>
    <!-- header content end -->
</header>


@yield('content')


<footer>
    <!-- footer content begin -->

    <div class="uk-section uk-section-muted uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">

        <div class="uk-container">
            <div class="uk-grid-medium" data-uk-grid="">
                <div class="uk-width-expand@m">
                    <img class="uk-margin-small-right in-margin-top-30@s" src="img/logo2.png" data-src="img/logo2.png" alt="wave" width="134" height="23" data-uk-img="">
                    <p class="uk-text-large uk-margin-small-top">Trade With Confidence.</p>
                    <p class="uk-visible@m">{{ env('APP_NAME') }} LTD<br> Seagram Building, 600 Lexinton Ave 13th Floor,New York, NY 10022, United States

                    </p>
                </div>
                <div class="uk-width-3-5@m">
                    <div class="uk-child-width-1-3@s uk-child-width-1-3@m" data-uk-grid="">
                        <div>
                            <h4><span>Markets</span></h4>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{ route('stocks') }}">Stocks</a></li>
                                <li><a href="{{ route('forex') }}">Forex</a></li>
                                <li><a href="{{ route('copy-trader') }}">Crypto Trade</a></li>
                                <li><a href="{{ route('mining') }}">Crypto Mining</a></li>
                            </ul>
                        </div>

                        <div>
                            <h4><span>Company</span></h4>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact us</a></li>
                                <li><a href="{{ route('register') }}">Start Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-flex uk-flex-middle uk-grid-stack" data-uk-grid="">
                <div class="uk-width-1-1@m uk-first-column">
                    <div class="uk-grid-small uk-flex uk-child-width-1-4@s uk-child-width-1-5@m in-payment-method uk-text-center uk-grid uk-grid-stack" data-uk-grid="">
                        <div class="uk-first-column">
                            <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                <img src="https://www.indonez.com/html-demo/Wave/img/in-wave-visa.svg" data-src="img/in-wave-visa.svg" alt="wave-payment" width="59" height="22" data-uk-img="">
                            </div>
                        </div>
                        <div class="uk-grid-margin uk-first-column">
                            <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                <img src="https://www.indonez.com/html-demo/Wave/img/in-wave-mastercard.svg" data-src="img/in-wave-mastercard.svg" alt="wave-payment" width="59" height="22" data-uk-img="">
                            </div>
                        </div>
                        <div class="uk-grid-margin uk-first-column">
                            <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                <img src="https://www.indonez.com/html-demo/Wave/img/in-wave-skrill.svg" data-src="img/in-wave-skrill.svg" alt="wave-payment" width="59" height="22" data-uk-img="">
                            </div>
                        </div>
                        <div class="uk-grid-margin uk-first-column">
                            <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                <img src="https://www.indonez.com/html-demo/Wave/img/in-wave-paypal.svg" data-src="img/in-wave-paypal.svg" alt="wave-payment" width="59" height="22" data-uk-img="">
                            </div>
                        </div>
                        <div class="uk-grid-margin uk-first-column">
                            <div class="uk-card uk-card-default uk-card-small uk-card-body uk-visible@m">
                                <img src="https://www.indonez.com/html-demo/Wave/img/in-wave-neteller.svg" data-src="img/in-wave-neteller.svg" alt="wave-payment" width="59" height="22" data-uk-img="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="uk-width-1-2@m uk-text-right@m uk-grid-margin uk-first-column">
                    <div class="in-footer-socials in-margin-bottom-40@s">
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>-->
            </div>
        </div>
    </div>

    <div class="uk-section uk-section-secondary uk-padding-remove-vertical">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-3-4@m uk-visible@m">
                    <ul class="uk-subnav uk-subnav-divider">
                        <li><a href="{{ route('terms') }}">Terms &amp; Conditions</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy</a></li>
                        <li><a href="{{ route('faq') }}">FAQs</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="uk-width-expand@m uk-text-right@m">
                    <p>
                        <script>
                            var CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                        </script> &copy;. All Rights Reserved. {{ env('APP_NAME') }}.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content end -->
    <!-- module totop begin -->
    <div class="uk-visible@m">
        <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll=""></a>
    </div>
    <!-- module totop begin -->
</footer>
<!-- Javascript -->
<script src="{{ asset('js/vendors/uikit.min.js') }}"></script>
<script src="{{ asset('js/vendors/indonez.min.js') }}"></script>
<script src="{{ asset('js/config-theme.js') }}"></script>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function submitform(e,url,id) {
        console.log(e);
        e.preventDefault(); // avoid to execute the actual submit of the form.
        $(id).html("Submitting...");

        $.ajax({
            type: "POST",
            url: url,
            data: new FormData( e.target ),
            processData: false,
            contentType: false,
            success: function(data)
            {
                $(id).html("Submit");
                console.log(data);
                res = JSON.parse(data)
                if (res.type=='error') {
                    swal("Error", res.msg, "error");
                }
                else if(res.type=='success') {
                    swal("Successful", res.msg, "success");
                    window.location.replace('index.html')
                }
            }
        }).catch(function (error) {
            $(id).html("Submit");
            swal("Error", "Network Error", "error");
        });
    }
</script>
</body>
</html>
