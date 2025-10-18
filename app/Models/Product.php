<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['v_id', 'p_name', 'p_price', 'c_id', 'p_stock', 'p_description', 'p_image'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'c_id');
    }

    protected $primaryKey = 'p_id';
}
