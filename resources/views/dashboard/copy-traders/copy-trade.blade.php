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
                <div class="col-xxxl-12 col-xl-7 col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <style>
                                    #example2 {
                                        border: 1px solid;
                                        padding: 10px;
                                        box-shadow: 5px 10px #888888;
                                    }
                                </style>
                                @foreach($traders as $item)
                                <div id="example2" class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="box no-shadow">
                                        <div class="box-body">
                                            <div class="contact-page-aside">
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
                                                    <li class="box-label"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success mt-10">+ Create New Label</a></li>
                                                </ul>
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
