@extends('layouts.app-frontEnd')

@section('title', "Cart")

@section('content')
<section class="products-grid pb-4 pt-4">
    <div class="container">
        <form action="{{ route("checkout") }}" method="post">
            @csrf
        <div class="row">
                <div class="col col-10">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col">Produk</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($carts as $cart)
                                <tr>
                                    <td>{{ $cart->Product->name }}</td>
                                    <td>{{ $cart->count }}</td>
                                    <td>@currency($cart->count * $cart->Product->price)</td>
                                    <td>
                                        <a href="{{ route("destroy_cart", $cart->id) }}" class="btn text-danger">x</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>Produc tidak ada di keranjang</tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="col col-2 align-self-center">
                    <button type="submit" class="btn btn-dark">Checkout</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
