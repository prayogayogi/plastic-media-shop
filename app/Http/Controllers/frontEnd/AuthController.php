<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Interfaces\frontEnd\AuthInterface;

class AuthController extends Controller
{
    protected $auth;
    /**
     * Display a listing of the resource.
     *
     * __construct
     */
    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }

    public function login(LoginRequest $request)
    {
        return $this->auth->login($request);
    }

    public function register(Request $request)
    {
        return $this->auth->register($request);
    }
}
