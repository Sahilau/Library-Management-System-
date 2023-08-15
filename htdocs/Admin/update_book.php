<!DOCTYPE html>
<html>

<head>
    <title>View Student</title>
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
                    <i class="fa fa-file"></i> Books
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


		<?php

			include "connection.php";


			
				$sql = "SELECT * FROM allbooks";
				$result = mysqli_query($con, $sql);

				if (mysqli_num_rows($result) > 0) 
				{
					echo "<table border='2'>";
				 	echo "<tr>";
				 	echo "<td>"."ID"."</td>";
				 	echo "<td>"."Student Name"."</td>";
				 	echo "<td>"."Father Name"."</td>";
				 	echo "<td>"."Phone No."."</td>";
				 	echo "<td>"."Date of Birth"."</td>";

				 	echo "</tr>";

				    
				  // output data of each row
				  while($row = mysqli_fetch_assoc($result))
				 
				 {
				 	
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['sname']."</td>";
					echo "<td>".$row['fname']."</td>";
					echo "<td>".$row['phone']."</td>";
					echo "<td>".$row['dob']."</td>";
					echo "</tr>";	
					    
				    
				  }
				  	echo "</table>";	
				} 
				else 
				{
				  echo "No record found". mysqli_error($con);
				}

				mysqli_close($con);
			

		?>

	</div>
</Section>



</body>
</html>