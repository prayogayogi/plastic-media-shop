@extends("layouts.app-custome")

@section("title", "Edit Product")

@section("content")
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Edit Product</h1>
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
                        <li class="breadcrumb-item" aria-current="page">Edit Product</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-default">
                    <div class="card-body p-0" data-simplebar>
                            <form action="{{ route("product.update", $product->id) }}" method="post">
                                @method("PATCH")
                                @csrf
                                <div class="modal-header px-4">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Product</h5>
                                </div>

                                <div class="modal-body px-4">
                                    <div class="row mb-2">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="price">Price Product</label>
                                                <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Input description">{{ $product->description }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label for="categories_id">Product Category</label>
                                                <select name="categories_id" class="form-control select2">
                                                    <option></option>
                                                    @forelse ($productCategories as $productCategory)
                                                        <option value="{{ $productCategory->id }}" @if ($productCategory->id === $product->categories_id) selected @endif>{{ $productCategory->name }}</option>
                                                    @empty
                                                        <option value="null">Not Product Category</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label for="price_modal">Price modal</label>
                                                <input type="text" name="price_modal" class="form-control" id="price_modal" value="{{ $product->price_modal }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label for="satuan">Satuan</label>
                                                <input type="text" name="unit" class="form-control" id="satuan" value="{{ $product->unit }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label for="jumlah">Jumlah</label>
                                                <input type="text" name="quantity" class="form-control" id="jumlah" value="{{ $product->quantity }}">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal-footer px-4">
                                    <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-pill">Save Product</button>
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
                placeholder: "Select Product Category",
                allowClear: true,
            });
        });
    </script>
@endpush
