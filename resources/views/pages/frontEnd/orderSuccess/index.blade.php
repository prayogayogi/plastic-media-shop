@extends('layouts.app-frontEnd')

@section('title', "Checkout Success")

@section('content')
<section class="products-grid pb-4 pt-4">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-12">
                <img src="{{ asset('assets-frontEnd/img/ill_register.png') }}" height="400" class="mb-5" alt=" ">
            </div>
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    WHAT A DAY!
                </p>
                <h2 class="primary-header ">
                    Berhasil Checkout
                </h2>
                <a href="{{ route("home") }}" class="btn btn-primary mt-3">
                    My Dashboard
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
