<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expence extends Model
{
    protected $table = 'expences';
    public $timestamps = false; 
    protected $guarded = [];
}
