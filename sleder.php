<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_arm";
$motor1 = $_POST["motor1"];
$motor2 = $_POST["motor2"];
$motor3 = $_POST["motor3"];
$motor4 = $_POST["motor4"];
$motor5 = $_POST["motor5"];
$motor6 = $_POST['motor6'];
echo $motor1;
echo "<br>";
echo $motor2;
echo "<br>";
echo $motor3;
echo "<br>";
echo $motor4;
echo "<br>";
echo $motor5;
echo "<br>";
echo $motor6;
echo "<br>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Poses (id, motor1, motor2, motor3, motor4, motor5, motor6, statusx, created_at)
VALUES ('', '$motor1', '$motor2', '$motor3', '$motor4', '$motor5', '$motor6', '0', '')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>