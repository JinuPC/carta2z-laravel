var appBaseUrl = $('base').attr('href');

var shopvel = angular.module('shopvel', ['ngRoute', 'angularUtils.directives.dirPagination']).run(function($http,dataFactory,$rootScope) {
	var xhr = new XMLHttpRequest();
	xhr.open("GET", "index", false);
	xhr.onload = function (e) {
		if (xhr.readyState === 4) {
			if (xhr.status === 200) {
				$rootScope.data = JSON.parse(xhr.responseText);
				$http.defaults.headers.common['X-Csrf-Token'] = $rootScope.data.csrf;
			}
		}
	};
	xhr.send(null);
})

.controller('mainController', function(dataFactory,$rootScope,$scope) {
	console.log($rootScope.data);
	$scope.user = $rootScope.data.user;
	// $scope.latestMusic = $rootScope.data.music;
	// $scope.latestSports = $rootScope.data.sports;
	// $scope.latestDance = $rootScope.data.dance;
	$scope.userRole = $scope.user.role;
	$('.overlay').hide();
})

.controller('profileController', function(dataFactory,$rootScope,$scope) {
	$scope.views = {};
	$scope.form = $scope.user;
	$scope.views.list = true;
	$('.overlay').hide();

	$scope.saveEdit = function(){
		$('.overlay').show();
		dataFactory.httpRequest('profile/edit/' + $scope.form.id,'POST',{},$scope.form).then(function(data) {
			if(data.jsStatus == 1){
				$scope.user = $scope.form;
				$scope.changeView('list');
			}
			$('.overlay').hide();
		});
	}

	$scope.changeView = function(view){
		$scope.views.list = false;
		$scope.views.edit = false;
		$scope.views[view] = true;
	}
})



.controller('productController', function(dataFactory,$rootScope,$scope) {
	$scope.views = {};
	$scope.stores = [];
	$scope.userRole = '';
	$scope.totalItems = '';
	$scope.views.list = true;
	$scope.totalItems = 0;
	$scope.CSRF_TOKEN = $rootScope.data.csrf;

	$scope.pageChanged = function(newPage) {
		listStores(newPage);
	};
	$scope.changeView('add');

	listProducts(1);
	function listProducts(pageNumber) {
		$('.overlay').show();
		dataFactory.httpRequest('stores/listStores/'+pageNumber).then(function(data) {
			console.log(data);
			$scope.stores = data.stores;
			$scope.userRole = data.userRole;
			$scope.totalItems = data.totalItems;
			if($scope.stores != false)
			{
				$scope.changeView('list');
			}
			else
			{
				$scope.listChannel();				
			}
			
			$('.overlay').hide();
		});
	}

	$scope.listChannel = function(){
		$('.overlay').show();
		$scope.changeView('add');
		dataFactory.httpRequest('stores/listChannel/').then(function(data) {
			console.log(data);
			$scope.channels = data.channels;
			console.log($scope.channels);
			$scope.userRole = data.userRole;			
		});
		$('.overlay').hide();
	}

	$scope.editSellerStore = function(key,value){
		$('.overlay').show();
		console.log(key);
		console.log(value);
		$scope.form.store_name = key;
		$scope.form.store_id = 1;
		angular.forEach(value, function(v, k){
			this[k] = v;
		}, $scope.form);
		console.log($scope.form);
		$scope.changeView('edit');
		$('.overlay').hide();
	}

	$scope.editStore = function(store){
		$('.overlay').show();
		angular.forEach(store,function(v,k){
			this[k] = v;
		},$scope.form);
		$scope.changeView('edit');
		$('.overlay').hide();
	}

	$scope.saveEdit = function(){
 		$('.overlay').show();
 		console.log($scope.form);
 		dataFactory.httpRequest('stores/edit/' + $scope.form.store_id,'POST',{},$scope.form).then(function(data) {
 			data = data.list;
 			$scope.stores = data.stores;
 			$scope.userRole = data.userRole;
 			$scope.totalItems = data.totalItems;
 			$scope.changeView('list');
 		});
 	}

 	$scope.create = function(){
 		$('.overlay').show();
 		dataFactory.httpRequest('stores/create','POST',{},$scope.form).then(function(data) {
 			data = data.list;
 			$scope.stores = data.stores;
 			$scope.userRole = data.userRole;
 			$scope.totalItems = data.totalItems;
 			$scope.changeView('list');
 		});
 	}

 	

	$scope.changeView = function(view){
		if(view == "add" || view == "list"){
			$scope.form = {};
		}
		$scope.views.list = false;
		$scope.views.approval = false;
		$scope.views.add = false;
		$scope.views.edit = false;
		$scope.views[view] = true;
	}
})






.controller('storeController', function(dataFactory,$rootScope,$scope) {
	$scope.views = {};
	$scope.stores = [];
	$scope.userRole = '';
	$scope.totalItems = '';
	$scope.views.list = true;
	$scope.totalItems = 0;
	$scope.CSRF_TOKEN = $rootScope.data.csrf;

	$scope.pageChanged = function(newPage) {
		listStores(newPage);
	};

	listStores(1);
	function listStores(pageNumber) {
		$('.overlay').show();
		dataFactory.httpRequest('stores/listStores/'+pageNumber).then(function(data) {
			console.log(data);
			$scope.stores = data.stores;
			$scope.userRole = data.userRole;
			$scope.totalItems = data.totalItems;
			if($scope.stores != false)
			{
				$scope.changeView('list');
			}
			else
			{
				$scope.listChannel();				
			}
			
			$('.overlay').hide();
		});
	}

	$scope.listChannel = function(){
		$('.overlay').show();
		$scope.changeView('add');
		dataFactory.httpRequest('stores/listChannel/').then(function(data) {
			console.log(data);
			$scope.channels = data.channels;
			console.log($scope.channels);
			$scope.userRole = data.userRole;			
		});
		$('.overlay').hide();
	}

	$scope.editSellerStore = function(key,value){
		$('.overlay').show();
		console.log(key);
		console.log(value);
		$scope.form.store_name = key;
		$scope.form.store_id = 1;
		angular.forEach(value, function(v, k){
			this[k] = v;
		}, $scope.form);
		console.log($scope.form);
		$scope.changeView('edit');
		$('.overlay').hide();
	}

	$scope.editStore = function(store){
		$('.overlay').show();
		angular.forEach(store,function(v,k){
			this[k] = v;
		},$scope.form);
		$scope.changeView('edit');
		$('.overlay').hide();
	}

	$scope.saveEdit = function(){
 		$('.overlay').show();
 		console.log($scope.form);
 		dataFactory.httpRequest('stores/edit/' + $scope.form.store_id,'POST',{},$scope.form).then(function(data) {
 			data = data.list;
 			$scope.stores = data.stores;
 			$scope.userRole = data.userRole;
 			$scope.totalItems = data.totalItems;
 			$scope.changeView('list');
 		});
 	}

 	$scope.create = function(){
 		$('.overlay').show();
 		dataFactory.httpRequest('stores/create','POST',{},$scope.form).then(function(data) {
 			data = data.list;
 			$scope.stores = data.stores;
 			$scope.userRole = data.userRole;
 			$scope.totalItems = data.totalItems;
 			$scope.changeView('list');
 		});
 	}

 	$scope.removeStore = function(key){
		var confirmRemove = confirm("Sure to remove this seller?");
		if (confirmRemove == true) {
			$('.overlay').show();
			dataFactory.httpRequest('stores/'+key,'DELETE').then(function(data) {
				if(data == 1){
					$.gritter.add({
						title: 'Remove Store',
						text: 'Seller removed successfully'
					});
					listStores(1);
				}
				$('.overlay').hide();
			});
		}
	}

	$scope.changeView = function(view){
		if(view == "add" || view == "list"){
			$scope.form = {};
		}
		$scope.views.list = false;
		$scope.views.approval = false;
		$scope.views.add = false;
		$scope.views.edit = false;
		$scope.views[view] = true;
	}
})

.controller('sellerController', function(dataFactory,$rootScope,$scope) {
	$scope.views = {};
	$scope.sellers = [];
	$scope.userRole = '';
	$scope.totalItems = '';
	$scope.views.list = true;
	$scope.totalItems = 0;
	$scope.CSRF_TOKEN = $rootScope.data.csrf;

	$scope.pageChanged = function(newPage) {
		approved(newPage);
	};

	$scope.pageChangedPending = function(newPage) {
		pending(newPage);
	};

	approved(1);
	function approved(pageNumber) {
		$('.overlay').show();
		dataFactory.httpRequest('sellers/listApproved/'+pageNumber).then(function(data) {
			console.log(data);
			$scope.sellers = data.sellers;
			$scope.userRole = data.userRole;
			$scope.totalItems = data.totalItems;
			$scope.changeView('list');
			$('.overlay').hide();
		});
	}

	function pending(pageNumber){
		$('.overlay').show();
		dataFactory.httpRequest('sellers/listPending/'+pageNumber).then(function(data) {
			$scope.sellersPending = data.sellers;
			$scope.userRole = data.userRole;
			$scope.totalItems = data.totalItems;
			$scope.changeView('approval');
			$('.overlay').hide();
		});
	}

	$scope.approve = function(id){
		$('.overlay').show();
		dataFactory.httpRequest('sellers/approveOne/'+id,'POST').then(function(data) {
			$.gritter.add({
				title: 'Approve Seller',
				text: 'Seller approved successfully'
			});
			$scope.sellersPending = data.sellers;
			$scope.userRole = data.userRole;
			$scope.totalItems = data.totalItems;
			$('.overlay').hide();
		});
	}

	$scope.deny = function(id){
		$('.overlay').show();
		dataFactory.httpRequest('sellers/denyOne/'+id,'POST').then(function(data) {
			$.gritter.add({
				title: 'Disapprove Seller',
				text: 'Seller disapproved successfully'
			});
			$scope.sellers = data.sellers;
			$scope.userRole = data.userRole;
			$scope.totalItems = data.totalItems;
			$('.overlay').hide();
		});
	}

	$scope.create = function(){
		$('.overlay').show();
		dataFactory.httpRequest('sellers/create','POST',{},$scope.form).then(function(data) {
			data = data.list;
			$scope.sellers = data.sellers;
			$scope.userRole = data.userRole;
			$scope.totalItems = data.totalItems;
			$scope.changeView('list');
		});
	}
  
	$scope.edit = function(seller){
		$('.overlay').show();
		$scope.roles = ['seller', 'customer'];
		$scope.user = seller.username;
		angular.forEach(seller, function(v, k){
			this[k] = v;
		}, $scope.form);
		$scope.changeView('edit');
		$('.overlay').hide();
	}

	$scope.saveEdit = function(){
		$('.overlay').show();
		dataFactory.httpRequest('sellers/edit/' + $scope.form.id,'POST',{},$scope.form).then(function(data) {
			data = data.list;
			$scope.sellers = data.sellers;
			$scope.userRole = data.userRole;
			$scope.totalItems = data.totalItems;
			$scope.changeView('list');
		});
	}

	$scope.changeView = function(view){
		if(view == "add" || view == "list"){
			$scope.form = {};
		}
		$scope.views.list = false;
		$scope.views.approval = false;
		$scope.views.add = false;
		$scope.views.edit = false;
		$scope.views[view] = true;
	}
})


.factory('dataFactory', function($http) {
	var myService = {
		httpRequest: function(url,method,params,dataPost,upload) {
			var passParameters = {};
			passParameters.url = url;

			if (typeof method == 'undefined'){
				passParameters.method = 'GET';
			}else{
				passParameters.method = method;
			}

			if (typeof params != 'undefined'){
				passParameters.params = params;
			}

			if (typeof dataPost != 'undefined'){
				passParameters.data = dataPost;
			}

			if (typeof upload != 'undefined'){
				passParameters.upload = upload;
			}

			var promise = $http(passParameters).then(function (response) {
				if(typeof response.data == 'string' && response.data != 1){
					$.gritter.add({
						title: 'Shopvel',
						text: response.data
					});
					$('.overlay').hide();
					return false;
				}
				if(response.data.jsMessage){
					$.gritter.add({
						title: response.data.jsTitle,
						text: response.data.jsMessage
					});
					$('.overlay').hide();
				}
				return response.data;
			},function(){
				$.gritter.add({
					title: 'Shopvel',
					text: 'An error occured.'
				});
				$('.overlay').hide();
			});
			return promise;
		}
	};
	return myService;
})

.directive('tooltip', function(){
	return {
		restrict: 'A',
		link: function(scope, element, attrs){
			$(element).hover(function(){
				$(element).tooltip('show');
			}, function(){
				$(element).tooltip('hide');
			});
		}
	}
})

.directive('ckEditor', [function () {
	return {
		require: '?ngModel',
		link: function ($scope, elm, attr, ngModel) {
			var ck = CKEDITOR.replace(elm[0]);

			ck.on('pasteState', function () {
				$scope.$apply(function () {
					ngModel.$setViewValue(ck.getData());
				});
			});

			ngModel.$render = function (value) {
				ck.setData(ngModel.$modelValue);
			};
		}
	};
}])

.filter('htmlToText', function(){
	return function(text){
		return  text ? String(text).replace(/<[^>]+>/gm, '') : '';
	}
});