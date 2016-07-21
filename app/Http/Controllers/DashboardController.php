<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use View;
use Auth, Input,DB;

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
					
			$totalusers = DB::table('users')->count();			
			$retailers = User::where('role', '=', 'retailer')->count();
			$sellers = User::where('role', '=', 'seller')->count();
			$activated = User::where('activated', '=', '1')->count();
			$notActivated = User::where('activated', '=', '0')->count();
			return view('admin.dashboard')
			->with('retailers', $retailers)
			->with('sellers', $sellers)
			->with('totalusers', $totalusers-1)
			->with('activated', $activated-1)
			->with('notActivated', $notActivated);
		
		
		
	}
}