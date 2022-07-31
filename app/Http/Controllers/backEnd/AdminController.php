<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Interfaces\backEnd\AdminInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $admin;
    /**
     * Display a listing of the resource.
     *
     * @return __construct
     */
    public function __construct(AdminInterface $admin)
    {
        $this->admin = $admin;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->admin->index();
        }
        return view("pages.backEnd.admin.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.backEnd.admin.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->admin->store($request);
        return redirect()->route("admin.index")->with("success", "Data Success Created");
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
        $admin = $this->admin->edit($id);
        return view("pages.backEnd.admin.edit", [
            "admin" => $admin
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
        $this->admin->update($request, $id);
        return redirect()->route("admin.index")->with("success", "Data Success Edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->admin->destroy($id);
        return redirect()->route("admin.index")->with("success", "Data Success Delete");
    }
}
