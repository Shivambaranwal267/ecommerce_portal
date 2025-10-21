<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public $fillable = ['id_number', 'full_name', 'phone', 'email', 'password',  'business_name', 'business_type', 'gst_number', 'business_category', 'bank_account_no', 'payment_method', 'address'];

    protected $primaryKey = 'v_id';
}
