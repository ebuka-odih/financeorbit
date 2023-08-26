@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Copy Traders</h1>

                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <!-- Striped Table -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <a href="{{ route('admin.copy-traders.create') }}" class="btn btn-primary"><li class="fa fa-arrow-left"></li>Back</a>
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
                </div>
                <div class="block-content">
                    <form action="{{ route('admin.copy-traders.update', $trade->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="block-content">

                            <div class="row">
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Image</label>
                                    <input type="file" class="form-control" id="example-text-input" name="pro_image" >
                                    <img class="mt-2 mb-2" src="{{ asset('files/'.$trade->pro_image) }}" height="50" width="50" alt="">
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Username</label>
                                    <input type="text" class="form-control" id="example-text-input" name="username" value="{{ old('username', optional($trade)->username) }}">
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Accuracy(%)</label>
                                    <input type="text" class="form-control" id="example-text-input" name="accuracy" value="{{ old('accuracy', optional($trade)->accuracy) }}">
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Won Trades(%)</label>
                                    <input type="text" class="form-control" id="example-text-input" name="won_trades" value="{{ old('won_trades', optional($trade)->won_trades) }}">
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Lost Trades(%)</label>
                                    <input type="text" class="form-control" id="example-text-input" name="lost_trades" value="{{ old('lost_trades', optional($trade)->lost_trades) }}">
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Total Percentage(%)</label>
                                    <input type="text" class="form-control" id="example-text-input" name="total_pec" value="{{ old('total_pec', optional($trade)->total_pec) }}">
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Pro Signal</label>
                                    <select name="pro_trade" id="" class="form-control">
                                        <option >Select Option</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="mb-2 col-lg-6">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>

                            </div>

                        </div>
                    </form>

                </div>
            </div>
            <!-- END Striped Table -->

        </div>
        <!-- END Page Content -->
    </main>


@endsection
