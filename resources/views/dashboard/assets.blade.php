@extends('dashboard.layout.app')
@section('content')

    <div style="margin-top: 50px" class="main-container container-fluid">
        <div class="inner-body">
            <div id="mobileshow" class="see"></div>
            <div class="sees hide-mobile"></div>
            <!--Row-->
            <div class="row row-sm">
                <div class="col-sm-12 col-lg-12 col-xl-8 col-xxl-8">

                    <!--Row-->
                    <div class="row row-sm">
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-5 col-xxl-5">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="transaction">
                                        <div class="transaction-blog">
                                            <div class="">
                                                <svg class="wd-30 ht-40 me-3 my-auto" fill="#01b8ff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M96 352V96c0-35.3 28.7-64 64-64H416c35.3 0 64 28.7 64 64V293.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7H160c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16v48H208c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h48v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V256h48c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H320V144c0-8.8-7.2-16-16-16H272zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24H136C60.9 512 0 451.1 0 376V152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88H296z"></path></svg>
                                            </div>
                                            <div class="transaction-details d-flex">
                                                <div>
                                                    <span class="text-dark tx-bold-12"> Total Balance</span>
                                                    <h5 class="text-muted tx-bold-12"> $ 0.00</h5></div>
                                                <div class="ms-auto fs-14 text-danger font-weight-normal">
                                                    <a href="" class="btn ripple btn-success-transparent">Live</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div></div>


            <div class="row row-sm">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header border-bottom">
                            <div>
                                <h3 class="card-title tx-18"><label class="main-content-label tx-15">FIAT</label></h3>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <div class="table-responsive">
                                <table class="table table-borderless text-nowrap text-md-nowrap table-hover mg-b-0">
                                    <tbody>
                                    <tr>
                                        <th>
                                            Asset
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Value
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>USD </td>
                                        <td>United States Dollars </td>
                                        <td><h5 class="text-muted tx-bold-12">USD 0.00</h5> </td>
                                        <td>
                                            <a href="#" data-bs-target="#depositmodal" data-bs-toggle="modal" class="btn ripple btn-primary-transparent">Deposit</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>GBP </td>
                                        <td>Great Britain Pounds</td>
                                        <td><h5 class="text-muted tx-bold-12">GBP 0.00</h5> </td>
                                        <td>
                                            <a href="#" data-bs-target="#depositmodal" data-bs-toggle="modal" class="btn ripple btn-primary-transparent">Deposit</a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row row-sm">
                        <div class="col-xl-4 col-md-12 col-lg-6">
                            <div class="card custom-card crypto-card overflow-hidden">
                                <div class="card-body pb-0">
                                    <div class="mb-0 d-flex">
                                        <h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<i class="cf cf-btc text-warning tx-22 pb-2"></i>
													</span>Bitcoin BTC
                                        </h6>
                                        <span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">Price(24h)</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <h6 class="d-flex my-auto font-weight-normal"> 0.000000 <span class="text-info tx-14 mt-auto ms-2">$ 0.00</span> </h6>
                                        <div class="text-danger tx-12"><i class="me-1 text-success"></i>$29,249.00</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-6">
                            <div class="card custom-card crypto-card overflow-hidden">
                                <div class="card-body pb-0">
                                    <div class="mb-0 d-flex">
                                        <h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<i class="cf cf-eth text-purple tx-22 pb-2"></i>
													</span> Ethereum ETH
                                        </h6>
                                        <span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">Price(24h)</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <h6 class="d-flex my-auto font-weight-normal">0.000000<span class="text-info tx-14 mt-auto ms-2">$ 0.00</span> </h6>
                                        <div class="text-danger tx-12"><i class="me-1 text-success"></i> $1,859.77</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-6">
                            <div class="card custom-card crypto-card overflow-hidden">
                                <div class="card-body pb-0">
                                    <div class="mb-0 d-flex">
                                        <h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<i class="cf cf-xrp text-info tx-22 pb-2"></i>
													</span> Ripple  XRP
                                        </h6>
                                        <span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">Price(24h)</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <h6 class="d-flex my-auto font-weight-normal">0.000000<span class="text-info tx-14 mt-auto ms-2">$ 0.00</span> </h6>
                                        <div class="text-danger tx-12"><i class="me-1 text-success"></i> $0.71</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-6">
                            <div class="card custom-card crypto-card overflow-hidden">
                                <div class="card-body pb-0">
                                    <div class="mb-0 d-flex">
                                        <h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<i class="cf cf-dash text-secondary tx-22 pb-2"></i>
													</span>Dash  DASH
                                        </h6>
                                        <span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">Price(24h)</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <h6 class="d-flex my-auto font-weight-normal">0.000000<span class="text-info tx-14 mt-auto ms-2">$ 0.00</span> </h6>
                                        <div class="text-danger tx-12"><i class="me-1 text-success"></i> $31.59</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-6">
                            <div class="card custom-card crypto-card overflow-hidden">
                                <div class="card-body pb-0">
                                    <div class="mb-0 d-flex">
                                        <h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<i class="cf cf-xmr text-success tx-22 pb-2"></i>
													</span> Monero XMR
                                        </h6>
                                        <span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">Price(24h)</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <h6 class="d-flex my-auto font-weight-normal">0.000000<span class="text-info tx-14 mt-auto ms-2">$ 0.00</span> </h6>
                                        <div class="text-danger tx-12"><i class="me-1 text-success"></i> $160.40</div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-12 col-lg-6">
                            <div class="card custom-card crypto-card overflow-hidden">
                                <div class="card-body pb-0">
                                    <div class="mb-0 d-flex">
                                        <h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<i class="cf cf-ltc text-muted tx-22 pb-2"></i>
													</span> Litecoin LTC
                                        </h6>
                                        <span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">Price(24h)</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <h6 class="d-flex my-auto font-weight-normal">0.000000<span class="text-info tx-14 mt-auto ms-2">$ 0.00</span> </h6>
                                        <div class="text-danger tx-12"><i class="me-1 text-success"></i> $92.21</div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-12 col-lg-6">
                            <div class="card custom-card crypto-card overflow-hidden">
                                <div class="card-body pb-0">
                                    <div class="mb-0 d-flex">
                                        <h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<img src="main/assets/img/tron.png" style="width:40px; height:25px; ">
													</span>  Tron
                                        </h6>
                                        <span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">Price(24h)</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <h6 class="d-flex my-auto font-weight-normal">0.000000<span class="text-info tx-14 mt-auto ms-2">$ 0.00</span> </h6>
                                        <div class="text-danger tx-12"><i class="me-1 text-success"></i> $0.08</div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-12 col-lg-6">
                            <div class="card custom-card crypto-card overflow-hidden">
                                <div class="card-body pb-0">
                                    <div class="mb-0 d-flex">
                                        <h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
													<img src="main/assets/img/dogecoin.png" style="width:35px; height:25px; ">
													</span>  DogeCoin
                                        </h6>
                                        <span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">Price(24h)</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <h6 class="d-flex my-auto font-weight-normal">0.000000<span class="text-info tx-14 mt-auto ms-2">$ 0.00</span> </h6>
                                        <div class="text-danger tx-12"><i class="me-1 text-success"></i> $0.08</div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-12 col-lg-6">
                            <div class="card custom-card crypto-card overflow-hidden">
                                <div class="card-body pb-0">
                                    <div class="mb-0 d-flex">
                                        <h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<img src="main/assets/img/bnb.png" style="width:30px; height:25px; ">
													</span>  Binance Coin
                                        </h6>
                                        <span class="float-end ms-auto btn btn-success rounded-6 btn-sm tx-11">Price(24h)</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <h6 class="d-flex my-auto font-weight-normal">0.000000<span class="text-info tx-14 mt-auto ms-2">$ 0.00</span> </h6>
                                        <div class="text-danger tx-12"><i class="me-1 text-success"></i> $241.48</div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header border-bottom">
                            <div>
                                <h3 class="card-title tx-18"><label class="main-content-label tx-15">ASSETS</label></h3>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <div class="table-responsive">
                                <table class="table table-borderless text-nowrap text-md-nowrap table-hover mg-b-0">
                                    <tbody>
                                    <tr>
                                        <th>
                                            Assets
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Value
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>

                                    <tr>
                                        <td><h6 class="d-flex mb-0 tx-semibold"><span class="cryp-icon me-2">
														<i class="cf cf-btc text-warning tx-22 pb-2"></i>
													</span>BTC</h6> </td>
                                        <td>Bitcoin </td>
                                        <td><h5 class="text-muted tx-bold-12"> $ 0.00</h5>0.000000 BTC </td>
                                        <td>
                                            <a href="#" data-bs-target="#depositmodal" data-bs-toggle="modal" class="btn ripple btn-primary-transparent">Deposit</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<i class="cf cf-eth text-purple tx-22 pb-2"></i>
													</span>ETH
                                            </h6> </td>
                                        <td>Ethereum </td>
                                        <td><h5 class="text-muted tx-bold-12"> $ 0.00</h5>
                                            0.000000 ETH
                                        </td>
                                        <td>
                                            <a href="#" data-bs-target="#depositmodal" data-bs-toggle="modal" class="btn ripple btn-primary-transparent">Deposit</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<i class="cf cf-xrp text-info tx-22 pb-2"></i>
													</span>XRP
                                            </h6> </td>
                                        <td>Ripple </td>
                                        <td><h5 class="text-muted tx-bold-12"> $ 0.00</h5>
                                            0.000000 XRP
                                        </td>
                                        <td>
                                            <a href="#" data-bs-target="#depositmodal" data-bs-toggle="modal" class="btn ripple btn-primary-transparent">Deposit</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<i class="cf cf-dash text-secondary tx-22 pb-2"></i>
													</span>DASH
                                            </h6> </td>
                                        <td>Dash </td>
                                        <td><h5 class="text-muted tx-bold-12"> $ 0.00</h5>
                                            0.000000 DASH
                                        </td>
                                        <td>
                                            <a href="#" data-bs-target="#depositmodal" data-bs-toggle="modal" class="btn ripple btn-primary-transparent">Deposit</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td><h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<i class="cf cf-xmr text-success tx-22 pb-2"></i>
													</span>XMR
                                            </h6> </td>
                                        <td>Monero </td>
                                        <td><h5 class="text-muted tx-bold-12"> $ 0.00</h5>
                                            0.000000 XMR
                                        </td>
                                        <td>
                                            <a href="#" data-bs-target="#depositmodal" data-bs-toggle="modal" class="btn ripple btn-primary-transparent">Deposit</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td><h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<i class="cf cf-ltc text-muted tx-22 pb-2"></i>
													</span>LTC
                                            </h6> </td>
                                        <td>Litecoin </td>
                                        <td><h5 class="text-muted tx-bold-12"> $ 0.00</h5>
                                            0.000000 LTC
                                        </td>
                                        <td>
                                            <a href="#" data-bs-target="#depositmodal" data-bs-toggle="modal" class="btn ripple btn-primary-transparent">Deposit</a>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td><h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
												<img src="main/assets/img/tron.png" style="width:40px; height:25px;">
													</span>Tron
                                            </h6> </td>
                                        <td>Tron</td>
                                        <td><h5 class="text-muted tx-bold-12"> $ 0.00</h5>
                                            0.000000 TRON
                                        </td>
                                        <td>
                                            <a href="#" data-bs-target="#depositmodal" data-bs-toggle="modal" class="btn ripple btn-primary-transparent">Deposit</a>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td><h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
														<img src="main/assets/img/dogecoin.png" style="width:35px; height:25px;">
													</span>Dogecoin
                                            </h6> </td>
                                        <td>Dogecoin</td>
                                        <td><h5 class="text-muted tx-bold-12"> $ 0.00</h5>
                                            0.000000 DOGE
                                        </td>
                                        <td>
                                            <a href="#" data-bs-target="#depositmodal" data-bs-toggle="modal" class="btn ripple btn-primary-transparent">Deposit</a>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td><h6 class="d-flex mb-0 tx-semibold">
													<span class="cryp-icon me-2">
															<img src="main/assets/img/bnb.png" style="width:30px; height:25px; ">
													</span>BNB
                                            </h6> </td>
                                        <td>Binance Coin/td&gt;
                                        </td><td><h5 class="text-muted tx-bold-12"> $ 0.00</h5>
                                            0.000000 BNB
                                        </td>
                                        <td>
                                            <a href="#" data-bs-target="#depositmodal" data-bs-toggle="modal" class="btn ripple btn-primary-transparent">Deposit</a>
                                        </td>
                                    </tr>





                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div></div>

        </div>
    </div>

@endsection
