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

                <div class="block-content">
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
                    <table class="table table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Copied Trader</th>
                            <th>User</th>
                            <th>Amount</th>
                            <th>ROI</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Total Percentage</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trades as $index => $item)
                            <tr>
                                <th class="text-center" scope="row">{{ $index + 1 }}</th>
                                <td class="fw-semibold">
                                    <span>{{ optional($item->copy_traders)->username }}</span>
                                    <span>({{ optional($item->copy_traders)->accuracy }}%)</span>
                                </td>
                                <td class="fw-semibold">
                                    {{ optional($item->user)->fullname() }}
                                </td>
                                <td class="fw-semibold">
                                    $@money($item->amount)
                                </td>
                                <td class="fw-semibold">
                                    @money($item->roi)
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    {{ $item->roi_pec ? : '0' }}%
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.copy-traders.edit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <form method="POST" action="{!! route('admin.deleteTrade', $item->id) !!}" accept-charset="UTF-8">
                                            <input name="_method" value="DELETE" type="hidden">
                                            {{ csrf_field() }}

                                            <div class="btn-group btn-group-xs pull-right" role="group">
                                                <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete Item?&quot;)">
                                                    <i class="fa fa-times"></i>
                                                </button>

                                            </div>

                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Striped Table -->

        </div>
        <!-- END Page Content -->
    </main>


    <div class="modal" id="modal-block-normal" tabindex="-1" aria-labelledby="modal-block-normal" aria-hidden="true"  role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Add Copy Trader</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{ route('admin.copy-traders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="block-content">

                            <div class="row">
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Image</label>
                                    <input type="file" class="form-control" id="example-text-input" name="pro_image" >
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Username</label>
                                    <input type="text" class="form-control" id="example-text-input" name="username" >
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Accuracy(%)</label>
                                    <input type="text" class="form-control" id="example-text-input" name="accuracy" >
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Won Trades(%)</label>
                                    <input type="text" class="form-control" id="example-text-input" name="won_trades" >
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Lost Trades(%)</label>
                                    <input type="text" class="form-control" id="example-text-input" name="lost_trades" >
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Total Percentage(%)</label>
                                    <input type="text" class="form-control" id="example-text-input" name="total_pec" >
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Pro Signal</label>
                                    <select name="pro_trade" id="" class="form-control">
                                        <option >Select Option</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="block-content block-content-full text-end bg-body">
                            <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
