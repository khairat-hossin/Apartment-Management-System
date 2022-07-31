<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expence extends Model
{
    protected $table = 'expences';
    public $timestamps = false; 
    protected $guarded = [];
}
