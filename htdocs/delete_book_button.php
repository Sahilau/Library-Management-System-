<?php

$id= $_GET['id'];

		include "connection.php";			
	
		$sql2="DELETE FROM allbooks WHERE id='$id'";

		$result2=mysqli_query($con, $sql2);
		{
			if ($result2)
			{
				$msg= "Book Deleted <strong>Successfully!!</strong>";
			}
			else
			{
				echo "Unable To Delete Book:".mysqli_error($con);
			}
				header("Location: delete_book.php? msg=$msg");
			
		}

						

?>