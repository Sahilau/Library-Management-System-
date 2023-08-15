<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Applications</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <style>
     .msg
{
  background-color: SpringGreen;
  padding: 10px;
  font-size: 18px;
  margin: 0 0 50px 50px;
  width: 84%;
  border-radius: 5px;
}
  </style>


</head>

<body>

   <?php

  session_start();

  if (!isset($_SESSION['uname']))
  {
    header("Location: admin_login.php");

  }

  include "navbar.php";
  ?>

  <div class="main-content" style="padding: 100px 0 0 200px;">
    <h1 class="heading" style="margin:50px 0 70px 60px ;">Applications Received : </h1>

    <?php

      include "connection.php";


      
        $sql = "SELECT * FROM applications WHERE flag=0";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) 
        {

          ?>
          <table class="content-table" id="myTable">
            <thead>
          <tr>
          <th>Application ID</th>
          <th>Book ID</th>
          <th>Book Title</th>
          <th>Student Name</th>
          <th>Father Name</th>
          <th>SBRN</th>
          <th>Branch</th>
          <th>Phone</th>
          <th>Operation</th>
          </thead>
          </tr>

            <?php
          // output data of each row
          while($row = mysqli_fetch_assoc($result))
         
         {
          echo "<tbody>";
          echo "<tr>";
          echo "<td>".$row['app_id']."</td>";
          echo "<td>".$row['book_id']."</td>";
          echo "<td>".$row['book_title']."</td>";
          $s_id=$row['s_id'];
          echo "<td>".$row['s_name']."</td>";
          echo "<td>".$row['s_fname']."</td>";
          echo "<td>".$row['s_sbrn']."</td>";
          echo "<td>".$row['s_branch']."</td>";
          echo "<td>".$row['s_phone']."</td>";
          echo "<td> <a href='application_button.php? b_id=$row[book_id] & s_id= $s_id'>View ordered Book</a> </td>";
          echo "</tr>";
          echo "</tbody>";
              
            
          }
            echo "</table>";  
        } 
        else 
        {
            echo "<h1 style='margin: 100px 0 0 450px'>"."<strong>Empty! </strong>No Application Received"."</h1>". mysqli_error($con);
        }

        mysqli_close($con);
      

    ?>


 
</div>
</body>
</html>