<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(!empty($_POST)){
  $name=$_POST['name'];
  $email_id=$_POST['email_id'];
  $pass=$_POST['password'];
  $address=$_POST['address'];
  $phone_number=$_POST['phone_number'];
}


$sql =  "INSERT INTO user (Name, Email_id, Password, Address, Phone_number)
VALUES ('$name', '$email_id', '$pass', '$address', '$phone_number')";
if ($conn->query($sql) === TRUE) {
  echo '<script>alert("You have registered successfully")</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>