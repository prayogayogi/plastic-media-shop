<?php

namespace App\Models;

use App\Models\GalleriProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    /**
     * Get all of the GalleriProduct for the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function GalleriProduct(): HasMany
    {
        return $this->hasMany(GalleriProduct::class);
    }

    /**
     * Get all of the TransactionItems for the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function TransactionItems(): HasMany
    {
        return $this->hasMany(Transaction_item::class);
    }
}
