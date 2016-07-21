<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Order;
use App\Category;
use App\User;
use App\Order_log;
use App\Product;
use Session, Auth, Input;

class OrderController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$orders = Order::where('user_id','=', Auth::user()->user_id)
			->where('finished','=', 0)->get();
		foreach ($orders as $order) {
			$product = Product::find($order->product_id);
			$customer = User::find($order->customer_orderid);
			$order["product_title"] = $product->title;
			$category = Category::find($product->category_id);
			$order["category"] = $category->category_name;
			$order["retailer"] = $customer->firstname;

		}
		// echo $orders;
		// dd('dsjafk');
		return view('admin.order')
			-> with('title', 'Orders')
			-> with('subtitle','New Orders')
			-> with('orders', $orders);
	}
	public function processing()
	{
		$orders = Order::where('user_id','=', Auth::user()->user_id)
			->whereBetween('finished', array(1, 3))->get();
			
		foreach ($orders as $order) {
			$product = Product::find($order->product_id);
			$customer = User::find($order->customer_orderid);
			$order["product_title"] = $product->title;
			$category = Category::find($product->category_id);
			$order["category"] = $category->category_name;
			$order["retailer"] = $customer->firstname;

		}
		// echo $orders;
		// dd('dsjafk');
		return view('admin.order')
			-> with('title', 'Orders')
			-> with('subtitle','Processing')
			-> with('orders', $orders);
	}

	public function delivered()
	{
		$orders = Order::where('user_id','=', Auth::user()->user_id)
			->where('finished', '=', 4)->get();
			
		foreach ($orders as $order) {
			$product = Product::find($order->product_id);
			$customer = User::find($order->customer_orderid);
			$order["product_title"] = $product->title;
			$category = Category::find($product->category_id);
			$order["category"] = $category->category_name;
			$order["retailer"] = $customer->firstname;

		}
		// echo $orders;
		// dd('dsjafk');
		return view('admin.order')
			-> with('title', 'Orders')
			-> with('subtitle','Delivered')
			-> with('orders', $orders);
	}

	public function returned()
	{
		$orders = Order::where('user_id','=', Auth::user()->user_id)
			->whereBetween('finished', array(5, 8))->get();
			
		foreach ($orders as $order) {
			$product = Product::find($order->product_id);
			$customer = User::find($order->customer_orderid);
			$order["product_title"] = $product->title;
			$category = Category::find($product->category_id);
			$order["category"] = $category->category_name;
			$order["retailer"] = $customer->firstname;
		}
		// echo $orders;
		// dd('dsjafk');
		return view('admin.returnedorder')
			-> with('title', 'Orders')
			-> with('subtitle','Returned')
			-> with('orders', $orders);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$order = Order::find($id);
		$finished = Input::get('finished');
		if($finished == 0)
		{
			$status = "Order Created ";
			$finish = 0;
		}
		elseif ($finished == 1) 
		{
			$status = "Order Confirmed";
			$finish = 1;
		}
		elseif ($finished == 2) 
		{
			$status = "Order Processing";
			$finish = 2;
		}
		elseif ($finished == 3) 
		{
			$status = "shipment Started";
			$finish = 3;
		}
		elseif ($finished == 4) 
		{
			$status = "Order Delivered";
			$finish = 4;
		}
		elseif ($finished == 5) 
		{
			$status = "Return Order";
			$finish = 5;
		}
		elseif ($finished == 6) 
		{
			$status = "Approved Return";
			$finish = 6;
		}
		elseif ($finished == 7) 
		{
			$status = "Return Processing";
			$finish = 7;
		}
		elseif ($finished == 8) 
		{
			$status = "Product Returned";
			$finish = 8;
		}
		$order->status = $status;
		$order->finished = $finish;
		$order->save();
		$orderlog = new Order_log();
		$orderlog->order_id = $id;
		$orderlog->status = $status;
		$orderlog->save();
		Session::flash('flash_success','Order Status Updated Sucessfully');
		return redirect('admin/orders');
		dd(Input::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function view($id)
	{
		$order = Order::find($id);
		$product = Product::find($order->product_id);
		$orderlogs = Order_log::where('order_id','=', $id)->get();


		foreach ($orderlogs as $orderlog) {
			
		}











		

		return view('admin.orderview')
			->with('title', 'Order')
			->with('orderlogs', $orderlogs)
			->with('subtitle', $product->title);
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
