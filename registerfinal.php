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

	if (isset($_POST["submit"])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $gender = $_POST['gender'];
        $year = $_POST['year'];
        $faculty = $_POST['faculty'];
        $dept = $_POST['dept'];


        if (empty($fname) || empty($lname) || empty($email)|| empty($phone) || empty($gender) || empty($faculty) || empty($dept))
        {
            ?>
            <script>
                window.alert ('Oops!! cant leave any field blank');
                window.location.assign('register.php');
            </script>
        <?php
        }
        else {
            $sql = "INSERT INTO students (First_Name, Last_Name, Email, Phone, Gender, Year, Faculty, Department) VALUES ('$fname', '$lname', '$email', '$phone', '$gender', '$year', '$faculty', '$dept')";
            $re = mysqli_query($con, $sql);
            if (!$re) {
                die("Query Failed! " . mysqli_error($con));
            } else

                ?>
                <script>
                    window.alert('Successfuly registered');
                    window.location.assign('register.php');
                </script>
                <?php
        }
    }

	?>
</body>
</html>