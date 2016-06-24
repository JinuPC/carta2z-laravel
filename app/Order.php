<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	protected $table = 'orders';

	public function orderlogs()
	{
		return $this->hasMany('App/Order_log');
	}

}
