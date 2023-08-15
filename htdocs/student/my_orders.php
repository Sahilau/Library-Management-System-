<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home Page</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


</head>
<body>
  <div class="wrapper">
    <nav>       
      <div class="content">    
      <div class="logo"><a href="#"> <i class="fas fa-book-reader" style="color: #33ffad;"></i>&nbsp; &nbsp;BIBLIOTECA</a></div>
        <ul class="links">
          <li><a href="student_index.php">Home</a></li>
          <li><a href="all_books.php">Books</a></li>
          <li><a href="order_book.php">Order Book</a></li>
          <li><a href="my_orders.php">My Orders</a></li>
          <li><a href="my_approved_books.php">My Approved Books</a></li>
          <li><a href="my_cart.php">My Cart</a></li>
          <li style="margin-left: 500px;"><a href="my_profile.php"><i class="fas fa-user"></i> My Profile</i></a></li>
          <li><a href="logout.php">&nbsp; &nbsp;<i class="fas fa-sign-out-alt"></i> Logout </a>
          </li>
        </ul>
      </div>
    </div>       
   </nav>
  </div>
  <div class="main-content" style="padding: 100px 0 0 200px;">
  <h1 class="heading" style="margin:50px 0 70px 700px ;">My Orders</h1>
  


  <?php
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
        
        $sql = "SELECT * FROM my_orders";
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
              <th>Status</th>
              <th>Operation</th>    

            </thead>
            </tr>

              <?php
          
          // Get book id
        while($row = mysqli_fetch_assoc($result))        
        {
          $order_id=$row['order_id'];
          $book_id=$row['book_id'];
          $order_status=$row['order_status'];
          $ordered_on=$row['ordered_on'];
          

          $sql1 = "SELECT * FROM allbooks WHERE id='$book_id' ";
          $result1 = mysqli_query($con, $sql1);

          if (mysqli_num_rows($result1) > 0) 
            {
              while($row1 = mysqli_fetch_assoc($result1))        
            {
              if ($order_status==0)
                {
                  $status= "Pending";
                }
              else
                {
                  $status= "Approved";
                }
        
              echo "<tbody>";
              echo "<tr>";
              echo "<td>".$row1['title']."</td>";
              echo "<td>".$row1['writer']."</td>";
              echo "<td>".$row1['publisher']."</td>";
              echo "<td>".$row1['price']."</td>";
              echo "<td>".$ordered_on."</td>";
              echo "<td>".$status."</td>";
              echo "<td>";
              if ($status=="Pending")
              {
                echo "<a href= 'cancel_order.php? order_id=$order_id & book_id=$book_id'>Cancel Order </a>";
              }
              else
              {
                echo "Cancel Order";
              }
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
        echo "<h1 style='margin: 100px 0 0 450px'>"."<strong>Sorry! </strong>You Didn't Have Ordered Any Book"."</h1>". mysqli_error($con);
      }

      mysqli_close($con);
      

    ?>


</thead>
</table>

</body>
</html>