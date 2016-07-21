<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Inventory;
use App\User;
use App\Cart;
use App\Image as Img;
use App\Product;
use App\Order;
use App\Order_log;
use App\Inventory_log;
use Illuminate\Http\Request;
use Auth, Session, Input;

class CartController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$carts = Cart::where('user_id','=',Auth::user()->user_id)->get();
		$total = 0;	
		$deliveryCharge = 0;
		foreach ($carts as $cart) {
			$base_total = 	$cart->count * $cart->price;
			$deliveryCharge += $cart->count * 100; 
			$total += $cart->count * $cart->price;			
			$cart["base_total"] = $base_total;
		}	
		$total += $deliveryCharge;
		$categories = Category::where('parent_id','=','0')->with('children')->get();
		return view('store.cart')
			->with ('carts', $carts)
			-> with('title', 'Cart')
			->with('total', $total)
			->with ('deliveryCharge', $deliveryCharge)
		 	-> with('categories', $categories);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function add($id)
	{
		$cartExist = Cart::where('user_id','=',Auth::user()->user_id)
			->where('inventory_id','=',$id)->count();
			
		if($cartExist > 0)
		{
			$cartExist = Cart::where('user_id','=',Auth::user()->user_id)
			->where('inventory_id','=',$id)->get();
			foreach ($cartExist as  $value) {
				 $value->count =  $value->count +1;
				 $value->save();
			}			
			return redirect('shop/cart');
		}

		$inventory = Inventory::find($id);
		$product = Product::find($inventory->product_id);
		$image = Img::where('product_id',"=",$inventory->product_id)->first();
		$cart = new Cart();
		$cart->inventory_id = $id;
		$cart->price = $inventory->unit_price;
		$cart->title = $product->title;
		$cart->user_id = Auth::user()->user_id;
		$cart->count = 1;
		$cart->image_url = $image->image_url;
		$cart->save();
		return redirect('shop/cart');
		echo $cart;
		
		dd($inventory);
	}
	public function remove($id)
	{
		$cart = Cart::find($id)->delete();
		Session::flash('flash_success',"Removed Sucessfully");
		return redirect('shop/cart');
	}

	public function checkout()
	{
		$carts = Cart::where('user_id','=',Auth::user()->user_id)->get();
		$total = 0;	
		$deliveryCharge = 0;
		foreach ($carts as $cart) {
			$base_total = 	$cart->count * $cart->price;
			$deliveryCharge += $cart->count * 100; 
			$total += $cart->count * $cart->price;			
			$cart["base_total"] = $base_total;
		}	
		$total += $deliveryCharge;
		$categories = Category::where('parent_id','=','0')->with('children')->get();
		return view('store.checkout')
			->with ('carts', $carts)
			-> with('title', 'Cart')
			->with('total', $total)
			->with ('deliveryCharge', $deliveryCharge)
		 	-> with('categories', $categories)
		 	-> with('user', Auth::user());
	}
	public function postcheckout($id)
	{
		
		//Saving Address
		$user = Auth::user();		
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->company = Input::get('company');
		$user->phone_no = Input::get('phone_no');
		$user->street = Input::get('street');
		$user->city = Input::get('city');
		$user->district = Input::get('district');
		$user->postcode = Input::get('postcode');
		$user->landmark = Input::get('landmark');
		$user->state = Input::get('state');
		$user->save();

		//Retrive Products and Make Order
		$carts = Cart::where('user_id','=',$id)->get();		
		foreach ($carts as $cart) {
			$inventory = Inventory::find($cart->inventory_id);
			if($inventory->stock < $cart->count)
			{
				$deletedCart = Cart::find($cart->id)->delete();
				Session::flash('flash_warning',$cart->title.' is out of stock please try later');
				return redirect('shop/cart');
			}
			else
			{
				$inventory->stock = $inventory->stock - $cart->count;
				$inventory->sold = $inventory->sold + $cart->count;
				if($inventory->stock < 1)
				{
					$inventory->enabled = 0;
					$inventory->available = 0;
				}
				//
				$order = new Order();
				$order->product_id = $inventory->product_id;
				$order->user_id = $inventory->user_id;
				$order->inventory_id = $inventory->id;
				$order->customer_orderid = $id;
				$order->status ="order Created";
				$order->quantity = $cart->count;
				$order->price = $cart->count * $cart->price;
				$order->deliverycharge = $cart->count * 100;
				$order->total_price = $order->price + $order->deliverycharge;
				$order->payment_details = "cod";
				$order->save();

				$orderlog = new Order_log();
				$orderlog->order_id = $order->id;
				$orderlog->status = "order Created";
				$orderlog->save();

				$inventory->save();
				$inventory_log = new Inventory_log();
				$inventory_log->inventory_id = $cart->inventory_id;
				$inventory_log->status = 'Order Happened';
				$inventory_log->count = $cart->count;
				$inventory_log->save();				
				
			}
			//end of if else loop
			$deleteCart = Cart::find($cart->id)->delete();
		}
		//end of for each loop
		Session::flash('flash_info',"Order Created Sucessfully");
		return redirect('shop/cart');
	}
	//end of function

}
