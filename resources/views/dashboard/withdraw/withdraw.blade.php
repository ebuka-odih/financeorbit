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
                                    <li class="breadcrumb-item active" aria-current="page">Withdraw</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="text-center">Withdrawal</h4>
                            </div>

                            <div class="box-body text-center">
                                <div class="col-lg-8 offset-lg-2">

                                    @if(auth()->user()->balance < 1)
                                        <span class="text-danger"><strong>Insufficient Funds!</strong></span>
                                    @endif

                                    <form method="POST" action="{{ route('user.processWithdraw') }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-lg-6 col-6">
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

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6">
                                                <div class="box bg-info">
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
                                                            <h3 class="my-0 fw-600"><span class="text-warning">@money($user->profit)</span> USD</h3>
                                                        </div>
                                                    </div>
                                                    <div class="box-footer">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h3 class="text-white mb-2">Payment Details</h3>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="withdrawal_method">Select Withdrawal Method</label>
                                                                <select name="withdrawal_method" class="form-control" id="withdrawalMethod" required="" onchange="toggleBeneficiaryFields()">
                                                                    <option value="">--Select Method--</option>
                                                                    <option value="Bank Transfer">Bank Transfer</option>
                                                                    <option value="Bitcoin">Bitcoin (Recommended)</option>
                                                                    <option value="ethereum">Ethereum</option>
                                                                    <option value="cashapp">Cashapp</option>
                                                                    <option value="skrill">Skrill</option>
                                                                    <option value="PayPal">PayPal</option>
                                                                </select>
                                                            </div>

                                                            <div id="beneficiaryField1" class="form-group" style="display: none">
                                                                <label for="bank">Bank Name</label>
                                                                <input class="form-control border-primary" type="text" name="bank" placeholder="Enter Bank Name">
                                                            </div>

                                                            <div id="beneficiaryField2" class="form-group" style="display: none">
                                                                <label for="acct_name">Account Name</label>
                                                                <input class="form-control border-primary" type="text" name="acct_name" placeholder="Enter Account Name">
                                                            </div>

                                                            <div id="beneficiaryField3" class="form-group" style="display: none">
                                                                <label for="acct_num">Account Number</label>
                                                                <input class="form-control border-primary" type="text" name="acct_num" placeholder="Enter Account Number">
                                                            </div>

                                                            <div id="beneficiaryField4" class="form-group" style="display: none">
                                                                <label for="swift_code">Swift Code</label>
                                                                <input class="form-control border-primary" type="text" name="swift_code" placeholder="Enter Swift Code">
                                                            </div>

                                                            <div id="beneficiaryField5" class="form-group" style="display: none">
                                                                <label for="paypal_email">PayPal Email</label>
                                                                <input class="form-control border-primary" type="text" name="paypal_email" placeholder="Enter PayPal Email">
                                                            </div>

                                                            <div id="beneficiaryField6" class="form-group" style="display: none">
                                                                <label for="btc_address">BTC Wallet</label>
                                                                <input class="form-control border-primary" type="" name="btc_address" placeholder="Enter Bitcoin Wallet Address">
                                                            </div>

                                                            <div id="beneficiaryField7" class="form-group" style="display: none">
                                                                <label for="cashapp">Cashapp Email/Phone Number/Tag</label>
                                                                <input class="form-control border-primary" type="text" name="cashapp" placeholder="Enter Email/Phone Number/Tag">
                                                            </div>

                                                            <div id="beneficiaryField8" class="form-group" style="display: none">
                                                                <label for="skrill">Recipient Number/Email</label>
                                                                <input class="form-control border-primary" type="text" name="skrill" placeholder="Enter Recipient Number/Email">
                                                            </div>

                                                            <div id="beneficiaryField9" class="form-group" style="display: none">
                                                                <label for="btc_address">ETH Wallet</label>
                                                                <input class="form-control border-primary" type="text" name="eth_address" placeholder="Enter Ethereum Wallet Address">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="amount">Enter Withdrawal Amount</label>
                                                                <input class="form-control border-primary" type="number" name="amount" placeholder="0.00" min="" max="" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="wizard-footer">
                                                    <div class="col-12">
                                                        <button  class="btn btn-success btn-lg pull-right" type="submit">Request Withdrawal</button>
                                                        {{--                                                <button id="loader" style="display:none" class="btn btn-success btn-lg pull-right">Loading...</button>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>


    <script>
        function toggleBeneficiaryFields() {
            const pairType = document.getElementById('withdrawalMethod').value;
            const beneficiaryField1 = document.getElementById('beneficiaryField1');
            const beneficiaryField2 = document.getElementById('beneficiaryField2');
            const beneficiaryField3 = document.getElementById('beneficiaryField3');
            const beneficiaryField4 = document.getElementById('beneficiaryField4');
            const beneficiaryField5 = document.getElementById('beneficiaryField5');
            const beneficiaryField6 = document.getElementById('beneficiaryField6');
            const beneficiaryField7 = document.getElementById('beneficiaryField7');
            const beneficiaryField8 = document.getElementById('beneficiaryField8');
            const beneficiaryField9 = document.getElementById('beneficiaryField9');

            if (pairType === 'Bank Transfer') {
                beneficiaryField1.style.display = 'block';
                beneficiaryField2.style.display = 'block';
                beneficiaryField3.style.display = 'block';
                beneficiaryField4.style.display = 'block';
                beneficiaryField5.style.display = 'none';
                beneficiaryField6.style.display = 'none';
                beneficiaryField7.style.display = 'none';
                beneficiaryField8.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            } else if (pairType === 'PayPal') {
                beneficiaryField5.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField6.style.display = 'none';
                beneficiaryField7.style.display = 'none';
                beneficiaryField8.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            }else if (pairType === 'Bitcoin') {
                beneficiaryField6.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField5.style.display = 'none';
                beneficiaryField7.style.display = 'none';
                beneficiaryField8.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            }else if (pairType === 'cashapp') {
                beneficiaryField7.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField5.style.display = 'none';
                beneficiaryField6.style.display = 'none';
                beneficiaryField8.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            }else if (pairType === 'skrill') {
                beneficiaryField8.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField5.style.display = 'none';
                beneficiaryField6.style.display = 'none';
                beneficiaryField7.style.display = 'none';
                beneficiaryField9.style.display = 'none';
            }else if (pairType === 'ethereum') {
                beneficiaryField9.style.display = 'block';
                beneficiaryField1.style.display = 'none';
                beneficiaryField2.style.display = 'none';
                beneficiaryField3.style.display = 'none';
                beneficiaryField4.style.display = 'none';
                beneficiaryField5.style.display = 'none';
                beneficiaryField6.style.display = 'none';
                beneficiaryField7.style.display = 'none';
                beneficiaryField8.style.display = 'none';
            }
        }
    </script>

@endsection
