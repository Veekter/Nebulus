var prodcontroller = angular.module('prodcontroller',[]);

prodcontroller.controller("searchcontrol", function($scope, $http, $routeParams){
$http.get('js/search.php').then(function(response){
  $scope.products = response.data.records;
  $scope.myOrder = "Name";
  $scope.whichItem = $routeParams.itemId;
});
});

prodcontroller.controller("detailscontrol", function($scope, $http, $routeParams){
$http.get('js/data.json').then(function(response){
  $scope.results = response.data.records;
  $scope.whichItem = $routeParams.itemId;

});
});
