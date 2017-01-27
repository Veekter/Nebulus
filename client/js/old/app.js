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
 when('/detail/:itemId',{
    templateUrl: 'partial/detail.html',
    controller: 'detailcontrol'
 }).
 otherwise({
    redirectTo: '/list'
 });

}]);
