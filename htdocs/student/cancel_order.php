<?php

session_start();
$s_sbrn=$_SESSION['uname'];

	include "connection.php";

	$order_id=$_GET['order_id'];
	$book_id=$_GET['book_id'];

	//Deleting record from student orders
	$sql1 = "DELETE FROM my_orders WHERE order_id='$order_id' ";
	$result1 = mysqli_query($con, $sql1);

		//Deleting record from admin application
	$sql1 = "DELETE FROM applications WHERE book_id='$book_id' AND s_sbrn='$s_sbrn' ";
	$result1 = mysqli_query($con, $sql1);

	if ($result1) 
	{
		$cancel_success="Order Cancelled <strong>Successfully!</strong> ";
	}


	header("Location: my_pending_books.php? cancel_success=$cancel_success");
				

?>