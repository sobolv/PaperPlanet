<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function paper_types()
    {
        return $this->belongsToMany('App\Models\PaperType', 'paper_type_products', 'product_id', 'type_id');
    }
}
