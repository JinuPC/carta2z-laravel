<?php

namespace App\Http\Controllers;

use App\User;
use Auth, Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
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

	public function listAll($page = 1)
	{
		$toReturn = array();
		$customers = User::where('role','customer')->orderBy('id','ASC')->take('20')->skip(20* ($page - 1) )->get()->toArray();
		$toReturn['customers'] = $customers;
		$toReturn['totalItems'] = User::where('role','customer')->count();
		$toReturn['userRole'] = $this->data['user']->role;

		return $toReturn;
	}

	public function create(){
		if( $this->data['user']->role != 'admin' ) exit;
		if(User::where('username',trim(Input::get('username')))->count() > 0){
			return json_encode(array("jsTitle"=>"Add Customer","jsStatus"=>"0","jsMessage"=>"Username already used" ));
			exit;
		}
		if(User::where('email',Input::get('email'))->count() > 0){
			return json_encode(array("jsTitle"=>"Add Customer","jsStatus"=>"0","jsMessage"=>"Email already used" ));
			exit;
		}

		$User = new User();
		$User->username = Input::get('username');
		$User->email = Input::get('email');
		$User->password = bcrypt(Input::get('password'));
		$User->role = "customer";
		$User->name = Input::get('name');
		$User->activated = 1;
		$User->save();
		return json_encode(array("jsTitle"=>"Add Customer","jsMessage"=>"Customer created successfully","list"=>$this->listAll() ));
		exit;
	}

	public function edit($id){
		if( $this->data['user']->role != 'admin' ) exit;
		if(User::where('username',trim(Input::get('username')))->where('id','<>',$id)->count() > 0){
			return json_encode(array("jsTitle"=>"Edit Customer","jsStatus"=>"0","jsMessage"=>"Username already used" ));
			exit;
		}
		if(User::where('email',Input::get('email'))->where('id','<>',$id)->count() > 0){
			return json_encode(array("jsTitle"=>"Edit Customer","jsStatus"=>"0","jsMessage"=>"Email already used" ));
			exit;
		}

		$User = User::find($id);
		$User->username = Input::get('username');
		$User->email = Input::get('email');
		$User->role = ( Input::get('role') == 'seller') ? 'seller' : 'customer';
		$User->name = Input::get('name');
		$User->save();
		return json_encode(array("jsTitle"=>"Edit Customer","jsMessage"=>"Customer edited successfully","list"=>$this->listAll() ));
		exit;
	}

	public function delete($id){
		if( $this->data['user']->role != 'admin' ) exit;
		User::where('role','customer')->find($id)->delete();	
		return 1;
	}
}