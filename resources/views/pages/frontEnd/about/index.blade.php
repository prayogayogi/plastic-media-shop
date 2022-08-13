@extends('layouts.app-frontEnd')

@section('title', "About")

@section('content')
<section class="products-grid pb-4 pt-4">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <nav class="nav-category">
                    <h2>Toko Media Plastik</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo molestias maxime repellendus ducimus nisi voluptatem quod, accusantium laborum soluta minima possimus rerum corporis necessitatibus repudiandae, aliquid, quae debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae architecto omnis illum ratione adipisci rerum!</p>
                </nav>
            </div>
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner shadow-sm rounded">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset("assets-frontEnd/img/slides/MEDIA_PLASTIK1.png") }}" alt="First slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
