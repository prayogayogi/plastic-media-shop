<?php

namespace App\Repositories\backEnd;

use Illuminate\Support\Str;
use App\Models\GalleriProduct;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use App\Interfaces\backEnd\GalleriProductInterface;

class GalleriProductRepository implements GalleriProductInterface
{
    public function index()
    {
        $galleriProduct = GalleriProduct::with(["Product"]);
        return Datatables::of($galleriProduct)
            ->editColumn('photo', function ($item) {
                return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height:80px;" />' : '';
            })
            ->addIndexColumn()
            ->addColumn('action', "pages.actionDataTable.galleriProduct.edit")

            ->rawColumns(['action', 'photo'])
            ->toJson();
    }

    public function store($request)
    {
        if ($request->file("photos")) {
            $files = $request->file("photos");
            foreach ($files as $file) {
                GalleriProduct::create([
                    "product_id" => $request->input("product_id"),
                    "photo" => $file->store('assets/product/gallery', 'public')
                ]);
            }
        }
    }

    public function edit($id)
    {
        return GalleriProduct::findOrFail($id);
    }

    public function update($request, $id)
    {
        $data = $request->input();
        $product = GalleriProduct::findOrFail($id);
        $product->update($data);
    }

    public function destroy($id)
    {
        GalleriProduct::destroy($id);
    }
}
