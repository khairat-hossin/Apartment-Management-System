<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FixedBill extends Model
{
    protected $table= 'fixed_bills';
    public $timestamps = false;
    protected $guarded = [];
}
