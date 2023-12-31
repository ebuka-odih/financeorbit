
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    {{--    <link rel="icon" href="https://master-admin-template.multipurposethemes.com/bs5/images/favicon.ico">--}}

    <title>{{ env('APP_NAME') }} - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('client/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/skin_color.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css" integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="//code.jivosite.com/widget/O0tOQeFah5" async></script>

</head>

<body class="hold-transition dark-skin theme-primary fixed">

<div class="wrapper">
    <div id="loader"></div>

    <header class="main-header">
        <div class="d-flex align-items-center logo-box justify-content-start">
            <!-- Logo -->
            <a href="{{ route('index') }}" class="logo">
                <!-- logo-->
                <h3 style="font-weight: bolder">{{ env('APP_NAME') }}</h3>
            </a>
        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item">
                        <a href="{{ route('index') }}" class="waves-effect waves-light nav-link push-btn btn-outline no-border" data-toggle="push-menu" role="button">
                            <img src="https://master-admin-template.multipurposethemes.com/bs5/images/svg-icon/collapse.svg" class="img-fluid svg-icon" alt="">
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <li class="btn-group nav-item d-lg-inline-flex d-none">
                        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-outline no-border full-screen" title="Full Screen">
                            <img src="https://master-admin-template.multipurposethemes.com/bs5/images/svg-icon/fullscreen.svg" class="img-fluid svg-icon" alt="">
                        </a>
                    </li>
                    <!-- Notifications -->


                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle btn-outline no-border" data-bs-toggle="dropdown" title="User">
                            <img src="https://master-admin-template.multipurposethemes.com/bs5/images/svg-icon/user.svg" class="img-fluid svg-icon" alt="">
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="{{ route('user.profile') }}"><i class="ti-user text-muted me-2"></i> Profile</a>
                                <a class="dropdown-item" href="{{ route('user.wallet') }}"><i class="fa fa-wallet text-muted me-2"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-tools text-muted me-2"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-lock text-muted me-2"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar position-relative">
            <div class="user-Wallets px-40 py-20">
                <p class="mb-5"><small>AVAILABLE BALANCE</small></p>
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="text-primary mb-0">@money(auth()->user()->balance) USD</h5>
                    </div>
                    <div>
                        <a href="{{ route('user.wallet') }}" class="waves-effect waves-light btn-sm btn btn-outline btn-primary"><i class="fa fa-bar-chart"></i></a>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-2 mb-2">
                    <div>
                        <p class="mb-0 fs-18"><small>Profits</small></p>
                    </div>
                    <div>
                        <p class="mb-0 fs-18"><small>@money(auth()->user()->balance) USD</small></p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-15">
                    <a href="{{ route('user.deposit') }}" class="waves-effect waves-light btn btn-primary text-white">Deposit</a>
                    <a href="{{ route('user.withdraw') }}" class="waves-effect waves-light btn btn-danger text-white">Withdraw</a>
                </div>
            </div>
            <div class="multinav">
                <div class="multinav-scroll" style="height: 100%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li>
                            <a href="{{ route('user.dashboard') }}">
                                <i style="margin-right: 2px;" class="fa fa-tachometer "></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.wallet') }}">
                                <i style="margin-right: 2px;" class="fa fa-wallet"></i>
                                <span>Wallets Overview</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.deposit.transactions') }}">
                                <i style="margin-right: 2px;" class="fa fa-money-bill "></i>
                                <span>Transactions</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i style="margin-right: 2px;" class="fa fa-history "></i>
                                <span>All History</span>
                                <span class="pull-right-container">
                              <i class="fa fa-angle-right pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('user.tradeHistory') }}"><i style="font-size: 10px" class="fa fa-ellipsis-h"><span class="path1"></span><span class="path2"></span></i> Trade History</a></li>
                                <li><a href="{{ route('user.copiedTrades') }}"><i style="font-size: 10px" class="fa fa-ellipsis-h"><span class="path1"></span><span class="path2"></span></i> Copied Trades</a></li>
                                <li><a href="{{ route('user.subscribeHistory') }}"><i style="font-size: 10px" class="fa fa-ellipsis-h"><span class="path1"></span><span class="path2"></span></i> Subscribed</a></li>
                                <li><a href="#"><i style="font-size: 10px" class="fa fa-ellipsis-h"><span class="path1"></span><span class="path2"></span></i> Staked </a></li>
                                <li><a href="#"><i style="font-size: 10px" class="fa fa-ellipsis-h"><span class="path1"></span><span class="path2"></span></i> Scalped History </a></li>
                                <li><a href="{{ route('user.miningHistory') }}"><i style="font-size: 10px" class="fa fa-ellipsis-h"><span class="path1"></span><span class="path2"></span></i> My Mining </a></li>
                                <li><a href="#"><i style="font-size: 10px" class="fa fa-ellipsis-h"><span class="path1"></span><span class="path2"></span></i> Amazon </a></li>
                            </ul>
                        </li>


                        <li class="header">TRADING</li>

                        <li>
                            <a href="{{ route('user.trade') }}">
                                <i style="margin-right: 2px;" class="fa fa-chart-area "></i>
                                <span>Futures</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.copy-trader.create') }}">
                                <i style="margin-right: 1px; " class="fa fa-copy "></i>
                                <span>Copy Trader</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.signals.index') }}">
                                <i style="margin-right: 1px;" class="fa fa-signal "></i>
                                <span>Daily Signal</span>
                            </a>
                        </li>


                        <li class="header">INVESTING</li>
                        <li>
                            <a href="{{ route('user.stocks.index') }}">
                                <i style="margin-right: 2px;" class="fa fa-trademark "></i>
                                <span>Stocks</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.mining.plans') }}">
                                <i style="margin-right: 2px;" class="fa fa-tools "></i>
                                <span>Mining</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('user.staked.create') }}">
                                <i style="margin-right: 2px;" class="fa fa-anchor "></i>
                                <span>Staking</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.sub.plans') }}">
                                <i style="margin-right: 2px;" class="fa fa-paper-plane "></i>
                                <span>Subscription</span>
                            </a>
                        </li>
                        @if(auth()->user()->status == 1)
                        <li>
                            <a href="{{ route('user.verify') }}">
                                <i style="margin-right: 2px;" class="text-danger fa fa-check-circle "></i>
                                <span>Verify</span>
                            </a>
                        </li>
                        @endif
                    </ul>

                    <div class="sidebar-widgets">
                        <div class="copyright text-start m-25">
                            <p><strong class="d-block">{{ env('APP_NAME') }}</strong> © {{ Date('Y') }} All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">FAQ</a>
                </li>
            </ul>
        </div>
        &copy; {{ Date('Y') }} <a href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a>. All Rights Reserved.
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->



<!-- Page Content overlay -->
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Vendor JS -->

<script src="{{ asset('client/js/vendors.min.js') }}"></script>
<script src="https://master-admin-template.multipurposethemes.com/bs5/assets/icons/feather-icons/feather.min.js"></script>

<!-- Master Admin App -->
<script src="{{ asset('client/js/template.js')}}"></script>
<script src="{{ asset('client/js/pages/dashboard.js') }}"></script>

<script src="//code.tidio.co/xnir84l1ajqwnulickksrjcbt8eunur9.js" async></script>

</body>

<!-- Mirrored from master-admin-template.multipurposethemes.com/bs5/crypto-dark/wallets.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 05:07:16 GMT -->
</html>
