<?php

$sbrn= $_GET['sbrn']; 

		include "connection.php";			
	
		$sql2="DELETE FROM lib_students WHERE sbrn='$sbrn'";

		$result2=mysqli_query($con, $sql2);
		{
			if ($result2)
			{
				$msg="Student Deleted <strong>Successfully!!</strong>";
			}
			else
			{
				$msg="Unable to Delete Record:".mysql_error($con);
			}
			
		}

		$sql2="DELETE FROM student WHERE sbrn='$sbrn'";

		$result2=mysqli_query($con, $sql2);
				
				header("Location: delete_student.php?msg=$msg");			
			



						

?> 

