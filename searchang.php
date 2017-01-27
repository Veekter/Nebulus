<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>search with angular js</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" />
		<script src="js/angular.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/jquery-ui.js"></script>
	</head>
<body>
<div ng-app="myApp" ng-controller="myCtrl">
<p> Enter your search term:</br> </p>
<input type="text" placeholder="Enter text" ng-model="test">
<div id="slider"> 



</div>
<button type="button" id="slide" class="btn btn-primary" data-toggle="tooltip" data-placement="auto" title="Filter By Price">price</button>
<!-- Slider div -->
<div class="well" style="display: none">
            <span id="ex18-label-1" class="hidden">Example slider label</span>
            <input id="ex19" type="text"
                  data-provide="slider"
                  data-slider-ticks="[1, 2, 3]"
                  data-slider-ticks-labels='["short", "medium", "long"]'
                  data-slider-min="1"
                  data-slider-max="3"
                  data-slider-step="1"
                  data-slider-value="3"
                  data-slider-tooltip="hide" />
        </div>


<div class="table-responsive">
<table class="table">
 <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
	
  <tr ng-repeat="x in names | filter:test">
    <td>{{  x.Name  }}<td>
	<td>{{  x.Description  }}<td>
	<td>{{  x.Price  }}<td>
  </tr>
<table>
</div>


</div>


<script>
angular.module('myApp', []).controller('myCtrl', function($scope, $http) {
	$http.get("searchtest.php").then(function(response) {
        $scope.names = response.data.records;
	 
  }); 
  });
 
</script> 
<script>
jQuery(document).ready(function($){
    $('[data-toggle="tooltip"]').tooltip();  
//slider function
$('#slide').on('click', function(e) {
            $('#slide')
                .parent()
                .find(' >.well')
                .toggle()
                .find('input')
                .slider('relayout');
            e.preventDefault();
        });	
});
</script>
<body>
</html>