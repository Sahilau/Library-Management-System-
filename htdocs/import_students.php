





<!DOCTYPE html> 
<html>

<head>
    <title>Import Students</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="home-style.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">

    <?php include "links.php"; ?>


</head>


<body>
   <?php include "side_bar.php"; ?>
   <div class="clear"></div>


   <div style="margin-left: 18%; margin-top:10%;">

        <?php



        include "connection.php";


        
          $sql = "SELECT * FROM i_students";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {
            
            ?>

                    <table class="table" id="myTable" style="width: 96%;">
                    <thead class="thead-dark">
                    <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Father Name</th>
                    <th>SBRN</th>
                    <th>Branch</th>
                    <th>Date of Birth</th>
                    <th>Phone No.</th>
                    
                    <th colspan='2'><center>Operation</center></th>
                    </thead>

                    </tr>
            <?php
            // output data of each row
            while($row = mysqli_fetch_assoc($result))
           
           {
            
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['sname']."</td>";
            echo "<td>".$row['fname']."</td>";
            echo "<td>".$row['sbrn']."</td>";
            echo "<td>".$row['branch']."</td>";
            echo "<td>".$row['dob']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>"."<a href='register_button.php?id=$row[id]& sname=$row[sname]& fname=$row[fname]& sbrn=$row[sbrn]& branch=$row[branch]& dob=$row[dob]& phone=$row[phone] '>".'Register'."</a>"."</td>";  
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

  <form method="POST" enctype="multipart/form-data">
          
          <input type="file" name="file"><br><br>
          <input type="submit" name="submit" value="Import New Students"> <br><br><br>

        </form>

        <?php
//$uploadfile=$_FILES['uploadfile']['tmp_name'];
if (isset($_POST['submit']))
    {       
        $file=$_FILES['file'];
    }

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';


$objExcel=PHPExcel_IOFactory::load($file['tmp_name']);
foreach($objExcel->getWorksheetIterator() as $worksheet)
{
  $highestrow=$worksheet->getHighestRow();

  for($row=2;$row<=$highestrow;$row++)
  {
    
    $sname=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
    $fname=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
    $sbrn=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
    $branch=$worksheet->getCellByColumnAndRow(3,$row)->getValue();
    $dob=$worksheet->getCellByColumnAndRow(4,$row)->getValue();
    $phone=$worksheet->getCellByColumnAndRow(5,$row)->getValue();
    

    if (isset($_POST['submit']))
    {
        include "connection.php";

        $sql="INSERT INTO `i_students`( sname, fname, sbrn, branch, dob, phone) VALUES ( '$sname','$fname', '$sbrn', '$branch', '$dob', '$phone')";

        $result=mysqli_query($con, $sql);

        
    }
     
  }
}



?>

           <div style="margin-bottom:2%;"> 
            <div style="margin-bottom: 4%; "> 
        <h1>List of all imported students</h1>
  </div>

   <?php include "search_bar.php"; ?>
</div>

         <script>
            function myFunction() {
              var input, filter, table, tr, td, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");
              for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                  txtValue = td.textContent || td.innerText;
                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }       
              }
            }
        </script>
      </div>
    </Section>

</body>
</html>