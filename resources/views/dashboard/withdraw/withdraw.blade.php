@extends('dashboard.layout.app')
@section('content')

    <div style="" class="main-container container-fluid">
        <div class="inner-body">
            <div id="mobileshow" class="see"></div>
            <div class="sees hide-mobile"></div>
            <!--Row-->

            <div class="row row-sm">
                <div class="col-lg-12 col-12  col-md-12">
                    <div class="card custom-card overflow-hidden crypto-buysell-card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title tx-18"><label class="main-content-label tx-15">Withdrawal Transaction</label></h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <center>
                                    <div class="alert alert-info fade show" role="alert">
                                        To make a withdrawal, Enter amount and verify the address you wish for payment to be made into.
                                    </div>
                                </center>
                            </div>

                            @if(auth()->user()->balance < 1)
                            <span class="text-danger"><strong>Insufficient Funds!</strong></span>
                            @endif

                            <form method="POST" action="{{ route('user.processWithdraw') }}">
                              @csrf

                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="text-white mb-2">Personal Information</h3>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Full Name</label>
                                                    <input maxlength="100" type="text" required="" class="form-control" id="firstname" value="{{ $user->lastname.' '.$user->firstname }}" placeholder="Enter Full Name" readonly="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Email Address</label>
                                                    <input maxlength="100" type="email" required="" class="form-control" id="email" value="{{ $user->email }}" placeholder="Enter Email Address" readonly="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Account Balance</label>
                                                    <input maxlength="15" type="text" required="" class="form-control" id="phone" value="{{ auth()->user()->currency }} @money($user->balance)" placeholder="Enter Phone Number" readonly="">
                                                </div>

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

                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header border-bottom">
                                <div>
                                    <h3 class="card-title tx-18"><label class="main-content-label tx-15">Withdrawal History</label></h3>
                                </div>
                            </div>
                            <div class="card-body pb-2">
                                <div class="table-responsive">

                                    You have not made any withdrawals Yet										  <table class="table table-borderless text-nowrap text-md-nowrap table-hover mg-b-0">
                                        <tbody>
                                        <tr>
                                            <th>
                                                Method
                                            </th>
                                            <th>
                                                Amount
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Date
                                            </th>
                                        </tr></tbody></table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
