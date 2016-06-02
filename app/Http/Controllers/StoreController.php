<?php

namespace App\Http\Controllers;

use App\Stores;
use App\User;
use DB;
use Crypt;
use Auth, Input;
use Illuminate\Http\Request;
use App\Http\Requests;
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

		return response()->json(['name' => 'Test Name', 'data' => 'Test Data']);
	}

	public function listStores($page = 1)
	{
		$toReturn = array();
		if($this->data['user']->role == 'admin')
		{
			$stores = Stores::orderBy('store_id','ASC')->take('20')->skip(20* ($page - 1) )->get()->toArray();
			$toReturn['stores'] = $stores;
			$toReturn['totalItems'] = Stores::all()->count();
			$toReturn['userRole'] = $this->data['user']->role;
		}
		elseif ($this->data['user']->role == 'seller')
		{
			$channels = array();
			$User = User::find($this->data['user']->user_id);
			$channels = unserialize($User->stores);
			$toReturn['stores'] = $channels;
			$toReturn['totalItems'] = 0;
			$toReturn['userRole'] = $this->data['user']->role;
		}

		return $toReturn;
	}

	public function listChannel()
	{
		$toReturn = array();
		$channels = DB::table('stores')->lists('store_name');
		$toReturn['channels'] = $channels;
		$toReturn['subscribedChannel'] = "flipkart";
		$toReturn['userRole'] = $this->data['user']->role;

		return $toReturn;
	}

	public function saveEdit($id)
	{
		if( $this->data['user']->role == 'admin' )
		{
			if(Stores::where('store_name',trim(Input::get('store_name')))->where('store_id','<>',$id)->count() > 0)
			{
				return json_encode(array("jsTitle"=>"Edit Store","jsStatus"=>"0","jsMessage"=>"Store name already used" ));
				exit;
			}		
			$Store = Stores::find($id);
			$Store->store_name = Input::get('store_name');
			$Store->website_url = Input::get('website_url');		
			$Store->logo_url = Input::get('logo_url');
			$Store->api_url = ( Input::get('api_url'));
			$Store->save();
		}
		
		elseif( $this->data['user']->role == 'seller')
		{
			$stores = array();
			$flag = 0;
			$User = User::find($this->data['user']->user_id);
			$stores = unserialize($User->stores);
			$key = Input::get('store_name');
			if($stores != null)
			{
				foreach($stores as $k => $v)
				{
					if($k == $key)
					{
						$flag = 1;					
					}
				}

			}						
			$newChannel[$key] = array(
				'application_id' => Input::get('application_id'),
				'application_secret' => Input::get('application_secret'),
				'username' => Input::get('username'),
				'password' => Input::get('password')
				);			
			$stores[$key] = $newChannel[$key];
			$serializeArray = serialize($stores); 			
			$User->stores = $serializeArray;
			$User->save();

		}

		return json_encode(array("jsTitle"=>"Edit Store","jsMessage"=>"Store edited successfully","list"=>$this->listStores() ));
		exit;
	}

	public function create()
	{
		if( $this->data['user']->role == 'admin' )
		{
			if(Stores::where('store_name',trim(Input::get('store_name')))->count() > 0)
			{

				return json_encode(array("jsTitle"=>"Add Store","jsStatus"=>"0","jsMessage"=>"Store name already used" ));
				exit;
			}
			$Store = new Stores();
			$Store->store_name = Input::get('store_name');
			$Store->website_url = Input::get('website_url');
			$Store->logo_url = Input::get('logo_url');		
			$Store->api_url = Input::get('api_url');		
			$Store->save();

			return json_encode(array("jsTitle"=>"Add Store","jsMessage"=>"Store created successfully","list"=>$this->listStores(1) ));
			exit;
		}
		elseif( $this->data['user']->role == 'seller')
		{
			$stores = array();
			$User = User::find($this->data['user']->user_id);
			$stores = unserialize($User->stores);
			$key = Input::get('store_name');
			if($stores != null)
			{
				foreach($stores as $k => $v)
				{
					if($k == $key)
					{

						return json_encode(array("jsTitle" => "Add Store","jsMessage" => "Store already created","list" => $this->listStores() ));
						exit;
					}
				}

			}						
			$newChannel[$key] = array(
				'application_id' => Input::get('application_id'),
				'application_secret' => Input::get('application_secret'),
				'username' => Input::get('username'),
				'password' => Input::get('password')
				);			
			$stores[$key] = $newChannel[$key];
			$serializeArray = serialize($stores); 			
			$User->stores = $serializeArray;
			$User->save();

			return json_encode(array("jsTitle" => "Add Store","jsMessage" => "Store created successfully","list" => $this->listStores() ));
			exit;
		}
		exit;		
	}



	public function delete($key)
	{		
		if( $this->data['user']->role == 'seller')
		{
			$stores = array();
			$User = User::find($this->data['user']->user_id);
			$stores = unserialize($User->stores);
			unset($stores[$key]);
			$User->stores = serialize($stores);
			$User->save();
			return 1;
		}
		else
		{
			return 1;
		}
	}
} 