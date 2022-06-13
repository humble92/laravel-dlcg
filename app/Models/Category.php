<?php

namespace App\Models;

use App\Models\Product;
use App\Models\CategoryProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function products() {
        return $this->hasMany(CategoryProduct::class)
                ->join('products', 'category_product.product_id', '=', 'products.id');
    }
}
