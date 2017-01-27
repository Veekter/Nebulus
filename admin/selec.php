<?php
include("conn.php");

$sql = "select * from users";
$out = "";
$result = mysqli_query($con,$sql);
$i=0;
$out .='
<div class="table-responsive">
 <table class="table table-borderd">
 <tr>
 <th width="10%"> Id</th>
 <th width="40%"> Username</th>
 <th width="40%"> Password</th>
 <th width="40%"> Email</th>
 <th width="10%"> Delete</th>
 </tr>';
 $out .= "</table> </div>";
 if(mysqli_num_rows($result) > 0){
	while($row= mysqli_fetch_array($result)){
	$out .='<td>'.$row["id"].'</td>
		<td class="username" data-id1= "'.$row["id"].'" contenteditable>'.$row["username"].'</td>
		<td class="password" data-id2= "'.$row["id"].'" contenteditable>'.$row["password"].'</td>
		<td class="email" data-id3= "'.$row["id"].'" contenteditable>'.$row["email"].'</td>
		<td><button name="delete" id="delete"></button> </td>'
	;
	
	}
	$out .='<tr>
		<td></td>
		<td  id="username" contenteditable></td>
		<td id="password" contenteditable></td>
		<td id="email" contenteditable></td>
		<td ><button name="add" id="add" class="btn btn-success"> +</button></td>
	</tr>';	
 
 }
 else{
	$out .='
	<tr> 
		<td colspan="4"> Data not found! </td>
	
	</tr>
	
	';
 
 
 }



?>

