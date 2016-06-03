<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Auth, Input;

class DashboardController extends Controller
{
	protected $data = array();
	public function __construct()
	{
		$this->middleware('auth');
		$this->data['user'] = Auth::user();
	}

	public function index()
	{
		if( $this->data['user']->role == 'admin' )
		{
			return view('admin.main');
		}
		else if($this->data['user']->role == 'seller') 
		{
			return view('seller.main');
		}
		else if($this->data['user']->role == 'retailer')
		{
			return view('retailer.main');
		}
		else
			exit;
		
	}
}