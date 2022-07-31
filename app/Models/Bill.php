<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'billing_info';
    protected $guarded = [];
    public $timestamps = false;
}
