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
                                    <li class="breadcrumb-item active" aria-current="page">Stock Trading</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content mt-5">
                <div class="row">
                    <div class="col-12">
                            <h4 class="mb-0 text-center">All Stocks</h4>
                        <hr>
                    </div>
                    @forelse($stocks as $item)
                    <div class="col-lg-4 col-12">
                        <div class="box pull-up">
                            <div class="box-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <div class="d-flex">
{{--                                            <i class="cc BTC font-size-30"></i>--}}
                                            <div>
                                                <h4 class="mb-0">{{ $item->name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0 font-weight-600">Min: <span class="text-primary">@money($item->amount)</span> USD</p>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <form action="">
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="amount" placeholder="@money($item->amount)">
                                        </div>
                                        <div class="col-12 mt-2">
                                            <button type="submit" class="btn btn-primary">Invest</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <h4 class="text-center">No stocks available</h4>
                    @endforelse

                </div>

            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
