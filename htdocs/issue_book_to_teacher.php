<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Issue Book</title>
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
error_reporting(0); 
include "navbar.php";
echo "<div class='main-content' style='padding: 100px 0 0 200px;'>";
if ($_GET['msg'])
{
 echo "<p class= 'msg'>". $_GET['msg']. "</p>";
}
echo "<h1 class='heading' style='margin:50px 0 70px 60px ;'>List Of Registered Teachers :</h1>";
      include "connection.php"; 

       

        $sql = "SELECT * FROM teachers";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) 
        {
          echo "
          <table class='content-table' id='myTable'>
              <thead>
              <tr>
              <th>ID</th>
              <th>Teacher Name</th>
              <th>Branch</th>
              <th>Designation</th>
              <th>Phone No.</th>
              <th>Issue For(Days)</th>
              <th>Operation</th>
              </tr>
              </thead>
              ";
              
              // output data of each row
              while($row = mysqli_fetch_assoc($result))          
             {
                $t_id=$row['id'];
                $t_tname=$row['tname'];
                $t_branch=$row['branch'];
                $t_designation=$row['designation'];
                $t_phone=$row['phone'];

                echo "
                <tbody>
                <tr>
                  <td>$t_id </td>
                  <td>$t_tname </td>
                  <td>$t_branch </td>
                  <td>$t_designation </td>
                  <td>$t_phone </td>
                  
                  <td>
                  <form method='POST' action='issue_teacher_button.php ?t_id=$t_id & b_id=$_GET[b_id]'>
                      <input type='number' name='issued_for' placeholder='Enter Days' required></td>
                      <td><input type='submit' name='submit' value='Issue'>
                    </form>
                  </td>
                </tr>
              </tbody>";
              

              }
            echo "</table>";
  
        } 
        else 
        {
            echo "<h1 style='margin: 100px 0 0 450px'>"."<strong>Empty! </strong>No Registered Teachers Found."."</h1>". mysqli_error($con);
        }
        mysqli_close($con);

?>



