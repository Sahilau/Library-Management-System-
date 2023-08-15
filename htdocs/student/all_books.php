<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>all Books</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


</head>
<body>
 <?php include "navbar.php"; ?>
<div class="main-content" style="padding: 100px 0 0 200px;">
  <h1 class="heading" style="margin:50px 0 70px 60px ;">List Of Available Books</h1>
  
  <?php


error_reporting(0);

      include "connection.php";

      if ($_GET['success_msg']) 
          {
            $success_msg=$_GET['success_msg'];
          }

      if ($_GET['error_msg']) 
          {
            $error_msg=$_GET['error_msg'];
          }

      if ($_GET['exist_msg']) 
          {
            $exist_msg=$_GET['exist_msg'];
          }
      
        $sql = "SELECT * FROM allbooks";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) 
        {
          if ($success_msg) 
          {
            echo "<p class='msg'>".$success_msg."</p>";
          }
          if ($error_msg) 
          {
            echo "<p class='msg' style='background-color: lightred';>".$error_msg."</p>";
          }
          if ($exist_msg) 
          {
            echo "<p class='msg' style='background-color: lightyellow';>".$exist_msg."</p>";
          }


          ?>
         
            <?php include "search_bar.php"; ?>

            <table class="content-table" id="myTable">
            <thead>
              <tr>
                <th>Title</th>
                <th>Writer</th>
                <th>Publisher</th>
                <th>Price</th>
                <th>Availability</th>
                <th>Operation</th>
              </tr>
            </thead>
            

            <?php
          // output data of each row
          while($row = mysqli_fetch_assoc($result))
         
         {
                if ($row['available']>0)
                  {
                    $available= "Available";
                  }
                else
                  {
                    $available= "Out of Stock";
                  }

                echo "<tbody>";
                echo "<tr>";
                echo "<td>".$row['title']."</td>";
                echo "<td>".$row['writer']."</td>";
                echo "<td>".$row['publisher']."</td>";
                echo "<td>".$row['price']."</td>";
                echo "<td>".$available."</td>";
                echo "<td>"."<a  class='addtocart-link' href= 'add-to-cart.php? id=$row[id]& title=$row[title]& writer=$row[writer]& publisher=$row[publisher]& price=$row[price]& availablity=$available'><i class='fas fa-cart-plus'></i> &nbsp;Add To Cart </a>"."</td>";
                echo "</tr>";
                echo "</tbody>";
              
            
          }
            echo "</table>";  
        } 
        else 
        {
            echo "<h1 style='margin: 100px 0 0 600px'>"."<strong>Empty! </strong>No Book Found."."</h1>". mysqli_error($con);
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

</thead>
</table>
</div>
</body>
</html>