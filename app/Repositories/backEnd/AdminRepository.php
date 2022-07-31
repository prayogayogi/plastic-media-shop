<?php

namespace App\Repositories\backEnd;

use App\Models\Product;
use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;
use App\Interfaces\backEnd\AdminInterface;

class AdminRepository implements AdminInterface
{
    public function index()
    {
        $product = Product::all();
        return Datatables::of($product)
            ->addColumn('action', "pages.actionDataTable.admin.edit")
            ->addIndexColumn()
            ->toJson();
    }

    public function store($request)
    {
        $data = $request->only("name", "price", "description", "categories_id");
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
