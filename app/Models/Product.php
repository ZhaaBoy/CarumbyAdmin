<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "products_code",
        "name",
        "image",
        "video",
        "description",
        "format_size"
    ];

    private function sizes() {
        return $this->hasMany(Size::class, "products_code", "products_code");
    }

    private function colors() {
        return $this->hasMany(Color::class, "products_code", "products_code");
    }

    private function pre_order() {
        return $this->hasMany(Product_pre_order::class, "products_id", "id");
    }
}
