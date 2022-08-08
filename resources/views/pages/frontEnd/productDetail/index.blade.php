@extends('layouts.app-frontEnd')

@section('title', "Product $productDetail->name")

@section('content')
<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
        </ol>
    </div>
</section>
<section class="product-page pb-4 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div id="product-images" class="carousel slide" data-ride="carousel">
                    <!-- slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active"> <img src="{{ Storage::url($productDetail->GalleriProduct[0]->photo) }}" alt="Product 1"> </div>
                        @foreach ($productDetail->GalleriProduct as $product)
                            <div class="carousel-item"> <img src="{{ Storage::url($product->photo) }}" alt="Product 2"> </div>
                        @endforeach
                    </div> <!-- Left right -->
                    <a class="carousel-control-prev" href="#product-images" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#product-images" data-slide="next"> <span class="carousel-control-next-icon"></span> </a><!-- Thumbnails -->
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="product-detail">
                    <h2 class="product-name">{{ $productDetail->name }}</h2>
                    <div class="product-price">
                        <span class="price">@currency($productDetail->price)</span>
                    </div>
                    <div class="product-short-desc">
                        <p>
                            {{ $productDetail->description }}
                        </p>
                    </div>
                    <div class="product-select">
                        <form>
                            <div class="form-group">
                                <label>Size</label>
                                <select class="form-control">
                                    <option>-- Size --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Color</label>
                                <select class="form-control">
                                    <option>-- Color --</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="number" class="form-control" value="1"/>
                                </div>
                                <div class="col-md-5">
                                    <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="btn btn-secondary"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="product-categories">
                        <ul>
                            <li class="categories-title">Categories :</li>
                            <li><a href="{{ route("productCategory", $productDetail->ProductCategory->slug) }}">{{ $productDetail->ProductCategory->name }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-details">
                    <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <div class="review-form">
                                        <h3>Write a review</h3>
                                        <form>
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <input type="text" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Your Review</label>
                                                <textarea cols="4" class="form-control"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products-grids trending pb-4">
    @include('pages.frontEnd.home._product')
</section>

@endsection