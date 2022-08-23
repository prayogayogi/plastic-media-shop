<?php

namespace App\Repositories\backEnd;

use App\Models\User;
use Yajra\Datatables\Datatables;
use App\Interfaces\backEnd\AdminInterface;

class AdminRepository implements AdminInterface
{
    public function index()
    {
        $admin = User::where("roles", "ADMIN");
        return Datatables::of($admin)
            ->addColumn('action', "pages.actionDataTable.admin.edit")
            ->addIndexColumn()
            ->toJson();
    }

    public function store($request)
    {
        $data = $request->only("name", "email");
        $data["password"] = bcrypt($request->input("name"));
        User::create($data);
    }

    public function edit($id)
    {
        return User::findOrFail($id);
    }

    public function update($request, $id)
    {
        $data = $request->input();
        if ($request->input("password")) {
            $data["password"] = bcrypt($request->input("password"));
        }
        $admin = User::findOrFail($id);
        $data["password"] = $admin->password;
        $admin->update($data);
    }

    public function destroy($id)
    {
        User::destroy($id);
    }
}
