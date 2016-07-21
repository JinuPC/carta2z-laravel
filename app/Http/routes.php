<?php



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

global $admin_url, $login_url, $register_url, $store_url;

if(Schema::hasTable('options')){
	$admin_url = get_option('adminurl') != null ? get_option('adminurl') : 'admin';
	$login_url = get_option('loginurl') != null ? get_option('loginurl') : 'login';
	$register_url = get_option('registerurl') != null ? get_option('registerurl') : 'register';
} else{
	$admin_url = 'admin';
	$login_url = 'login';
	$register_url = 'register';
}
$login_url = 'login';
$admin_url = 'admin';
$store_url  ='store';
Route::get('/api/csrf', function () {
	return csrf_token();
});

Route::get('/', function () {
	return view('welcome');
});
Route::get('/index', 'MainController@index');
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('/' . $login_url, 'Auth\AuthController@postLogin');
Route::get('/' . $register_url, 'Auth\AuthController@getRegister');
Route::post('/' . $register_url, 'Auth\AuthController@postRegister');

Route::get('/logout', 'Auth\AuthController@getLogout');
Route::get('/information/create/ajax-state','CategoryController@listsub');

/*
|--------------------------------------------------------------------------
| Routes for all authenciated users
|--------------------------------------------------------------------------
|
| 
*/
Route::group(array('prefix'=>'/','before'=>'auth'),function(){	
	Route::get('/' . $GLOBALS['admin_url'], 'DashboardController@index');
	//Users
	Route::get('admin/users','UserController@index');
	Route::get('admin/activeusers','UserController@activeUsers');
	Route::get('admin/inactiveusers','UserController@inactiveUsers');
	Route::get('admin/verifiedusers','UserController@verifiedUsers');
	Route::delete('admin/users/{id}','UserController@destroy');
	Route::post('admin/users/disapprove/{id}','UserController@disapprove');
	Route::post('admin/users/activate/{id}','UserController@activate');
	Route::post('admin/users/verify/{id}','UserController@verify');
	Route::get('admin/listretailers','UserController@listRetailers');
	Route::get('admin/listsellers','UserController@listSellers');
	//Categories
	Route::get('admin/store/categories','CategoryController@index');
	Route::post('admin/store/categories/add','CategoryController@create');
	Route::post('admin/store/categories/{id}','CategoryController@destroy');	
	//Products
	Route::get('admin/products','ProductController@listProducts');
	Route::get('admin/products/showproducts','ProductController@show');
	Route::get('admin/products/add','ProductController@getForm');
	Route::post('admin/products/add','ProductController@newProduct');
	//Inventory
	Route::get('admin/inventory','InventoryController@index');
	Route::get('admin/inventory/disabled','InventoryController@disabled');
	Route::post('admin/inventory/update/{id}','InventoryController@update');


	//Store
	Route::get('shop', 'StoreController@index');
	Route::get('shop/category/{id}', 'StoreController@category');
	Route::get('shop/cart', 'CartController@index');
	Route::get('shop/cart/add/{id}', 'CartController@add');
	Route::get('shop/cart/remove/{id}', 'CartController@remove');
	Route::get('shop/checkout', 'CartController@checkout');
	Route::post('shop/checkout/{id}', 'CartController@postcheckout');


	//Order
	Route::get('admin/orders','OrderController@index');
	Route::get('admin/orders/processing','OrderController@processing');
	Route::get('admin/orders/delivered','OrderController@delivered');
	Route::get('admin/orders/returned','OrderController@returned');
	Route::get('admin/orders/view/{id}','OrderController@view');
	Route::get('admin/purchase/view/{id}','OrderController@view');
	Route::post('admin/order/update/{id}','OrderController@update');

	//Purchases
	Route::get('admin/purchases','PurchaseController@index');
	Route::get('admin/purchases/finished','PurchaseController@finished');
	Route::get('admin/purchases/returned','PurchaseController@returned');
	
});





/*
|--------------------------------------------------------------------------
| Filters Section
|--------------------------------------------------------------------------
|
|
|
*/
Route::filter('auth', function()
{
	global $login_url;
	if (Auth::guest())
		return Redirect::to( $login_url );
});


Route::filter('api.csrf', function($route, $request)
{
	if ( Request::isMethod('post') )
	{
		if( !((Input::has('_token') AND Session::token() == Input::get('_token')) || ($request->header('X-Csrf-Token') != "" AND Session::token() == $request->header('X-Csrf-Token')) ) ){
			return Response::json('CSRF does not match', 400);
		}
	}
});