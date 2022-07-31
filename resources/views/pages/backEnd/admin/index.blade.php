@extends("layouts.app-custome")

@section("title", "Admin")

@section("content")
<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Admin</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route("admin.index") }}">
                        <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        Admin
                    </li>
                    <li class="breadcrumb-item" aria-current="page">List Admin</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route("admin.create") }}" class="btn btn-primary" ><span class="mdi mdi-plus"></span> TAMBAH ADMIN</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @include('components.alert')
            <div class="card card-default">
                <div class="card-body">
                    <table id="myTable" class="table table-hover nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
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
<!-- End Content -->

@endsection

@push('after-style')
    <link href="{{ asset("assets-backEnd/plugins/data-tables/datatables.bootstrap4.min.css") }}" rel="stylesheet">
@endpush

@push('after-script')
<script src="{{ asset("assets-backEnd/plugins/data-tables/jquery.datatables.min.js") }}"></script>
<script src="{{ asset("assets-backEnd/plugins/data-tables/datatables.bootstrap4.min.js") }}"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.index') }}',
            columns: [
                { data: 'DT_RowIndex', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'action', name: 'action' }
            ]
        });
    } );
</script>

@endpush
