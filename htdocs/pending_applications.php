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
<style type="text/css">
 
    .delete
  {
  background-color: aquamarine;
  border: 1px solid black;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  font-weight: bold;
  color: black;
  top: 10px;
  }
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
  error_reporting(0);

  if (!isset($_SESSION['uname']))
  {
    header("Location: admin_login.php");

  }

  include "navbar.php";


  echo "<div class='main-content' style='padding: 100px 0 0 200px;'>";
  if ($_GET['msg'])
  {
    echo "<p class= 'msg'>". $_GET['msg']. "</p>";
  }

    echo "<h1 class='heading' style='margin:50px 0 70px 60px ;'>Applications Received : Pending</h1>";

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
          echo "<td> <a class='delete' href='approve_button.php? app_id=$row[app_id] & s_sbrn=$row[s_sbrn] & b_id=$row[book_id]'>Approve Application</a> </td>";
          echo "</tr>";
          echo "</tbody>";
              
            
          }
            echo "</table>";  
        } 
        else 
        {
            echo "<h1 style='margin: 100px 0 0 450px'>"."<strong>Empty! </strong>No Pending Application"."</h1>". mysqli_error($con);
        }

        mysqli_close($con);
      

    ?>


 
</div>
</body>
</html>