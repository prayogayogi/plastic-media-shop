@extends("layouts.app-custome")

@section("title", "Add Galleri Product")

@section("content")
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Galleri Product</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route("galleriProduct.index") }}">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Galleri Product
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Add Galleri Product</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-default">
                    <div class="card-body p-0" data-simplebar>
                            <form action="{{ route("galleriProduct.store") }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header px-4">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Galleri Product</h5>
                                </div>

                                <div class="modal-body px-4">
                                    <div class="row mb-2">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label for="product_id">Galleri Product</label>
                                                <select name="product_id" class="form-control select2">
                                                    <option></option>
                                                    @forelse ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @empty
                                                        <option value="null">Not Galleri Product </option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="photoProductGalleri">Photo Product Galleri</label>
                                                <input type="file" name="photos[]" multiple class="form-control" id="photoProductGalleri" placeholder="Name product">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal-footer px-4">
                                    <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-pill">Save Galleri Product</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
@endsection

@push('after-style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush

@push('after-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.select2').select2({
                placeholder: "Select Galleri Product Category",
                allowClear: true,
            });
        });
    </script>
@endpush
