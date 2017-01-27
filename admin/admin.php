<?php
include('adminsess.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Admin Panel </title>
<meta charset="utf-8">
<meta name= "viewport" content= "width= device-width, initial-scale= 1">
<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/jquery-editable.css">
<style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
<script src = "js/jquery.js"> </script>
<script src = "js/angular.js"> </script>
<script src = "js/bootstrap.js"> </script>
<script src = "js/jquery-editable.min.js"> </script>
</head>
<body>
<div class="jumbotron text-center"><h1> Welcome <?php echo $login_session; ?> </h1>
	<h2><a href = "adminlogout.php">Sign Out</a></h2> 
</div>
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Nebulus</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Users</a></li>
        <li><a href="#">Merchants</a></li>
        <li><a href="../map/map.html">Locations</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Menu</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Price</a></li>
        <li><a href="#section3">Locations</a></li>
        <li><a href="#section3">Categories</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Edit and Delete User & Merchant Accounts</p>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p>
			<!-- ajax users -->
			<div id="userdata">
			
			
			</div>
			
          </div>
        </div>
		<!-- ajax merchants -->
		<div class="col-sm-12">
          <div class="well">
            <h4>Merchants</h4>
            <p>1 Million</p>
			<!-- ajax users -->
			<div id="merchdata">
			
			
			</div>
			
          </div>
        </div>
		
        
      </div>
     
    </div>
  </div>
</div>


<script>
jQuery(document).ready(function() {
function fetch_data(){
	$.ajax({
		url:"selec.php",
		method:"POST",
		success: function(data){
		$('userdata').html(data);
		
		}
	
	
	});
}
fetch_data();
$(document).on('click','#add',function(){
	var username= $('#username').text();
	var password= $('#password').text();
	var email= $('#email').text();
	if(username == ''){
		alert("Enter Username");
		return false;
	}
	if(password == ''){
		alert("Enter password");
		return false;
	}
	if(email == ''){
		alert("Enter email");
		return false;
	}
	$.ajax({   
		url: "insert.php",
		method: "POST",
		data: {username:username, password:password, email:email} ,
		dataType:"text",
		success: function(data){
			alert(data);
			fetch_data();
		
		
		}
	
	
	
	
	});

}



)

});
</script>
</body>
</html>