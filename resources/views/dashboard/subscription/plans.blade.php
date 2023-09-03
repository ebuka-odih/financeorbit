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
                                    <li class="breadcrumb-item active" aria-current="page">Futures Trading</li>
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
                                    <div id="example2" class="col-lg-3 col-4">
                                        <div class="box no-shadow">
                                            <div class="box-body">
                                                <div class="contact-page-aside">
                                                    <ul class="list-style-none fs-16">
                                                        <li>
                                                            <img src="" alt="">
                                                        </li>
                                                        <li class="box-label">
                                                            <span class="text-primary fs-4">Min: $@money($item->min_deposit)</span> - <span class="text-success fs-4">$UNLIMITED</span>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li><a class="text-danger" href="javascript:void(0)">Work <span class="text-danger">103</span></a></li>
                                                        <li><a class="text-warning" href="javascript:void(0)">Family <span class="text-warning">19</span></a></li>
                                                        <li><a class="text-info" href="javascript:void(0)">Friends <span class="text-info">623</span></a></li>
                                                        <li><a class="text-success" href="javascript:void(0)">Private <span class="text-success">53</span></a></li>
                                                        <li class="box-label"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success mt-10">+ Create New Label</a></li>
                                                    </ul>
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
