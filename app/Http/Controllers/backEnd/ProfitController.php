<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\backEnd\ProfitInterface;

class ProfitController extends Controller
{
    protected $profit;

    public function __construct(ProfitInterface $profit)
    {
        $this->profit = $profit;
    }

    public function index(Request $request)
    {
        $profits = $this->profit->index();
        // return $profits;
        return view("pages.backEnd.profit.index", [
            "profits" => $profits
        ]);
    }
}
