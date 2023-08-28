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
                                    <a class="nav-link "  href="{{ route('user.deposit') }}"> Crypto Deposit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg-secondary-light text-dark" href="{{ route('user.bankDeposit') }}">Bank Deposit</a>
                                </li>
                            </ul>
                            <div class="box-body text-center">
                                <div class="col-lg-8 offset-lg-2">
                                    <p>
                                        Kindly send an email to our support service team to request for the current bank account information for your deposit with the email below
                                    </p>
                                    <form >

                                        <div class="form-group mt-2">
                                            <div class="input-group">
                                                <span class="input-group-text">Support Email</span>
                                                <input type="text" value="support@financeorbit.net" class="form-control form-control-lg" readonly>
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

@endsection
