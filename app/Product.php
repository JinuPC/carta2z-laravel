<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';
    
	public static $rules = array(
        'product_name'      => 'required|min:3|unique:products',
		'title'     => 'required|min:3',
        'sub_title' => 'required|min:3',
        'brand'     => 'required|min:3',
        'feature1'  => 'required|min:3',
        'feature2'  => 'required|min:3',
        'feature3'  => 'required|min:3',
        'feature4'  => 'required|min:3',
        'warranty'  => 'required',
        'features'   => 'required|min:50',
        'sku'       => 'required|min:3',
        'stock'     => 'required|integer',
        'unit'      => 'required|min:3',
        'mrp'       => 'required',
        'unit_price'=> 'required',
        'warehouse' => 'required',
        'images'    => 'required|array'
		);

	public function images()
    {
        return $this->hasMany('App\Image');
    }
    public function Inventory()
    {
        return $this->belongsTo('Inventory');
    }
}
