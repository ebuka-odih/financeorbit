@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper" style="min-height: 644px;">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Profile</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Extra</li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-12 col-lg-5 col-xl-4">
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-img bbsr-0 bber-0" style="background: url('/client/images/gallery/full/10.jpg') center center;" data-overlay="5">
                                <h3 class="widget-user-username text-white">{{ $user->fullname() }}</h3>
                                <h6 class="widget-user-desc text-white">{!! $user->status() !!}</h6>
                            </div>
                            <div class="widget-user-image">
                                <img class="rounded-circle" src="{{ asset('img2/avatar.png') }}" alt="User Avatar">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="description-block">
                                            <h5>Balance</h5>
                                            <span class="description-text">$@money($user->balance)</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="description-block">
                                            <h5>Profit</h5>
                                            <span class="description-text">$@money($user->profit)</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-body box-profile">
                                <div class="row">
                                    <div class="col-12">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>Email:</th>
                                                <td>{{ $user->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Username:</th>
                                                <td>{{ $user->username }}</td>
                                            </tr>
                                            <tr>
                                                <th>Gender:</th>
                                                <td>{{ $user->gender ? : "Not Set" }}</td>
                                            </tr>
                                            <tr>
                                                <th>Currency:</th>
                                                <td>{{ $user->currency() ? : "Not Set" }}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone:</th>
                                                <td>{{ $user->phone ? : 'Not Set' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Address:</th>
                                                <td>{{ $user->address ? : 'Not Set' }}</td>
                                            </tr>
                                            <tr>
                                                <th>City:</th>
                                                <td>{{ $user->city ? : 'Not Set' }}</td>
                                            </tr>
                                            <tr>
                                                <th>State:</th>
                                                <td>{{ $user->state ? : 'Not Set' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Country:</th>
                                                <td>{{ $user->country ? : 'Not Set' }}</td>
                                            </tr>
                                        </table>

                                    </div>

                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>



                    </div>

                    <div class="col-12 col-lg-7 col-xl-8">

                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li><a href="#usertimeline" data-bs-toggle="tab" class="active">Edit Profile</a></li>
                                <li><a href="#settings" data-bs-toggle="tab" class="">Change Password</a></li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="usertimeline">


                                </div>
                                <!-- /.tab-pane -->


                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->



                </div>
                <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
