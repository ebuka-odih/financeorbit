@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Futures Trading</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xxxl-8 col-xl-7 col-12">
                        <div class="box">
                            <div class="box-body">
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
                    </div>
                    <div class="col-xxxl-4 col-xl-5 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Place Your Trade</h4>
                            </div>
                            <div class="box-body p-10">
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
                                        <div class="col-lg-12">
                                            <p class="mg-b-10 tx-semibold">Type</p>
                                            <select id="pairType" onchange="toggleBeneficiaryFields()" name="type" class="form-control select2-no-search">
                                                <option value="">Choose Trade Type</option>

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
                                    <br>
                                    <div class="row row-sm mg-b-20">
                                        <div class="d-flex">
                                        <span class="text-dark tx-semibold">

                                            <div class="button">
                                              <input type="radio" id="a25" value="BUY" name="type" required=""/>
                                              <label class="btn btn-secondary btn-lg btn-block rounded-12 mt-12" for="a25">BUY</label>
                                            </div>

                                        </span>

                                            <div class="ms-auto fs-14 text-dark tx-semibold">

                                                <div style="text-align: right; " class="button ">
                                                    <input type="radio" id="a50" value="SELL" name="type" required="" />
                                                    <label class="btn btn-danger btn-lg btn-block rounded-12 mt-12 mb-5" for="a50">SELL</label><br>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="alert alert-info fade show mt-3" role="alert">
                                        <center>	Your trade will auto close if SL or TP does not hit.</center>

                                    </div>

                                    <button type="submit" name="trad" class="btn btn-outline-primary btn-block rounded-6 mt-4">Place Order</button>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
