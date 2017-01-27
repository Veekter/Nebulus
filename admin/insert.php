<?php
include("conn.php");
$sql= "INSERT INTO users(username, password, email) VALUES('".$_POST["username"]."', '".$_POST["password"]."', '".$_POST["email"]."')";
if(mysqli_query($con,$sql)){
echo 'Data Inserted';

}






?>