<?php

namespace App\Interfaces\backEnd;

interface GalleriProductInterface
{
    /**
     * Function for return view Product
     */
    public function index();

    /**
     * Function for product data store
     */
    public function store($request);

    /**
     * Function for product data destroy
     */
    public function edit($id);

    /**
     * Function for product data destroy
     */
    public function update($request, $id);

    /**
     * Function for product data destroy
     */
    public function destroy($id);
}
