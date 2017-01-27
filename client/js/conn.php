<?php
$con = mysqli_connect('localhost', 'root', '');
if(!$con){
 die('Could not connect: ' . mysqli_connect_error());
 }

$sel=mysqli_select_db($con,"project");// or die("Could not select database");
if(!$sel){
 die("Error selecting database.");
 }
 
?>