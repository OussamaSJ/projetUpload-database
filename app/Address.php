<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'area',
        'city',
        'zip',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User','id','address_id');
    }
}
