@extends('dashboard.layout.app')
@section('content')

<div class="container" style="margin-top:100px; color:white; text-align:center;">
    <h1><strong>MY TRADERS</strong></h1>

    <p>Get More Expert Traders and Earn More Profits <a href="">GO PRO</a> </p>




    <div class="alert alert-info fade show" role="alert">
        <center style="color:;">MINIMAL COPY TRADE AMOUNT: {{ auth()->user()->currency }} 500.00</center>

    </div>


    <div class="container" style="margin-top:45px; color:white; text-align:center;">

        <div class="container" style="margin-top:45px; color:white; text-align:center;">
            <h3><strong>COPIED TRADERS</strong></h3>



            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Details</th>
                        <th>Traded</th>
                        <th>ROI</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($trades as $item)
                    <tr>
                        <td>{{ date('Y, m d', strtotime($item->created_at)) }}</td>
                        <td>{{ $item->copy_trader->username }}</td>
                        <td>{{ auth()->user()->currency }}{{ $item->amount }}</td>
                        <td>{{ auth()->user()->currency }}{{ $item->roi }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>



    </div>

</div>


@endsection
