<?php

namespace App\Repositories\backEnd;

use Illuminate\Support\Str;
use App\Models\ProductCategory;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use App\Interfaces\backEnd\ProductCategoryInterface;

class ProductCategoryRepository implements ProductCategoryInterface
{
    public function index()
    {
        $product = ProductCategory::all();
        return Datatables::of($product)
            ->editColumn('photo', function ($item) {
                return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height:80px;" />' : '';
            })
            ->addColumn('action', "pages.actionDataTable.productCategory.edit")
            ->addIndexColumn()
            ->editColumn('created_at', function ($user) {
                return $user->created_at->format('Y/m/d');
            })
            ->rawColumns(['action', 'photo'])
            ->toJson();
    }

    public function store($request)
    {
        $data = $request->only("name");
        $data["slug"] = Str::slug($request->input("name"));
        $data["photo"] = $request->file("photos")->store("assets/productKategory/gallery", 'public');
        ProductCategory::create($data);
    }

    public function edit($id)
    {
        return ProductCategory::findOrFail($id);
    }

    public function update($request, $id)
    {
        $product = ProductCategory::findOrFail($id);
        $data = $request->input();
        $data["slug"] = Str::slug($request->input("name"));
        if ($request->file("photos")) {
            $data["photo"] = $request->file("photos")->store("assets/productKategory/gallery", 'public');
        } else {
            $data["photo"] = $product->photo;
        }
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
