<!DOCTYPE Html>
<html>
<head>
<title>
	Registration Validation
</title>
</head>
<body>
	<?php 
	include "con.php";

	if (isset($_POST["submit"])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$gender=$_POST['gender'];
		$year=$_POST['year'];
		$faculty=$_POST['faculty'];
		$dept=$_POST['dept'];
	

		$sql="INSERT INTO students (First_Name, Last_Name, Gender, Year, Faculty, Department) VALUES ('$fname', '$lname', '$gender', '$year', '$faculty', '$dept')";
		$re=mysqli_query($con,$sql);
		if(!$re)
		{
			die("Query Failed! " . mysqli_error($con));
		}
		else
		
		?>
        <script> alert ('Successfuly registered');
        window.location.assign('register.php');
        </script>
        <?php
	}

	?>
</body>
</html>