<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperType extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'paper_type_products', 'type_id', 'product_id');
    }
}
