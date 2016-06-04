<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth, Input, DB;
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
			return View('admin.404');
		$users = User::where('role', '<>', 'admin')->get();
		return view('admin.users')
			-> with('users', $users)
			-> with('title', "Users");
	}

	public function activeUsers()
	{
		if(Auth::user()->role != 'admin')
			return View('admin.404');
		$users = User::where('activated', '=', 1)->get();
		return view('admin.users')
			-> with('users', $users)
			-> with('title', "Active");
	}

	public function inactiveUsers()
	{
		if(Auth::user()->role != 'admin')
			return View('admin.404');
		$users = User::where('activated', '=', 0)->get();
		return view('admin.users')
			-> with('users', $users)
			-> with('title', "Inactive");
	}

	public function verifiedUsers()
	{
		if(Auth::user()->role != 'admin')
			return View('admin.404');
		$users = User::where('activated', '=', 2)->get();
		return view('admin.users')
			-> with('users', $users)
			-> with('title', "Verified");
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
