<!DOCTYPE html>
<html>
<head>
<title>
Connection to Database
</title>
</head>
<body>
	<?php
$con=mysqli_connect("localhost","root","59156254654","registration");
if (!$con){
	echo "Database connection failed!!";
}

?>
</body>
</html>