@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Staking Plans</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <!-- Striped Table -->
            <div class="block block-rounded">
                <div class="block-content">
                    <button type="button" class="btn btn-primary push" data-bs-toggle="modal" data-bs-target="#modal-block-normal">Add Staking Plan</button>
                    <table class="table table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Name</th>
                            <th>Token</th>
                            <th>Amount</th>
                            <th> ROI(%)</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($staking as $index => $item)
                            <tr>
                                <th class="text-center" scope="row">{{ $index + 1 }}</th>
                                <td class="fw-semibold">
                                    {{ $item->name }}
                                </td>
                                <td class="fw-semibold">
                                    {{ $item->token }}
                                </td>
                                <td class="fw-semibold">
                                    $@money($item->amount)
                                </td>
                                <td class="fw-semibold">
                                    {{ $item->roi }} ({{ $item->roi_rate }}%)
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.staking.edit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        <form method="POST" action="{!! route('admin.staking.destroy', $item->id) !!}" accept-charset="UTF-8">
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

        <!-- END Page Content -->
    </main>

    <!-- Normal Block Modal -->
    <div class="modal" id="modal-block-normal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Add Staking Plan</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="{{ route('admin.staking.store') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- Basic Elements -->
                            <div class="row push">
                                <div class="col-lg-12">
                                    <div class="mb-4 col-lg-12">
                                        <label class="form-label" for="example-email-input">Name</label>
                                        <input type="text" class="form-control" id="example-email-input" name="name" required>
                                    </div>
                                    <div class="row">
                                        <div class="mb-4 col-lg-6">
                                            <label class="form-label" for="example-text-input">Token</label>
                                            <input type="text" class="form-control" id="example-text-input" name="token" required>
                                        </div>
                                        <div class="mb-4 col-lg-6">
                                            <label class="form-label" for="example-email-input">Price</label>
                                            <input type="number" class="form-control" id="example-email-input" name="amount" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-4 col-lg-6">
                                            <label class="form-label" for="example-text-input">ROI</label>
                                            <input type="text" class="form-control" id="example-text-input" name="roi" required>
                                        </div>
                                        <div class="mb-4 col-lg-6">
                                            <label class="form-label" for="example-email-input">ROI Percentage(%)</label>
                                            <input type="text" class="form-control" id="example-email-input" name="roi_rate" >
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-secondary">Save</button>

                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="block-content block-content-full text-end bg-body">
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
