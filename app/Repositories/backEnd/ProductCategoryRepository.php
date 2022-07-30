<?php

namespace App\Repositories\backEnd;

use Illuminate\Support\Str;
use App\Models\ProductCategory;
use Yajra\Datatables\Datatables;
use App\Interfaces\backEnd\ProductCategoryInterface;

class ProductCategoryRepository implements ProductCategoryInterface
{
    public function index()
    {
        $product = ProductCategory::all();
        return Datatables::of($product)
            ->addColumn('action', "pages.actionDataTable.productCategory.edit")
            ->editColumn('created_at', function ($user) {
                return $user->created_at->format('Y/m/d');
            })
            ->addIndexColumn()
            ->toJson();
    }

    public function store($request)
    {
        $data = $request->only("name");
        $data["slug"] = Str::slug($request->input("name"));
        ProductCategory::create($data);
    }

    public function edit($id)
    {
        return ProductCategory::findOrFail($id);
    }

    public function update($request, $id)
    {
        $data = $request->input();
        $product = ProductCategory::findOrFail($id);
        $product->update($data);
    }

    public function destroy($id)
    {
        ProductCategory::destroy($id);
    }

    public function all()
    {
        return ProductCategory::all();
    }
}
