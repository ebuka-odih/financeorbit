@extends('pages.layout.app')
@section('content')

    <main>
    <div class="uk-section uk-padding-remove-vertical">
        <div class="in-slideshow" data-uk-slideshow="">
            <ul class="uk-slideshow-items uk-light">
                <li>
                    <div class="uk-position-cover">
                        <img src="img/in-lazy.html" data-src="img/in-slideshow-image-1.jpg" alt="slideshow-image" data-uk-cover="" width="1920" height="700" data-uk-img="">
                    </div>
                    <span></span>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid="">
                            <div class="uk-width-3-5@m">
                                <div class="uk-overlay">
                                    <h1 class="uk-animation-slide-bottom">Trade Stocks and Forex with Financial Thinking</h1>
                                    <p class="uk-text-lead uk-visible@m uk-animation-slide-bottom">Access 40,000+ instruments – across asset classes – to trade, hedge and invest from a single account.</p>
                                    <a href="{{ route('register') }}" class="uk-button uk-button-primary uk-border-rounded  register uk-animation-slide-bottom"><i class="fas fa-scroll uk-margin-small-right"></i>Register now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-position-cover">
                        <img src="img/in-lazy.html" data-src="img/in-slideshow-image-2.jpg" alt="slideshow-image" data-uk-cover="" width="1920" height="700" data-uk-img="">
                    </div>
                    <span></span>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid="">
                            <div class="uk-width-3-5@m">
                                <div class="uk-overlay">
                                    <h1 class="uk-animation-slide-bottom">Multi-regulated Global Stocks, Shares and FX Broker</h1>
                                    <p class="uk-text-lead uk-visible@m uk-animation-slide-bottom">A trusted destination for traders worldwide, Authorised by FCA, ASIC &amp; FSCA with multi-lingual support 24/5.</p>
                                    <a href="{{ route('login') }}" class="uk-button uk-button-primary uk-border-rounded  login"><i class="fas fa-scroll uk-margin-small-right uk-animation-slide-bottom"></i>Login </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-position-cover">
                        <img src="img/in-lazy.html" data-src="img/in-slideshow-image-3.jpg" alt="slideshow-image" data-uk-cover="" width="1920" height="700" data-uk-img="">
                    </div>
                    <span></span>
                    <div class="uk-container">
                        <div class="uk-grid" data-uk-grid="">
                            <div class="uk-width-3-5@m">
                                <div class="uk-overlay">
                                    <h1 class="uk-animation-slide-bottom">Award-winning Products and Trading platforms</h1>
                                    <p class="uk-text-lead uk-visible@m uk-animation-slide-bottom">Tap into the world's markets and explore endless trading opportunities with tight spreads and no commission.</p>
                                    <a href="{{ route('register') }}" class="uk-button uk-button-primary uk-border-rounded  login uk-animation-slide-bottom"><i class="fas fa-scroll uk-margin-small-right"></i>Discover it now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="uk-container uk-light">
                <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-center"></ul>
            </div>
        </div>
    </div> <!-- section content begin -->





    <div class="uk-section uk-section-primary uk-section-xsmall">
        <div class="uk-container in-wave-1">
            <div class="uk-grid uk-grid-divider uk-child-width-1-2@s uk-child-width-1-4@m in-margin-top@s in-margin-bottom@s" data-uk-grid="">
                <div>
                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                        <div class="uk-width-auto">
                            <img src="img/in-lazy.html" data-src="img/in-wave-icon-1.svg" alt="wave-icon" width="48" height="48" data-uk-img="">
                        </div>
                        <div class="uk-width-expand">
                            <p>Free<br>analysis tools</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                        <div class="uk-width-auto">
                            <img src="img/in-lazy.html" data-src="img/in-wave-icon-2.svg" alt="wave-icon" width="48" height="48" data-uk-img="">
                        </div>
                        <div class="uk-width-expand">
                            <p>Fast execution<br>0 commision</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                        <div class="uk-width-auto">
                            <img src="img/in-lazy.html" data-src="img/in-wave-icon-3.svg" alt="wave-icon" width="48" height="48" data-uk-img="">
                        </div>
                        <div class="uk-width-expand">
                            <p>Low minimum<br>deposit of $500</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                        <div class="uk-width-auto">
                            <img src="img/in-lazy.html" data-src="img/in-wave-icon-4.svg" alt="wave-icon" width="48" height="48" data-uk-img="">
                        </div>
                        <div class="uk-width-expand">
                            <p>Over 2,100<br>assets to trade</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-large" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="uk-container in-wave-2">
            <div class="uk-grid-medium uk-grid-match " data-uk-grid="">
                <div class="uk-width-1-2@s uk-width-1-4@m">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center" style="background-image: url(img/in-wave-card-bg-1.html);">
                        <h5 class="uk-margin-remove">
                            <a href="#">FX <i class="fas fa-chevron-right fa-xs"></i></a>
                        </h5>
                        <p class="uk-margin-remove">Spread as low as</p>
                        <h1 class="uk-margin-top">0.2</h1>
                        <p class="uk-margin-remove-top uk-margin-bottom">pip</p>
                        <p>Trade 182 FX spot pairs and 140 forwards across majors, minors, exotics and metals.</p>
                    </div>
                </div>
                <div class="uk-width-1-2@s uk-width-1-4@m">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center" style="background-image: url(img/in-wave-card-bg-2.html);">
                        <h5 class="uk-margin-remove">
                            <a href="#">CFDs <i class="fas fa-chevron-right fa-xs"></i></a>
                        </h5>
                        <p class="uk-margin-remove">Spread from</p>
                        <h1 class="uk-margin-top">0.4</h1>
                        <p class="uk-margin-remove-top uk-margin-bottom">on US500</p>
                        <p>Go long or short on 9,000+ instruments with tight spreads &amp; low commissions.</p>
                    </div>
                </div>
                <div class="uk-width-1-2@s uk-width-1-4@m">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center" style="background-image: url(img/in-wave-card-bg-3.html);">
                        <h5 class="uk-margin-remove">
                            <a href="#">Stocks <i class="fas fa-chevron-right fa-xs"></i></a>
                        </h5>
                        <p class="uk-margin-remove">Commissions from</p>
                        <h1 class="uk-margin-top">$3</h1>
                        <p class="uk-margin-remove-top uk-margin-bottom">on US stocks</p>
                        <p>Access 19,000+ stocks across core and emerging markets on 36 exchanges worldwide.</p>
                    </div>
                </div>
                <div class="uk-width-1-2@s uk-width-1-4@m">
                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center" style="background-image: url(img/in-wave-card-bg-4.html);">
                        <h5 class="uk-margin-remove">
                            <a href="#">Commodities <i class="fas fa-chevron-right fa-xs"></i></a>
                        </h5>
                        <p class="uk-margin-remove">Commission as low as</p>
                        <h1 class="uk-margin-top">$1.25</h1>
                        <p class="uk-margin-remove-top uk-margin-bottom">per lot</p>
                        <p>Trade a wide range of commodities as CFDs, futures, options, spot pairs, &amp; more.</p>
                    </div>
                </div>
            </div>
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-5@m">

                    <div class="uk-grid-collapse uk-grid-divider uk-child-width-1-3@s uk-child-width-1-3@m uk-text-center uk-margin-top uk-margin-small-bottom" data-uk-grid="">
                        <div>
                            <i class="fas fa-headset fa-lg uk-margin-small-right uk-text-primary"></i>
                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">friendly customer support</p>
                        </div>
                        <div>
                            <i class="fas fa-university fa-lg uk-margin-small-right uk-text-primary"></i>
                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Regulated by the FCA,UK</p>
                        </div>
                        <div>
                            <i class="fas fa-history fa-lg uk-margin-small-right uk-text-primary"></i>
                            <p class="uk-margin-remove uk-text-small uk-text-uppercase">Over 10 years experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-margin-medium-top">
                <div class="uk-grid-divider uk-grid uk-grid-stack" data-uk-grid="">
                    <div class="uk-width-auto@m uk-flex uk-flex-middle uk-first-column">
                        <p class="uk-text-lead uk-text-muted uk-margin-right">As seen on</p>
                    </div>
                    <div class="uk-width-expand@m uk-grid-margin uk-first-column">
                        <div class="uk-grid-medium uk-child-width-1-4@s uk-child-width-1-5@m uk-text-center in-client-logo-3 uk-grid uk-grid-stack" data-uk-grid="">
                            <div class="uk-tile uk-tile-default uk-first-column">
                                <img class="uk-margin-remove" src="img/in-wave-media-1.svg" alt="client-logo" width="147" height="42">
                            </div>
                            <div class="uk-tile uk-tile-default uk-grid-margin uk-first-column">
                                <img class="uk-margin-remove" src="img/in-wave-media-2.svg" alt="client-logo" width="147" height="42">
                            </div>
                            <div class="uk-tile uk-tile-default uk-grid-margin uk-first-column">
                                <img class="uk-margin-remove" src="img/in-wave-media-3.svg" alt="client-logo" width="147" height="42">
                            </div>
                            <div class="uk-tile uk-tile-default uk-grid-margin uk-first-column">
                                <img class="uk-margin-remove" src="img/in-wave-media-4.svg" alt="client-logo" width="147" height="42">
                            </div>
                            <div class="uk-tile uk-tile-default uk-visible@m">
                                <img class="uk-margin-remove" src="img/in-wave-media-5.svg" alt="client-logo" width="147" height="42">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section content end -->




    <!-- section content begin -->
    <div class=" uk-section uk-section-muted uk-padding-remove-vertical uk-background-contain uk-background-center-right uk-background-image@m" style="background-image: url(img/in-wave-platformbg.html);" data-aos="fade-up"
         data-aos-duration="3000">
        <div class="uk-container in-wave-18 ">
            <div class="uk-grid-large uk-flex uk-flex-middle" data-uk-grid="">
                <div class="uk-width-1-2@m">
                    <div class="uk-margin-bottom">
                        <a href="#" class="uk-button in-button-app">
                            <i class="fab fa-android fa-2x"></i>
                            <span class="wrapper">Available on<span>Android</span></span>
                        </a>
                        <a href="#" class="uk-button in-button-app uk-margin-medium-left">
                            <i class="fab fa-apple fa-2x"></i>
                            <span class="wrapper">Available On<span>Mac OS</span></span>
                        </a>
                        <a href="#" class="uk-button in-button-app uk-margin-medium-left uk-visible@m">
                            <i class="fab fa-windows fa-2x"></i>
                            <span class="wrapper">Available On<span>windows</span></span>
                        </a>
                    </div>
                    <hr>
                    <h1 class="uk-margin-remove">Trade on <span class="in-highlight">world class</span> platform</h1>
                    <p class="uk-margin-medium-bottom in-margin-remove-bottom@s text-capitalize">Experience first class trading services and the best trading tools available in the market. </p>
                </div>
                <div class="uk-width-1-2@m">
                    <img class="uk-align-center uk-align-left@m" src="img/in-wave-mockup-5.png" alt="wave-mockup" width="533" height="330">
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->



    <!-- section content begin -->
    <div class="uk-section uk-padding-large in-offset-bottom-70 in-wave-6">
        <div class="uk-container">
            <div class="uk-grid-collapse uk-position-relative" data-uk-grid="">
                <div class="uk-position-bottom-right">
                    <img src="img/in-wave-background-2.png" alt="wave-hq" width="540" height="513">
                </div>
                <div class="uk-width-1-1">
                    <h1>Join a club of more than <span class="in-highlight">1,000,000+</span> Traders</h1>
                </div>
                <div class="uk-width-3-5@m">
                    <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top uk-margin-medium-bottom" data-uk-grid="">
                        <div data-aos="zoom-out">
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-award fa-2x in-icon-wrap small transparent"></i>
                                    </div>
                                    <div>
                                        <h4 class="uk-margin-remove">Best reputation</h4>
                                    </div>
                                </div>
                                <p class="text-capitalize uk-margin-small-top">Do your research, we are known for quality service, transparent and profitable trading </p>
                            </div>
                        </div>
                        <div data-aos="zoom-out">
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-tools fa-2x in-icon-wrap small transparent"></i>
                                    </div>
                                    <div>
                                        <h4 class="uk-margin-remove">Advanced tools</h4>
                                    </div>
                                </div>
                                <p class="uk-margin-small-top text-capitalize">Take advantage of our autotrade system.  sit back while our experts do all the work. Your investment portfolio will grow with every successful trade.</p>
                            </div>
                        </div>
                        <div data-aos="zoom-out">
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-users fa-2x in-icon-wrap small transparent"></i>
                                    </div>
                                    <div>
                                        <h4 class="uk-margin-remove">1, 000,000+ clients</h4>
                                    </div>
                                </div>
                                <p class="uk-margin-small-top text-capitalize">our satisfied customers list grows by day due to efficient and quality services received</p>
                            </div>
                        </div>
                        <div data-aos="zoom-out">
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-building fa-2x in-icon-wrap small transparent"></i>
                                    </div>
                                    <div>
                                        <h4 class="uk-margin-remove">Worldwide office</h4>
                                    </div>
                                </div>
                                <p class="uk-margin-small-top text-capitalize">our offices is located in 36 countries and growing.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->


    <!-- section content begin -->
    <div class="uk-section uk-section-muted uk-padding-large in-wave-3 uk-background-contain uk-background-center" style="background-image: url(img/in-wave-background-1.html);" data-uk-parallax="bgy: -200">
        <div class="uk-container">
            <div class="uk-grid-large uk-flex uk-flex-middle" data-uk-grid="">
                <div class="uk-width-1-2@m">
                    <img class="uk-margin-bottom" src="img/in-lazy.html" data-src="img/in-wave-icon-5.svg" alt="wave-icon" width="64" height="64" data-uk-img="">
                    <h1 class="uk-margin-remove">Market <span class="in-highlight">analysis</span> and<br>trade inspiration</h1>
                    <p class="text-capitalize">Best analysis and trade signals. cryptocurrency mining and multiple currency trading and exchanges.</p>
                    <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center uk-margin-medium-top" data-uk-grid="">
                        <div>
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <img class="uk-margin-remove-bottom" src="img/in-lazy.html" data-src="img/in-wave-icon-6.svg" alt="wave-icon" width="52" height="52" data-uk-img="">
                                <h5 class="uk-margin-small-top">Strategies &amp; Discussions</h5>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <img class="uk-margin-remove-bottom" src="img/in-lazy.html" data-src="img/in-wave-icon-7.svg" alt="wave-icon" width="52" height="52" data-uk-img="">
                                <h5 class="uk-margin-small-top">Forecasts &amp; Educations</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-inline uk-dark in-wave-video uk-margin-small-bottom">
                        <img class="uk-border-rounded uk-width-1-1" src="img/in-lazy.html" data-src="img/in-wave-image-1.jpg" alt="wave-video" width="533" height="355" data-uk-img="">
                        <div class="uk-position-center">
                            <a href="#modal-media-youtube" data-uk-toggle="">
                                <div class="in-play-button"></div>
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div id="modal-media-youtube" class="uk-flex-top" data-uk-modal="">
                            <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-iframe">
                                <button class="uk-modal-close-outside" type="button" data-uk-close=""></button>
                            </div>
                        </div>
                    </div>
                    <p class="uk-text-small uk-text-muted">Explore the markets at your own pace with short online courses. <span class="uk-label uk-text-small uk-border-pill">Sign up</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-large">
        <div class="uk-container in-wave-4">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-1-1 uk-text-center">
                    <h1 class="uk-margin-medium-bottom"><span class="in-highlight">Complete</span> package for every trader</h1>
                </div>
                <div class="uk-width-3-4@m">
                    <div class="uk-grid-collapse  uk-child-width-1-2@m in-wave-pricing" data-uk-grid="">
                        <div data-aos="flip-left" data-aos-duration="3000">
                            <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium">
                                <p class="uk-text-small uk-text-uppercase">Minimum funding<span class="uk-label uk-border-pill uk-text-small uk-margin-small-left">USD 500</span></p>
                                <h2 class="uk-margin-top uk-margin-remove-bottom">Classic account</h2>
                                <p class="uk-text-lead uk-text-muted uk-margin-remove-top">Benefit from industry-leading entry prices</p>
                                <hr>
                                <ul class="uk-list uk-list-bullet">
                                    <li>One of the established industry leaders</li>
                                    <li>Three decades of trading know-how</li>
                                    <li>Award-winning customer service*</li>
                                    <li>Highly-regarded trader education*</li>
                                    <li>Advanced risk management</li>
                                    <li>Tax-free spread betting profits</li>
                                    <li>Low minimum deposit</li>
                                </ul>
                                <a href="{{ route('register') }}" class="uk-button uk-button-default uk-border-rounded uk-align-center">Open an account<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                            </div>
                        </div>
                        <div data-aos="flip-right" data-aos-duration="3000">
                            <div class="uk-card uk-card-default uk-card-body uk-box-shadow-large">
                                <p class="uk-text-small uk-text-uppercase">Minimum funding<span class="uk-label uk-border-pill uk-text-small uk-margin-small-left">USD 1000</span></p>
                                <h2 class="uk-margin-top uk-margin-remove-bottom">Platinum account</h2>
                                <p class="uk-text-lead uk-text-muted uk-margin-remove-top">Receive even tighter spreads and commissions</p>
                                <hr>
                                <ul class="uk-list uk-list-bullet">
                                    <li>Award-winning trading platform*</li>
                                    <li>Wide range of charting tools</li>
                                    <li>Fast, automated excecution</li>
                                    <li>Expert news &amp; analysis</li>
                                    <li>Competitive spreads</li>
                                    <li>Advanced trading tools</li>
                                    <li>Tax-free spread betting profits</li>
                                </ul>
                                <a href="{{ route('register') }}" class="uk-button uk-button-primary uk-border-rounded uk-align-center">Open an account<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1">
                    <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-5@m uk-text-center uk-margin-large-top" data-uk-grid="">
                        <div>
                            <img src="img/in-lazy.html" data-src="img/in-wave-award.svg" alt="wave-award" width="71" height="58" data-uk-img="">
                            <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best CFD Broker</h6>
                            <p class="uk-text-small uk-margin-remove-top">TradeON Summit 2012</p>
                        </div>
                        <div>
                            <img src="img/in-lazy.html" data-src="img/in-wave-award.svg" alt="wave-award" width="71" height="58" data-uk-img="">
                            <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Trading Experience</h6>
                            <p class="uk-text-small uk-margin-remove-top">Jordan Forex EXPO 2020</p>
                        </div>
                        <div>
                            <img src="img/in-lazy.html" data-src="img/in-wave-award.svg" alt="wave-award" width="71" height="58" data-uk-img="">
                            <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Execution Broker</h6>
                            <p class="uk-text-small uk-margin-remove-top">Forex EXPO Dubai 2017</p>
                        </div>
                        <div>
                            <img src="img/in-lazy.html" data-src="img/in-wave-award.svg" alt="wave-award" width="71" height="58" data-uk-img="">
                            <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Trading Platform</h6>
                            <p class="uk-text-small uk-margin-remove-top">London Summit 2018</p>
                        </div>
                        <div class="uk-visible@m">
                            <img src="img/in-lazy.html" data-src="img/in-wave-award.svg" alt="wave-award" width="71" height="58" data-uk-img="">
                            <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Broker Asia</h6>
                            <p class="uk-text-small uk-margin-remove-top">iFX EXPO 2012</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->


    <div class="uk-section uk-padding-large in-wave-12 in-offset-bottom-70 ">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-3-4@m">
                    <h1 class="uk-margin-remove-bottom">Why traders <span class="in-highlight">choose</span> {{ env('APP_NAME') }}</h1>
                </div>
            </div>
            <div class="uk-grid-large uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-large-top uk-grid uk-grid-stack " data-uk-grid="">
                <div class="uk-first-column">
                    <div class="in-wave-12-counter">
                        <h1 class="uk-heading-medium uk-margin-remove">
                            <span class="count" data-counter-end="20">20</span>
                            <span class="in-wave-12-small">years</span>
                        </h1>
                        <h4 class="uk-margin-top uk-margin-remove-bottom">Experience</h4>
                        <p class="uk-text-muted uk-margin-remove-top">Since 2000</p>
                    </div>
                </div>
                <div class="uk-grid-margin uk-first-column">
                    <div class="in-wave-12-counter">
                        <h1 class="uk-heading-medium uk-margin-remove">
                            <span class="count" data-counter-end="15">15</span>
                            <span class="in-wave-12-small">years</span>
                        </h1>
                        <h4 class="uk-margin-top uk-margin-remove-bottom">UK Regulated</h4>
                        <p class="uk-text-muted uk-margin-remove-top">Since 2005</p>
                    </div>
                </div>
                <div class="uk-grid-margin uk-first-column">
                    <div class="in-wave-12-counter">
                        <h1 class="uk-heading-medium uk-margin-remove">
                            <span class="count" data-counter-end="18">18</span>
                            <span class="in-wave-12-small">K</span>
                        </h1>
                        <h4 class="uk-margin-top uk-margin-remove-bottom">Order per day</h4>
                        <p class="uk-text-muted uk-margin-remove-top">Fast execution</p>
                    </div>
                </div>
                <div class="uk-grid-margin uk-first-column">
                    <div class="in-wave-12-counter">
                        <h1 class="uk-heading-medium uk-margin-remove">
                            <span class="count" data-counter-end="24">24</span>
                            <span class="in-wave-12-small">/5</span>
                        </h1>
                        <h4 class="uk-margin-top uk-margin-remove-bottom">Customer support</h4>
                        <p class="uk-text-muted uk-margin-remove-top">Account manager</p>
                    </div>
                </div>
            </div>
            <div class=" uk-grid uk-flex uk-flex-center uk-background-contain uk-background-top-center in-testimoni-wrap uk-background-image@m" style="background-image: url(img/in-wave-testibg.html);">
                <div class="uk-width-3-4@m">
                    <div class="uk-flex uk-flex-middle uk-grid uk-grid-stack" data-uk-grid="">
                        <div class="uk-width-1-1 uk-width-auto@m uk-flex-last uk-flex-first@m uk-first-column uk-grid-margin" data-aos-duration="3000" data-aos="zoom-in-left">
                            <img class="uk-align-center uk-margin-remove-bottom" src="img/in-testimoni-1.png" alt="client-testimoni" width="300">
                        </div>
                        <div class="uk-width-1-1 uk-width-expand@m uk-first-column" data-aos="zoom-in-right" data-aos-duration="3000">
                            <blockquote>
                                <p class="uk-margin-bottom uk-text-large">It surpassed my expectations. Trading on the platform is excellent and it allows for making accurate graphical analyses of the market.</p>
                                <footer>Anthony Torres<br><cite class="uk-label uk-text-small uk-border-pill">Customer since 2012</cite></footer>
                            </blockquote>
                            <a href="customers.html" class="uk-link uk-button uk-button-primary uk-border-rounded">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="uk-section uk-section-muted uk-padding-large uk-background-cover uk-background-center-center" style="background-image: url(img/in-wave-background-3.jpg);">
        <div class="uk-container in-wave-7">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m">
                    <h4 class="uk-text-primary uk-margin-remove-bottom">Trade with confidence</h4>
                    <h1 class="uk-margin-small-top uk-margin-remove-bottom">New level of <span class="in-highlight">security</span></h1>
                    <div class="uk-grid-divider uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top uk-grid uk-grid-stack" data-uk-grid="">
                        <div class="uk-first-column">
                            <img class="uk-margin-remove-bottom" src="img/in-wave-icon-8.svg" alt="wave-icon" width="64">
                            <h3 class="uk-margin-small-top">Regulations &amp; funds</h3>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet voluptates repudiandae sint molestiae non recusandae.</p>
                        </div>
                        <div class="uk-grid-margin uk-first-column">
                            <img class="uk-margin-remove-bottom" src="img/in-wave-icon-9.svg" alt="wave-icon" width="64">
                            <h3 class="uk-margin-small-top">Depth of protection</h3>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet voluptates repudiandae sint molestiae non recusandae.</p>
                        </div>
                    </div>
                    <div class="in-create-account uk-margin-medium-top">
                        <span class="uk-label uk-text-small uk-text-uppercase uk-border-pill uk-margin-small-bottom">Open your account</span>
                        <p class="uk-margin-remove-top uk-visible@m">Connect with over 5 millions investors in the world’s leading investment network</p>
                        <form class="uk-grid-small uk-grid uk-grid-stack" data-uk-grid="">
                            <!--<div class="uk-width-1-1 uk-width-1-4@m uk-first-column">
                                <input class="uk-input uk-border-rounded" type="text" placeholder="Full name">
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@m uk-grid-margin uk-first-column">
                                <input class="uk-input uk-border-rounded" type="text" placeholder="Email address">
                            </div>
                            <div class="uk-width-1-1 uk-width-1-4@m uk-grid-margin uk-first-column">
                                <input class="uk-input uk-border-rounded" type="text" placeholder="Phone number">
                            </div>-->
                            <div class="uk-width-1-1 uk-width-1-8@m uk-grid-margin uk-first-column">
                                <button class="uk-button uk-button-primary uk-border-rounded uk-width-expand">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="figure_cont">
        <figure class="snip1157">
            <blockquote>It’s a wonderful platform ⭐️⭐️⭐️    <div class="arrow"></div>
            </blockquote>
            <i style="font-size:100px;" class="fas fa-user"></i>
            <div class="author">
                <h5>Andrew Collins  <span> Andrewcol****67@gmail.com</span></h5>
            </div>
        </figure>
        <figure class="snip1157">
            <blockquote>Enjoy working on this platform. CopyTrading has helped me earn a lot. ⭐️⭐️⭐️⭐️⭐️    <div class="arrow"></div>
            </blockquote>
            <i style="font-size:100px;" class="fas fa-user"></i>
            <div class="author">
                <h5>Abigail Olivia <span> abbyol******@gmail.com</span></h5>
            </div>
        </figure>
        <figure class="snip1157">
            <blockquote>Fantastic⭐️⭐️⭐️⭐️⭐️    <div class="arrow"></div>
            </blockquote>
            <i style="font-size:100px;" class="fas fa-user"></i>
            <div class="author">
                <h5>Robert Watson <span> robertw*****7@hotmail.com</span></h5>
            </div>
        </figure>
        <figure class="snip1157">
            <blockquote>Good platform, but stressful funding process for me, since I don’t know how to buy crypto. ⭐️    <div class="arrow"></div>
            </blockquote>
            <i style="font-size:100px;" class="fas fa-user"></i>
            <div class="author">
                <h5>Thompson White <span> thompson*****@outlook.com</span></h5>
            </div>
        </figure>
        <figure class="snip1157">
            <blockquote>Such an innovative platform. ⭐️⭐️⭐️    <div class="arrow"></div>
            </blockquote>
            <i style="font-size:100px;" class="fas fa-user"></i>
            <div class="author">
                <h5>Edwards Hall <span> Edwards****t65@gmail.com</span></h5>
            </div>
        </figure>
    </div>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1@m uk-margin-large-top">
                    <div class="uk-grid uk-grid-large" data-uk-grid="">
                        <div class="uk-width-1-3@m">
                            <h1 class="uk-margin-remove-bottom">Review</h1>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top">Drop a review about your experience here.</p>
                            <h4 class="uk-margin-medium-top uk-margin-remove-bottom">Message us</h4>
                            <p class="uk-margin-small-top">support@optionscaptrader.live</p>

                        </div>
                        <div class="uk-width-2-3@m">
                            <div class="uk-margin-medium-left in-margin-remove-left@s">
                                <form onsubmit="submitform(event,'en/php/review/index.html','#btn-rev')"  id="contact-form" class="uk-form uk-grid-small" data-uk-grid="">
                                    <div class="uk-width-1-2@s uk-inline">
                                        <span class="uk-form-icon fas fa-user fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="fullname" name="fullname" type="text" placeholder="Full name">
                                    </div>
                                    <div class="uk-width-1-2@s uk-inline">
                                        <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Email address">
                                    </div>
                                    <div class="uk-width-1-1">
                                        <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="5" placeholder="Message"></textarea>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <button class="uk-button uk-button-primary uk-border-rounded uk-align-right" id="btn-rev" type="submit" name="submit">Submit Review</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->


    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container in-wave-9">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m">
                    <div class="uk-grid-large uk-child-width-1-2@s uk-child-width-1-2@m uk-flex uk-flex-middle" data-uk-grid="">
                        <div data-aos="fade-in-left" data-aos-duration="3000">
                            <img src="img/in-wave-mockup-2.png" alt="wave-mockup">
                        </div>
                        <div data-aos="fade-in-right" data-aos-duration="3000">
                            <h2 class="uk-margin-remove-bottom in-offset-top-50">Metatrader 5</h2>

                            <p class="uk-margin-medium-bottom text-capitalize">best trading experience guaranteed. explore our modern tools and experienced experts for a high profit yield</p>

                            <a href="{{ route('register') }}" style="background-color: black; color: white" class="bg-success uk-button uk-button-default uk-border-rounded uk-align-center">Open an account<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->





    <!-- section content begin -->
    <div class="uk-section uk-section-primary in-offset-bottom-40">
        <div class="uk-container in-wave-10">
            <div class="uk-grid uk-position-relative uk-flex uk-flex-middle">
                <div class="uk-position-bottom-right in-offset-bottom-40">
                    <img src="img/in-wave-background-4.svg" alt="wave-hq" width="500">
                </div>
                <div class="uk-width-auto@m uk-text-center">
                    <img src="img/in-wave-icon-10.svg" alt="wave-icon" width="96">
                </div>
                <div class="uk-width-3-5@m">
                    <h2 class="uk-margin-remove-bottom">Financial Stability</h2>
                    <p class="text-capitalize">Financial stability is one of the most widely discussed issues in today’s economic literature. cryptocurrency and commodity trading will  help fight financial and economic crisis emerging in the world.
                        <a class="uk-text-small uk-text-uppercase uk-margin-small-left" href="#">Bill Gates<i class="fas fa-long-arrow-alt-right fa-sm uk-margin-small-left"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->


</main>

@endsection
