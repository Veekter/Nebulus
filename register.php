<?php include('conn.php'); ?>
<?php  
// user validation
$fname = $lname= $email = $gender = $age = $password = $username= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $email = test_input($_POST["email"]);
 // $gender = test_input($_POST["gender"]);
//  $age = test_input($_POST["age"]);
  $password = $_POST["password"];
  $username = $_POST["username"];
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql = "INSERT INTO users (firstname, lastname, email,username,password)
VALUES ('$fname', '$lname', '$email', '$username', '$password')";

if ($con->query($sql) === TRUE) {
	header("Location: index.html");
    echo " New record registered successfully ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






?>