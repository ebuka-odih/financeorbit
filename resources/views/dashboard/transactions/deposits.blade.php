@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Transactions</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Deposits Transactions</li>
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
                        <div class="box-body ">
                            <div class="clearfix">
                                <div class="row">
                                    <a style="margin-right: 5px" href="" class="col-lg-3 col-md-12 waves-effect waves-light btn btn-lg mb-5 bg-gradient-info "><i class="fa fa-arrow-circle-down"></i> Deposits</a>
                                    <a style="margin-right: 5px" href="" class="col-lg-3 col-md-12 waves-effect waves-light btn btn-lg mb-5 bg-gradient-secondary "><i class="fa fa-arrow-circle-up"></i> Withdrawal</a>
                                    <a href="" class="col-lg-3 col-md-12 waves-effect waves-light btn btn-lg mb-5 bg-gradient-secondary "><i class="fa fa-money-bill-wave"></i> Funding</a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title mb-5">Deposits Transactions</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">


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
