<?php

namespace App\Http\View\Composers;

use App\Models\Cart;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class CartComposer
{
    public function compose(View $view)
    {
        $user = Auth::user();
        if ($user) {
            $view->with("cart", Cart::where("users_id", $user->id)->count());
        } else {
            $view->with("cart", 0);
        }
    }
}
