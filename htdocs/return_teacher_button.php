<?php 

	include "connection.php";

	$issued_id=$_GET['issued_id'];
	$b_id=$_GET['b_id'];

	//Changing flag						
	$sql = "UPDATE issued_teacher_books SET return_flag=1 WHERE issued_id='$issued_id'";
						$result = mysqli_query($con, $sql);

						if ($result) 
						{
							$msg="Book Marked As Returned<strong> Successfully!! </strong>";

							//Getting issued book details to update available books after return

							//Getting available books 
							$sql3="SELECT * FROM allbooks WHERE id='$b_id'";

							$result3=mysqli_query($con, $sql3);
								if(mysqli_num_rows($result3) > 0)
								{
									while($row3 = mysqli_fetch_assoc($result3))
									{
										$available=$row3['available'];
										$updated_available=++$available;

										//Updating available books
										$sql2="UPDATE allbooks SET available='$updated_available' WHERE id='$b_id'";

										$result2=mysqli_query($con, $sql2);
											if($result2==true)
											{
												echo "Available Books Updated";
											}
											else
											{
												mysql_error($con);											
											}
									}
								}
						}

						else
						{
							mysqli_error($con);
						}
						header("Location: return_teacher.php? msg=$msg");


?>