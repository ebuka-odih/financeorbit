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
                                    <li class="breadcrumb-item active" aria-current="page">Deposit</li>
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
                                <h4 class="text-center">Fund Your Account</h4>
                            </div>
                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link bg-secondary-light text-dark"  href="{{ route('user.deposit') }}"> Crypto Deposit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.bankDeposit') }}">Bank Deposit</a>
                                </li>
                            </ul>
                            <div class="box-body text-center">
                                <div class="col-lg-8 offset-lg-2">
                                    <form action="{{ route('user.processDeposit') }}" method="post" role="form" id="fcard">
                                        @csrf
                                        <div class="form-group mt-2">
                                            <label for="cmethod">
                                                <h6>Crypto Wallet</h6>
                                            </label>
                                            <div class="input-group">
                                                <select class="form-control form-control-lg text-primary" name="payment_method_id" id="cmethod" required="">
                                                    <option >Choose Wallet...</option>
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
                                                <input type="number" name="amount" placeholder="Amount" class="form-control form-control-lg" id="cryptoamt" min="" minlength="3" required="">
                                            </div>
                                        </div>

                                        <div class="form-group mt-2">
                                            <button type="submit" class="btn btn-primary btn-block shadow-sm" id="btn-crypto"> Proceed </button>
                                            <input type="hidden" name="typ" value="crypto">
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

@endsection
