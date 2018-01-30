var app =angular.module('blog',['ngRoute']);

app.config(function($routeProvider,$locationProvider){
	//set up routes
	$routeProvider
		.when('/',{
			templateUrl: 'home.php'
	 	})
	 	.when('/home',{
	 		templateUrl: 'home.php'
	 	})
	 	.when('/inbox',{
	 		templateUrl: 'inbox.php'
	 	})
	 	.when('/draft',{
	 		templateUrl: 'draft.php'
	 	})
	 	.when('/sent',{
	 		templateUrl: 'sent.php'
	 	})
	 	.otherwise({
	 		redirectTo: '/'
	 	})
});