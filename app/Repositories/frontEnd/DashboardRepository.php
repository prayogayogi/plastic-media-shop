<?php

namespace App\Repositories\frontEnd;

use App\Interfaces\frontEnd\DashboardInterface;
use App\Models\Product;
use App\Models\ProductCategory;
use Yajra\Datatables\Datatables;
use App\Models\Transaction;
use Illuminate\Http\Response;

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
}
