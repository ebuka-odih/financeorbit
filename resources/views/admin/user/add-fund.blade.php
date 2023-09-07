@extends('admin.layout.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
                <div>
                    <h1 class="h3 mb-1">
                        Fund Account
                    </h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">


            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-content">
                    <button type="button" class="btn btn-primary push" data-bs-toggle="modal" data-bs-target="#modal-block-normal">Add Deposit</button>
                   <div class="col-12">
                       <div class="alert alert-info">
                           To add deposit to users <br>
                           Note:
                           <p>Select User, select wallet and add the amount to deposit</p>
                       </div>
                   </div>
                    <br>
                    <hr>
                    <form action="{{ route('admin.sendFund') }}" method="POST" >
                        <!-- Basic Elements -->
                        @csrf
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
                        <div class="row push">
                            <div class="col-lg-6 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">User</label>
                                    <select name="user_id" id="" class="form-control" required="">
                                        @foreach($users as $item)
                                            <option value="{{ $item->id }}">{{ $item->fullname() }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label"  for="example-email-input">Type of Fund</label>
                                    <select name="type" id="" class="form-control ">
                                        <option disabled selected>Select </option>
                                        <option value="Balance">Main Balance</option>
                                        <option value="Invested">Invested Balance</option>
                                        <option value="Bonus">Bonus</option>
                                        <option value="Profit">Profit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label" for="example-email-input">Amount</label>
                                    <input type="number" class="form-control" id="example-email-input" name="amount" >
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-secondary">Send</button>
                            </div>
                        </div>

                        <!-- END Basic Elements -->


                    </form>
                </div>
                <hr>
                <br>
                <div class="block-content">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>User</th>
                                <th>Fund Type</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($funds as $item)
                                <tr>
                                    <td>{{ date('d M, Y', strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->user->fullname() }}</td>
                                    <td>{{ $item->fund_type() }}</td>
                                    <td>$@money($item->amount)</td>
                                    <td>{!! $item->status() !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Elements -->
        </div>

        <!-- END Page Content -->
    </main>



    <div class="modal" id="modal-block-normal" tabindex="-1" aria-labelledby="modal-block-normal" aria-hidden="true"  role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Add Deposit</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{ route('admin.adminDeposit') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="block-content">

                            <div class="row">

                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">User</label>
                                    <select name="user_id" id="" class="form-control" required="">
                                        <option >Select User...</option>
                                        @foreach($users as $item)
                                            <option value="{{ $item->id }}">{{ $item->fullname() }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Crypto Wallet</label>
                                    <select class="form-control text-primary" name="payment_method_id" id="cmethod" required="">
                                        <option >Select Wallet...</option>
                                        @foreach($wallets as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Amount</label>
                                    <input type="text" class="form-control" id="example-text-input" name="amount" >
                                </div>
                            </div>

                        </div>

                        <div class="block-content block-content-full text-end bg-body">
                            <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
