<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	
	public function user(){
		return $this->belongsTo('App\User');
	}
	public function status(){
		return $this->belongsTo('App\Status');
	}
	public function typePayment(){
		return $this->belongsTo('App\typePayment');
	}
	
    public function orderDetails(){
    	return $this->hasMany('App\OrderDetail');
    }
}