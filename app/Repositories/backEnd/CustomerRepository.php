<?php

namespace App\Repositories\backEnd;

use App\Models\User;
use Yajra\Datatables\Datatables;
use App\Interfaces\backEnd\CustomerInterface;
use App\Models\Customer;

class CustomerRepository implements CustomerInterface
{
    public function index()
    {
        $customer = Customer::all();
        return Datatables::of($customer)
            ->addColumn('action', "pages.actionDataTable.customer.edit")
            ->addIndexColumn()
            ->toJson();
    }

    public function edit($id)
    {
        return User::findOrFail($id);
    }

    public function update($request, $customer)
    {
        $data = $request->input();
        $customer->update($data);
    }

    public function destroy($customer)
    {
        $customer->delete();
    }
}
