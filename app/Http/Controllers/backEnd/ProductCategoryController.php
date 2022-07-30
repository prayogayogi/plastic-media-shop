<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Interfaces\backEnd\ProductCategoryInterface;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    protected $productCategory;
    /**
     * Display a listing of the resource.
     *
     * __construct
     */
    public function __construct(ProductCategoryInterface $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->productCategory->index();
        }
        return view("pages.backEnd.productCategory.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.backEnd.productCategory.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->productCategory->store($request);
        return redirect()->route("categoryProduct.index")->with("success", "Data Success Created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryProduct = $this->productCategory->edit($id);
        return view("pages.backEnd.productCategory.edit", [
            "categoryProduct" => $categoryProduct,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->productCategory->update($request, $id);
        return redirect()->route("categoryProduct.index")->with("success", "Data Success Edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productCategory->destroy($id);
        return redirect()->route("categoryProduct.index")->with("success", "Data Success Delete");
    }
}
