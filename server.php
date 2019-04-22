<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'proya';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

$sql = "SELECT * FROM pengguna";
$result = $conn->query($sql);

// print_r($sql);

$rows = array();
while($r = mysqli_fetch_assoc($result)){
    $rows[] = $r;
}

$rows = json_encode($rows);
print_r($rows);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";
// return $rows;
?>