var app = angular.module("myApp",[
  'ngRoute',
  'prodcontroller'
  ]);
app.config(['$routeProvider', function($routeProvider){
 $routeProvider.
 when('/list',{
    templateUrl: 'partial/list.html',
    controller: 'searchcontrol'
 }).
 when('/details/:itemId',{
    templateUrl: 'partial/details.html',
    controller: 'detailscontrol'
 }).
 otherwise({
    redirectTo: '/list'
 });

}]);
