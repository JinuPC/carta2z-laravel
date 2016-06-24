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
				$table->string('landmark');
				$table->string('street');
				$table->string('city');
				$table->string('district');
				$table->string('postcode');
				$table->string('state');
				$table->longText('user_meta');
				$table->rememberToken();
				$table->timestamps();
			});
		}


		if( !(Schema::hasTable('carts')) ){
			Schema::create('carts', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('user_id');				
				$table->string('inventory_id');	
				$table->integer('count');			
				$table->string('image_url');
				$table->integer('price');
				$table->string('title');			
				$table->timestamps();
			});
		}

		

		if( !(Schema::hasTable('categories')) ){
			Schema::create('categories', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('parent_id');				
				$table->string('category_name');				
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('products')) ){
			Schema::create('products', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->integer('category_id')->unsigned();
				$table->foreign('category_id')->references('id')->on('categories');
				$table->string('product_name');
				$table->string('title');
				$table->string('sub_title');
				$table->string('unit');
				$table->mediumText('description');
				$table->string('brand', 100 );				
				$table->string('keywords');
				$table->string('feature1');
				$table->string('feature2');
				$table->string('feature3');
				$table->string('feature4');
				$table->string('warranty');
				$table->mediumText('features');
				$table->longText('product_meta');
				$table->longText('images');
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('images')) ){
			Schema::create('images', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->bigInteger('product_id')->unsigned();
				$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');				
				$table->string('image_url');
				$table->string('images_meta');				
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('inventory')) ){
			Schema::create('inventory', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->bigInteger('user_id')->unsigned();
				$table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
				$table->bigInteger('product_id')->unsigned();
				$table->foreign('product_id')->references('id')->on('products');
				$table->string('sku');
				$table->string('tax-type');
				$table->boolean('tax_enabled');
				$table->integer('stock');
				$table->integer('total_stock');
				$table->integer('sold');
				$table->integer('source');
				$table->string('warehouse');
				$table->boolean('enabled')->default(1);
				$table->boolean('cod');
				$table->boolean('available')->default(1);
				$table->decimal('unit_price',6,2);
				$table->decimal('mrp', 6, 2);
				$table->integer('discount');
				$table->integer('inventory_meta');
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('orders')) ){
			Schema::create('orders', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->bigInteger('product_id')->unsigned();
				$table->foreign('product_id')->references('id')->on('products');
				$table->bigInteger('user_id')->unsigned();
				$table->foreign('user_id')->references('user_id')->on('users');
				$table->bigInteger('inventory_id')->unsigned();
				$table->foreign('inventory_id')->references('id')->on('inventory');
				$table->string('customer_orderid');				
				$table->string('status', 64 );
				$table->string('source', 32 );
				$table->integer('quantity');
				$table->integer('service_tax');
				$table->integer('vat_tax');
				$table->string('cst_tax');
				$table->string('manifest');
				$table->mediumText('Payment_details');
				$table->mediumText('customer_details');
				$table->string('payment_option', 64 );
				$table->timestamp('dispatch_date');				
				$table->longText('order_meta');
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('orderlog')) ){
			Schema::create('orderlog', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->bigInteger('order_id')->unsigned();
				$table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
				$table->string('status');
				$table->integer('order_meta');
				$table->timestamps();
			});
		}

		if( !(Schema::hasTable('inventorylog')) ){
			Schema::create('inventorylog', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->bigInteger('inventory_id')->unsigned();
				$table->foreign('inventory_id')->references('id')->on('inventory')->onDelete('cascade');
				$table->string('status');
				$table->string('value');
				$table->integer('count');
				$table->integer('order_id')->references('id')->on('orders');
				$table->integer('inventorylog_meta');
				$table->timestamps();
			});
		}
		

		if( !(Schema::hasTable('stores')) ){
			Schema::create('stores', function (Blueprint $table) {
				$table->increments('id');
				$table->bigInteger('user_id')->unsigned();
				$table->foreign('user_id')->references('user_id')->on('users');
				$table->string('store_name', 32 );
				$table->string('website_url');
				$table->string('logo_url');
				$table->string('api_url');
				$table->longText('store_meta');
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
		Schema::drop('stores');
		Schema::drop('logs');
		Schema::drop('password_resets');
		Schema::drop('images');
		Schema::drop('orderlog');
		Schema::drop('inventorylog');
		Schema::drop('options');
		Schema::drop('orders');
		Schema::drop('carts');
		Schema::drop('inventory');
		Schema::drop('products');
		Schema::drop('categories');		
		Schema::drop('users');
		

	}

}
