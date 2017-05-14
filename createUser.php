<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
$nickname = mysqli_real_escape_string($conn, $_POST['nickname']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "INSERT INTO MyUsers (firstname, lastname, nickname, password)
VALUES ('$first_name', '$last_name', '$nickname', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "1 record added";
// Return to index site -------------------------------------
ob_start(); // ensures anything dumped out will be caught

// do stuff here
$url = 'index.php'; // this can be set based on whatever

// clear out the output buffer
while (ob_get_status()) 
{
    ob_end_clean();
}

// no redirect ---------------------------------------------
header( "Location: $url" );

$conn->close();
?>