app.controller('MainController', ['$scope', 'places', function($scope, places) {
  
  $scope.mapCenter = {
  	lat: 40.741934,
  	lng: -74.004897,
  	zoom: 12
	}
	
	places.success(function(data) {
    $scope.mapMarkers = data;
    
  });
  
}]);