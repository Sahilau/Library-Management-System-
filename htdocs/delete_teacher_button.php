<?php

$id= $_GET['id'];

		include "connection.php";		 	
	
		$sql2="DELETE FROM teachers WHERE id='$id'";

		$result2=mysqli_query($con, $sql2);
		{
			if ($result2)
			{
				$msg="Teacher Deleted <strong>Successfully!!</strong>";
			}
			else
			{
				$msg="Unable to Delete Record:".mysql_error($con);
			}
			header("Location: delete_teacher.php?msg=$msg");	
		}
						

?>