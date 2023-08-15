<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "lms");

// Check connection
if (!$conn) {
  //die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Working</h1>
</body>
</html>