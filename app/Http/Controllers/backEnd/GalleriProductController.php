<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\backEnd\GalleriProductInterface;
use App\Models\Product;

class GalleriProductController extends Controller
{
    protected $galleriproduct;

    public function __construct(GalleriProductInterface $galleriproduct)
    {
        $this->galleriproduct = $galleriproduct;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->galleriproduct->index();
        }
        return view("pages.backEnd.galleriproduct.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view("pages.backEnd.galleriproduct.add", [
            "products" => $products
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
        $this->galleriproduct->store($request);
        return redirect()->route("galleriProduct.index")->with("success", "Data Success Created");
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
        return view("pages.backEnd.galleriProduct.edit");
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
        $this->galleriproduct->update($request, $id);
        return redirect()->route("galleriProduct.index")->with("success", "Data Success Edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->galleriproduct->destroy($id);
        return redirect()->route("galleriProduct.index")->with("success", "Data Success Delete");
    }
}
