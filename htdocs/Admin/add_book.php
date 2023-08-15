<?php
	if (isset($_POST['submit']))
	{
		
		include "connection.php";

		$tname= $_POST['tname'];
		$branch= $_POST['branch'];
		$designation= $_POST['designation'];
		$phone= $_POST['phone'];




		$sql="INSERT INTO teachers(tname, branch, designation, phone)
				values('$tname','$branch','$designation', '$phone')";

				$result=mysqli_query($con, $sql);
				if($result==true)
				{
					echo "<script> alert('Added Successfully'); </script>";

				}
				else
				{
					echo "ERROR :".mysqli_error($con);
				}
	}

?>









<!DOCTYPE html>
<html>

<head>
    <title>Add Teacher</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">


</head>

<body>
    <?php include "side_bar.php"; ?>

    <Section id="main-content">
        <header>
            <div class="header-left">
                <h2 class="toggle-btn">
                    <i class="fa"></i> Dashboard
                </h2>
            </div>
            <div class="header-left header-serach">
                <div class="serach-par">
                    <input class="search" type="text" placeholder="Search Here...">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="header-left header-profile">
                <img src="images/user.png" class="img-responsive" />
                <h3>My Profile</h3>
                <p>Admin</p>
            </div>
            <div class="clear"></div>
        </header>
        <div class="clear"></div>
        <div class="main-content" style= "margin-top: 200px; margin-left: 30px;" >

        <form method="POST">
		<label for="tname">Name :</label> 
		<input type="text" name="tname" id="tname" required><br><br>

		<label for="branch">Branch :</label> 
		<select id="branch" name="branch" required>
			
			<option >Computer</option>
			<option >IT</option>
			<option >Mechanical</option>
			<option >Electrical</option>
			<option >Civil</option>
		</select><br><br>

		<label for="designation">Designation :</label> 
		<select id="designation" name="designation" required>
			
			<option >HOD</option>
			<option >Senior Lecturer</option>
			<option >Lecturer</option>
		</select><br><br>


		<label for="phone">Phone :</label> 
		<input type="text" name="phone" id="phone" required><br><br><br>

		<input type="submit" name="submit" value="Add Teacher">
	</form>

    </div>
</Section>
</body>
</html>