<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'product_id',
        'order_status',
        'price'
    ];

    public function sales()
    {
    	
    }
}
