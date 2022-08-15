<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\frontEnd\CheckoutInterface;

class CheckoutController extends Controller
{
    protected $checkout;
    /**
     * Display a listing of the resource.
     *
     * __construct
     */
    public function __construct(CheckoutInterface $checkout)
    {
        // Repository chekcout
        $this->checkout = $checkout;
    }

    public function checkout(Request $request, $id)
    {
        return $this->checkout->checkout($request, $id);
    }

    public function midtransCallback(Request $request)
    {
        return $this->checkout->midtransCallback($request);
    }

    public function destroy_cart($id)
    {
        $result = $this->checkout->destroy_cart($id);
        return redirect()->route("cart");
    }
}
