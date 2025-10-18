<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public $fillable = [
        'full_name',
        'phone',
        'email',
        'password',
        'address',
    ];
}
