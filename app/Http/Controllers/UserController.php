<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth, Input, DB, Session;
use Illuminate\Http\Request;

class UserController extends Controller {


	protected $data = array();
	public function __construct()
	{
		$this->middleware('auth');
		$this->data['user'] = Auth::user();

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
			
		$users = User::where('role', '<>', 'admin')->get();
		return view('admin.users')
			-> with('users', $users)
			-> with('title', "Users")
			-> with('subtitle', 'All Users');
	}

	public function listSellers()
	{
		if(Auth::user()->role != 'admin')
		{
			Session::flash('flash_danger', 'Permission Denied....!' );
			return View('admin.404');
		}
			
		$users = User::where('role', '=', 'seller')->get();
		return view('admin.users')
			-> with('users', $users)
			-> with('title', "Users")
			-> with('subtitle', 'All Sellers');
	}

	public function listRetailers()
	{
		if(Auth::user()->role != 'admin')
		{
			Session::flash('flash_danger', 'Permission Denied....!' );
			return View('admin.404');
		}
			
		$users = User::where('role', '=', 'retailer')->get();
		return view('admin.users')
			-> with('users', $users)
			-> with('title', "Users")
			-> with('subtitle', 'All Retailers');
	}


	public function activeUsers()
	{
		if(Auth::user()->role != 'admin')
		{
			Session::flash('flash_danger', 'Permission Denied....!' );
			return View('admin.404');
		}
		$users = User::where('activated', '=', 1)->get();
		return view('admin.activeusers')
			-> with('users', $users)
			-> with('title', "Active")
			-> with('subtitle', 'Active Users');
	}

	public function inactiveUsers()
	{
		if(Auth::user()->role != 'admin')
		{
			Session::flash('flash_danger', 'Permission Denied....!' );
			return View('admin.404');
		}
		$users = User::where('activated', '=', 0)->get();
		return view('admin.inactiveusers')
			-> with('users', $users)
			-> with('title', "Inactive")
			-> with('subtitle', 'Inactive Users');
	}

	public function verifiedUsers()
	{
		if(Auth::user()->role != 'admin')
		{
			Session::flash('flash_danger', 'Permission Denied....!' );
			return View('admin.404');
		}
		$users = User::where('activated', '=', 10)->get();
		return view('admin.verifiedusers')
			-> with('users', $users)
			-> with('title', "Verified")
			-> with('subtitle', 'All verifyed users');
	}

	public function disapprove($id){
		if(Auth::user()->role != 'admin')
		{
			Session::flash('flash_danger', 'Permission Denied....!' );
			return View('admin.404');
		}
		$user = User::find($id);
		$user->activated = 0;
		$user->save();
		Session::flash('flash_info', $user->firstname.' account deactivated.' );
		return redirect('admin/activeusers');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function activate($id)
	{
		if(Auth::user()->role != 'admin')
		{
			Session::flash('flash_danger', 'Permission Denied....!' );
			return View('admin.404');
		}
		$user = User::find($id);
		$user->activated = 1;
		$user->save();
		Session::flash('flash_sucess', $user->firstname.' account Activated.' );
		return redirect('admin/inactiveusers');
	}

	public function verify($id)
	{
		if(Auth::user()->role != 'admin')
		{
			Session::flash('flash_danger', 'Permission Denied....!' );
			return View('admin.404');
		}
		$user = User::find($id);
		$user->activated = 10;
		$user->save();
		Session::flash('flash_sucess', $user->firstname.' account added Verified group.' );
		return redirect('admin/activeusers');
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
		$user = User::findOrFail($id);
		$user->delete();
		Session::flash('flash_sucess', $user->firstname.' details has been deleted.' );
		return redirect('admin/users');
	}

}
