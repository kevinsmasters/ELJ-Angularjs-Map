app.factory('places', ['$http', function($http) { 
  return $http.get('http://edlevinjewelry.com/msqltojson.php') 
            .success(function(data) { 
              return data; 
            })
            .error(function(err) { 
              return err; 
            }); 
}]);