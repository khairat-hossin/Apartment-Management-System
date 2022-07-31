<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
	//protected $fillable = [ 'first_name', 'last_name', 'flat_no', 'rent_from', 'n_id', 'date_of_birth', 'mobile', 'address', 'ref_name', 'ref_contact'];
    protected $table = 'rentals';
    
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */

    public $timestamps = false;
    protected $guarded = [];
}
