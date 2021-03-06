<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['amount', 'dispatched', 'payment_capture', 'code', 'delivery', 'user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function deliveries()
    {
    	return $this->hasMany('App\Delivery');
    }


    public function lastid()
    {
    	return $this->max('id');
    }
}
