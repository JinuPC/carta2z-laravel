shopvel.config(function($routeProvider,$locationProvider) {

	$routeProvider.when('/', {
		templateUrl : 'templates/dashboard.html',
		controller  : 'mainController'
	})

	.when('/profile', {
		templateUrl : 'templates/profile.html',
		controller  : 'profileController'
	})

	.when('/products', {
		templateUrl : 'templates/products.html',
		controller  : 'productController'
	})


	.when('/sellers', {
		templateUrl : 'templates/sellers.html',
		controller  : 'sellerController'
	})

	.when('/customers', {
		templateUrl : 'templates/customers.html',
		controller  : 'customerController'
	})

	.when('/posts', {
		templateUrl : 'templates/posts.html',
		controller  : 'postController'
	})

	.when('/stores',{
		templateUrl	: 'templates/stores.html',
		controller 	: 'storeController'
	})

	.otherwise({
		redirectTo:'/'
	});
});