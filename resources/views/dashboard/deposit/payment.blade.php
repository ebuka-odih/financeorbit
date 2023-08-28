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
                                <h4 class="text-center">Confirm Payment</h4>
                            </div>

                            <div class="box-body text-center">
                                <div class="col-lg-8 offset-lg-2">
                                    <div>
                                        <form method="post" action="{{ route('user.processPayment') }}" enctype="multipart/form-data" novalidate="novalidate">

                                            @csrf
                                            @method('PATCH')
                                            <div class="container">
                                                @if(session()->has('success'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('success') }}
                                                    </div>
                                                @endif
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                            <input type="hidden" name="deposit_id" value="{{ $deposit->id }}">

                                            <div class="col-lg-12">
                                                <div class="card">

                                                    <div class="card-body">
                                                        <!-- Credit Card -->
                                                        <div id="pay-invoice">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <p class="text-info mb-0">NOTE: Your fund will be approved and added to your investable account within 24HRS.</p>
                                                                    </div>
                                                                </div>

                                                                <hr class="mb-1">



                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="visible-print text-center">
                                                                            {!! QrCode::size(150)->generate($deposit->payment_method->value); !!}
                                                                        </div>
                                                                        <label for="x_card_code" class="control-label mb-1 mt-3">{{ $deposit->payment_method->name }} Wallet Address</label>
                                                                        <div class="input-group">
                                                                            <input id="Amount" required="" placeholder="0.00" type="text" class="form-control cc-cvc" value="{{ $deposit->payment_method->value }}">
                                                                            <div class="input-group-addon">
                                                                                <a href="#" class="btn" data-clipboard-target="#Amount">Copy</a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <label for="Proof" class="mt-3">Proof of Payment</label>
                                                                        <div class="input-group">
                                                                            <input onchange="ValidateImageExt(this);" required="" type="file" class="form-control btn-block" id="Proof" data-val="true" data-val-required="The Proof field is required." name="reference">
                                                                        </div>
                                                                        <span class="text-danger field-validation-valid" data-valmsg-for="Proof" data-valmsg-replace="true"></span>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="input-group">
                                                                            <button id="payment-button" type="submit" class="btn btn-primary btn-block mt-4">
                                                                                <i class="fa fa-database fa-lg"></i>&nbsp;
                                                                                <span id="payment-button-amount">Paid</span>
                                                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div> <!-- .card -->

                                            </div><!--/.col-->
                                        </form>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.btn');
    </script>
@endsection
