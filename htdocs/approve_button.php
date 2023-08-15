<?php

include "connection.php";

$app_id=$_GET['app_id'];

$b_id=$_GET['b_id'];

$s_sbrn=$_GET['s_sbrn'];

$sql="UPDATE applications SET flag=1 WHERE app_id='$app_id'";

$result=mysqli_query($con, $sql);

if($result)
{
	$sql2="UPDATE my_orders SET order_status=1 WHERE book_id='$b_id' AND s_sbrn='$s_sbrn' AND order_status=0";

	$result2=mysqli_query($con, $sql2);
	$msg="Application Approved <strong>Successfully!!</strong> .";
}
else
{
	$msg="<strong>Sorry!!</strong> Unable To Approve Application.";
}

header("Location: pending_applications.php? msg=$msg");