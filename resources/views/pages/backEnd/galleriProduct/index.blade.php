@extends("layouts.app-custome")

@section("title", "Galleri Product")

@section("content")
<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>GalleriProduct</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route("galleriProduct.index") }}">
                        <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        GalleriProduct
                    </li>
                    <li class="breadcrumb-item" aria-current="page">List GalleriProduct</li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="{{ route("galleriProduct.create") }}" class="btn btn-primary" ><span class="mdi mdi-plus"></span> TAMBAH GALLERI PRODUK</a>
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
                                <th class="col-md-1">No</th>
                                <th class="col-md-4">Product</th>
                                <th class="col-md-3">Photo</th>
                                <th class="col-md-2">Action</th>
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
                { data: 'product.name', name: 'Product.name' },
                { data: 'photo', name: 'photo' },
                { data: 'action', name: 'action' }
            ]
        });
    } );
</script>

@endpush
