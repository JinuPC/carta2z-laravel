<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Auth, Input, DB, Session, Validator;

use Illuminate\Http\Request;

class CategoryController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');		

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::user()->role != 'admin')
		{
			Session::flash('flash_danger', 'Permission Denied....!' );
			return View('admin.404');
		}
			
		$categories = Category::all();
		return view('admin.categories')
			-> with('categories', $categories)
			-> with('title', "Store")
			-> with('subtitle', 'Categories');
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::user()->role != 'admin')
		{
			Session::flash('flash_danger', 'Permission Denied....!' );
			return View('admin.404');
		}		
		
		$validator = Validator::make(Input::all(), Category::$rules);
		if($validator->passes())
		{
			$category = new Category;
			$category->category_name = Input::get('category_name');
			$category->save();
			Session::flash('flash_sucess', ' category sucessfully created' );		
		}
		else 
		{
			Session::flash('flash_warning', 'Please enter unique minimum 3 character name' );
		}
		return redirect('admin/store/categories');

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
		if(Auth::user()->role != 'admin')
		{
			Session::flash('flash_danger', 'Permission Denied....!' );
			return View('admin.404');
		}
		$category = Category::findOrFail($id);
		$category->delete();
		Session::flash('flash_sucess', $category->category_name.' has been deleted.' );
		return redirect('admin/store/categories');
	}

}