<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>All Teachers</title>
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
    <h1 class="heading" style="margin:50px 0 70px 60px ;">List Of Registered Teachers :</h1>

    <?php

      include "connection.php";


      
        $sql = "SELECT * FROM teachers";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) 
        { 
          include "search_bar.php";

            ?>
          <table class="content-table" id="myTable">
            <thead>
          <tr>
          <th>Name</th>
          <th>Branch</th>
          <th>Designation</th>
          <th>Phone no.</th>
          </thead>

          </tr>

            <?php

          // output data of each row
          while($row = mysqli_fetch_assoc($result))
         
         {
          
          echo "<tr>";
          echo "<td>".$row['tname']."</td>";
          echo "<td>".$row['branch']."</td>";
          echo "<td>".$row['designation']."</td>";
          echo "<td>".$row['phone']."</td>";
          echo "</tr>";       
            
          }
        } 
        else 
        {
            echo "<h1 style='margin: 100px 0 0 400px'>"."<strong>Empty! </strong>No Registered Teacher Found Please Register Teacher First."."</h1>". mysqli_error($con);
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
          td = tr[i].getElementsByTagName("td")[0];
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