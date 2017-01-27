<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");


include_once('conn.php');
include('merchsess.php');
$namer = $login_session;

$result = $con->query("SELECT * FROM merchants");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"firstname":"'  . $rs["firstname"] . '",';
    $outp .= '{"lastname":"'  . $rs["lastname"] . '",';
    $outp .= '"username":"'   . $rs["username"]        . '",';
    $outp .= '"password":"'. $rs["password"]     . '",';
    $outp .= '"company":"'  . $rs["company"] . '",';
    $outp .= '"email":"'. $rs["email"]   . '"}';
}
$outp ='{"records":['.$outp.']}';
echo $outp;

// inserting data

 $fname = mysqli_real_escape_string($con,$_POST["firstname"]);
 $lname = mysqli_real_escape_string($con,$_POST["lastname"]);
 $email = mysqli_real_escape_string($con,$_POST["email"]);
 $uname = mysqli_real_escape_string($con,$_POST["username"]);
 $comp = mysqli_real_escape_string($con,$_POST["company"]);
 $pass = mysqli_real_escape_string($con,$_POST["password"]);

$res=  mysqli_query($con,"UPDATE merchants SET firstname ='$fname', lastname ='$lname', email ='$email', username ='$uname', companyname ='$comp', password ='$pass'
WHERE username ='$namer';

if(mysqli_query($conn, $res)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}






$con->close();



 ?>
