<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';
	public static $rules = array(
		'category_name'=>'required|min:3',
		);

	public function children()
    {
        return $this->hasMany('App\Category','parent_id');   
    }
    public function parent()
    {
    	return $this->belongsTo('App\Category', 'parent_id');
    }

}
