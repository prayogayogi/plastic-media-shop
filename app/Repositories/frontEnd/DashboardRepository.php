<?php

namespace App\Repositories\frontEnd;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Response;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\frontEnd\DashboardInterface;

class DashboardRepository implements DashboardInterface
{
    public function all()
    {
        $categories = ProductCategory::all();
        $products = Product::with(["GalleriProduct"])->inRandomOrder()->limit(4)->get();
        return view("pages.frontEnd.home.index", [
            "categories" => $categories,
            "products" => $products
        ]);
    }

    public function product()
    {
        $categories = ProductCategory::all();
        $products = Product::with(["GalleriProduct"])->simplePaginate(6);
        return view("pages.frontEnd.product.index", [
            "products" => $products,
            "categories" => $categories,
            "title" => "Product",
            "product" => ''
        ]);
    }

    public function productDetail($slug)
    {
        $products = Product::with(["GalleriProduct"])->inRandomOrder()->limit(4)->get();
        $productDetail = Product::with(["GalleriProduct", "ProductCategory"])->where("slug", $slug)->first();
        return view("pages.frontEnd.productDetail.index", [
            "productDetail" => $productDetail,
            "products" => $products
        ]);
    }

    public function productCategory($slug)
    {
        $categories = ProductCategory::all();
        $product = ProductCategory::with(["Product.GalleriProduct"])->where("slug", $slug)->first();
        return view("pages.frontEnd.product.index", [
            "products" => $product->Product,
            "categories" => $categories,
            "title" => $product->name,
            "product" => $product
        ]);
    }

    public function about(): Response
    {
        return response()->view("pages.frontEnd.about.index");
    }

    public function search($request)
    {
        $request->session()->forget('cart');
        $data = $request->input("product");
        $products = Product::with(["GalleriProduct"])->where("name", "LIKE", "%" . $data . "%")->get();
        return response()->view("pages.frontEnd.product.productSearch", [
            "title" =>  "Product $data",
            "products" => $products
        ]);
    }

    public function cart_store($request)
    {
        $users_id = Auth::user()->id;
        $product = $request->input("product_id");
        $data = [
            "products_id" => $product,
            "users_id" => $users_id,
            "count" => $request->input("count_cart")
        ];
        Cart::create($data);
        return redirect()->route("cart");
    }

    public function cart($request)
    {
        $users_id = Auth::user()->id;
        $carts = Cart::with(["Product", "User"])->where("users_id", $users_id)->get();
        return response()->view("pages.frontEnd.cart.index", [
            "carts" => $carts
        ]);
    }
}
