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

class PurchaseController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$purchases = Order::where('customer_orderid', '=', Auth::user()->user_id)
			->whereBetween('finished', array(0, 3))
			->get();
		//echo $purchases;

		foreach ($purchases as $purchase) {
			$product = Product::find($purchase->product_id);
			$purchase["product_title"] = $product->title;
			$category = Category::find($product->category_id);
			$purchase["category"] = $category->category_name;
			$seller = User::find($purchase->user_id);
			$purchase['phone_no'] = $seller->phone_no;
		}
		
		return view('admin.purchase')
			-> with('title', 'Purchases')
			-> with('subtitle','New Purchases')
			-> with('purchases', $purchases);	
	}

	public function finished()
	{
		$purchases = Order::where('customer_orderid', '=', Auth::user()->user_id)
			->where('finished', '=' , 4)
			->get();
		//echo $purchases;

		foreach ($purchases as $purchase) {
			$product = Product::find($purchase->product_id);
			$purchase["product_title"] = $product->title;
			$category = Category::find($product->category_id);
			$purchase["category"] = $category->category_name;
			$seller = User::find($purchase->user_id);
			$purchase['phone_no'] = $seller->phone_no;
		}
		
		return view('admin.purchase')
			-> with('title', 'Purchases')
			-> with('subtitle','Finished')
			-> with('purchases', $purchases);	
	}

	public function returned()
	{
		$purchases = Order::where('customer_orderid','=', Auth::user()->user_id)
			->whereBetween('finished', array(5, 8))->get();
			
		foreach ($purchases as $purchase) {
			$product = Product::find($purchase->product_id);
			$purchase["product_title"] = $product->title;
			$category = Category::find($product->category_id);
			$purchase["category"] = $category->category_name;
			$seller = User::find($purchase->user_id);
			$purchase['phone_no'] = $seller->phone_no;
		}
		// echo $orders;
		// dd('dsjafk');
		return view('admin.returnedpurchase')
			-> with('title', 'purchase')
			-> with('subtitle','Returned')
			-> with('purchases', $purchases);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
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
