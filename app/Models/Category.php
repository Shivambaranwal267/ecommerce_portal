<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['c_name', 'c_commission',];
    protected $primaryKey = 'c_id';
}
