<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $order = Transaction::where("status", "paid")->count();
        $income = Transaction::where("status", "paid")->sum("total_price");
        return view("pages.backEnd.dashboard.index", [
            "order" => $order,
            "income" => $income
        ]);
    }

    public function rincian()
    {
        $order = Transaction::select("id", "status", "total_price")->get();
        return response()->json($order);
    }
}
