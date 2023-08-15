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
<style type="text/css">
 
    .delete
  {
  background-color: #00cccc;
  border: 1px solid black;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  font-weight: bold;
  color: white;
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

  if (!isset($_SESSION['uname']))
  {
    header("Location: admin_login.php");

  }

  include "navbar.php";
  ?>

  <div class="main-content" style="padding: 100px 0 0 200px;">
    <h1 class="heading" style="margin:50px 0 70px 60px ;">List Of Available Books :</h1>



    <?php




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
          <th>Operation</th>
          </tr>
        </thead>

            <?php

            
          // output data of each row
          while($row = mysqli_fetch_assoc($result))
         
         {
          
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['title']."</td>";
          echo "<td>".$row['writer']."</td>";
          echo "<td>".$row['publisher']."</td>";
          echo "<td>".$row['price']."</td>";
          echo "<td>"."<a class='delete' href='issue_book_to_teacher.php?b_id=$row[id]& b_title=$row[title]& b_writer=$row[writer]& b_publisher=$row[publisher]& b_price=$row[price]& b_available=$row[available]'>".'Issue'."</a>"."</td>";
          echo "</tr>"; 
              
            
          }
            echo "</table>";  
        } 
        else 
        {
            echo "<h1 style='margin: 100px 0 0 450px'>"."<strong>Empty! </strong>No Book Found Please Add Book First."."</h1>". mysqli_error($con);
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