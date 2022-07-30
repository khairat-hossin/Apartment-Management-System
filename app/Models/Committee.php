<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $table = 'commitees';

    public $timestamps = false;

    protected $guarded = [];
}
