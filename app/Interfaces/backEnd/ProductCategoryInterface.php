<?php

namespace App\Interfaces\backEnd;

interface ProductCategoryInterface
{
    /**
     * Function for return view Product Category
     */
    public function index();

    /**
     * Function for store data product category
     */
    public function store($request);

    /**
     * Function for return view edit
     */
    public function edit($id);

    /**
     * Function for return view edit
     */
    public function update($request, $id);

    /**
     * Function for return view edit
     */
    public function destroy($id);

    /**
     * Function for return all data product category
     */
    public function all();
}
