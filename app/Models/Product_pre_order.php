<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_pre_order extends Model
{
    use HasFactory;

    protected $fillable = [
        "products_id",
        "start_date",
        "end_date",
        "status",
    ];

    public function product() {
        return $this->belongsTo(Product::class, "products_id", "id");
    }

    public function variants() {
        return $this->hasMany(Variant::class, "product_pre_order_id", "id");
    }
}
