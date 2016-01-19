var app=angular.module('opa',[]);

app.controller('cityController',function($scope,$http){
	$http.get('city.json').success(function(data){
		$scope.cities=data;

	});
});

app.controller('locationController',function($scope,$http){
	$http.get('city.json').success(function(data){
		$scope.cities=data;

	});
});
