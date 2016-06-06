<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'categories';
	protected $fillable = array('category_name');
	public static $rules = array('category_name'=>'required|min:3|unique:categories|alpha');
	public function children()
    {
        return $this->hasMany('App\Category','parent_id');   
    }
    public function parent()
    {
    	return $this->belongsTo('App\Category', 'parent_id');
    }

}
