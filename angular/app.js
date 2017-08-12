angular.module("starter",['ui.router'])
 .config(function($stateProvider, $urlRouterProvider) {
	
	$stateProvider
	.state('home', {
		url: "/",
		templateUrl: "templates/home.html",
		controller: 'homeCtrl',
        controllerAs: 'home'
	  })
	 
	 
  $urlRouterProvider.otherwise('/')		
		
  
  
});