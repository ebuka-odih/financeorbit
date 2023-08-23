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
        <h1><strong>DAILY SIGNALS</strong></h1>




        <p>Get Expert Signals and Earn More Profits <a href="account_upgrade.php">GO PRO</a> </p>




        <div class="container" style="margin-top:45px; color:white; text-align:center;">

            <div class="container" style="margin-top:45px; color:white; text-align:center;">
                @foreach($signals as $item)
                <div class="container bootstrap snippets bootdey">
                    <div class="profile card">
                        <div class="profile-body" style="padding:10px; margin-bottom:10px;">
                            <div class="profile-bio">
                                <div class="row">

                                    <div class="" style="text-align: center">



                                        <h2>TYPE: {{ $item->type }}</h2>
                                        <span><strong>CURRENCY PAIR:</strong>{{ $item->pair }}</span><br>
                                        <span><strong>LOT SIZE:</strong> {{ $item->lot ? : "Null" }} LS</span><br>
                                        <span><strong>TAKE PROFIT:</strong> {{ $item->tp }}</span><br>
                                        <span><strong>STOP LOSS:</strong> {{ $item->sl }}</span><br>

                                        <span><strong>TAKE ACTION:</strong> {{ $item->ta }}</span><br>
                                        <span><strong>TIME:</strong> {{ $item->time }}Minutes</span>
                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>


                </div>
                @endforeach

            </div>


        </div>

    </div>
@endsection
