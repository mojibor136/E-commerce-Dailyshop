<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'reseller_customer_id',
        'order_type',
        'shipping_id',
        'payment_id',
        'status',
        'total',
    ];

    /**
     * Get the user that owns the Order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    /**
     * Get the reseller associated with the Order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reseller(): BelongsTo
    {
        return $this->belongsTo(Reseller::class, 'reseller_customer_id');
    }

    /**
     * Get the payment associated with the Order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }

    /**
     * Get the shipping associated with the Order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shipping(): BelongsTo
    {
        return $this->belongsTo(Shipping::class, 'shipping_id');
    }
}
