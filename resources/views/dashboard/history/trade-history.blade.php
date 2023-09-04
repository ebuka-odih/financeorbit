@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">History</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Trades History</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">

                <div class="col-12 ">
                    <div class="box">

                    </div>
                </div>

                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title mb-5">Trading History</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="col-12">
                                <div class="box">

                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>Pair</th>
                                                    <th>Action</th>
                                                    <th>Entry</th>
                                                    <th>SL</th>
                                                    <th>TP</th>
                                                    <th>Results</th>
                                                    <th><i class="fa fa-dot-circle"></i></th>
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
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection

