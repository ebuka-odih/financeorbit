@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Verification</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Verify User</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <!-- TradingView Widget BEGIN -->

            <!-- TradingView Widget END -->
            <div class="row mt-3">
                <div class="col-lg-8 col-12">
                    <div class="box no-shadow">
                        <div class="box-body">
                            <div>
                                <center>
                                    <h6 class="main-content-label mb-1">Submit Verification</h6><hr>
                                    <p class="text-muted card-sub-title">
                                        To request an account verification, kindly provide your information
                                        with a valid means of Identification attached as an image document.
                                    </p>
                                </center>
                            </div>
                            <form class="form-horizontal" method="POST" action="{{ route('user.processVerify') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <div class="container">
                                    <div class="row mb-3">
                                        <div class="col-sm-12 col-md-6">
                                            <select name="id_type" id="" class="form-control">
                                                <option value="International Passport">International Passport</option>
                                                <option value="Driver License">Driver's License</option>
                                                <option value="National ID">National ID</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-12">
                                        <div class="col-sm-12 col-md-6">
                                            <input type="file" name="id_image" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 mx-auto">
                                    <br>
                                    <button type="submit"  class="btn btn-info col-sm-12">Upload Identification</button>
                                </div>
                                <!-- Role Creation -->
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
