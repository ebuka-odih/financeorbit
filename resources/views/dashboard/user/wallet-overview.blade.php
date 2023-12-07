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
                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i style="margin-right: 5px;" class="fa fa-coins fs-24 "></i>
                                        <div>
                                            <h4 class="mb-0">Total Deposit</h4>
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
                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i style="margin-right: 5px;" class="fa fa-coins fs-24 "></i>
                                        <div>
                                            <h4 class="mb-0">Total Withdrawal</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-20 mb-5">
                                    <h3 class="my-0 fw-600"><span class="text-primary">@money($withdrawal)</span> USD</h3>
                                </div>
                            </div>
                            <div class="box-footer">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-money me-5"></i>Transactions</a></li>
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
                                            <h4 class="mb-0">Total Bonus</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-20 mb-5">
                                    <h3 class="my-0 fw-600"><span class="text-primary">@money($user->ref_bonus)</span> USD</h3>
                                </div>
                            </div>
                            <div class="box-footer">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-money me-5"></i>Transactions</a></li>
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
                                            <h4 class="mb-0">Last Deposit</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-20 mb-5">
                                    <h3 class="my-0 fw-600"><span class="text-primary">0.00</span> USD</h3>
                                </div>
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
                                            <h4 class="mb-0">Last Withdrawal</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-20 mb-5">
                                    <h3 class="my-0 fw-600"><span class="text-primary">@money($last_withdrawal)</span> USD</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
