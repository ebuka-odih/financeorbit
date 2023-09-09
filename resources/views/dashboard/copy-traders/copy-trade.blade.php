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
                                    <li class="breadcrumb-item active" aria-current="page">Copy Trader</li>
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
                        <div class="box-body">

                            <div class="alert alert-info fade show" role="alert">
                                <center style="color:;">MINIMAL COPY TRADE AMOUNT: {{ auth()->user()->currency }} 500.00</center>

                            </div>
                            <hr>
                            <div class="row">
                                <style>
                                    #example2 {
                                        border: 1px solid;
                                        padding: 10px;
                                        box-shadow: 5px 10px #888888;
                                    }
                                </style>
                                @forelse($traders as $item)
                                <div style="margin-right: 20px; margin-bottom: 20px" id="example2" class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="box no-shadow">
                                        <div class="box-body">
                                            <div class="contact-page-aside">
                                                <form action="{{ route('user.copy-trader.store') }}" method="POST">
                                                    @csrf

                                                    <input type="hidden" name="trader_id" value="{{ $item->id }}">
                                                    <ul class="list-style-none fs-16">
                                                        <li class="box-label col-6 offset-lg-4">
                                                            <img style="border-radius: 50%" height="60" width="60" src="https://e7.pngegg.com/pngimages/84/165/png-clipart-united-states-avatar-organization-information-user-avatar-service-computer-wallpaper-thumbnail.png" alt="">

                                                            <span class="text-primary fs-4 mt-4">{{ $item->username }}</span>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a class="text-info" href="javascript:void(0)">Accuracy: <span class="text-info">{{ $item->accuracy }}%</span></a></li>
                                                        <li><a class="text-warning" href="javascript:void(0)">Trades Won in Ratio: <span class="text-warning">{{ $item->won_trades }}%</span></a></li>
                                                        <li><a class="text-danger" href="javascript:void(0)">Trades lost in Ratio: <span class="text-danger">{{ $item->lost_trades }}%</span></a></li>
                                                        <li><a class="text-success" href="javascript:void(0)">Trade Percentage: <span class="text-success">{{ $item->total_pec }}%</span></a></li>
                                                        <li><hr></li>
                                                        @if(session()->has('success'))
                                                            <div class="alert alert-info">
                                                                {{ session()->get('success') }}
                                                            </div>
                                                        @endif
                                                        @if(session()->has('error'))
                                                            <div class="alert alert-danger">
                                                                {{ session()->get('error') }}
                                                            </div>
                                                        @endif
                                                        <li class="box-label"><button type="submit"  class="btn btn-success mt-10 col-12"><i class="fa fa-clipboard"></i> Copy Trader</button></li>
                                                    </ul>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <h4 class="text-center">No copy trader available</h4>
                                @endforelse
                            </div>


                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
