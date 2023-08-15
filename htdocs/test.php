<?php 
  session_start();

  if (!isset($_SESSION['uname']))
  {
    header("Location: admin_login.php");

  }
  include "navbar.php";
  include "connection.php";

        $sql = "SELECT * FROM allbooks";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) 
        {
           include "search_bar.php";

          ?>
          <table class="content-table" id="myTable">
          <thead>
          <tr>
          <th>Book ID</th>
          <th>Title</th>
          <th>Writer</th>
          <th>Publisher</th>
          <th>Price</th>
          <th>Available Books</th>
          <th>Total Quantity</th>
          </thead>
          </tr>
            <?php
          // output data of each row
          while($row = mysqli_fetch_assoc($result))         
         {
          echo "<tbody>";
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['title']."</td>";
          echo "<td>".$row['writer']."</td>";
          echo "<td>".$row['publisher']."</td>";
          echo "<td>".$row['price']."</td>";
          echo "<td>".$row['available']."</td>";
          echo "<td>".$row['total']."</td>";
          echo "</tr>";
          echo "</tbody>";           
          }
            echo "</table>";  
        } 
        else 
        {
            echo "<h1 style='margin: 100px 0 0 450px'>"."<strong>Empty! </strong>No Book Found Please Add Book First."."</h1>". mysqli_error($con);
        }
        mysqli_close($con);
?>