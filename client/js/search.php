<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include("conn.php");

$result = $con->query("SELECT * FROM products");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["name"] . '",';
    $outp .= '"Category":"'   . $rs["category"]        . '",';
    $outp .= '"Description":"'. $rs["description"]     . '",';
    $outp .= '"Price":"'  . $rs["price"] . '",';
    $outp .= '"Website":"'. $rs["url"]   . '"}';
}
$outp ='{"records":['.$outp.']}';
$con->close();

/*
$myfile = fopen("js/data.json", "w") or die("Unable to open file!");
fwrite($myfile, $outp);
fclose($myfile);

*/
echo($outp);



 ?>
