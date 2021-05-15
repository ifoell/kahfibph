@extends('template.layout2')
@section('title', 'Data Mahasiswa')
@section('content')
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">@yield('title')</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        {{ Breadcrumbs::render('mahasiswa') }}
                    </nav>
                </div>

                <div class="col-lg-6 col-5 text-right">
                    {{-- <a href="{{ route('books.create') }}" class="btn btn-sm btn-neutral">New</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">

    <div class="row">
        <div class="col-xl-12 col-lg-12 margin-tb mt-3 mb-3">
            <!-- Members list group card -->
            <div class="card">
                <!-- Card body -->
                <div class="card-body">
                    {{-- @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>
                            <p>{{ $message }}</p>
                        </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif --}}

                    <div class="table-responsive pr-2 pl-2">
                        <table style="width: 100%" class="table table-info table-bordered table-hover data-table table-responsive">
                            <thead>
                                <tr>
                                    <th width="2%">#</th>
                                    <th width="15%">Nama Mahasiswa</th>
                                    <th width="20%">Jenis Kelamin</th>
                                    <th width="25%">No HP</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script>
        $(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                autoWidth: false,

                ajax: "{{ route('mahasiswa.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable:false, searchable:false},
                    {data: 'fullname', name: 'mahasiswa.fullname'},
                    {data: 'jk', name: 'mahasiswa.jk'},
                    {data: 'phone_number', name: 'mahasiswa.phone_number'},
                    {data: 'email', name: 'mahasiswa.email'},
                    {data: 'action', name: 'action', orderable:false, searchable:false},
                ],
                order: [[1, 'asc']]
            });

        });
    </script>
@endpush

