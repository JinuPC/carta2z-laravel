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
		
		$categories = Category::where('parent_id','=','0')->with('children')->get();
		return view('store.main')
			-> with('title', 'Wholesale Shop')
		 	-> with('categories', $categories);
	}

	
} 