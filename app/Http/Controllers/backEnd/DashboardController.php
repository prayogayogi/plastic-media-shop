<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $order = Transaction::count();
        $income = Transaction::sum("total_price");
        return view("pages.backEnd.dashboard.index", [
            "order" => $order,
            "income" => $income
        ]);
    }
}
