<?php
include('merchsess.php');
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<script src="js/jquery.js"> </script>
<script src="js/angular.js"> </script>
<script src="js/angular-route.min.js"></script>
<script src="js/bootstrap.js"> </script>
<script src="js/myscript.js"></script>
<script src="js/typed.min.js"></script>
<title> Merchant</title>
</head>
<body>
  <!--  navbar -->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">  Welcome <?php echo $login_session; ?> </a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="merchant.php">My Products</a></li>
	        <li><a href="product.php">Add Products</a></li>
	        <li><a href="profile.php"> Profile</a></li>
	        <li><a href="../client/find.php">Search</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="merchlogout.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>


<div class="jumbotron">
<div class="container text-center">
    <h1>Nebulus</h1>
    <p>Simple - Beautiful -Elegant</p>
  </div>
</div>

</nav>
  <!-- end of the second nav -->
<div id="maindiv" class="container-fluid">


      <!-- -this is the text scrambler div -->
      <div class="container">
      <div class="texter">
     </div>
   </div>
   <div class="contianer-fluid" ng-controller="productcontrol">
  <h3> Use Accordion to add product below: </h3>
  <!-- this is the beginning of the accordion div -->

  <button class="accordion">Choose Category:</button>
  <div class="panel">

    <p>Select a product:</p>

    <select ng-model="selectedproducts">
    <option ng-repeat="x in products" value="{{x.Name}}">{{x.Name}}</option>
    </select>

    <h2>You selected: {{selectedproducts}}</h2>



    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>

  <button class="accordion">Add Details</button>
  <div class="panel">

    <form class="form-horizontal" role="form">
     <div class="form-group">
       <label class="control-label col-sm-2" for="email">Name:</label>
       <div class="col-sm-10">
         <input type="name" ng-model="pname" class="form-control" id="email" placeholder="Enter product's name">
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-2" for="pwd">Price:</label>
       <div class="col-sm-10">
         <input type="number"  ng-model="pprice" class="form-control" id="pwd" placeholder="Enter product's price">
       </div>
     </div>
     <div class="form-group">
       <label class="control-label col-sm-2" for="comment">Description:</label>
       <textarea class="form-control"  ng-model="pdes" rows="5" id="comment"  placeholder="Enter a brief description of your product"></textarea>
     </div>

   </form>
     </div>

  <button class="accordion">Finish:</button>
  <div id="foo" class="panel">
    <ul class="list-group">
   <li class="list-group-item active">Product Name: <h4>{{pname}} </h4>  </li>
   <li class="list-group-item">Product Price:   <h4>{{pprice | currency}} </h4>      </li>
   <li class="list-group-item">Product Category:  <h4>{{selectedproducts}} </h4>   </li>
   <li class="list-group-item">Product Description:  <h4>{{pdes}} </h4>    </li>
 </ul>
    <button class="btn btn-info btn-lg" data-toggle="modal"ng-click="visit();" data-target="#myModal"><span> Add Product</span></button>
  </div>

<!-- modal definiton -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog"  >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nebulus</h4>
      </div>
      <div class="modal-body">
        <p>Are you Sure you want to add this product?</p>
				<p id='demo'> {{selectedproducts}} </p>
				<p >{{ pname}} </p>
				<p > {{pprice}}</p>
				<p >{{pdes}} </p>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" ng-click="adder();"> Yes!</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>

<!-- end of the modal declaration -->


  <!-- this is the end of the main div -->
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>
<script>
  $(function(){
      $(".texter").typed({
        strings: ["Embrase your destiny.", "Heed your inner voice.","They don't want you to win.","we got the keys to success."],
       backDelay: 500,
       showCursor: false,
        loop: true,
        typeSpeed: 100
      });
  });
</script>


<script>



</script>

</body>
</html>
