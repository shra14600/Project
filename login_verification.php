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
  $email_id=$_POST['email_id'];
  $pass=$_POST['password'];
}


$sql =  "SELECT * from user where email_id='$email_id' and password='$pass'" ;
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        header("Location: register.php");
    } else {
        echo 'user not found!';
    }
} else {
    echo 'Error: ' . mysqli_error();
}

$conn->close();
?>