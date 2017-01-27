<?php include('conn.php'); ?>
<?php  
// merchant validation
 $email = $cname =  $url = $loc = $password = $username= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cname = test_input($_POST["coname"]);
   $url = $_POST["url"];
  $email = test_input($_POST["email"]);
  $username = $_POST["muname"];
  $password = $_POST["mpassword"];
  $loc = test_input($_POST["colocation"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql = "INSERT INTO merchants (company, website, email,username,password, location)
VALUES ('$cname', '$url', '$email', '$username', '$password', '$loc')";

if ($con->query($sql) === TRUE) {
	header("Location: index.html");
    echo " New record registered successfully ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






?>