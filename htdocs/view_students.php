<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>All Student</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


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
    <h1 class="heading" style="margin:50px 0 70px 60px ;">List Of Registered Students :</h1>

    <?php

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
          <!--<th>Sr. No. </th>-->
          <th>ID</th>
          <th>Student Name</th>
          <th>Father Name</th>
          <th>SBRN</th>
          <th>Branch</th>
          <th>Phone No.</th>
          <th>Date of Birth</th>
          </thead>

          </tr>

            <?php
            //$i=1;
          // output data of each row
          while($row = mysqli_fetch_assoc($result))
         
         {
          
          echo "<tr>";
          //echo "<td>".$i."</td>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['sname']."</td>";
          echo "<td>".$row['fname']."</td>";
          echo "<td>".$row['sbrn']."</td>";
          echo "<td>".$row['branch']."</td>";
          echo "<td>".$row['phone']."</td>";
          echo "<td>".$row['dob']."</td>";
          echo "</tr>"; 
          //$i++; 
            
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