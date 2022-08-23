<div class="container">
    <div class="slider-inner">
        <div class="row">
            <div class="col-md-3">
                <nav class="nav-category">
                    <h2>Categories</h2>
                    <ul class="menu-category">
                        @forelse ($categories as $category)
                            <li><a href="{{ route("productCategory", $category->slug) }}">{{ $category->name }}</a></li>
                        @empty
                            <li><a href="#">Data Categories Not Found</a></li>
                        @endforelse
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner shadow-sm rounded">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset("assets-frontEnd/img/slides/MEDIA_PLASTIK1.png") }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset("assets-frontEnd/img/slides/MEDIA_PLASTIK2.png") }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset("assets-frontEnd/img/slides/MEDIA_PLASTIK3.png") }}" alt="Third slide">
                        </div>
                    </div>
                </div>
                <!-- End Slider -->
            </div>
        </div>
    </div>
</div>
