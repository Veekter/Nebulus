<?php
include('clientsess.php');
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
<title> Welcome Grasshopper! </title>
<meta charset="utf-8">
<meta name= "viewport" content= "width= device-width, initial-scale= 1">
<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/font_awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src = "js/jquery.js"> </script>
<script src = "js/angular.js"> </script>
<script src = "js/angular-route.min.js"> </script>
<script src = "js/myapp.js"> </script>
<script src = "js/controllers.js"> </script>
<script src = "js/bootstrap.js"> </script>
<script src="js/slideout.js"></script>
</head>
<body>
<div class="jumbotron">
<div class="container text-center">
    <h1>Nebulus</h1>
    <p>Simple, Beautiful & Elegant</p>
  </div>
</div>
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
        <li class="active"><a href="client.php">Home</a></li>
        <li><a href="products/index.html">Products</a></li>
        <li><a href="profiler.php"> Profile</a></li>
        <li><a href="find.php">Search</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="clientlogout.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- menu div -->
<div id="main">
  <div id="mySidenav" class="sidenav">
    <ul>
    <li> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a></li>
      <li><a href="index.html">Home</a></li>
      <li><a href="#">About us</a>
         <ul>
            <li><a href="#">History</a></li>
            <li><a href="#">The team</a></li>
            <li><a href="#">Our address</a></li>
         </ul>
  </div>
<!-- main body div -->
<div class="container-fluid">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ open</span>
<div class="container-fluid" ng-view>





</div>
<!-- this is the end of the main div -->
</div>

	<footer class="container-fluid text-center" style="background-color: cyan">
	<div class ="row">
		<div class="col-sm-6">
		<h2> Bread<small>Crumbs</small></h2>
	    <ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
			<li><a href="#">Products</a></li>
			<li><a href="#">Contacts</a></li>
	    </ul>
		<p> <a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-content="wanna know more visit the other pages">Hover over me</a></P>
	    </div>
				<div class="col-sm-6">
		<a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Site by Muriithi Corp <a href="#" title="Visit Victor's site">www.vicproducts.com</a></p>
	 </div>
	 </div>
	</footer>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
</body>
</html>
