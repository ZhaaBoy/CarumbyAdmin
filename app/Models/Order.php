<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "users_id",
        "date_pre_order",
        "qty",
        "payment_price",
        "status"
    ];

    public function user() {
        return $this->belongsTo(User::class, "users_id", "id");
    }

    public function order() {
        return $this->hasOne(Product::class, "orders_id", 'id');
    }
}
