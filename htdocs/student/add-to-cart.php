<?php
 session_start();

  $sbrn=$_SESSION['uname'];
	include "connection.php";

	$book_id=$_GET['id'];


	$sql1 = "SELECT * FROM my_cart WHERE book_id='$book_id'";
				$result1 = mysqli_query($con, $sql1);

				if (mysqli_num_rows($result1) > 0) 
				{
				  while($row1 = mysqli_fetch_assoc($result1))				 
				 	{
						$exist_msg="Item <strong>Already Exist </strong>in Cart.";
						header("Location: all_books.php? exist_msg=$exist_msg");
					} 
				}
				else 
				{

					$query="INSERT INTO my_cart(book_id, s_sbrn) VALUES('$book_id', '$sbrn')";

					$result=mysqli_query($con,$query);

					if ($result) 
					{
						$success_msg="  Book<strong> Successfully Added </strong>To Cart.";
					}
					else
					{
						$error_msg="<strong>Warning! </strong> Something Went Wrong.";
					}

					header("Location: all_books.php? success_msg=$success_msg & error_msg=$error_msg");
				}
?>