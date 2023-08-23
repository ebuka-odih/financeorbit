@extends('dashboard.layout.app')
@section('content')

    <div style="margin-top: 100px;" class="main-container container-fluid">
        <div class="inner-body">
            <div id="mobileshow" class="see"></div>
            <div class="sees hide-mobile"></div>
            <!--Row-->

            <div class="row row-sm">
                <div class="col-md-12 col-lg-12">
                    <div class="card custom-card">
                        <div class="card-body">	<div>
                                <h6 style="text-align: center" class="main-content-label mb-1">My Subscription</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="alert alert-info fade show" role="alert">
                <center style="color:green;">Bal:	{{ auth()->user()->currency }}@money(auth()->user()->balance)</center>

            </div>

            <div class="col-12">

                <div class="card">
                    <div class="card-body">
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
                                <th>Daily Interest:</th>
                                <td>{{ $sub->subscription->daily_interest }}%</td>
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





        </div>
    </div>

@endsection`
