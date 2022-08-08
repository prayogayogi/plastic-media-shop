@extends('layouts.app-frontEnd')

@section('title', $title)


@section('content')
<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </div>
</section>
<section class="products-grid pb-4 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <div class="widget-title">
                            <h3>Categories</h3>
                        </div>
                        <div class="widget-content widget-categories">
                            <ul>
                                @forelse ($categories as $category)
                                    <li><a href="{{ route("productCategory", $category->slug ) }}">{{ $category->name }}</a></li>
                                @empty
                                    <li><a href="#">Data Categories Not Found</a></li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="products-top">
                            <div class="products-top-inner pb-4">
                                <div class="products-found">
                                    <p><span>@if($product) {{ $product->name }} @endif</span>  {{ count($products) }}  products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse ($products as $product)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="{{ route("product.detail", $product->slug) }}">
                                        <img src="{{ Storage::url($product->GalleriProduct[0]->photo) }}" class="img-fluid" />
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3><a href="{{ route("product.detail", $product->slug) }}">{{ $product->name }}</a></h3>
                                    <div class="product-price">
                                        <span>@currency($product->price)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-4 col-md-6 col-12 mt-4">
                            <p>Data Product Tidak ada</p>
                        </div>
                    @endforelse
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination">
                            @if ($title == "Product")
                                {{ $products->links() }}
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
