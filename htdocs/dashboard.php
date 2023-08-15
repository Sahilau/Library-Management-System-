<?php
		include "connection.php";


		//Displaying total books
		$sql1="select * from allBooks";
		if ($result1=mysqli_query($con, $sql1)) 
		{
			$total_books=mysqli_num_rows($result1);
		}


		//Number of student registered
		$sql2 = "SELECT * FROM lib_students";
		$result2 = mysqli_query($con, $sql2);
		if ($result2=mysqli_query($con, $sql2)) 
		{
			$reg_students=mysqli_num_rows($result2);
		}


		//Number of teachers registered
		$sql3 = "SELECT * FROM teachers";
		$result3 = mysqli_query($con, $sql3);
		if ($result3=mysqli_query($con, $sql3)) 
		{
			$reg_teachers=mysqli_num_rows($result3);
		}


		//Number of issued books
		$sql4 = "SELECT * FROM issued_books";
		$result4 = mysqli_query($con, $sql4);
		if ($result4=mysqli_query($con, $sql4)) 
		{
			$issued_books=mysqli_num_rows($result4);
		}


		//Number of applications
		$sql5 = "SELECT * FROM applications";
		$result5 = mysqli_query($con, $sql5);
		if ($result5=mysqli_query($con, $sql5)) 
		{
			$applications=mysqli_num_rows($result5);
		}






		mysqli_close($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>

<form>
	<label for="total_books">Total Number Of Books:</label>
	<input type="text" name="total_books" id="total_books" value="<?php echo $total_books; ?>" disabled><br><br>

	<label for="registered_students">Number Of Students Registered:</label>
	<input type="text" name="registered_students" id="registered_students" value="<?php echo $reg_students; ?>" disabled><br><br>

	<label for="registered_teachers">Number Of Teachers Registered:</label>
	<input type="text" name="registered_teachers" id="registered_teachers" value="<?php echo $reg_teachers; ?>" disabled><br><br>

	<label for="issued_books">Number Of Issued Books:</label>
	<input type="text" name="issued_books" id="issued_books" value="<?php echo $issued_books; ?>" disabled><br><br>

	<label for="applications">Applications:</label>
	<input type="text" name="applications" id="applications" value="<?php echo $applications; ?>" disabled><br><br>
</form>
</body>
</html>