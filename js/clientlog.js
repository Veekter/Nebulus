 /* initialize the app module   */
 var app = angular.module("ClientLogin", []);
 
 /* initialize the controller    */
 
app.controller("ClientController", function($scope) {
    $scope.firstName = "";
    $scope.lastName = "";
	$scope.email = "";
	$scope.age = "";
});
 