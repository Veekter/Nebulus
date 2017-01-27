var prodcontroller = angular.module('prodcontroller',[]);

prodcontroller.controller("searchcontrol", function($scope, $http){
$http.get('js/data.json').then(function(response){
  $scope.products = response.data.records;
  $scope.myOrder = "Name";
  //$scope.whichItem = $routeParams.itemId;
});

prodcontroller.controller("detailcontrol", function($scope, $http, $routeParams){
$http.get('js/data.json').then(function(response){
    $scope.products = response.data.records;
      $scope.whichItem = $routeParams.itemId;

//$scope.results = response.data.records;
  $scope.whichItem = $routeParams.itemId;
});

});
});
