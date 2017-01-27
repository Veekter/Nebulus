var app = angular.module('myApp', []).controller('mysubCtrl', function($scope) {
	$scope.master={email: ""};
	$scope.reset = function() {
        if({myForm.email.$valid== true){
		document.getElementById("email").innerHTML='
		<div class="alert alert-success"><strong>Success!</strong> Indicates a successful or positive action.</div>

		'
		}
		else{
		document.getElementById("email").innerHTML='
		<div class="alert alert-danger"><strong>Success!</strong> Indicates a unsucccessful or positive action.</div>
		'
		}
    };
    $scope.reset();
});