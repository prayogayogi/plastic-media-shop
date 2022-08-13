<?php

namespace App\Repositories\frontEnd;

use App\Models\Cart;
use App\Interfaces\frontEnd\CheckoutInterface;


class CheckoutRepository implements CheckoutInterface
{
    public function destroy_cart($id)
    {
        $cart = Cart::destroy($id);
        return $cart;
    }
}
