<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Inventory;
use App\Product;
use App\Category;
use App\Inventory_log;
use App\Image as Img;
use Input, Validator, Log, Auth, Session, Image, File;

use Illuminate\Http\Request;

class InventoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user_id = Auth::user()->user_id;
		$inventories = Inventory::where('user_id',$user_id)
			->where('enabled','=',1)
			->get();
		//echo $inventories;
		foreach ($inventories as $key => $value) {
			$product = Product::where('id',$value->product_id)->get();
			//echo ($product."<br><br><br>");
			foreach ($product as $item) {
				$value["product_name"] = $item->product_name;
				$value['unit'] = $item->unit;
			}
			
			//echo $value->id;

			//echo $value."<br>";
			//echo $value->produt;
		}
		return view('admin.deactivatedinventory	')
			->with('items',$inventories)
			->with('title', 'Inventory')
			->with('subtitle', 'Active List');
	}

	public function disabled()
	{
		$user_id = Auth::user()->user_id;
		$inventories = Inventory::where('user_id',$user_id)
			->where('enabled','=',0)
			->get();
		//echo $inventories;
		foreach ($inventories as $key => $value) {
			$product = Product::where('id',$value->product_id)->get();
			//echo ($product."<br><br><br>");
			foreach ($product as $item) {
				$value["product_name"] = $item->product_name;
				$value['unit'] = $item->unit;
			}
			
			//echo $value->id;

			//echo $value."<br>";
			//echo $value->produt;
		}
		return view('admin.inventory')
			->with('items',$inventories)
			->with('title', 'Inventory')
			->with('subtitle', 'Disabled List');
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
		$inventory = Inventory::find($id);
		if($inventory->stock > Input::get('stock'))
		{
			$status = "stock reduced";
			$stock = $inventory->stock - Input::get('stock');
			$total_stock = $inventory->total_stock - $stock;			
		}
		else if($inventory->stock < Input::get('stock'))
		{
			$status = "New Stock added";
			$stock = Input::get('stock') - $inventory->stock;
			$total_stock = $inventory->total_stock + $stock;

		}
		else
		{
			$stock = 0;
			$status ="";
			$total_stock = $inventory->total_stock;
		}
		//$stock = $inventory->stock;
		
		$inventory->stock = Input::get('stock');

		if($inventory->unit_price != Input::get('unit_price') )	
		{
			$unitlog = new Inventory_log();
			$unitlog->inventory_id = $inventory->id;
			$unitlog->status = "Unit Price Changed";
			$unitlog->value = Input::get('unit_price');
			$unitlog->save();
		}	
		if($inventory->mrp != Input::get('mrp'));
		{
			$mrplog = new Inventory_log();
			$mrplog->inventory_id = $inventory->id;
			$mrplog->status = "Mrp Changed";
			$mrplog->value = (string)Input::get('mrp');
			$mrplog->save();
		}

		if($inventory->unit != Input::get('unit'));
		{
			$unitlog = new Inventory_log();
			$unitlog->inventory_id = $inventory->id;
			$unitlog->status = "unit Changed";
			$unitlog->value = (string)Input::get('unit');
			$unitlog->save();
		}

		if($inventory->discount != Input::get('discount'));
		{
			$discountlog = new Inventory_log();
			$discountlog->inventory_id = $inventory->id;
			$discountlog->status = "discount Changed";
			$discountlog->value = Input::get('discount');
			$discountlog->save();
		}
		if($inventory->enabled != Input::get('enabled'));
		{
			$enabledlog = new Inventory_log();
			$enabledlog->inventory_id = $inventory->id;
			$enabledlog->status = "Product Status";
			$enabledlog->value = "enabled";
			$enabledlog->save();
		}
		$inventory->unit_price = Input::get('unit_price');
		$inventory->mrp = Input::get('mrp');
		$inventory->discount = Input::get('discount');
		$inventory->enabled = Input::get('enabled');
		$inventory->total_stock = $total_stock;
		if($inventory->stock < 1)
		{
			$inventory->available = 0;
			$inventory->enabled = 0;
		}
		else
		{
			$inventory->available = 1;
		}
		$inventory->save();
		$pid = Input::get('product_id');		
		$product = Product::find(Input::get('product_id'));
		$product->unit = Input::get('unit');
		$product->save();		
		$inventorylog = new Inventory_log();
		$inventorylog->inventory_id = $inventory->id;
		$inventorylog->status = $status;
		$inventorylog->count = $stock;
		$inventorylog->save();

		Session::flash('flash_sucess', ' Inventory sucessfully uploaded' );
		return redirect('admin/inventory');
		dd($inventory);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
	}

}
