<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_id',
        'address',
        'payment',
        'total_price',
        'shipping_price',
        'status',
    ];


    /**
     * Get the Customer that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the TransactionItem that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function TransactionItem(): HasMany
    {
        return $this->hasMany(Transaction_item::class, "transaction_id", "id");
    }
}
