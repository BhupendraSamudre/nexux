<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$major = $_POST['major'];

$sql = "INSERT INTO Students (first_name, last_name, email, major) VALUES ('$first_name', '$last_name', '$email', '$major')";

if ($conn->query($sql) === TRUE) {
  echo "New student added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
