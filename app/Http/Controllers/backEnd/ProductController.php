<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\backEnd\ProductInterface;
use App\Repositories\backEnd\ProductCategoryRepository;

class ProductController extends Controller
{
    protected $product;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->product->index();
        }
        return view("pages.backEnd.product.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new ProductCategoryRepository();
        $productCategories = $data->all();
        return view("pages.backEnd.product.add", [
            "productCategories" => $productCategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->product->store($request);
        return redirect()->route("product.index")->with("success", "Data Success Created");
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
        $data = new ProductCategoryRepository();
        $productCategories = $data->all();
        $product = $this->product->edit($id);
        return view("pages.backEnd.product.edit", [
            "product" => $product,
            "productCategories" => $productCategories
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
        $this->product->update($request, $id);
        return redirect()->route("product.index")->with("success", "Data Success Edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->product->destroy($id);
        return redirect()->route("product.index")->with("success", "Data Success Delete");
    }
}
