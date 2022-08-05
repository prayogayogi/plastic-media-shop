<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backEnd\AdminController;
use App\Http\Controllers\backEnd\ProductController;
use App\Http\Controllers\backEnd\CustomerController;
use App\Http\Controllers\backEnd\DashboardController;
use App\Http\Controllers\backEnd\GalleriProductController;
use App\Http\Controllers\backEnd\ProductCategoryController;
use App\Http\Controllers\BackEnd\TransactionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(["auth"])->prefix("admin")->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
    Route::get("/rincian", [DashboardController::class, "rincian"])->name("rincian");
    Route::get("/transaction", [TransactionController::class, "index"])->name("transaction.index");
    Route::get("/transaction/{id}", [TransactionController::class, "show"])->name("transaction.show");
    Route::resource("product", ProductController::class);
    Route::resource("categoryProduct", ProductCategoryController::class);
    Route::resource("admin", AdminController::class);
    Route::resource("customer", CustomerController::class);
    Route::resource("galleriProduct", GalleriProductController::class);
});

require __DIR__ . '/auth.php';
