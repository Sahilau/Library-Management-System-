<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Cart</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <style type="text/css">
    .delete-item 
  {
  background-color: red;
  padding: 10px 15px 10px 15px;
  text-decoration: none;
  font-weight: bold;
  color: white;
  top: 10px;
  }

   .place-order
  {
  background-color: #1ac6ff;
  padding: 10px 15px 10px 15px;
  text-decoration: none;
  font-weight: bold;
  color: white;
  margin: 10px 0 10px 50px;
  top: 10px;
  }
  </style>



</head>
<body>
  <?php include "navbar.php"; ?>
<div class="main-content" style="padding: 100px 0 0 200px;">
  <h1 class="heading" style="margin:50px 0 70px 700px ;">My Cart</h1>

  <?php
   session_start();

  $sbrn=$_SESSION['uname'];
include "connection.php"; 
  error_reporting(0);

    if($_GET['delete_success']) 
      {
        echo "<p class='msg'>".$_GET['delete_success']."</p>";
      }
      
        $sql1 = "SELECT * FROM my_cart WHERE s_sbrn='$sbrn'";
        $result1 = mysqli_query($con, $sql1);

        if (mysqli_num_rows($result1) > 0) 
        {
              ?>

              <table class="content-table" id="myTable">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Writer</th>
                  <th>Publisher</th>
                  <th>Price</th>
                  <th>Availability</th>
                  <th colspan="2" style="margin-left: 100px;"><center>Operation</center></th>
                </thead>
                </tr>

                <?php

           while($row1 = mysqli_fetch_assoc($result1))           
           {
              $item_id= $row1['item_id'];
              $book_id= $row1['book_id'];

              $sql2 = "SELECT * FROM allbooks WHERE id='$book_id'";
              $result2 = mysqli_query($con, $sql2);

              if (mysqli_num_rows($result2) > 0) 
              {

                  while($row2 = mysqli_fetch_assoc($result2))
               
                  {
                      if ($row2['available']>0)
                      {
                        $available= "Available";
                      }
                      else
                      {
                        $available= "Out of Stock";
                      }

                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td>".$row2['title']."</td>";
                        echo "<td>".$row2['writer']."</td>";
                        echo "<td>".$row2['publisher']."</td>";
                        echo "<td>".$row2['price']."</td>";
                        echo "<td>".$available."</td>";
                        echo "<td>";
                      if ($available=="Available")
                      {
                        echo "<a class='place-order' href= 'place_order.php? id=$row2[id]& title=$row2[title]& writer=$row2[writer]& publisher=$row2[publisher]& price=$row2[price]& availablity=$available'>Reserve Boook</a>";
                      }
                      else
                      {
                        echo "Out of Stock";
                      }
                        echo "</td>";
                        echo "<td> <a class='delete-item' href= 'delete_cart_item.php?item_id=$item_id'>Delete From Cart </a></td>";
                        echo "</tr>";
                  }
              }
            }
          }


          else 
          {
            echo "<h1 style='margin: 100px 0 0 450px'>"."<strong>Sorry! </strong>You Didn't Have Any Items In Cart"."</h1>". mysqli_error($con);
          }

          echo "</tbody>";
          echo "</table>";
              
        
        mysqli_close($con);
      

    ?>

</thead>
</table>

</body>
</html>