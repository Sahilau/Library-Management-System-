<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Pending Books</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style type="text/css">
    .cancelorder
  {
  background-color: red;
  padding: 10px 15px 10px 15px;
  text-decoration: none;
  font-weight: bold;
  color: white;
  margin: 10px 0 10px 0;
  top: 10px;
  }
  </style>


</head>
<body>
  <?php include "navbar.php"; ?>
  <div class="main-content" style="padding: 100px 0 0 200px;">
  <h1 class="heading" style="margin:50px 0 70px 600px ;">My Pending Books</h1>
  


  <?php
  session_start();

  $sbrn=$_SESSION['uname'];
error_reporting(0);

      include "connection.php";

                if ($_GET['cancel_success']) 
                  {
                    echo "<p class='msg'>".$_GET['cancel_success']."</p>";
                  }
                if ($_GET['success_msg']) 
                  {
                    echo "<p class='msg'>".$_GET['success_msg']."</p>";                  
                  }

                if ($_GET['error_msg']) 
                  {
                    echo "<p class='msg'>".$_GET['error_msg']."</p>"; 
                  }

                if ($_GET['exist_msg']) 
                  {
                    echo "<p class='msg'>".$_GET['exist_msg']."</p>"; 
                  }
              ?>


          <?php     
        
        $sql = "SELECT * FROM my_orders WHERE s_sbrn='$sbrn' AND order_status=0 ";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) 
        {
          ?>
          <table class="content-table" id="myTable">
            <thead>
            <tr>
              <th>Title</th>
              <th>Writer</th>
              <th>Publisher</th>
              <th>Price</th>
              <th>Ordered On</th> 
              <th>Operation</th>    

            </thead>
            </tr>

              <?php
          
          // Get book id
        while($row = mysqli_fetch_assoc($result))        
        {
          $order_id=$row['order_id'];
          $book_id=$row['book_id'];
          $ordered_on=$row['ordered_on'];
          

          $sql1 = "SELECT * FROM allbooks WHERE id='$book_id' ";
          $result1 = mysqli_query($con, $sql1);

          if (mysqli_num_rows($result1) > 0) 
            {
              while($row1 = mysqli_fetch_assoc($result1))        
            {
            
        
              echo "<tbody>";
              echo "<tr>";
              echo "<td>".$row1['title']."</td>";
              echo "<td>".$row1['writer']."</td>";
              echo "<td>".$row1['publisher']."</td>";
              echo "<td>".$row1['price']."</td>";
              echo "<td>".$ordered_on."</td>";
              echo "<td>";

                echo "<a class='cancelorder' href='cancel_order.php? order_id=$order_id & book_id=$book_id'>Cancel Order </a>";
              echo "</td>";
              echo "</tr>";             
              }
            
          }
            
        } 
        echo "</tbody>";
        echo "</table>";  
      }
      else 
      {
        echo "<h1 style='margin: 100px 0 0 450px'>"."<strong>Sorry! </strong>You Didn't Have Any Pending Book Application."."</h1>". mysqli_error($con);
      }

      mysqli_close($con);
      

    ?>


</thead>
</table>

</body>
</html>