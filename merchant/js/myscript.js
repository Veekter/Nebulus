

var app = angular.module('myApp', []);


app.controller('productcontrol', function($scope, $http) {
  $http.get('js/script.php').then(function(response){
      $scope.products = response.data.records;

/*
      $scope.visit =function(){
        document.getElementById('para').innerHTML = $scope.products.pname;
      }

*/

});

  $scope.adder= function(){

var prodata = $.param({                          // $.param()
  'name' : $scope.pname,
  'description': $scope.pdes,
  'price' : $scope.pprice,
  'category': $scope.selectedproducts
});


$http({
    method: 'POST',
    url: 'js/insert.php',
    data: prodata,
    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
})
.success(function(data,status, headers, config){
    console.log(data);
    console.log(status);
    alert('Product Added Successfuly.');

}).error(function(data,status, headers, config){
   alert('Unable to add product.');
   console.log(status);
    console.log(data);
});



};



/*

      $scope.adder= function(){

        var prodata = {
          name : $scope.pname,
          description: $scope.pdes,
          price : $scope.pprice,
          category: $scope.selectedproducts
        };
        var postdata =  'record='+ JSON.stringify(prodata);

};
*/

/*
        $http.post('insert.php',{
          'name': $scope.pname,
          'description': $scope.pdes,
          'price': $scope.pprice,
          'category': $scope.category
      }
    ).success(function(data,status, headers, config){
        console.log(data);

    }).error(function(data,status, headers, config){
       alert('Unable to add product.');
    });

  }

*/

 });
