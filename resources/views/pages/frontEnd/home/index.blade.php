@extends('layouts.app-frontEnd')

@section('title', "Home")


@section('content')
    <!-- SLIDER -->
    <section class="slider-section pt-4 pb-4">
        @include('pages.frontEnd.home._slider')
    </section>

    <!-- Services -->
    <section class="pt-5 pb-5">
        @include('pages.frontEnd.home._service')
    </section>
    <!-- End Services -->

    <section class="products-grids trending pb-4">
        @include('pages.frontEnd.home._product')
    </section>
@endsection
