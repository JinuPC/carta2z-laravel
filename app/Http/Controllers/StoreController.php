<?php

namespace App\Http\Controllers;

use App\Stores;
use App\User;
use DB, Log;
use Crypt;
use Auth, Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Inventory;
use App\Cart;
use App\Image as Img;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{

	protected $data = array();

	public function __construct()
	{
		$this->middleware('auth');
		$this->data['user'] = Auth::user();
		//if( $this->data['user']->role == 'seller' ) exit;
	}

	public function index()
	{
		$cart_count = Cart::where('user_id', '=', Auth::user()->user_id)->count();
		$inventory = Inventory::where('enabled','=',1)
			->where('available','=','1')
			->with('products')			
			->get();
		foreach ($inventory as $item) {
			$images = Img::where('product_id','=',$item->products->id)->get();
			 foreach ($images as $img) {
			 	$item->products->images=$img;
			 }			 	
			 
		}		
		
		$categories = Category::where('parent_id','=','0')->with('children')->get();
		return view('store.main')
			-> with('title', 'Wholesale Shop')
		 	-> with('categories', $categories)
		 	-> with('cart_count', $cart_count)
		 	-> with('mens', $inventory);
	}

	
} 