@extends('dashboard.layout.app')
@section('content')

    <div style="margin-top: 100px" class="main-container container-fluid">
        <div class="inner-body">
            <div id="mobileshow" class="see"></div>
            <div class="sees hide-mobile"></div>
            <!--Row-->
            <div class="row row-sm">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 col-xxl-8">
                    <div class="card custom-card overflow-hidden">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div id="tradingview_a6649"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">
                                new TradingView.widget(
                                    {
                                        "width": "100%",
                                        "height": 610,
                                        "symbol": "BINANCE:BTCUSDT",
                                        "interval": "D",
                                        "timezone": "Etc/UTC",
                                        "theme": "dark",
                                        "style": "1",
                                        "locale": "en",
                                        "enable_publishing": false,
                                        "allow_symbol_change": true,
                                        "container_id": "tradingview_a6649"
                                    }
                                );
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
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
                                            <span class="text-dark tx-semibold">Balance ~ <font color="teal">$ @money(auth()->user()->balance)</font></span>

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
                                            <span class="text-dark tx-semibold">Balance ~ <font color="teal">$ @money(auth()->user()->balance)</font></span>


                                        </div>
                                    </div>


                                </div>


                                <div id="beneficiaryField3" style="display:none;">

                                    <div class="row row-sm mg-b-20">
                                        <div class="col-lg-12">
                                            <p class="mg-b-10 tx-semibold">VIP SELECTED TRADES</p>


                                            <select name="currency_vip" class="form-control select2-no-search" >
                                                <option value="VIP SELECTED TRADES">ALL VIP SELECTED ASSETS </option></select>

                                        </div>
                                        <div class="d-flex">
                                            <span class="text-dark tx-semibold">Balance ~ <font color="teal">$ 0.00</font></span>


                                        </div>
                                    </div>


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
                <!-- End Row -->
                <!--Row-->

            </div>
            <br>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 col-xxl-12">
                <div class="card custom-card overflow-hidden">

                    <div class="card-header border-bottom">
                        <div>
                            <h3 class="card-title tx-18"><label class="main-content-label tx-15">TRADES/ROI</label></h3>
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
                                        <td>{{ $item->profit ? : "$ 0.00" }}</td>
                                        <td>{!! $item->status() !!}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
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
