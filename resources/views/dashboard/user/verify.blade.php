@extends('dashboard.layout.app')
@section('content')

<div class="main-container container-fluid">
    <div class="inner-body">
        <div id="mobileshow" class="see"></div>
        <div class="sees hide-mobile"></div>
        <!--Row-->


        <div class="row row-sm">
            <div class="col-sm-12 col-lg-12 col-xl-12 col-xxl-12">

                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">


                            <div class="card-body">
                                <div>
                                    <center>		<h6 class="main-content-label mb-1">Account Status</h6>	<br><br></center>
                                </div>
                                <center>
                                    @if(auth()->user()->status() < 2)
                                    <p class="text-muted card-sub-title">Your account is not verified. To verify your account,
                                        please fill out the form to request verification.
                                    </p>
                                    @endif
                                </center>

                            </div>


                        </div>
                    </div>



                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
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
    </div>

</div>

@endsection
