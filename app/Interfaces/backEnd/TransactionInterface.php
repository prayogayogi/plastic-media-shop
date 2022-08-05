<?php

namespace App\Interfaces\backEnd;

interface TransactionInterface
{
    /**
     * Function for return view Product
     */
    public function index();

    /**
     * Function for return view Product
     */
    public function all($id);
}
