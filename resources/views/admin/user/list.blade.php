@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Users</h1>

                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <!-- Striped Table -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h4>Users</h4>
                </div>
                <div class="block-content">
                   <div class="table-responsive">
                       <table class="table table-striped table-vcenter">
                           <thead>
                           <tr>
                               <th class="text-center" style="width: 50px;">#</th>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Trade Progress</th>
                               <th class="d-none d-sm-table-cell">Status</th>
                               <th class="d-none d-sm-table-cell" >Joined At</th>
                               <th class="text-center" >Actions</th>
                           </tr>
                           </thead>
                           <tbody>
                           @foreach($users as $index => $item)
                               <tr>
                                   <th class="text-center" scope="row">{{ $index + 1 }}</th>
                                   <td class="fw-semibold">
                                       {{ $item->fullname() }} ($@money($item->balance))
                                   </td>
                                   <td class="fw-semibold">
                                       {{ $item->email }}
                                   </td>
                                   <td class="fw-semibold">
                                       <span class="badge bg-success">{{ $item->trade_progress }}% </span><span> <a class="btn btn-primary btn-sm fa fa-plus-circle" data-bs-toggle="modal" data-bs-target="#modal-block-normal"> Add</a></span>
                                   </td>
                                   <td class="d-none d-sm-table-cell">
                                       {!! $item->status() !!}
                                   </td>
                                   <td class="d-none d-sm-table-cell">
                                       {{ date('Y-m-d', strtotime($item->created_at)) }}
                                   </td>
                                   <td class="text-center">
                                       <div class="btn-group">
                                           <a href="{{ route('admin.userDetails', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                               <i class="fa fa-eye"></i>
                                           </a>
                                           <a href="{{ route('admin.verifyUser', $item->id) }}" class="btn btn-sm btn-alt-secondary" >
                                               <i class="fa fa-check"></i>
                                           </a>
                                           <form method="POST" action="{!! route('admin.deleteUser', $item->id) !!}" accept-charset="UTF-8">
                                               <input name="_method" value="DELETE" type="hidden">
                                               {{ csrf_field() }}

                                               <div class="btn-group btn-group-xs pull-right" role="group">
                                                   <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete Package?&quot;)">
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
                    <div class="d-flex justify-content-center">
                        {!! $users->links() !!}
                    </div>
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
                    <form action="{{ route('admin.tradeProg') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="user_id">

                        <div class="block-content">
                            <div class="row">
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Percentage(%)</label>
                                    <input type="text" class="form-control" id="example-text-input" name="trade_progress" value="{{ $item->trade_progress }}">
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
