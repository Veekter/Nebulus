<?php include 'search/search.php' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Search Engine   </title>
<meta charset="utf-8">
<meta name= "viewport" content= "width= device-width, initial-scale= 1">
<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="css/animate.css">
<script src = "js/angular.js"> </script>
<script src = "js/boostrap.js"> </script>
<script src = "js/jquery.js"> </script>

</head>
<body>
<div class="container-fluid">
<!-- navigation bar start -->
<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">About Us</a></li>
    <li><a data-toggle="tab" href="#menu2">Products</a></li>
    <li><a data-toggle="tab" href="#menu3">Contact us</a></li>
		<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Welcome to this awesome site where we do sell cool shit!</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>About Us</h3>
      <p>We started from the bottom now we here.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Products</h3>
      <p>Fly shit only.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Contact Us</h3>
      <p>You know when that hotline bling..</p>
    </div>
  </div>





</ul>
<!--  navigation bar end   -->

<h2 class="animated shake"> Search Engine Prototype  </h2>
<form action= " <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>  " method="POST">
<input type="text" placeholder= "am looking for?" name="keywords">
<input type="submit" value="Search">

</form>

</div>
<?php
if (isset($_POST['keywords'])){
$keywords = htmlentities(trim($_POST['keywords']));
// $keywords = mysql_real_escape_string(htmlentities(trim($_POST['keywords']))); <- this prevents mysql injection

$errors = array();
if(empty($keywords)){ // ***create equivalent client side error handling using angularjs!! ***
   $errors[] = "Please enter a search term.";
} else if (strlen($keywords)< 3){
   $errors[] = "Your search term must be three or more characters.";
} else if(search_results($keywords) === false){
  $errors[] = "Your serach for ', $keywords,' returned no results.";
//the array allows us to add more errors in the future
}
 if(empty($errors)){
    //search
 $results= search_results($keywords);
 $results_num = count($results); 
	
	
  echo '<p>Your search for <strong>' ,$keyword, '</strong> returned <strong> ', $results_num, '</strong> results </p>';
  foreach($results as $result){
    echo '<p><strong>' , $result['name'], '  </strong> <br> ' , $result['description'], '... <br>  <a href="' , $result['url'], ' " target = "_blank"> ' , $result['url'], ' </a> </p>';
  
  
  }
  
  
 }
 else{
    foreach( $errors as $error){
	  echo $error, '</br>';
    }

} 
} 

?>
</body>
</html>