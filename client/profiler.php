<?php
include('clientsess.php');
?>
<!DOCTYPE html>
<html lang="en" ng-app="apper">
<head>
<title> Welcome Grasshopper! </title>
<meta charset="utf-8">
<meta name= "viewport" content= "width= device-width, initial-scale= 1">
<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/bootstrap-editable.css">
<script src = "js/jquery.js"> </script>
<script src = "js/angular.js"> </script>
<script src = "js/bootstrap.js"> </script>
<script src = "js/scripter.js"> </script>
<link rel="stylesheet" href="css/bootstrap-editable.css">
<script src = "js/bootstrap-editable.js"> </script>
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
	        <li class="active"><a href="client.php">Home</a></li>
	        <li><a href="products/index.html">Browse Products</a></li>
	        <li><a href="profiler.php"> Profile</a></li>
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
    <p>Simple, Beautiful & Elegant</p>
  </div>
</div>
<!--   this is the beginning of the edit profile -->
<div class="container" style="padding-top: 60px;" >
  <h1 class="page-header">Edit Profile</h1>
  <div class="row" >
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="#" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block well well-sm">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a>
        <i class="fa fa-coffee"></i>
        Click on any <strong>field</strong> to edit your proflile.
      </div>
      <?php
      $result = $con->query("SELECT * FROM merchants WHERE username ='kimani'");
      while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
        $fname = $rs['firstname'];
        $lname = $rs['lastname'];
        $comp = $rs['company'];
        $email = $rs['email'];
        $pass = $rs['password'];

};
?>


      <h3>Personal info</h3>
      <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="John" ng-model="fname" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="Doe"  ng-model="lname" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Company:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="primatech"  ng-model="compname" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" placeholder="example@gmail.com"  ng-model="email" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Time Zone:</label>
          <div class="col-lg-8">
            <div class="ui-select">
              <select id="user_time_zone" class="form-control"   ng-model="time">
                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                <option value="Alaska">(GMT-09:00) Alaska</option>
                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                <option value="Arizona">(GMT-07:00) Arizona</option>
                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input class="form-control" placeholder="username"  ng-model="uname" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" placeholder="password"  ng-model="pass" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" placeholder="password"  ng-model="pass" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Save Changes" ng-click="addman()"; type="submit">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<?php
// define variables and set to empty values
$fname = $email = $lname = $uname = $comp = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $email = test_input($_POST["email"]);
  $uname = test_input($_POST["uname"]);
  $comp = test_input($_POST["comp"]);
  $pass = test_input($_POST["pass"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$sql = "UPDATE Customers
SET ContactName='Alfred Schmidt', City='Hamburg'
WHERE CustomerName='Alfreds Futterkiste'; ";
	$result = $con->query("UPDATE Customers
  SET firstame='$fname', lastame='$fname', firstame='$fname'
  WHERE username='kimani'");

?>



</body>

</html>
