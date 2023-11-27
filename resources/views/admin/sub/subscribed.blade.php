@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Subscribed</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">



                <!-- END Basic Elements -->


            </div>
        </div>
        <!-- END Elements -->

        <!-- Page Content -->
        <div class="content">

            <!-- Striped Table -->
            <div class="block block-rounded">
                <div class="block-content">
                    <table class="table table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>User</th>
                            <th>Sub Details</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Profit</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subs as $index => $item)
                            <tr>
                                <th class="text-center" scope="row">{{ $index + 1 }}</th>
                                <td class="fw-semibold">
                                    {{ $item->user->fullname() }}
                                </td>
                                <td class="fw-semibold">
                                    {{ $item->subscription->name }}
                                    <p>Term: {{ $item->subscription->term_days }} Day(s)</p>
                                    <p>Percent: {{ $item->subscription->roi }}%</p>
                                </td>

                                <td class="d-none d-sm-table-cell">
                                    $@money($item->amount)
                                </td>
                                <td class="fw-semibold">
                                    {!! $item->adminStatus() !!}
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    $@money($item->profit)
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.subscription.edit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        <form method="POST" action="{!! route('admin.subscription.destroy', $item->id) !!}" accept-charset="UTF-8">
                                            <input name="_method" value="DELETE" type="hidden">
                                            {{ csrf_field() }}

                                            <div class="btn-group btn-group-xs pull-right" role="group">
                                                <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete subscription?&quot;)">
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
                        <h3 class="block-title">Add Subscription Plan</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="{{ route('admin.subscription.store') }}" method="POST" enctype="multipart/form-data" >
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
                                        <label class="form-label" for="example-text-input">Name</label>
                                        <input type="text" class="form-control" id="example-text-input" name="name" >
                                    </div>
                                    <div class="mb-4 col-lg-12">
                                        <label class="form-label" for="example-email-input">Term Days</label>
                                        <input type="number" class="form-control" id="example-email-input" name="term_days" >
                                    </div>
                                    <div class="mb-4 col-lg-12">
                                        <label class="form-label" for="example-email-input">ROI</label>
                                        <input type="number" class="form-control" id="example-email-input" name="roi" >
                                    </div>
                                    <div class="mb-4 col-lg-12">
                                        <label class="form-label" for="example-password-input">Max Amount</label>
                                        <input type="number" class="form-control" id="example-password-input" name="min_deposit" >
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
