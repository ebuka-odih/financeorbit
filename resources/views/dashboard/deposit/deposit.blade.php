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
                                    <li class="nav-item"> <a data-bs-toggle="pill" href="#dephistory" class="nav-link"> <i class="icofont-listing-box mr-2"></i> Deposit History </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End -->
                            <div class="tab-content">


                                <div id="crypto" class="text-break tab-pane fade pt-3 active show">
                                    <p class="py-3"> Don't have crypto? Buy here <i class="icofont-arrow-right"></i><a target="_blank" href="https://bitcoin.com">Bitcoin.com</a> | <a target="_blank" href="https://exchange.mercuryo.io/">Mercuryo</a> | <a target="_blank" href="https://changelly.com">Changelly</a> | <a target="_blank" href="https://crypto.com">Crypto.com</a> | <a target="_blank" href="https://simplex.com">Simplex</a>
                                        | <a target="_blank" href="https://moonpay.com">Moonpay</a>
                                    </p>
                                    <form action="{{ route('user.processDeposit') }}" method="post" role="form" id="fcard">
                                        @csrf
                                        <div class="form-group mt-2">
                                            <label for="cmethod">
                                                <h6>Payment Method</h6>
                                            </label>
                                            <div class="input-group">
                                                <select class="form-control text-primary" name="payment_method_id" id="cmethod" required="">
                                                   @foreach($wallets as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach

                                                </select>
                                                <span class="input-group-text"><i class="icofont-caret-down"></i></span>
                                            </div>

                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="amt">
                                                <h6>Amount</h6>
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text">USD</span>
                                                <input type="number" name="amount" placeholder="Amount" class="form-control " id="cryptoamt" min="" minlength="3" required="">
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="to">
                                                <h6>To</h6>
                                            </label>
                                            <div class="input-group">
                                                <select class="form-control text-primary" name="to" id="to" required="">
                                                    <option value="trade">Trading</option>
                                                    <option value="mine">Mining</option>
                                                </select>
                                                <span class="input-group-text"><i class="icofont-caret-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <button type="submit" class="btn btn-primary btn-block shadow-sm" id="btn-crypto"> Proceed </button>
                                            <input type="hidden" name="typ" value="crypto">
                                        </div>

                                    </form>
                                </div>
                                <div id="bank-dep" class="tab-pane fade pt-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="text-center">Bank Deposit</h2>
                                            <div class="alert">
                                                <p class="font-weight-bold text-center">Contact us from the live chat or send an email to
                                                    <a href="mailto:support@tokendirecthub.com">support@tokendirecthub.com</a> to provide an account to make your deposit</p>
                                            </div>
                                            <p class="text-muted">Note: Minimum deposit is USD 5,000 </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="others" class="tab-pane fade pt-3">
                                    <form action="{{ route('user.processDeposit') }}" method="post" id="fdeposit">
                                        @csrf

                                        <div class="form-group mt-2">
                                            <label class="bmd-label-floating">Amount</label>

                                            <div class="input-group">
                                                <span class="input-group-text">USD</span>
                                                <input type="number" name="amount" min="10" class="form-control" id="othersamount" required="" data-listener-added_c36e958a="true">
                                            </div>
                                        </div>

                                        <div class="form-group mt-2">
                                            <label for="Select Your Bank">
                                                <h6>Select Other Payment Methods</h6>
                                            </label>
                                            <div class="input-group">
                                                <select class="form-control text-primary" name="method" id="met">
                                                    <option value="" selected="" disabled="">--Please select other gateways--</option>
                                                    <option value="skrill">Skrill</option>
                                                    <!--<option value="western union">Western Union</option>-->
                                                    <option value="wire transfer">Wire Transfer</option>
                                                    <!--<option value="moneyegram">Moneygram</option>-->
                                                    <option value="perfect money">Perfect Money</option>
                                                </select>
                                                <span class="input-group-text"><i class="icofont-caret-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="to">
                                                <h6>To</h6>
                                            </label>
                                            <div class="input-group">
                                                <select class="form-control text-primary" name="to" id="to" required="">
                                                    <option value="trade">Trading</option>
                                                    <option value="mine">Mining</option>
                                                </select>
                                                <span class="input-group-text"><i class="icofont-caret-down"></i></span>
                                            </div>
                                        </div>

                                        <div class="form-group mt-2">
                                            <p> <button id="btn-oth" type="submit" class="btn btn-primary "> Proceed </button>
                                                <input type="hidden" name="typ" value="oth">
                                            </p>

                                        </div>

                                        <p class="text-muted">Note: Minimum deposit is USD 5,000 </p>

                                    </form>
                                </div>

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
                                                            <td>{{ auth()->user()->currency }}{{ $item->amount }}</td>
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
