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
                                    <li class="breadcrumb-item active" aria-current="page">Subscription Details</li>
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


                            <table class="table table-striped" style="width:100%">
                                <tr>
                                    <th>Investment Name:</th>
                                    <td>{{ $sub->subscription->name }}</td>
                                </tr>
                                <tr>
                                    <th>Investment Amount:</th>
                                    <td>{{ $sub->user->currency }}{{ $sub->amount }}</td>
                                </tr>
                                <tr>
                                    <th>Investment Duration:</th>
                                    <td>{{ $sub->subscription->term_days }} Day(s)</td>
                                </tr>
                                <tr>
                                    <th>RIO:</th>
                                    <td>{{ $sub->subscription->roi }}%</td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>{!! $sub->status() !!}</td>
                                </tr>
                                <tr>
                                    <th>Approved Date:</th>
                                    <td>{{ date('d M, Y', strtotime($sub->updated_at)) }}</td>
                                </tr>
                                <tr>
                                    <th>Ending Date:</th>
                                    <td>{{ date('d M, Y', strtotime($sub->ending_date() )) }}</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
