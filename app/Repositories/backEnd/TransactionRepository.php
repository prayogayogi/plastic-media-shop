<?php

namespace App\Repositories\backEnd;

use Yajra\Datatables\Datatables;
use App\Interfaces\backEnd\TransactionInterface;
use App\Models\Transaction;

class TransactionRepository implements TransactionInterface
{
    public function index()
    {
        $product = Transaction::with(["TransactionItem.Product", "User"])->where("status", "paid");
        return Datatables::of($product)
            ->addIndexColumn()
            ->editColumn('created_at', function ($user) {
                return $user->created_at->format('d/m/Y');
            })
            ->addColumn('action', "pages.actionDataTable.transaction.edit")
            ->toJson();
    }

    public function all($id)
    {
        return Transaction::with(["TransactionItem.Product"])->find($id);
    }
}
