<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'categories';
	protected $fillable = array('category_name');
	public static $rules = array('category_name'=>'required|min:3|unique:categories|alpha');

}
