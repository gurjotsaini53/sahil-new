

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername = "sahil-1.cn2m8igaeqgg.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "Gurjot123";
$db = "sahil";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$user_name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message_inp = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$user_name', '$email', '$phone', '$message_inp')";

if ($conn->query($sql) === TRUE) {
    echo "Data successfully entered! <a href='index.html'>Go back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
10+10
?>