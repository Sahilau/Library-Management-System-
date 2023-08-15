<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Student </title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style type="text/css">
 
    .delete
  {
  background-color: #ffffcc;
  border: 1px solid black;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  font-weight: bold;
  color: black;
  top: 10px;
  }

  .sucess_msg
{
  background-color: SpringGreen;
  padding: 10px;
  font-size: 18px;
  margin: 0 0 50px 50px;
  width: 84%;
  border-radius: 5px;
}

.warn_msg
{
  background-color: orangered;
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
  if ($_GET['sucess_msg'])
  {  
    echo "<p class= 'sucess_msg'>". $_GET['sucess_msg']. "</p>";
  }
  if ($_GET['warn_msg'])
  {  
    echo "<p class= 'warn_msg'>". $_GET['warn_msg']. "</p>";
  }

    echo "<h1 class='heading' style='margin:50px 0 70px 60px ;'>List Of Registered Students :</h1>";


      include "connection.php";

        $sql = "SELECT * FROM lib_students";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) 
        {   
          include "search_bar.php";

          ?>
          <table class="content-table" id="myTable">
            <thead>
          <tr>
          <th>ID</th>
          <th>Student Name</th>
          <th>Father Name</th>
          <th>SBRN</th>
          <th>Branch</th>
          <th>Phone No.</th>
          <th>Date of Birth</th>
          <th>Operation</th>
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
          echo "<td>".$row['phone']."</td>";
          echo "<td>".$row['dob']."</td>";
          echo "<td>"."<a class='delete' href='update_student_button.php?id=$row[id]& sname=$row[sname]& fname=$row[fname]& sbrn=$row[sbrn]& branch=$row[branch]& phone=$row[phone]& dob=$row[dob] '>".'Edit/Update'."</a>"."</td>";

          echo "</tr>"; 
              
            
          }
            echo "</table>";  
        } 
        else 
        {
            echo "<h1 style='margin: 100px 0 0 400px'>"."<strong>Empty! </strong>No Registered Student Found Please Register Student First."."</h1>". mysqli_error($con);
        }

        mysqli_close($con);
      

    ?>

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
</body>
</html>