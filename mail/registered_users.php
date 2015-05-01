<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['is_artist']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email = $_POST['email'];
$is_artist = $_POST['is_artist'];
$talent = $_POST['talent'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

	
$servername = "localhost";
$username = "to2";
$password = "to2";
$dbname = "talentoxide";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO registered_users (name, email, is_artist, talent, dob, gender)
VALUES ('$name', '$email', '$is_artist', '$talent', '$dob', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
