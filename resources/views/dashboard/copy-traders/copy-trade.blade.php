@extends('dashboard.layout.app')
@section('content')
    <style>


        body {
            margin: 0;

        }

        .navbari {
            overflow: hidden;
            background-color:#0e132e;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .navbari a {
            float: left;
            display: block;
            color: white	;
            text-align: center;
            padding: 8px 10px;
            text-decoration: none;
            font-size: 13px;
        }

        .navbari a:hover {
            background: #00002E;
            color: black;
        }

        .navbari a.active {

            color: white;
        }

        .main {
            padding: 20px;
            margin-bottom: 30px;
        }
    </style>
    <style>
        .stars {
            font-size: 0;
        }

        .stars p {
            font-size: 20px;
            padding: 3px;
        }

        .stars i {
            font-size: 35px;
            padding: 3px;
        }

        .stars:hover i,
        .stars:not(:hover) .active{
            color: yellow;
        }

        .stars:hover i:hover ~ i {
            color: inherit;
        }
    </style>

<div class="container" style="margin-top:100px; color:white; text-align:center;">
    <h1><strong>MY TRADERS</strong></h1>


    <p>Get More Expert Traders and Earn More Profits <a href="account_upgrade.php">GO PRO</a> </p>

    <div class="alert alert-info fade show" role="alert">
        <center style="color:;">MINIMAL COPY TRADE AMOUNT: {{ auth()->user()->currency }} 500.00</center>

    </div>


    <div class="container" style="margin-top:45px; color:white; text-align:center;">
        <h3><strong>COPY EXPERT+ TRADERS</strong></h3>

        @foreach($traders as $item)
        <div class="container bootstrap snippets bootdey">
            <div class="profile card" style="padding:10px; margin-bottom:10px;">
                <div class="profile-body">
                    <div class="profile-bio">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <img style="height:170px;" class="img-thumbnail md-margin-bottom-10" src="../administrators/upload/ED4B8E70-CFAF-4749-8064-F6EAC2BEB509.jpeg" alt="">

                            </div>
                            <div class="col-md-7">



                                <h2>Username: 1T8CV</h2>
                                <span><strong>Accuracy:</strong> 55%</span><br>
                                <span><strong>Trades Won in Ratio:</strong>60%</span><br>
                                <span><strong>Trades lost in Ratio:</strong> 40%</span><br>
                                <span><strong>Trade Percentage:</strong> 20%</span>
                                <br>
                                <p>Supported By Whirl Wind Invts.</p>

                                <form method="POST" action="">

                                    <input type="hidden" name="user_id" value="1T8CV">

                                    <input type="hidden" name="accuracy" value="55">

                                    <input type="hidden" name="won_ratio" value="60">

                                    <input type="hidden" name="username" value="nancy112">

                                    <input type="hidden" name="loss_ratio" value="40">

                                    <input type="hidden" name="percentage" value="20">


                                    <button class="btn btn-warning"  name=""><a style="color:white;" href="{{ route('user.copy-trader.show', $item->id) }}">Copy Trade</a></button>

                                </form>

                            </div>

                        </div>

                    </div>


                </div>


            </div>

        </div>
        @endforeach



    </div>

</div>

@endsection
