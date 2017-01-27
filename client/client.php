<?php
include('clientsess.php');
?>
<!DOCTYPE html>
<html lang="en">
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
<script src = "js/bootstrap.js"> </script>
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="products/index.html">Products</a></li>
        <li><a href="profiler.php">Profile</a></li>
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
      <li><a href="client.php">Home</a></li>
      <li><a href="index.html">Browse Products</a></li>
        <li><a href="clientlogout.php">Log Out</a></li>

  </div>
<!-- main body div -->
<div class="container-fluid">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ open</span>
  <div class="row">

    <div class="col-sm-4">
      <div class="panel panel-primary def">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="products/images/fulls/044.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy Buy a new car and get a gift card</div>
      </div>

    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="products/images/fulls/077.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy a new car and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="products/images/fulls/066.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy a new car and get a gift card</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">

    <div class="col-sm-4">
      <div class="panel panel-primary def">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="products/images/fulls/099.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy a new car and get a gift card</div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="products/images/fulls/077.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy a new car and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="products/images/fulls/099.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy a new car and get a gift card</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Nebulus Copyright</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Subscribe</button>
  </form>
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
