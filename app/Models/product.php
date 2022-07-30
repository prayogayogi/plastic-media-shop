<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable  = [
        "name",
        "price",
        "description",
        "slug",
        "categories_id"
    ];

    /**
     * Get the ProductCategory that owns the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ProductCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, "categories_id", "id");
    }
}
