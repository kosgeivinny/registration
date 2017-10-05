
<!DOCTYPE Html>
<html>
<head>
<title> Course Registration </title>
<link href="bootstrap.css" rel="stylesheet" />
</head>
<body>
<div class="container">
	<div class="col-lg-8 well" style="background-color: ;">
<form class="inline" action="registerfinal.php" method="POST">
	<fieldset>
	<legend> <h3><b> Course Registration </b></h3> </legend>
<div class="row">
    <div class="col-sm-3">
<label> First Name: </label>
    </div>
<input type="text" name="fname"/>
</div>
<br>
<div class="row">
    <div class="col-sm-3">
<label> Last Name: </label>
    </div>
<input type="text" name="lname"/>
</div>
<br>
        <div class="row">
            <div class="col-sm-3">
            <label> Gender: </label>
            </div>
            <div class="col-sm-2">
            <select class="form-control" name="gender">
                <option> Male </option>
                <option> Female </option>
            </select>
            </div>
        </div>
        <br>
<div class="row">
    <div class="col-sm-3">
	<label> Year of Study: </label>
    </div>
<div class="radio">
<label class="radio-inline"><input type="radio" name="year" value="Year 1" required/> Year 1 </label> 
<label class="radio-inline"><input type="radio" name="year" value="Year 2" required/> Year 2 </label>
<label class="radio-inline"><input type="radio" name="year" value="Year 3" required/> Year 3 </label>
<label class="radio-inline"><input type="radio" name="year" value="Year 4" checked required/> Year 4 </label>
</div>
</div>
</br>
<div class="row">
    <div class="col-sm-3">
<label> Faculty: </label>
    </div>
    <input type="text" name="faculty">
</div>
<br>
        <div class="row">
            <div class="col-sm-3">
            <label> Department: </label>
            </div>
            <input type="text" name="dept">
        </div>

        <br>
<div class="row">
<button class="btn btn-warning" type="reset"> Clear </button>

<button class="btn btn-success" type="submit" name="submit"> Submit </button>
</div>
</fieldset>
</form>
</div>
</div>

<div class="container">
    <h1 align="left"> Registered Students </h1>


    <?php
    include "con.php";
    $display="SELECT * FROM students ORDER BY ID";
    $result=mysqli_query($con, $display);


    echo"<table class='table-bordered' cellspacing='15px' border='1px' style='width:980px;height:auto;'>
		<tr> 
			<th> First Name </th> 
			<th> Last Name </th> 
			<th> Gender </th>
			<th> Year </th>
			<th> Faculty</th>
			<th> Department </th> 
		</tr>";

    while($row =mysqli_fetch_assoc($result)) {

        echo "<tr>
        			<td> ".$row["First_Name"]." </td>
        			<td> ".$row["Last_Name"]." </td>
        			<td> ".$row["Gender"]." </td>
        			<td> ".$row["Year"]." </td> 
        			<td> ".$row["Faculty"]." </td>
        			<td> ".$row["Department"]." </td>
        			</tr>";

    }
    echo "</table>";

    ?>
    </div>



</body>
</html>