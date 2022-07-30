@extends("layouts.app-custome")

@section("title", "Add Product Category")

@section("content")
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Product Category</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route("categoryProduct.index") }}">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Product Category
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Add Product Category</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-default">
                    <div class="card-body p-0" data-simplebar>
                            <form action="{{ route("categoryProduct.store") }}" method="post">
                                @csrf
                                <div class="modal-header px-4">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Product Category</h5>
                                </div>

                                <div class="modal-body px-4">
                                    <div class="row mb-2">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Input name product category">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer px-4">
                                    <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-pill">Save Product Category</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
@endsection
