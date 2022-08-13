<?php

namespace App\Repositories\frontEnd;

use App\Models\Customer;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Interfaces\frontEnd\AuthInterface;
use Illuminate\Validation\Rules;


class AuthRepository implements AuthInterface
{
    public function login($request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::CUSTOMER_HOME);
    }

    public function register($request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $customer = Customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($customer));

        // session()->put("customer", $customer);
        Auth::login($customer);

        return redirect(RouteServiceProvider::CUSTOMER_HOME);
    }
}
