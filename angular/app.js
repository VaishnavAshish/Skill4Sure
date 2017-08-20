angular.module("starter",['ui.router'])
 .config(function($stateProvider, $urlRouterProvider) {
	
	$stateProvider
	.state('home', {
		url: "/",
		templateUrl: "templates/home.html",
		controller: 'homeCtrl',
        controllerAs: 'home'
	  })

	  .state('module',{
		url: "/module/:module_id",
		templateUrl: "templates/module.html",
		controller: 'moduleCtrl',
		controllerAs: 'module'
	  })
	 
	 
  $urlRouterProvider.otherwise('/')		
		
  
  
});