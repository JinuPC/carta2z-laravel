<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Installtables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if( !(Schema::hasTable('options')) ){
			Schema::create('options', function (Blueprint $table) {
				$table->increments('option_id');
				$table->string('option_name', 64)->unique();
				$table->longText('option_value');
			});
		}

		if( !(Schema::hasTable('users')) ){
			Schema::create('users', function (Blueprint $table) {
				$table->bigIncrements('user_id');
				$table->string('username', 64 )->unique();
				$table->string('email')->unique();
				$table->string('password', 64 );
				$table->string('role', 24 );
				$table->string('firstname');
				$table->string('lastname');
				$table->string('company', 100 );
				$table->smallInteger('activated');
				$table->string('phone_no',15);
				$table->integer('tin_no');
				$table->string('vat_id', 14 );
				$table->string('pan_id', 10 );
				$table->string('bank_name');
				$table->string('account_number', 64 );
				$table->string('ifsc_code', 24 );
				$table->string('branch_address');
				$table->string('account_type', 24 );
				$table->mediumText('stores');
				$table->integer('credit_limit');
				$table->integer('credit_balance');
				$table->mediumText('credit_card');
				$table->mediumText('address');
				$table->longText('pay_info');
				$table->string('subscription');
				$table->longText('user_meta');
				$table->rememberToken();
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('products')) ){
			Schema::create('products', function (Blueprint $table) {
				$table->bigIncrements('product_id');
				$table->bigInteger('manufacture_id');
				$table->string('product_name');
				$table->string('sku');
				$table->string('category');
				$table->string('tax-type');
				$table->integer('discount');
				$table->string('scan_id');
				$table->string('source', 64 );
				$table->boolean('enabled');
				$table->integer('base_price');
				$table->integer('mrp');
				$table->mediumText('description');
				$table->string('brand', 100 );
				$table->longText('store_map');
				$table->integer('stock_count');
				$table->string('keywords');
				$table->string('image_url');
				$table->integer('weight');
				$table->string('color', 64 );
				$table->longText('product_meta');
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('orders')) ){
			Schema::create('orders', function (Blueprint $table) {
				$table->bigIncrements('order_id');
				$table->bigInteger('product_id');
				$table->bigInteger('user_id');
				$table->bigInteger('inventory_id');
				$table->string('customer_orderid');
				$table->string('sku', 64 );
				$table->integer('price');
				$table->string('status', 64 );
				$table->string('source', 32 );
				$table->integer('quantity');
				$table->string('manifest');
				$table->mediumText('Payment_details');
				$table->mediumText('customer_details');
				$table->string('payment_option', 64 );
				$table->timestamp('dispatch_date');
				$table->longText('order_meta');
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('stores')) ){
			Schema::create('stores', function (Blueprint $table) {
				$table->increments('store_id');
				$table->string('store_name', 32 );
				$table->string('website_url');
				$table->string('logo_url');
				$table->string('api_url');
				$table->longText('store_meta');
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('categories')) ){
			Schema::create('categories', function (Blueprint $table) {
				$table->increments('id');				
				$table->string('category_name');				
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('inventory')) ){
			Schema::create('inventory', function (Blueprint $table) {
				$table->bigIncrements('inventory_id');
				$table->bigInteger('user_id');
				$table->bigInteger('product_id');
				$table->integer('quantity');
				$table->integer('stock_available');
				$table->string('source', 24 );
				$table->integer('unit_price');
				$table->integer('inventory_meta');
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('logs')) ){
			Schema::create('logs', function (Blueprint $table) {
				$table->bigIncrements('log_id');
				$table->bigInteger('user_id');
				$table->string('operation');
				$table->mediumText('statement');
				$table->string('status');						
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('password_resets')) ){
			Schema::create('password_resets', function(Blueprint $table){
				$table->string('email')->index();
				$table->string('token')->index();
				$table->timestamp('created_at');
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('options');
		Schema::drop('categories');
		Schema::drop('users');
		Schema::drop('products');
		Schema::drop('orders');
		Schema::drop('stores');
		Schema::drop('inventory');
		Schema::drop('logs');
		Schema::drop('password_resets');

	}

}
