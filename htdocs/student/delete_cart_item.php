<?php

	include "connection.php";

	$item_id=$_GET['item_id'];

	//Deleting record from cart
	$sql1 = "DELETE FROM my_cart WHERE item_id='$item_id' ";
	$result1 = mysqli_query($con, $sql1);

	if($result1)
	{
		$delete_success="Item Deleted <strong>Successfully!</strong>";

		header("Location: my_cart.php? delete_success=$delete_success");
	}

	
				

?>