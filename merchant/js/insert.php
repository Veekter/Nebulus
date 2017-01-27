<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");

include('conn.php');


 $pname = mysqli_real_escape_string($con,$_POST["name"]);
 $price = mysqli_real_escape_string($con,$_POST["price"]);
 $pdes = mysqli_real_escape_string($con,$_POST["description"]);
 $cat = mysqli_real_escape_string($con,$_POST["category"]);

$res=  mysqli_query($con,"INSERT INTO products (name, description, price, category)
VALUES ('$pname','$pdes','$price','$cat')");
if($res){
  echo "Product added weelll!";
}



/*
$name = $data->name;
$price = $data->price;
echo $name;
*/

/*
   $pname = mysql_real_escape_string($data->name);
echo $pname;
*/
/*
$angular_http_params = (array)json_decode(trim(file_get_contents('php://input')));

$pname = $angular_http_params["name"];

      echo $pname;
*/


/*
$ang = $_POST['pname'] ;
echo $ang;

 echo var_dump($ang);

*/
?>

<?php
/*
$data = json_decode(file_get_contents("php://input"));
$pname = mysql_real_escape_string($data->pname);
$des = mysql_real_escape_string($data->pdes);
$pprice = mysql_real_escape_string($data->pprice);
$cat = mysql_real_escape_string($data->selectedproducts);

 $res= $con->query("INSERT INTO dd_product(name, description, price, category) VALUES('$pname','$des','$pprice','$cat');
echo $res;

*/
?>
