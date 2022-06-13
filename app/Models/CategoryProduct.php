<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;

    /**
     * overriding to fix naming DB table. Laravel expects 'category_products'
     */    
    public function getTable()
    {
        return 'category_product';
    }

    /**
     * Get the comments for the blog post.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }    
}
