<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model {

	protected $table = 'inventory';

	public function products()
    {
        return $this->hasOne('App\Product','id',$this->product_id);
    }
    public function User()
    {
        return $this->belongsTo('App\User');
    }
    public function images()
    {
    	return $this->hasMany('App\image','product_id');
    }

}
