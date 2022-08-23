<?php

namespace App\Repositories\backEnd;

use App\Models\Product;
use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;
use App\Interfaces\backEnd\ProductInterface;

class ProductRepository implements ProductInterface
{
    public function index()
    {
        $product = Product::with(["ProductCategory", "GalleriProduct"]);
        return Datatables::of($product)
            ->addIndexColumn()
            ->addColumn('action', "pages.actionDataTable.product.edit")
            ->toJson();
    }

    public function store($request)
    {
        $data = $request->only("name", "price", "description", "categories_id", "price_modal", "unit", "quantity");
        $data["slug"] = Str::slug($request->input("name"));
        Product::create($data);
    }

    public function edit($id)
    {
        return Product::findOrFail($id);
    }

    public function update($request, $id)
    {
        $data = $request->input();
        $product = Product::findOrFail($id);
        $product->update($data);
    }

    public function destroy($id)
    {
        Product::destroy($id);
    }
}
