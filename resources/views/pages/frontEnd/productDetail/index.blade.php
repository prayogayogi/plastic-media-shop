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
                        <form method="post" action="{{ route("cart_store") }}">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="product_id" value="{{ $productDetail->id }}">
                                <div class="col-md-3">
                                    <input name="count_cart" type="number" id="cart" class="form-control" value="1"/>
                                </div>
                                @auth
                                    <div class="col-md-5">
                                        <button type="submit" class="btn btn-primary btn-block">Add to Cart</button>
                                    </div>
                                @endauth
                                @guest
                                    <div class="col-md-5">
                                        <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#login">Add to Cart</a>
                                    </div>
                                @endguest
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
    </div>
</section>

<section class="products-grids trending pb-4">
    @include('pages.frontEnd.home._product')
</section>

@endsection

@push('after-script')
    <script>
        $(document).ready(function(){
            let data = $("#cart").val();
            console.log(data);
        });
    </script>
@endpush
