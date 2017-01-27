var apper = angular.module('apper',[]);

apper.controller('formcontrol', function($scope, $http){
 $http.get('../searcher.php').then(function(response){
     $scope.merchants = response.data.records;


 $scope.addman = function(){


   var prodata = $.param({                          // $.param()
     'firstname' : $scope.fname,
     'lastname' : $scope.lname,
     'email' : $scope.email,
     'username': $scope.uname,
     'password' : $scope.pass,
     'company': $scope.compname
   });


   $http({
       method: 'POST',
       url: 'searcher.php',
       data: prodata,
       headers: {'Content-Type': 'application/x-www-form-urlencoded'}
   })
   .success(function(data,status, headers, config){
       console.log(data);
       console.log(status);
       alert('Account details altered Successfuly.');

   }).error(function(data,status, headers, config){
      alert('Unable to edit profile.');
      console.log(status);
       console.log(data);
   });


 };

});
});
