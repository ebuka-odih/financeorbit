@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Your Wallet</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Wallet Overview</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
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
                <div class="row mt-3">
                    <div class="col-lg-4 col-12">
                        <div class="box bg-primary">
                            <div class="box-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i style="margin-right: 5px;" class="fa fa-coins fs-24 "></i>
                                        <div>
                                            <h4 class="mb-0"> Main Balance</h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="mt-20 mb-5">
                                    <h3 class="my-0 fw-600"><span class="text-warning">@money($user->balance)</span> USD</h3>
                                </div>
                            </div>
                            <div class="box-footer">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#" class="text-white hover-warning"><i class="fa fa-send-o me-5"></i>Invest</a></li>
                                    <li class="list-inline-item"><a href="{{ route('user.withdraw') }}" class="text-white hover-warning"><i class="fa fa-money me-5"></i>Withdraw</a></li>
                                    <li class="list-inline-item"><a href="{{ route('user.deposit') }}" class="text-white hover-warning"><i class="fa fa-download me-5"></i>Deposit</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i style="margin-right: 5px;" class="fa fa-coins fs-24 "></i>
                                        <div>
                                            <h4 class="mb-0">Profit</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-20 mb-5">
                                    <h3 class="my-0 fw-600"><span class="text-primary">@money($user->profit)</span> USD</h3>
                                </div>
                            </div>
                            <div class="box-footer">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#" class="text-white hover-warning"><i class="fa fa-send-o me-5"></i>Invest</a></li>
                                    <li class="list-inline-item"><a href="{{ route('user.withdraw') }}" class="text-white hover-warning"><i class="fa fa-money me-5"></i>Withdraw</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i style="margin-right: 5px;" class="fa fa-coins fs-24 "></i>
                                        <div>
                                            <h4 class="mb-0">Total Invested</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-20 mb-5">
                                    <h3 class="my-0 fw-600"><span class="text-primary">@money($deposits)</span> USD</h3>
                                </div>
                            </div>
                            <div class="box-footer">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-money me-5"></i>Transactions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-12">
                        <div class="box">
                            <div class="box-body text-center">
                                <a href="{{ route('user.wallet') }}">View all <i class="fa fa-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">

                    </div>
                    <div class="col-xl-12 col-12">
                        <div class="box">
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
                            <!-- TradingView Widget END -->

                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
