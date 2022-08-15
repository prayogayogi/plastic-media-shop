@extends("layouts.app-custome")

@section("title", "Transaction")

@section("content")
<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Transaction</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route("transaction.index") }}">
                        <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        Transaction
                    </li>
                    <li class="breadcrumb-item" aria-current="page">List Transaction</li>
                </ol>
            </nav>
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
                                <th>Name Customer</th>
                                <th>Alamat</th>
                                <th>Tanggal Order</th>
                                <th>Total Harga</th>
                                <th class="col-md-1">Action</th>
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
            ajax: '{!! url()->current() !!}',
            columns: [
                { data: 'DT_RowIndex', name: 'id' },
                { data: 'user.name', name: 'User.name' },
                { data: 'address', name: 'address' },
                { data: 'created_at', name: 'created_at' },
                { data: 'total_price', render: $.fn.dataTable.render.number( '.', ',', 0, 'Rp ' ) },
                { data: 'action', name: 'action' }
            ],
        });
    } );
</script>

@endpush
