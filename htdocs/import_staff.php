


<?php
//$uploadfile=$_FILES['uploadfile']['tmp_name'];

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load("C:\Users\Sahil\Desktop\Book1.xlsx");
foreach($objExcel->getWorksheetIterator() as $worksheet)
{
  $highestrow=$worksheet->getHighestRow();

  for($row=2;$row<=$highestrow;$row++)
  {
    
    $sname=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
    $fname=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

    $branch=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
    $phone=$worksheet->getCellByColumnAndRow(3,$row)->getValue();
    

    if (isset($_POST['submit']))
    {
        include "connection.php";

        $sql="INSERT INTO `i_students`( sname, fname, branch, phone) VALUES ( '$sname','$fname', '$branch', '$phone')";

        $result=mysqli_query($con, $sql);

        if ($result)
        {
            echo "<script> alert('Data imported successfully.') </script>";
        }

        else
        {
            echo "Unable to import data: ".mysqli_error($con);
        }
    }
     
  }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Import Staff</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">

    <?php include "links.php"; ?>
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



        <form action="#" method="POST">
          
          <input type="file" name="file"><br><br>
          <input type="submit" name="submit" value="Import New Students"> <br><br><br>

        </form>

        <?php



        include "connection.php";


        
          $sql = "SELECT * FROM teachers";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {
            echo '
            <div style="margin-bottom: 5%; "> 
                <h1>List of all imported students</h1>
            </div>';
            echo "<table border='2' cellspacing='7'>";
            echo "<tr>";
            echo "<td>"."ID"."</td>";
            echo "<td>"."Teacher Name"."</td>";
            echo "<td>"."Branch"."</td>";
            echo "<td>"."Designation"."</td>";
            echo "<td>"."Phone no."."</td>";
            echo "<td colspan='2'>"."<center>"."Operation"."</center>"."</td>";
            echo "</tr>";

              
            // output data of each row
            while($row = mysqli_fetch_assoc($result))
           
           {
            
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['tname']."</td>";
            echo "<td>".$row['branch']."</td>";
            echo "<td>".$row['designation']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>"."<a href='register_button.php?id=$row[id]& sname=$row[sname]& fname=$row[fname]& branch=$row[branch]& phone=$row[phone]& dob=$row[dob] '>".'Register'."</a>"."</td>";  
            echo "<td>". "<a href=print_button.php> Print Info </a>"."</td>" ;
            echo "</tr>";       
            
            }
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
		
