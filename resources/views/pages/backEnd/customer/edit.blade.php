@extends("layouts.app-custome")

@section("title", "Edit Customer")

@section("content")
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Edit Customer</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route("customer.index") }}">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Customer
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Edit Customer</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-default">
                    <div class="card-body p-0" data-simplebar>
                            <form action="{{ route("customer.update", $customer->id) }}" method="post">
                                @method("PATCH")
                                @csrf
                                <div class="modal-header px-4">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Add New Customer</h5>
                                </div>

                                <div class="modal-body px-4">
                                    <div class="row mb-2">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{ $customer->name }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" value="{{ $customer->email }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="phone" name="phone" class="form-control" id="phone" value="{{ $customer->phone }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="address" name="address" class="form-control" id="address" value="{{ $customer->address }}">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal-footer px-4">
                                    <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-pill">Save Customer</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
@endsection
