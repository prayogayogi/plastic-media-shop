<?php

namespace App\Repositories\backEnd;

use App\Interfaces\backEnd\ProductInterface;
use App\Models\product;

class ProductRepository implements ProductInterface
{
    public function index()
    {
        return product::all();
    }
}
