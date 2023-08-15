<?php
	
	$b_id=$_GET['b_id'];
	$s_id=$_GET['s_id'];
	$issued_for=$_GET['issued_for'];

	date_default_timezone_set('Asia/Kolkata');
	$today=date('Y-m-d');

	$days="+".$issued_for;
	$date=date('Y-m-d', strtotime($today.$days));

	include "connection.php";

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
							echo "Sorry, This Book is Out Of Stock";
						}

						else
						{
								//Inserting ordered book in issued book table
							$sql="INSERT INTO issued_books(book_id, student_id, issued_for, return_date, return_flag) VALUES ('$b_id', '$s_id', '$issued_for', '$date', 1)";

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
															echo "Data Inserted and Available Books Changed";
														}
											}
										}
										else
										{
											echo "ERROR :".mysqli_error($con);
										}


										//Checking applicaions for updation
										$sql4="SELECT * FROM applications WHERE book_id='$b_id' AND s_id='$s_id'";

										$result4=mysqli_query($con, $sql4);
										if(mysqli_num_rows($result4) > 0)
										{
											while($row4 = mysqli_fetch_assoc($result4))
											{
												$app_id=$row4['app_id'];
												$a_book_title=$row4['book_title'];

												if ($book_title==$a_book_title) 
												{
													//Changing flag of application
													$sql5="UPDATE applications SET flag=1 WHERE app_id='$app_id'";
 
													$result5=mysqli_query($con, $sql5);
													if($result5==true)
													{
														echo "Flag Changed";
													}	

													//Changing order status of book to approved
													$sql6="SELECT * FROM lib_students WHERE id='$s_id'";

													$result6=mysqli_query($con, $sql6);
													if(mysqli_num_rows($result6) > 0)
													{
														while($row6 = mysqli_fetch_assoc($result6))
														{
															$s_sbrn=$row6['sbrn'];

															//Changing order status of book to approved
															$sql7="SELECT * FROM my_orders WHERE s_sbrn='$s_sbrn' AND book_id='$b_id'";

															$result7=mysqli_query($con, $sql7);
															if(mysqli_num_rows($result7) > 0)
															{
																while($row7 = mysqli_fetch_assoc($result7))
																{
																	$order_id=$row7['order_id'];

																	$sql8="UPDATE my_orders SET order_status=1 WHERE order_id='$order_id'";

																	$result8=mysqli_query($con, $sql8);
																	if ($result8) 
																	{
																		echo "Order Status Changed";
																	}
																}
															}
														}

													}
												}

												else
												{
													echo "There is no Applications With This Book";
												}


											}
										}
								}

								else
								{
									echo "ERROR :".mysqli_error($con);
								}
						}
					}
				}




	
?>