<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Inventory;
use App\Product;
use App\Category;
use App\Inventory_log;
use App\Image as Img;
use Input, Validator, Log, Auth, Session, Image, File, DB;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function listProducts() 
	{
		$user_id = Auth::user()->user_id;
		$items = array();
		$newArray = array();
		
		$products = Inventory::where('user_id', $user_id)->get();
		//dd($products);
		foreach ($products as $product) {
			$items[] = Product::where('id', $product->product_id)->get();;
		}
		//dd ($items);
		foreach ($items as $value) {
			foreach ($value as $v) {
				$category = Category::where('id',$v->category_id)->get();
				//echo ($category);
				foreach ($category as $value) {
					$v["category_name"] = $value->category_name;
				}
				//$v["category_name"] = $category->category_name;
				//echo $v."<br>";
				$newArray[] = $v;
			}
		}
		return view('admin.products')
			->with('products', $newArray)
			->with('title', 'Products')
			->with('subtitle', 'list of products');
	}

	public function getForm() 
	{
		$categories = Category::where('parent_id','=','0')->with('children')->get();
		//echo $categories;
		//dd($categories);
		return view('admin.addproduct')
			-> with('categories',$categories)
			-> with('title','Products')
			-> with('subtitle', 'Add new Product');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function newProduct()
	{

		$validator = Validator::make(Input::all(), Product::$rules);
		if($validator->passes())
		{
			$images = Input::file('images');
			$count = count($images);	
			if($count < 2)
			{
				Session::flash('flash_warning', ' Please select minimum three images' );
				$categories = Category::where('parent_id','=','0')->with('children')->get();
				$validator = Validator::make(Input::all(), Product::$rules);
				return redirect('admin/products/add')
					-> with('title','Add')
					-> with('categories',$categories)
					-> with('subtitle', 'Add new Product')					
					-> withInput();
			}	
			$product = new Product();
			$product->category_id = Input::get('category_id');
			$product->product_name = Input::get('product_name');
			$product->title = Input::get('title');
			$product->sub_title = Input::get('sub_title');
			$product->unit = Input::get('unit');
			$product->brand = Input::get('brand');
			$product->feature1 = Input::get('feature1');
			$product->feature2 = Input::get('feature2');
			$product->feature3 = Input::get('feature3');
			$product->feature4 = Input::get('feature4');
			$product->features = Input::get('features');
			$product->warranty = Input::get('warranty');
			$product->category_id = Input::get('category_id');			
			$product->save();
			

			foreach ($images as $image) {
				$filename = date('Y-m-d-H-s').$image->getClientOriginalName();
				$path1 = public_path('img/products/preview/');				
				Image::make($image->getRealPath())->resize(250,300)->save($path1.$filename);
				$path2 = public_path('img/products/original/');
				Image::make($image->getRealPath())->resize(900,1024)->save($path2.$filename);
				$newimage = new Img();
				$newimage->product_id = $product->id;
				$newimage->image_url = $filename;
				$newimage->save();
			}


			$inventory = new Inventory();
			$inventory->user_id = Auth::user()->user_id;
			$inventory->sku = Input::get('sku');
			$inventory->tax_enabled = Input::get('tax_enabled');
			$inventory->stock = Input::get('stock');
			$inventory->warehouse = Input::get('warehouse');
			$inventory->cod = Input::get('cod');
			$inventory->mrp = Input::get('mrp');
			$inventory->unit_price = Input::get('unit_price');
			$inventory->discount = Input::get('discount');
			$inventory->product_id = $product->id;
			$inventory->total_stock = Input::get('stock');
			$inventory->save();

			$inventorylog = new Inventory_log();
			$inventorylog->inventory_id = $inventory->id;
			$inventorylog->status ='New Product Created';
			$inventorylog->count = $inventory->stock;
			$inventorylog->save();
			Session::flash('flash_sucess', ' Product sucessfully uploaded' );



			
		}
		else 
		{
			$categories = Category::where('parent_id','=','0')->with('children')->get();
			$validator = Validator::make(Input::all(), Product::$rules);
			return redirect('admin/products/add')
				-> with('title','Add')
				-> with('categories',$categories)
				-> with('subtitle', 'Add new Product')
				-> withErrors($validator)
				-> withInput();
		}
		return redirect('admin/products/add');
		

		

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
	public function show()
	{
		$inventory = Inventory::where('user_id','=',Auth::user()->user_id)
			->where('enabled','=',1)
			->with('products')			
			->get();
		foreach ($inventory as $item) {
			$images = Img::where('product_id','=',$item->products->id)->get();
			 foreach ($images as $img) {
			 	$item->products->images=$img;
			 }			 	
			 
		}	
		 
		
		return view('admin.showproducts')
			-> with('title','Products')
			-> with('inventory',$inventory);		
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
