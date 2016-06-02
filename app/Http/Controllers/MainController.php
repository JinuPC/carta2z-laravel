<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;

class MainController extends Controller
{

	protected $data = array();

	public function index()
	{
		$this->data['csrf'] = csrf_token();
		$this->data['user'] = Auth::user();
		$client = new \GuzzleHttp\Client();

		// $res = $client->get('http://sandboxforflipkartsellers-forethino.rhcloud.com/test');
		// $data = $res->getBody();
		// $this->data['test'] = $data;
		// $this->data['music'] = Post::where('status','active')->where('type','music')->orderBy('created_at','DESC')->take('10')->get(['user_id','name','title','type']);
		// $this->data['sports'] = Post::where('status','active')->where('type','sports')->orderBy('created_at','DESC')->take('10')->get(['user_id','name','title','type']);
		// $this->data['dance'] = Post::where('status','active')->where('type','dance')->orderBy('created_at','DESC')->take('10')->get(['user_id','name','title','type']);
		return response()->json( $this->data );
	}
}