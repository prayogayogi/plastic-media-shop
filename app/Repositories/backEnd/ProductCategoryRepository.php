<?php

namespace App\Repositories\backEnd;

use App\Interfaces\backEnd\ProductCategoryInterface;
use App\Models\ProductCategory;

class ProductCategoryRepository implements ProductCategoryInterface
{
    public function all()
    {
        return ProductCategory::all();
    }
}
