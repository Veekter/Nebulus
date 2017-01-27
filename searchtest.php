<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include('conn.php');
$result = $con->query("SELECT * FROM products");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Product id":"'  . $rs["pid"] . '",';
    $outp .= '"Name":"'   . $rs["name"]      . '",';
	 $outp .= '"Price":"'   . $rs["price"]      . '",';
    $outp .= '"Description":"'. $rs["description"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$con->close();

echo($outp);





?>