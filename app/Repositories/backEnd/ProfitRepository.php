<?php

namespace App\Repositories\backEnd;

use App\Models\Product;
use Yajra\Datatables\Datatables;
use App\Interfaces\backEnd\ProfitInterface;

class ProfitRepository implements ProfitInterface
{
    public function index()
    {
        $product = Product::with(["ProductCategory", "GalleriProduct", "TransactionItems"])->get();
        return $product;
    }
}
