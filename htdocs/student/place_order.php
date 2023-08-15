<?php
session_start();
$student_uname= $_SESSION['uname'];
	include "connection.php";

	$book_id=$_GET['id'];

	//CHECKING DUPLICATE ORDERS
	$sql1 = "SELECT * FROM my_orders WHERE book_id='$book_id'";
				$result1 = mysqli_query($con, $sql1);

				if (mysqli_num_rows($result1) > 0) 
				{
				  while($row1 = mysqli_fetch_assoc($result1))				 
				 	{
						$exist_msg="<strong>Sorry! </strong>This Book Is <strong>Already Ordered</strong> ";
						header("Location: order_book.php? exist_msg=$exist_msg");
					} 
				}
				else 
				{
						//FETCHING ORDERED BOOK DATA
						$sql3 = "SELECT * FROM allbooks WHERE id='$book_id'";
						$result3 = mysqli_query($con, $sql3);

						
						  while($row3 = mysqli_fetch_assoc($result3))				 
						 	{
						 		$book_id=$row3['id'];
								$book_title=$row3['title'];
								$book_writer=$row3['writer'];
								$book_publisher=$row3['publisher'];
							} 
						

						//FETCHING STUDENT/USER DATA
						$sql4 = "SELECT * FROM lib_students WHERE sbrn='$student_uname'";
						$result4 = mysqli_query($con, $sql4);

						if (mysqli_num_rows($result4) > 0) 
						{
						  while($row4 = mysqli_fetch_assoc($result4))				 
						 	{
								$s_id=$row4['id'];
								echo $s_id;
								$s_name=$row4['sname'];
								$s_fname=$row4['fname'];
								$s_branch=$row4['branch'];
								$s_phone=$row4['phone'];

							} 
						}

						$query5="INSERT INTO my_orders(book_id, s_sbrn) VALUES ('$book_id', '$student_uname')";

						$result5=mysqli_query($con,$query5);

					$query="INSERT INTO applications(book_id, book_title, book_writer, book_publisher, s_id, s_name, s_fname, s_sbrn, s_branch, s_phone) VALUES('$book_id', '$book_title', '$book_writer', '$book_publisher', '$s_id', '$s_name', '$s_fname', '$student_uname', '$s_branch' ,'$s_phone')";

					$result=mysqli_query($con,$query);

					if ($result) 
					{
						$success_msg="Book Ordered <strong>Successfully</strong>";
					}
					else
					{
						$error_msg="<strong>Error: </strong>Unable To Order Book";
					}
					

					header("Location: my_pending_books.php? success_msg=$success_msg & error_msg=$error_msg");
				}
?>