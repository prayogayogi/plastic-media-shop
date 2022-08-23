<?php

namespace App\Repositories\frontEnd;

use Midtrans;
use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Models\Transaction_item;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\frontEnd\CheckoutInterface;

class CheckoutRepository implements CheckoutInterface
{

    public function __construct()
    {
    }

    /**
     * Checkout
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout($request, $id)
    {
        $carts = Cart::with(["Product", "User"])
            ->where("users_id", $id)
            ->get();

        $totalPrice = 0;
        foreach ($carts as $key => $cart) {
            $totalPrice += $cart->count * $cart->Product->price;
        }

        // Create transaction
        $user = Auth::user();
        $data = [
            "users_id" => $user->id,
            "address" => $user->address,
            "total_price" => (int) $totalPrice,
            "status" => "waiting"
        ];
        $transaction = Transaction::create($data);

        foreach ($carts as $key => $cart) {

            // Create 1 to 1 to transaction_item
            $item = [
                "users_id" => $cart->users_id,
                "product_id" => $cart->products_id,
                "transaction_id" => $transaction->id,
                "quantity" => $cart->count
            ];
            Transaction_item::create($item);

            // Soft Delete 1 to 1 to table cart
            Cart::destroy($cart->id);
        }

        // Midtrans Configuration
        Midtrans\Config::$serverKey = env("MIDTRANS_SERVERKEY");
        Midtrans\Config::$isProduction = env("MIDTRANS_IS_PRODUCTION");
        Midtrans\Config::$isSanitized = env("MIDTRANS_IS_SANITIZED");
        Midtrans\Config::$is3ds = env("MIDTRANS_IS_3DS");

        $code = $transaction->id . '-' . Str::random(5);
        $transaction_details = [
            "order_id" => $code,
            "gross_amount" => (int) $transaction->total_price
        ];

        $user = Auth::user();
        $userData = [
            "first_name" => $user->name,
            "last_name" => "",
            "address" => $user->address,
            "city" => "",
            "postal_code" => "",
            "phone" => $user->phone,
            "country_code" => "IDN"
        ];

        $customer_details = [
            "first_name" => $user->name,
            "last_name" => "",
            "email" => $user->email,
            "phone" => $user->phone,
            "billing_address" => $userData,
            "shipping_address" => $userData
        ];

        $midtrans_params = [
            "transaction_details" => $transaction_details,
            "customer_details" => $customer_details,
            "vtweb" => []
        ];


        try {
            // Get Snap Pament Page URL
            $paymentUrl = \Midtrans\Snap::createTransaction($midtrans_params)->redirect_url;

            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
        } catch (\Exception $e) {
            return false;
        }
        // return redirect()->route("home");
    }

    /**
     * Callback midtrans
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function midtransCallback($request)
    {
        // Midtrans Configuration
        Midtrans\Config::$serverKey = env("MIDTRANS_SERVERKEY");
        Midtrans\Config::$isProduction = env("MIDTRANS_IS_PRODUCTION");
        Midtrans\Config::$isSanitized = env("MIDTRANS_IS_SANITIZED");
        Midtrans\Config::$is3ds = env("MIDTRANS_IS_3DS");

        $notif = $request->method() == "POST" ? new Midtrans\Notification() : Midtrans\Transaction::status($request->order_id);
        // return $notif;
        $transaction_status = $notif->transaction_status;
        $fraud = $notif->fraud_status;

        $checkout_id = explode("-", $notif->order_id)[0];
        $checkout = Transaction::find($checkout_id);

        if ($transaction_status == 'capture') {
            if ($fraud == 'challenge') {
                /*TODO Set payment status in merchant's database to 'challenge'*/
                $checkout->status = "pending";
            } else if ($fraud == 'accept') {
                /*TODO Set payment status in merchant's database to 'success'*/
                $checkout->status = "paid";
            }
        } else if ($transaction_status == 'cancel') {
            if ($fraud == 'challenge') {
                /*TODO Set payment status in merchant's database to 'failure'*/
                $checkout->status = "failed";
            } else if ($fraud == 'accept') {
                /*TODO Set payment status in merchant's database to 'failure'*/
                $checkout->status = "failed";
            }
        } else if ($transaction_status == 'deny') {
            /*TODO Set payment status in merchant's database to 'failure'*/
            $checkout->status = "failed";
        } else if ($transaction_status == 'settlement') {
            /*TODO set payment status in merchant's database to 'Settlement'*/
            $checkout->status = "paid";
        } else if ($transaction_status == 'pending') {
            /*TODO set payment status in merchant's database to 'Pending'*/
            $checkout->status = "pending";
        } else if ($transaction_status == 'expire') {
            /*TODO set payment status in merchant's database to 'expire'*/
            $checkout->status = "failed";
        }

        $checkout->save();
        return view("pages.frontEnd.orderSuccess.index");
    }

    /**
     * Delete cart
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy_cart($id)
    {
        $cart = Cart::destroy($id);
        return $cart;
    }
}
