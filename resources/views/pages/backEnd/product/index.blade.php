@extends("layouts.app-custome")

@section("title", "Product")

@section("content")
<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Product</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route("product.index") }}">
                        <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        Product
                    </li>
                    <li class="breadcrumb-item" aria-current="page">List Product</li>
                </ol>
            </nav>
        </div>
        <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-member"><span class="mdi mdi-plus"></span> TAMBAH PRODUK</button>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-body">
                        <table id="myTable" class="table table-hover nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Price</th>
                                    <th>Tag</th>
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
            ajax: '{{ route('product.index') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'price', name: 'price' },
                { data: 'tags', name: 'tags' },
                { data: 'action', name: 'action' }
            ]
        });
    } );
</script>

@endpush
