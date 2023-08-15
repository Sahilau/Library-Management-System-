<script type="text/javascript">
	alert("Confirm to register student in library?");
</script>


<?php
	
		$id=$_GET['id'];
		$sname= $_GET['sname'];
		$fname= $_GET['fname'];
		$sbrn= $_GET['sbrn'];
		$branch= $_GET['branch'];
		$phone= $_GET['phone'];
		$dob= $_GET['dob'];

		include "connection.php";


				$sql1="INSERT INTO lib_students(sname, fname, sbrn,  branch, phone, dob)
						values('$sname', '$fname', '$sbrn', '$branch', '$phone', '$dob')";

						$result=mysqli_query($con, $sql1);
						if($result==true)
						{
							?> <script type="text/javascript">
								window.location.href = "import_students.php";

							</script> <?php

							$sql3="SELECT * FROM i_students WHERE id='$id'";

							$result3=mysqli_query($con, $sql3);
								if(mysqli_num_rows($result3) > 0)
								{
									while($row3 = mysqli_fetch_assoc($result3))
									{
										$sname=$row3['sname'];
										$fname=$row3['fname'];
										$sbrn= $row3['sbrn'];
										$branch= $row3['branch'];
										$phone= $row3['phone'];
										$dob= $row3['dob'];

										$sql1="INSERT INTO student(uname, pass)
										values('$sbrn', '$sname')";

										$result=mysqli_query($con, $sql1);
										if($result==true)
										{
											echo "Student Registered & Id Password Generated Successfully";
										}

									}
								}
						}

				$sql2="DELETE FROM i_students WHERE id='$id'";

				mysqli_query($con, $sql2);
		

          mysqli_close($con);


?>
