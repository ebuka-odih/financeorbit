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
                                    <li class="breadcrumb-item active" aria-current="page">Subscription</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="col-xxxl-12 col-xl-7 col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <style>
                                    #example2 {
                                        border: 1px solid;
                                        padding: 10px;
                                        box-shadow: 5px 10px #888888;
                                    }
                                </style>
                                @forelse($plans as $item)
                                    <div style="margin-right: 20px; margin-bottom: 20px" id="example2" class="col-lg-3 col-4">
                                        <div class="box no-shadow">
                                            <div class="box-body">
                                                <div class="contact-page-aside">
                                                    <form action="{{ route('user.subscribe') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="subscription_id" value="{{ $item->id }}">
                                                        <ul class="list-style-none fs-16">
                                                            <li>
                                                                <img src="" alt="">
                                                            </li>
                                                            <li class="box-label">
                                                                <span class="text-primary fs-4">{{ $item->name }}</span>
                                                                <span class="text-primary fs-4">Min: </span>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li class="mb-4"><a class="text-danger" href="javascript:void(0)">Amount: <span class="text-danger">Min: $@money($item->min_deposit)</span> <span class="text-success ">$UNLIMITED</span></a></li>
                                                            <li><a class="text-warning" href="javascript:void(0)">Term: <span class="text-warning">{{ $item->term_days }} Day(s)</span></a></li>
                                                            <li><a class="text-info" href="javascript:void(0)">ROI: <span class="text-info">{{ $item->roi }}%</span></a></li>
                                                            <li>
                                                               <input type="number" class="form-control mb-2" name="amount" placeholder="enter amount">
                                                                @if(session()->has('declined'))
                                                                    <div class="alert alert-danger">
                                                                        {{ session()->get('declined') }}
                                                                    </div>
                                                                @endif
                                                                @if(session()->has('insufficient'))
                                                                    <div class="alert alert-danger">
                                                                        {{ session()->get('insufficient') }}
                                                                    </div>
                                                                @endif
                                                            </li>
                                                            <li class="box-label">
                                                                <button type="submit" class="btn btn-success mt-10">+ Subscribe</button>
                                                          </li>
                                                        </ul>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h4 class="text-center">No subscription available</h4>
                                @endforelse
                            </div>


                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
