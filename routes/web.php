<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backEnd\AdminController;
use App\Http\Controllers\frontEnd\AuthController;
use App\Http\Controllers\backEnd\ProductController;
use App\Http\Controllers\backEnd\CustomerController;
use App\Http\Controllers\backEnd\DashboardController;
use App\Http\Controllers\frontEnd\CheckoutController;
use App\Http\Controllers\BackEnd\TransactionController;
use App\Http\Controllers\backEnd\GalleriProductController;
use App\Http\Controllers\backEnd\ProductCategoryController;
use App\Http\Controllers\backEnd\ProfitController;
use App\Http\Controllers\frontEnd\DashboardController as DashboardControllerFrontEnd;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(["auth", "checkLogin:ADMIN"])->prefix("admin")->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
    Route::get("/rincian", [DashboardController::class, "rincian"])->name("rincian");
    Route::get("/transaction", [TransactionController::class, "index"])->name("transaction.index");
    Route::get("/transaction/{id}", [TransactionController::class, "show"])->name("transaction.show");
    Route::resource("product", ProductController::class);
    Route::resource("categoryProduct", ProductCategoryController::class);
    Route::resource("admin", AdminController::class);
    Route::resource("customer", CustomerController::class);
    Route::resource("galleriProduct", GalleriProductController::class);

    // Route Profit
    Route::get("profit", [ProfitController::class, "index"])->name("profit.index");
});

// Route Product and home
Route::get("/", [DashboardControllerFrontEnd::class, "index"])->name("home");
Route::get("/product-category/{id:slug}", [DashboardControllerFrontEnd::class, "productCategory"])->name("productCategory");
Route::get("/product", [DashboardControllerFrontEnd::class, "product"])->name("product");
Route::get("/product/{id:slug}", [DashboardControllerFrontEnd::class, "productDetail"])->name("product.detail");
Route::get("/about", [DashboardControllerFrontEnd::class, "about"])->name("about");

// Auth Register customer
Route::post("/registerCustomer", [AuthController::class, "register"])->name("registerCustomer");
Route::post("/loginCustomer", [AuthController::class, "login"])->name("loginCustomer");

// Route Search product
Route::post("/product", [DashboardControllerFrontEnd::class, "search"])->name("search-product");

// Cart Product
Route::middleware(["auth", "checkLogin:CUSTOMER"])->group(function () {
    Route::get("/cart", [DashboardControllerFrontEnd::class, "cart"])->name("cart");
    Route::post("/cart", [DashboardControllerFrontEnd::class, "cart_store"])->name("cart_store");

    // Route Checkout
    Route::get("/checkout/{id}", [CheckoutController::class, "checkout"])->name("checkout");
    Route::get("/cart/{id}", [CheckoutController::class, "destroy_cart"])->name("destroy_cart");
});

// Midtrans Routes
Route::get("payment/success", [CheckoutController::class, "midtransCallback"]);
Route::post("payment/success", [CheckoutController::class, "midtransCallback"]);

require __DIR__ . '/auth.php';
