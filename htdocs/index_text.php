<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home Page</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


</head>

<body>

	<div class="main-content" style="padding: 100px 0 0 200px;">
  	<h1 class="heading" style="margin:50px 0 70px 60px ;">List Of Available Books</h1>

	<?php

	session_start();

	if (!isset($_SESSION['uname']))
	{
		header("Location: admin_login.php");

	}
	 include "side_bar.php"; ?>

        <!--<div class="main-content-info container" style="margin-left: 20%;">
            <div class="card">
                <h2 class="cus-num cus-h">
                	<?php
						include "connection.php";

						//Displaying total books
						$sql1="select * from allBooks";
						if ($result1=mysqli_query($con, $sql1)) 
						{
							$total_books=mysqli_num_rows($result1);
							echo $total_books;
						}
						mysqli_close($con);
					?>
                </h2>
                <p><br>Total Books<br></p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-pro">
                	<?php
						include "connection.php";

						//Displaying total books
						$sql2 = "SELECT * FROM lib_students";
						$result2 = mysqli_query($con, $sql2);
						if ($result2=mysqli_query($con, $sql2)) 
						{
							$reg_students=mysqli_num_rows($result2);
							echo $reg_students;
						}
						mysqli_close($con);
					?>
                </h2>
                <p>Total Registered Students<br></p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-ord">
                	<?php
						include "connection.php";

						//Displaying total books
						$sql3 = "SELECT * FROM teachers";
						$result3 = mysqli_query($con, $sql3);
						if ($result3=mysqli_query($con, $sql3)) 
						{
							$reg_teachers=mysqli_num_rows($result3);
							echo $reg_teachers;
						}

						mysqli_close($con);
					?>
                </h2>
                <p>Total Registered Teachers</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-inc">
                	<?php
						include "connection.php";

						//Number of issued books
						$sql4 = "SELECT * FROM issued_books";
						$result4 = mysqli_query($con, $sql4);
						if ($result4=mysqli_query($con, $sql4)) 
						{
							$issued_books=mysqli_num_rows($result4);
							echo $issued_books;
						}

						mysqli_close($con);
					?>
                </h2>
                <p>Total Books Issued to Students</p>
            </div>
               <div class="card">
                <h2 class="cus-num cus-inc">
                	<?php
						include "connection.php";

						//Number of issued books
						$sql5 = "SELECT * FROM issued_teacher_books";
						$result5 = mysqli_query($con, $sql5);
						if ($result5=mysqli_query($con, $sql5)) 
						{
							$issued_teacher_books=mysqli_num_rows($result5);
							echo $issued_teacher_books;
						}

						mysqli_close($con);
					?>
                </h2>
                <p>Total Books Issued to Teachers</p>
            </div>
            
            
            <div class="clear"></div>
        </div>
            <div class="pro-table">

                    <div class="rec-pro-h">
                        <h2>Recent Activities</h2>
                    </div>
                    <div class="see-all">
                        <button>See all</button>
                    </div>
                    <div class="clear"></div>
                
                
                </table>
            </div>
            
    </Section>
    <div class="clear"></div>-->
</body>

</html>
