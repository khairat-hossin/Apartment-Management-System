<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoterInfo extends Model
{
    protected $table = 'voter';
    public $timestamps = false;
    protected $guarded = [];
}
