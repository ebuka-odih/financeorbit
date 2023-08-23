@extends('dashboard.layout.app')
@section('content')


    <div style="margin-top: 50px"  class="main-container container-fluid">
        <div class="inner-body">
            <div id="mobileshow" class="see"></div>
            <div class="sees hide-mobile"></div>
            <!--Row-->
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="card bg-transparent">
                        <div class="card-header">
                            <div class=" shadow-sm pt-4 pl-2 pr-2 pb-2">
                                <!-- Credit card form tabs -->
                                <ul role="tablist" class="nav nav-pills rounded nav-fill mb-3">
                                    <!--<li class="nav-item"> <a data-bs-toggle="pill" href="#credit-card" class="nav-link"> <i class="icofont-credit-card mr-2"></i> Credit Card </a> </li>-->
                                    <li class="nav-item"> <a data-bs-toggle="pill" href="#crypto" class="nav-link active"> <i class="icofont-bitcoin mr-2"></i> Payment Methods </a> </li>
                                    <li class="nav-item"> <a data-bs-toggle="pill" href="#bank-dep" class="nav-link"> <i class="icofont-credit-card mr-2"></i> Bank Deposit </a> </li>
                                    <li class="nav-item"> <a data-bs-toggle="pill" href="#others" class="nav-link"> <i class="icofont-bill-alt mr-2"></i> Others </a> </li>

                                    <li class="nav-item"> <a data-bs-toggle="pill" href="#upload" class="nav-link"> <i class="icofont-checked mr-2"></i> Payment Proof </a>
                                    </li>

                                    <li class="nav-item"> <a data-bs-toggle="pill" href="#dephistory" class="nav-link"> <i class="icofont-listing-box mr-2"></i> Deposit History </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End -->
                            <div class="tab-content">

                                <div id="dephistory" class="tab-pane fade pt-3">
                                    <div class="card mb-0">
                                        <div class="card-header">
                                            <h3 class="h4 mb-0">Deposit List</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table mb-0 table-striped table-sm">
                                                    <thead>
                                                    <tr>
                                                        <th>Amount</th>
                                                        <th>Details</th>
                                                        <th>Date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($deposits as $item)
                                                        <tr>
                                                            <td>${{ $item->amount }}</td>
                                                            <td>{{ $item->payment_method->name }} <span>{!! $item->status() !!}</span></td>
                                                            <td>{{ date('Y, m d', strtotime($item->created_at)) }}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- End Row -->


        </div>
    </div>

@endsection
