<?php

namespace App\Repositories\backEnd;

use App\Interfaces\backEnd\ProductInterface;
use App\Models\product;
use Yajra\Datatables\Datatables;

class ProductRepository implements ProductInterface
{
    public function index()
    {
        return Datatables::of(product::query())
            ->addColumn('action', "pages.actionDataTable.edit")
            ->make(true);
    }
}
