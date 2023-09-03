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
                                    <li class="breadcrumb-item active" aria-current="page"> Trading Signal</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="col-xxxl-12 col-xl-7 col-12">


                    <div class="box">
                        <div class="box-header">
                            <h1 class="text-center"><strong>DAILY SIGNALS</strong></h1>

                            <p class="text-center">Get Expert Signals and Earn More Profits <a href="account_upgrade.php">GO PRO</a> </p>

                        </div>
                        <div class="box-body">

                            <div class="row">
                                <style>
                                    #example2 {
                                        border: 1px solid;
                                        padding: 10px;
                                        box-shadow: 5px 10px #888888;
                                    }
                                </style>
                                @foreach($signals as $item)
                                    <div id="example2" class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="box no-shadow">
                                            <div class="box-body">
                                                <div class="contact-page-aside">
                                                    <form action="{{ route('user.copy-trader.store') }}" method="POST">
                                                        @csrf

                                                        <input type="hidden" name="trader_id" value="{{ $item->id }}">
                                                        <ul class="list-style-none fs-16">
                                                            <li class="box-label col-6 offset-lg-4">

                                                                <span class="text-primary fs-4 mt-4">TYPE: {{ $item->type }}</span>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li><a class="text-info" href="javascript:void(0)">CURRENCY PAIR: <span class="text-info">{{ $item->pair }}</span></a></li>
                                                            <li><a class="text-warning" href="javascript:void(0)">LOT SIZE: <span class="text-warning">{{ $item->lot ? : "Null" }}</span></a></li>
                                                            <li><a class="text-danger" href="javascript:void(0)">TAKE PROFIT: <span class="text-danger">{{ $item->tp }}</span></a></li>
                                                            <li><a class="text-success" href="javascript:void(0)">STOP LOSS: <span class="text-success">{{ $item->sl }}</span></a></li>
                                                            <li><a class="text-secondary" href="javascript:void(0)">TAKE ACTION: <span class="text-secondary">{{ $item->ta }}</span></a></li>
                                                            <li><a class="text-primary" href="javascript:void(0)">TIME: <span class="text-primary">{{ $item->time }}</span></a></li>

                                                        </ul>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
