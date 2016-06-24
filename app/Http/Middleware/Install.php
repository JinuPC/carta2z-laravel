<?php namespace App\Http\Middleware;

use Closure, Schema, DB, Artisan;

class Install {

	public function handle($request, Closure $next) {
		if( !(Schema::hasTable('options')) ){
			if( Schema::hasTable('migrations') ){
				DB::table('migrations')->delete();

				if( Schema::hasTable('options') ) Schema::drop('options');
				if( Schema::hasTable('users') ) Schema::drop('users');
				if( Schema::hasTable('products') ) Schema::drop('products');
				if( Schema::hasTable('inventory') ) Schema::drop('inventory');
				if( Schema::hasTable('stores') ) Schema::drop('stores');
				if( Schema::hasTable('logs') ) Schema::drop('logs');
				if( Schema::hasTable('orders') ) Schema::drop('orders');
				if( Schema::hasTable('password_resets') ) Schema::drop('password_resets');
			}

			$result = Artisan::call( 'migrate', array('--force' => true) );
		}else{
			$result = get_option('adminurl') != null ? 1 : 0;
		}
		if( $result == 0 ){
			add_user('admin', 'admin@admin.com', 'admin', 'admin', 'admin');
			add_user('seller', 'seller@seller.com', 'seller', 'seller', 'seller');
			add_user('retailer', 'retailer@retailer.com', 'retailer', 'retailer', 'retailer');
			add_option('sitename', 'EMS');
			add_option('adminurl', 'admin');
			add_option('loginurl', 'login');
			add_option('registerurl', 'register');
		}
		return $next($request);
	}
}