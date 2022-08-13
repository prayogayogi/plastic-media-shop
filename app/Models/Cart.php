<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'products_id',
        'users_id',
        "count"
    ];

    /**
     * Get the Product associated with the Cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Product(): HasOne
    {
        return $this->hasOne(Product::class, "id", 'products_id');
    }

    /**
     * Get the User that owns the Cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
