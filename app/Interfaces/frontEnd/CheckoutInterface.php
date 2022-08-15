<?php

namespace App\Interfaces\frontEnd;

interface CheckoutInterface
{
    /**
     * Function for return view Product
     */
    public function checkout($request, $id);

    /**
     * Function for return view Product
     */
    public function midtransCallback($request);

    /**
     * Function for return view Product
     */
    public function destroy_cart($id);
}
