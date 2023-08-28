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
                <div class="row">
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
                            <div class="tradingview-widget-container">
                                <div id="tradingview_27eff"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                <script type="text/javascript">
                                    new TradingView.widget(
                                        {
                                            "width": '100%',
                                            "height": 500,
                                            "symbol": "BITSTAMP:BTCUSD",
                                            "interval": "D",
                                            "timezone": "Etc/UTC",
                                            "theme": "dark",
                                            "style": "1",
                                            "locale": "en",
                                            "enable_publishing": false,
                                            "allow_symbol_change": true,
                                            "container_id": "tradingview_27eff"
                                        }
                                    );
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
