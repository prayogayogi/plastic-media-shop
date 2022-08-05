<?php

namespace App\Repositories\backEnd;

use Yajra\Datatables\Datatables;
use App\Interfaces\backEnd\TransactionInterface;
use App\Models\Transaction;

class TransactionRepository implements TransactionInterface
{
    public function index()
    {
        $product = Transaction::with(["TransactionItem.Product", "Customer"]);
        return Datatables::of($product)
            ->addIndexColumn()
            ->addColumn('action', "pages.actionDataTable.transaction.edit")
            ->toJson();
    }

    public function all($id)
    {
        return Transaction::with(["TransactionItem.Product"])->find($id);
    }
}
