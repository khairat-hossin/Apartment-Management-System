<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OwnerInfo extends Model
{
    protected $table = 'owner_info';
    public $timestamps = false;

    protected $guarded = [];
}
