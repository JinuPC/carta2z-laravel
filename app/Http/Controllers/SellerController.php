<?php

namespace App\Http\Controllers;

use App\User;
use Auth, Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SellerController extends Controller
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
		return response()->json(['name' => 'Test Name', 'data' => 'Test Data']);
	}

	public function listApproved($page = 1)
	{
		$toReturn = array();
		$sellers = User::where('role','seller')->where('status','1')->orderBy('user_id','ASC')->take('20')->skip(20* ($page - 1) )->get()->toArray();
		$toReturn['sellers'] = $sellers;
		$toReturn['totalItems'] = User::where('role','seller')->count();
		$toReturn['userRole'] = $this->data['user']->role;

		return $toReturn;
	}

	public function listPending($page = 1)
	{
		if( $this->data['user']->role != 'admin' ) exit;
		$toReturn = array();
		$sellers = User::where('role','seller')->where('status','0')->orderBy('user_id','ASC')->take('20')->skip(20* ($page - 1) )->get()->toArray();
		$toReturn['sellers'] = $sellers;
		$toReturn['totalItems'] = User::where('role','seller')->count();
		$toReturn['userRole'] = $this->data['user']->role;

		return $toReturn;
	}

	public function approveOne($id){
		if( $this->data['user']->role != 'admin' ) exit;
		$user = User::find($id);
		$user->status = 1;
		$user->save();
		return $this->listPending();
	}

	public function denyOne($id){
		if( $this->data['user']->role != 'admin' ) exit;
		$user = User::find($id);
		$user->status = 0;
		$user->save();
		return $this->listApproved();
	}

	public function create(){
		if( $this->data['user']->role != 'admin' ) exit;
		if(User::where('username',trim(Input::get('username')))->count() > 0){
			return json_encode(array("jsTitle"=>"Add Seller","jsStatus"=>"0","jsMessage"=>"Username already used" ));
			exit;
		}
		if(User::where('email',Input::get('email'))->count() > 0){
			return json_encode(array("jsTitle"=>"Add Seller","jsStatus"=>"0","jsMessage"=>"Email already used" ));
			exit;
		}

		$User = new User();
		$User->username = Input::get('username');
		$User->email = Input::get('email');
		$User->password = bcrypt(Input::get('password'));
		$User->role = "seller";
		$User->name = Input::get('name');
		$User->status = 1;
		$User->save();
		return json_encode(array("jsTitle"=>"Add Seller","jsMessage"=>"Seller created successfully","list"=>$this->listApproved() ));
		exit;
	}

	public function edit($id){
		if( $this->data['user']->role != 'admin' ) exit;
		if(User::where('username',trim(Input::get('username')))->where('user_id','<>',$id)->count() > 0){
			return json_encode(array("jsTitle"=>"Add Seller","jsStatus"=>"0","jsMessage"=>"Username already used" ));
			exit;
		}
		if(User::where('email',Input::get('email'))->where('user_id','<>',$id)->count() > 0){
			return json_encode(array("jsTitle"=>"Add Seller","jsStatus"=>"0","jsMessage"=>"Email already used" ));
			exit;
		}

		$User = User::find($id);
		$User->username = Input::get('username');
		$User->email = Input::get('email');
		$User->role = ( Input::get('role') == 'seller') ? 'seller' : 'customer';
		$User->name = Input::get('name');
		$User->status = ( Input::get('activated') == '1') ? 1 : 0;
		$User->save();
		return json_encode(array("jsTitle"=>"Edit Seller","jsMessage"=>"Seller edited successfully","list"=>$this->listApproved() ));
		exit;
	}

	public function delete($id){
		if( $this->data['user']->role != 'admin' ) exit;
		User::where('role','seller')->find($id)->delete();	
		return 1;
	}
}