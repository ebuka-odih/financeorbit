@extends('dashboard.layout.app')
@section('content')

<div class="container" style="margin-top:100px; color:white; text-align:center;">
    <h1><strong>MY TRADERS</strong></h1>




    <p>Get More Expert Traders and Earn More Profits <a href="account_upgrade.php">GO PRO</a> </p>




    <div class="alert alert-info fade show" role="alert">
        <center style="color:;">MINIMAL COPY TRADE AMOUNT: {{ auth()->user()->currency }} 500.00</center>

    </div>


    <div class="container" style="margin-top:45px; color:white; text-align:center;">

        <div class="container" style="margin-top:45px; color:white; text-align:center;">
            <h3><strong>COPY EXPERT TRADERS</strong></h3>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="container bootstrap snippets bootdey">
                <div class="profile card">
                    <div class="profile-body" style="padding:10px; margin-bottom:10px;">
                        <div class="profile-bio">
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    <img style="height:170px;" class="img-thumbnail md-margin-bottom-10" src="img/83E58524-699E-447C-9F06-06B03AAAFAF8.jpeg" alt="">

                                </div>
                                <div class="col-md-7">
                                    <h2>Username: {{ $trader->username }}</h2>
                                    <span><strong>Accuracy:</strong> {{ $trader->accuracy }}</span><br>
                                    <span><strong>Trades Won in Ratio:</strong>{{ $trader->won_trades }}%</span><br>
                                    <span><strong>Trades lost in Ratio:</strong> {{ $trader->lost_trades }}%</span><br>
                                    <span><strong>Trade Percentage:</strong> {{ $trader->total_pec }}%</span>
                                    <br>
                                    <p>Supported By Token DirectHub.</p>

                                    @if(auth()->user()->balance < 500)
                                    <div class="alert alert-info fade show" role="alert">
                                        <center style="color:red;">	INSUFFICIENT TRADING BALANCE.</center>

                                    </div>
                                    @endif


                                    <form method="POST" action="{{ route('user.copy-trader.store') }}">
                                        @csrf

                                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                                        <input type="hidden" name="trader_id" value="{{ $trader->id }}">

                                        <button class="btn btn-warning" type="submit" name="copy" style="color:white;">Copy Trade</button>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>


            </div>

        </div>


    </div>

</div>

@endsection
