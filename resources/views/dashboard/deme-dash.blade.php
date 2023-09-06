@extends('dashboard.layout.app')
@section('content')

    <div style="margin-top: 100px"  class="main-container container-fluid">
        <div class="inner-body">
            <div id="mobileshow" class="see"></div>
            <div class="sees hide-mobile"></div>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                        "symbols": [
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "Bitcoin"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "Ethereum"
                        },
                        {
                            "description": "BNB",
                            "proName": "KUCOIN:BNBUSDT"
                        },
                        {
                            "description": "Ripple",
                            "proName": "BINANCE:XRPUSDT"
                        },
                        {
                            "description": "LTC",
                            "proName": "BYBIT:LTCUSDT.P"
                        }
                    ],
                        "showSymbolLogo": true,
                        "colorTheme": "dark",
                        "isTransparent": false,
                        "displayMode": "adaptive",
                        "locale": "en"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
            <!--Row-->
            <div class="row row-sm">
                <div class="col-sm-12 col-lg-12 col-xl-8 col-xxl-8">

                    <!--Row-->
                    <div class="row row-sm">
                        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-4 col-xxl-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="transaction">
                                        <div class="transaction-blog">
                                            <div class="">
                                                <svg class="wd-30 ht-40 me-3 my-auto" fill="#01b8ff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M96 352V96c0-35.3 28.7-64 64-64H416c35.3 0 64 28.7 64 64V293.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7H160c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16v48H208c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h48v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V256h48c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H320V144c0-8.8-7.2-16-16-16H272zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24H136C60.9 512 0 451.1 0 376V152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88H296z"/></svg>
                                            </div>
                                            <div class="transaction-details d-flex">
                                                <div>
                                                    <span class="text-dark tx-bold-12"> Total Balance</span>
                                                    <h5 class="text-muted tx-bold-12" id="balance">{{ auth()->user()->currency }}@money(auth()->user()->balance)</h5></div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="transaction">
                                        <div class="transaction-blog">
                                            <div class="">
                                                <i style="font-size: 20px" class="fa fa-signal"></i>
                                                {{--                                                <svg class="wd-30 ht-40 me-3 my-auto" fill="#01b8ff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M96 352V96c0-35.3 28.7-64 64-64H416c35.3 0 64 28.7 64 64V293.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7H160c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16v48H208c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h48v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V256h48c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H320V144c0-8.8-7.2-16-16-16H272zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24H136C60.9 512 0 451.1 0 376V152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88H296z"/></svg>--}}
                                            </div>
                                            <div class="transaction-details d-flex">
                                                <div class="col-12">
                                                    <span class="text-dark tx-bold-12"> Trading Progress</span>
                                                    <div class="progress mt-2">
                                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row row-sm">
                            <div class="col-md-12 col-lg-12">
                                <div class="card custom-card">
                                    <div class="card-body">	<div>
                                            <h6 class="main-content-label mb-1">Account Notifications:</h6>
                                            <h6>Hello {{ auth()->user()->firstname }}! Your Trading Account is active.	</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-12">

                            <ul id="mobileshow" class="tabs-menu nav mb-0">
                                <li class="">
                                    <a href="{{ route('user.deposit') }}"  class="active btn btn-info">Deposit</a> &nbsp; &nbsp;
                                    <a href="{{ route('user.withdraw') }}" class="btn ripple btn-dark-transparent">Withdraw</a>

                            </ul>
                        </div>

                        <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
                                {
                                    "symbols": [
                                    {
                                        "proName": "FOREXCOM:SPXUSD",
                                        "title": "S&P 500"
                                    },
                                    {
                                        "proName": "FOREXCOM:NSXUSD",
                                        "title": "US 100"
                                    },
                                    {
                                        "proName": "FX_IDC:EURUSD",
                                        "title": "EUR/USD"
                                    },
                                    {
                                        "proName": "BITSTAMP:BTCUSD",
                                        "title": "Bitcoin"
                                    },
                                    {
                                        "proName": "BITSTAMP:ETHUSD",
                                        "title": "Ethereum"
                                    }
                                ],
                                    "colorTheme": "dark",
                                    "isTransparent": true,
                                    "showSymbolLogo": true,
                                    "locale": "en"
                                }
                            </script>
                            <!-- TradingView Widget END -->

                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                {
                                    "colorTheme": "dark",
                                    "dateRange": "12M",
                                    "showChart": true,
                                    "locale": "en",
                                    "largeChartUrl": "",
                                    "isTransparent": true,
                                    "showSymbolLogo": true,
                                    "showFloatingTooltip": false,
                                    "width": "100%",
                                    "height": "660",
                                    "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                    "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                    "gridLineColor": "rgba(240, 243, 250, 0)",
                                    "scaleFontColor": "rgba(106, 109, 120, 1)",
                                    "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                    "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                    "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                    "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                    "symbolActiveColor": "rgba(66, 66, 66, 0.12)",
                                    "tabs": [
                                    {
                                        "title": "Futures",
                                        "symbols": [
                                            {
                                                "s": "CME_MINI:ES1!",
                                                "d": "S&P 500"
                                            },
                                            {
                                                "s": "CME:6E1!",
                                                "d": "Euro"
                                            },
                                            {
                                                "s": "COMEX:GC1!",
                                                "d": "Gold"
                                            },
                                            {
                                                "s": "NYMEX:CL1!",
                                                "d": "Crude Oil"
                                            },
                                            {
                                                "s": "NYMEX:NG1!",
                                                "d": "Natural Gas"
                                            },
                                            {
                                                "s": "CBOT:ZC1!",
                                                "d": "Corn"
                                            }
                                        ],
                                        "originalTitle": "Futures"
                                    },
                                    {
                                        "title": "Forex",
                                        "symbols": [
                                            {
                                                "s": "FX:EURUSD",
                                                "d": "EUR/USD"
                                            },
                                            {
                                                "s": "FX:GBPUSD",
                                                "d": "GBP/USD"
                                            },
                                            {
                                                "s": "FX:USDJPY",
                                                "d": "USD/JPY"
                                            },
                                            {
                                                "s": "FX:USDCHF",
                                                "d": "USD/CHF"
                                            },
                                            {
                                                "s": "FX:AUDUSD",
                                                "d": "AUD/USD"
                                            },
                                            {
                                                "s": "FX:USDCAD",
                                                "d": "USD/CAD"
                                            }
                                        ],
                                        "originalTitle": "Forex"
                                    },
                                    {
                                        "title": "Crypto",
                                        "symbols": [
                                            {
                                                "s": "BINANCE:BTCUSDT"
                                            },
                                            {
                                                "s": "BINANCE:ETHUSDT"
                                            },
                                            {
                                                "s": "BINANCE:XRPUSDT"
                                            },
                                            {
                                                "s": "BINANCE:SOLUSDT"
                                            },
                                            {
                                                "s": "BINANCE:DOGEUSDT"
                                            },
                                            {
                                                "s": "BITSTAMP:BTCUSD"
                                            },
                                            {
                                                "s": "BITSTAMP:ETHUSD"
                                            }
                                        ]
                                    },
                                    {
                                        "title": "Stock",
                                        "symbols": [
                                            {
                                                "s": "AMEX:SPY"
                                            },
                                            {
                                                "s": "NASDAQ:TSLA"
                                            },
                                            {
                                                "s": "NASDAQ:AAPL"
                                            },
                                            {
                                                "s": "NASDAQ:NFLX"
                                            },
                                            {
                                                "s": "NASDAQ:AMZN"
                                            },
                                            {
                                                "s": "NASDAQ:AMD"
                                            },
                                            {
                                                "s": "NASDAQ:NVDA"
                                            }
                                        ]
                                    }
                                ]
                                }
                            </script>
                            <!-- TradingView Widget END --><br>
                        </div>

                    </div>
                    <!--End row-->

                </div>


                <div class="col-sm-12 col-lg-12 col-xl-4 col-xxl-4">
                    <div class="card custom-card overflow-hidden crypto-buysell-card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title tx-18"><label class="main-content-label tx-15">TRADING SESSION</label></h3>
                        </div>

                        <div class="card-body">
                            @if(auth()->user()->balance < 1)
                                <div class="alert alert-info fade show" role="alert">
                                    <center style="color:red;">INSUFFICIENT TRADING BALANCE.</center>

                                </div>
                            @endif

                            <form class="form" method="POST" action="{{ route('user.placeTrade') }}">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                @if(session()->has('declined'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('declined') }}
                                    </div>
                                @endif

                                <div class="row row-sm mg-b-20">
                                    <div class="d-flex">
                                    <span class="text-dark tx-semibold">

                                        <div class="button">
                                          <input type="radio" id="a25" value="BUY" name="trade_action" required=""/>
                                          <label class="btn btn-outline-primary btn-lg btn-block rounded-12 mt-12" for="a25">BUY</label>
                                        </div>

                                        </span>

                                        <div class="ms-auto fs-14 text-dark tx-semibold">

                                            <div style="text-align: right" class="button">
                                                <input type="radio" id="a50" value="SELL" name="trade_action" required="" />
                                                <label class="btn btn-outline-primary btn-lg btn-block rounded-12 mt-12" for="a50">SELL</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg-12">
                                        <p class="mg-b-10 tx-semibold">Type</p>
                                        <select id="pairType" onchange="toggleBeneficiaryFields()" name="type" class="form-control select2-no-search">
                                            <option value="">Choose Trade Type</option>

                                            {{--                                            <option value="vip">Vip Trades</option>--}}
                                            <option value="crypto">Crypto</option>
                                            <option value="forex">Forex</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="beneficiaryField1" style="display:none;">
                                    <div class="row row-sm mg-b-20">
                                        <div class="col-lg-12">
                                            <p class="mg-b-10 tx-semibold">Crypto Assets</p>
                                            <select name="symbol" class="form-control select2-no-search" >

                                                <option value="ETH/USD">ETH/USD</option>
                                                <option value="BTC/USD">BTC/USD </option>
                                                <option value="ETH/USDT">ETH/USDT </option>
                                                <option value="BTC/USDT">BTC/USDT </option>
                                                <option value="USD/BTC">USD/BTC </option>
                                                <option value="USD/ETH">USD/ETH </option>
                                                <option value="USD/USDT">USD/USDT </option>
                                                <option value="USD/MATIC">USD/MATIC </option>
                                                <option value="USD/ADA">USD/ADA </option>
                                                <option value="DAI/ETH">DAI/ETH </option>
                                                <option value="DAI/USDC">DAI/USDC </option>
                                                <option value="USDT/BTC">USDT/BTC </option>
                                                <option value="USDT/ETH">USDT/ETH </option>
                                                <option value="USDT/DOGE">USDT/DOGE </option>
                                                <option value="USDT/BCH">USDT/BCH </option>
                                                <option value="USDT/LTC">USDT/LTC </option>
                                                <option value="ETH/BTC">ETH/BTC </option>
                                                <option value="ETH/BCH">ETH/BCH </option>
                                                <option value="ETH/LINK">ETH/LINK </option>
                                                <option value="ETH/ADA">ETH/ADA </option>
                                                <option value="ETH/DOGE">ETH/DOGE </option>
                                                <option value="BTC/ETH">BTC/ETH </option>
                                                <option value="BTC/DOGE">BTC/DOGE </option>
                                                <option value="BTC/LTC">BTC/LTC </option>
                                                <option value="BTC/ADA">BTC/ADA </option>
                                                <option value="BTC/XLM">BTC/XLM </option>
                                                <option value="DAI/wETH">DAI/wETH </option>
                                            </select>

                                        </div>
                                        <div class="d-flex">
                                            <span class="text-dark tx-semibold">Balance ~ <font color="teal">{{ auth()->user()->currency }} @money(auth()->user()->balance)</font></span>

                                        </div>
                                    </div>

                                </div>
                                <div id="beneficiaryField2" style="display:none;">

                                    <div class="row row-sm mg-b-20">
                                        <div class="col-lg-12">
                                            <p class="mg-b-10 tx-semibold">Forex Assets</p>
                                            <select name="symbol" class="form-control select2-no-search">

                                                <option value="AUD/CAD">AUD/CAD </option>
                                                <option value="AUD/CHF">AUD/CHF </option>
                                                <option value="AUD/JPY">AUD/JPY </option>
                                                <option value="AUD/NZD">AUD/NZD </option>
                                                <option value="AUD/USD">AUD/USD </option>
                                                <option value="EUR/AUD">EUR/AUD </option>
                                                <option value="GBP/AUD">GBP/AUD </option>
                                                <option value="AUD/CAD">AUD/CAD </option>
                                                <option value="CAD/CHF">CAD/CHF </option>
                                                <option value="CAD/JPY">CAD/JPY </option>
                                                <option value="EUR/CAD">EUR/CAD </option>
                                                <option value="GBP/CAD">GBP/CAD </option>
                                                <option value="NZD/CAD">NZD/CAD </option>
                                                <option value="USD/CAD">USD/CAD </option>
                                                <option value="AUD/CHF">AUD/CHF </option>
                                                <option value="CAD/CHF">CAD/CHF </option>
                                                <option value="CHF/JPY">CHF/JPY </option>
                                                <option value="EUR/CHF">EUR/CHF </option>
                                                <option value="GBP/CHF">GBP/CHF </option>
                                                <option value="NZD/CHF">NZD/CHF </option>
                                                <option value="USD/CHF">USD/CHF </option>
                                                <option value="EUR/AUD">EUR/AUD </option>
                                                <option value="EUR/CAD">EUR/CAD </option>
                                                <option value="EUR/CHF">EUR/CHF </option>
                                                <option value="EUR/GBP">EUR/GBP </option>
                                                <option value="EUR/JPY">EUR/JPY </option>
                                                <option value="EUR/NZD">EUR/NZD </option>
                                                <option value="EUR/USD">EUR/USD </option>
                                                <option value="GBP/AUD">GBP/AUD </option>
                                                <option value="GBP/CAD">GBP/CAD </option>
                                                <option value="GBP/CHF">GBP/CHF </option>
                                                <option value="GBP/JPY">GBP/JPY </option>
                                                <option value="GBP/NZD">GBP/NZD </option>
                                                <option value="GBP/USD">GBP/USD </option>
                                                <option value="EUR/GBP">EUR/GBP </option>
                                                <option value="NZD/CAD">NZD/CAD </option>
                                                <option value="NZD/CHF">NZD/CHF </option>
                                                <option value="NZD/JPY">NZD/JPY </option>
                                                <option value="NDZ/USD">NDZ/USD </option>
                                                <option value="AUD/NZD">AUD/NZD </option>
                                                <option value="EUR/NZD">EUR/NZD </option>
                                                <option value="AUD/JPY">AUD/JPY </option>
                                                <option value="CAD/JPY">CAD/JPY </option>
                                                <option value="CHF/JPY">CHF/JPY </option>
                                                <option value="EUR/JPY">EUR/JPY </option>
                                                <option value="GBP/JPY">GBP/JPY </option>
                                                <option value="NZD/JPY">NZD/JPY </option>
                                                <option value="USD/JPY">USD/JPY </option>
                                                <option value="AUD/USD">AUD/USD </option>
                                                <option value="EUR/USD">EUR/USD </option>
                                                <option value="GBP/USD">GBP/USD </option>
                                                <option value="NZD/USD">NZD/USD </option>
                                                <option value="USD/CAD">USD/CAD </option>
                                                <option value="USD/CHF">USD/CHF </option>
                                                <option value="USD/JPY">USD/JPY </option>
                                            </select>

                                        </div>
                                        <div class="d-flex">
                                            <span class="text-dark tx-semibold">Balance ~ <font color="teal">{{ auth()->user()->currency }} @money(auth()->user()->balance)</font></span>


                                        </div>
                                    </div>


                                </div>


                                <div id="beneficiaryField3" style="display:none;">




                                </div>


                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg-12">
                                        <div class="form-group text-start">
                                            <label class="tx-medium">Amount</label>
                                            <input class="form-control" name="amount" placeholder="500" type="number" required>
                                        </div>

                                    </div>
                                </div>


                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg-12">
                                        <p class="mg-b-10 tx-semibold">Lot Size</p>
                                        <select id="inputState" name="leverage" class="form-control select2-no-search" required="">
                                            <option value="2">
                                                2 LS
                                            </option>
                                            <option value="5">
                                                5 LS
                                            </option>
                                            <option value="10">
                                                10 LS
                                            </option>
                                            <option value="15">
                                                15 LS
                                            </option>
                                        </select>
                                    </div>
                                </div>



                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg-12">
                                        <div class="form-group text-start">
                                            <label class="tx-medium">Take Profit</label>
                                            <input class="form-control" name="tp" placeholder="1.0013" type="text" required>
                                        </div>

                                    </div>
                                </div>


                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg-12">
                                        <div class="form-group text-start">
                                            <label class="tx-medium">Stop Loss</label>
                                            <input class="form-control" name="sl" placeholder="1.0013" type="text" required>
                                        </div>

                                    </div>
                                </div>


                                <div class="row row-sm mg-b-20">
                                    <div class="col-lg-12">
                                        <p class="mg-b-10 tx-semibold">Time in Force</p>
                                        <select class="form-control select2-no-search" name="execution_time">
                                            <option value="5">
                                                5 mintues
                                            </option>
                                            <option value="10">
                                                10 mintues
                                            </option>
                                            <option value="15">
                                                15 mintues
                                            </option>
                                            <option value="30">
                                                30 mintues
                                            </option>
                                        </select>
                                    </div>
                                </div>


                                <div class="alert alert-info fade show" role="alert">
                                    <center>	Your trade will auto close if SL or TP does not hit.</center>

                                </div>

                                <button type="submit" name="trad" class="btn btn-outline-primary btn-lg btn-block rounded-6 mt-4">Place Order</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->

            <!--Row-->
            <div class="row row-sm">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 col-xxl-8">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header border-bottom">
                            <div>
                                <h3 class="card-title tx-18"><label class="main-content-label tx-15">LATEST TRADES</label></h3>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <div class="table-responsive">
                                <table class="table table-borderless text-nowrap text-md-nowrap table-hover mg-b-0">
                                    <thead>
                                    <tr>
                                        <th>
                                            Type
                                        </th>
                                        <th>
                                            Pair
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                        <th>
                                            Entry
                                        </th>
                                        <th>
                                            SL
                                        </th>
                                        <th>
                                            TP
                                        </th>
                                        <th>
                                            Results
                                        </th>
                                        <th>
                                            Details
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($trades as $item)
                                        <tr>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->symbol }}</td>
                                            <td>{{ $item->trade_action }}</td>
                                            <td>{{ $item->execution_time }}</td>
                                            <td>{{ $item->sl }}</td>
                                            <td>{{ $item->tp }}</td>
                                            <td>{{ auth()->user()->currency }}{{ $item->profit ? : "0.00" }}</td>
                                            <td>{!! $item->status() !!}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                    <div class="row row-sm">
                        <div class="col-12">
                            <div class="card custom-card">
                                <div class="card-header border-bottom">
                                    <div>
                                        <h3 class="card-title tx-18"><label class="main-content-label tx-15">ACCOUNT SUMMARY</label></h3>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="transaction">
                                        <div class="transaction-blog">
                                            <div class="">
                                                <svg class="wd-30 ht-40 me-3 my-auto" fill="#01b8ff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                                            </div>
                                            <div class="transaction-details d-flex">
                                                <div>
                                                    <span class="text-dark tx-bold-12"> Total Deposits</span>
                                                    <h5 class="text-muted tx-bold-12"> {{ auth()->user()->currency }} @money($deposits)</h5></div>
                                                <div class="ms-auto fs-14 text-danger font-weight-normal">
                                                    <a href="{{ route('user.deposit') }}" class="btn ripple btn-warning-transparent">Deposit</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="transaction">
                                        <div class="transaction-blog">
                                            <div class="">
                                                <svg class="wd-30 ht-40 me-3 my-auto" fill="#01b8ff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM184 232H328c13.3 0 24 10.7 24 24s-10.7 24-24 24H184c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/></svg>
                                            </div>
                                            <div class="transaction-details d-flex">
                                                <div>
                                                    <span class="text-dark tx-bold-12"> Total Withdrawals</span>
                                                    <h5 class="text-muted tx-bold-12"> {{ auth()->user()->currency }} @money($withdrawal)</h5></div>
                                                <div class="ms-auto fs-14 text-danger font-weight-normal">
                                                    <a href="{{ route('user.withdraw') }}" class="btn ripple btn-warning-transparent">New</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">

                                    <div class="transaction">
                                        <div class="transaction-blog">
                                            <div class="">
                                                <svg class="wd-30 ht-40 me-3 my-auto text-succes" fill="#01b8ff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                                            </div>
                                            <div class="transaction-details d-flex">
                                                @if(auth()->user()->status < 2)
                                                    <div>
                                                        <span class="text-dark tx-bold-12"> Verification</span>
                                                        <p class="text-muted tx-bold-12"> Your account is not verified.</p>
                                                    </div>

                                                    <div class="ms-auto fs-14 text-danger font-weight-normal">
                                                        <a href="{{ route('user.verify') }}" class="btn ripple btn-warning-transparent">Verify</a>
                                                    </div>
                                                @else
                                                    <div>
                                                        <span class="text-dark tx-bold-12"> Verification</span>
                                                        <p class="text-success tx-bold-12"> Your account is verified.</p>
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>
                <!-- End Row -->
                <!--Row-->

            </div>
        </div>
    </div>

    <script>
        function toggleBeneficiaryFields() {
            const pairType = document.getElementById('pairType').value;
            const beneficiaryField1 = document.getElementById('beneficiaryField1');
            const beneficiaryField2 = document.getElementById('beneficiaryField2');

            if (pairType === 'crypto') {
                beneficiaryField1.style.display = 'block';
                beneficiaryField2.style.display = 'none';
            } else if (pairType === 'forex') {
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'block';
            }
        }
    </script>

@endsection
