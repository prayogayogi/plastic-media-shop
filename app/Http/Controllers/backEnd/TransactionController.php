<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\backEnd\TransactionInterface;

class TransactionController extends Controller
{

    protected $transaction;
    /**
     * Display a listing of the resource.
     *
     * __construct
     */
    public function __construct(TransactionInterface $transaction)
    {
        $this->transaction = $transaction;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->transaction->index();
        }
        return view("pages.backEnd.transaction.index");
    }


    public function show($id)
    {
        $transactions = $this->transaction->all($id);
        // return $transactions->TransactionItem;
        return view("pages.backEnd.transaction.show", [
            "transactions" => $transactions
        ]);
    }
}
