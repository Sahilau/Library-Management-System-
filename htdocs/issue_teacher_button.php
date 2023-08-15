<?php
	
	if (isset($_POST['submit'])) 
	{
		$issued_for= $_POST['issued_for'];
	}
	
	$b_id=$_GET['b_id'];
	$t_id=$_GET['t_id'];
	date_default_timezone_set('Asia/Kolkata');
	$today=date('Y-m-d');

	$days="+".$issued_for."Days";
	$date=date('Y-m-d', strtotime($today.$days));

	include "connection.php";
	$sql7= "SELECT issued_id FROM issued_teacher_books WHERE book_id='$b_id' AND t_id='$t_id' AND return_flag=0";
	  $result7= mysqli_query($con, $sql7);
	 if(mysqli_num_rows($result7)>0)
	  {
	  	$msg="<strong> Warning!! </strong>This Book Is Already Issued To This Taecher And Not Returned Yet. ";
	    header("Location: issue_book_to_teacher.php? msg=$msg");
	  } 
	  else
	  {

			//checking if available books =0
			$sql3="SELECT * FROM allbooks WHERE id='$b_id'";

			$result3=mysqli_query($con, $sql3);
				if(mysqli_num_rows($result3) > 0)
				{
					while($row3 = mysqli_fetch_assoc($result3))
					{
						$available=$row3['available'];

						if ($available==0)
						{
							$msg="<strong> Sorry!! </strong>This Book Is Out Of Stock";
						}

						else
						{
								//Inserting ordered book in issued book table
							$sql="INSERT INTO issued_teacher_books(book_id, t_id, issued_for, return_date, return_flag) VALUES ('$b_id', '$t_id', '$issued_for', '$date', 0)";

							$result=mysqli_query($con, $sql);
								if($result==true)
								{
										//Seleting book details to update
										$sql1="SELECT * FROM allbooks WHERE id='$b_id'";

										$result1=mysqli_query($con, $sql1);
										if(mysqli_num_rows($result1) > 0)
										{
											while($row1 = mysqli_fetch_assoc($result1))
											{
												$book_title= $row1['title'];
												$available=$row1['available'];
												$updated_available=--$available;
												//Inserting ordered book in issued book table
													$sql2="UPDATE allbooks SET available='$updated_available' WHERE id='$b_id'";

													$result2=mysqli_query($con, $sql2);
														if($result2==true)
														{
															$msg="Book Issued<strong> Successfully!! </strong>";
														}
											}
										}
										else
										{
											echo "ERROR :".mysqli_error($con);
										}

								}
								else
								{
									echo "ERROR :".mysqli_error($con);
								}
								echo "<script>window.location.href= 'return_teacher.php? msg=$msg'</script>";
						}
					}
				}

	  }


	
?>