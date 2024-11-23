<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername = "sahil-1.cn2m8igaeqgg.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "Gurjot123";
$db = "sahil";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Report</h1>";
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>
