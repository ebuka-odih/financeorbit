@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Amazon KDP</h1>

                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
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

            <!-- Striped Table -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    {{--                    <a href="" class="btn btn-secondary">Add Trader</a>--}}
                    <button type="button" class="btn btn-primary push" data-bs-toggle="modal" data-bs-target="#modal-block-normal">Add Book</button>

                </div>
                <div class="block-content">
                    <table class="table table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Reviews</th>
                            <th>Status</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $index => $item)
                            <tr>
                                <th class="text-center" scope="row">{{ $index + 1 }}</th>
                                <td class="fw-semibold">
                                    {{ $item->type }}
                                </td>
                                <td class="fw-semibold">
                                    {{ $item->name }}
                                </td>
                                <td class="fw-semibold">
                                    @money($item->price)$
                                </td>
                                <td class="fw-semibold">
                                    {{ $item->reviews }}
                                </td>
                                <td class="fw-semibold">
                                    {!! $item->status() !!}
                                </td>

                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.signal.edit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        <form method="POST" action="{!! route('admin.signal.destroy', $item->id) !!}" accept-charset="UTF-8">
                                            <input name="_method" value="DELETE" type="hidden">
                                            {{ csrf_field() }}

                                            <div class="btn-group btn-group-xs pull-right" role="group">
                                                <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete Signal?&quot;)">
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
                        <h3 class="block-title">Add Book</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{ route('admin.signal.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="block-content">

                            <div class="row">
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Image</label>
                                    <input type="file" class="form-control" id="example-text-input" name="image" >
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Name</label>
                                    <input type="text" class="form-control" id="example-text-input" name="name" >
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Price</label>
                                    <input type="number" class="form-control" id="example-text-input" name="price" >
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Reviews</label>
                                    <input type="text" class="form-control" id="example-text-input" name="reviews" >
                                </div>
                                <div class="mb-2 col-lg-12">
                                    <label class="form-label" for="example-text-input">Description</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
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
