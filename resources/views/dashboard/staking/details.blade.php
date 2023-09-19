
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
                                    <li class="breadcrumb-item active" aria-current="page">Staking</li>
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
                                <center style="color:;">Staked Details</center>

                            </div>
                            <hr>
                            <div class="row">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Staked Name:</th>
                                        <td>{{ $staked->staking->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Staked Token:</th>
                                        <td>{{ optional($staked->staking)->token }}</td>
                                    </tr>
                                    <tr>
                                        <th>Staked Amount:</th>
                                        <td>$@money($staked->amount)</td>
                                    </tr>
                                    <tr>
                                        <th>Expected ROI:</th>
                                        <td>{{ optional($staked->staking)->roi }}({{ $staked->roi_rate }}%)</td>
                                    </tr>
                                    <tr>
                                        <th>Status:</th>
                                        <td>{!! $staked->status() !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Profit (ROI):</th>
                                        <td>$@money($staked->roi)</td>
                                    </tr>
                                </table>

                            </div>


                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
