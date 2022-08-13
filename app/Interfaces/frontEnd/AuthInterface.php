<?php

namespace App\Interfaces\frontEnd;

interface AuthInterface
{
    /**
     * Function for return view Product
     */
    public function login($request);

    /**
     * Function for return view Product
     */
    public function register($request);
}
