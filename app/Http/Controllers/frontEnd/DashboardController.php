<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\frontEnd\DashboardInterface;

class DashboardController extends Controller
{
    protected $dashboard;
    /**
     * Display a listing of the resource.
     *
     * __construct
     */
    public function __construct(DashboardInterface $dashboard)
    {
        $this->dashboard = $dashboard;
    }

    public function index()
    {
        return $this->dashboard->all();
    }

    public function product()
    {
        return $this->dashboard->product();
    }

    public function productDetail($slug)
    {
        return $this->dashboard->productDetail($slug);
    }

    public function productCategory($slug)
    {
        return $this->dashboard->productCategory($slug);
    }

    public function about()
    {
        return $this->dashboard->about();
    }

    public function search(Request $request)
    {
        return $this->dashboard->search($request);
    }

    public function cart(Request $request)
    {
        return $this->dashboard->cart($request);
    }

    public function cart_store(Request $request)
    {
        return $this->dashboard->cart_store($request);
    }
}
