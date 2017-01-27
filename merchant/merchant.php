<?php
include('merchsess.php');
?>
<!DOCTYPE html>
<html lang="en">
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
    <p>Simple, Beautiful & Elegant</p>
  </div>
</div>

	<div class="container">
		<div style="text-align:center;width:100%;font-size:24px;margin-bottom:20px;color: #2875BB;">Click any field to edit your products</div>
                <div class="row">
                    <table class= "table table-striped table-bordered table-hover">
                        <thead>
                            <tr>

                                <th colspan="1" rowspan="1" style="width: 180px;" tabindex="0">Name</th>

                                <th colspan="1" rowspan="1" style="width: 220px;" tabindex="0">Description</th>

                                <th colspan="1" rowspan="1" style="width: 288px;" tabindex="0">Price</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
						$result = $con->query("SELECT * FROM products WHERE merchant = 'kimani'");
						$i=0;
						while($rs = $result->fetch_array(MYSQLI_ASSOC)) {

							if($i%2==0) $class = 'even'; else $class = 'odd';

							echo'<tr class="'.$class.'">

                                <td class="xedit" id="'.$rs['pid'].'" key="name">'.$rs['name'].'</td>
<td class="xedit" id="'.$rs['pid'].'" key="details">'.$rs['description'].'</td>
<td class="xedit" id="'.$rs['pid'].'" key="price">'.$rs['price'].'</td>
                            </tr>';
						}
						?>
                        </tbody>
                    </table>
        </div>

		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-editable.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
        $.fn.editable.defaults.mode = 'popup';
        $('.xedit').editable();
		$(document).on('click','.editable-submit',function(){
			var key = $(this).closest('.editable-container').prev().attr('key');
var x = $(this).closest('.editable-container').prev().attr('id');
var y = $('.input-sm').val();
var z = $(this).closest('.editable-container').prev().text(y);

			$.ajax({
				url: "process.php?id="+x+"&data="+y+'&key='+key,
				type: 'GET',
				success: function(s){
					if(s == 'status'){
					$(z).html(y);}
					if(s == 'error') {
					alert(' Product value edited Successfuly!');}
				},
				error: function(e){
					alert('Product value edited Successfuly!');
				}
			});
		});
});
</script>
    </div>



</div>

</body>
</html>
