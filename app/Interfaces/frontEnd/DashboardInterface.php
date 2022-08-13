<?php

namespace App\Interfaces\frontEnd;

interface DashboardInterface
{
    /**
     * Function for return view Product
     */
    public function productDetail($slug);

    /**
     * Function for return view Product
     */
    public function all();

    /**
     * Function for return view Product
     */
    public function product();

    /**
     * Function for return view Product
     */
    public function productCategory($slug);

    /**
     * Function for return view Product
     */
    public function about();

    /**
     * Function for return view Product
     */
    public function search($request);

    /**
     * Function for return view Product
     */
    public function cart_store($request);

    /**
     * Function for return view Product
     */
    public function cart($request);
}
