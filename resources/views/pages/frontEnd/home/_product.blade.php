<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <h2>Product Items</h2>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        @forelse ($products as $product)
            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
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

        @endforelse
    </div>
</div>
