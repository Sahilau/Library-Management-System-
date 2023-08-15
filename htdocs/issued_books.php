<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Returned Books</title>
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

  if (!isset($_SESSION['uname']))
  {
    header("Location: admin_login.php");

  }

  include "navbar.php";


  echo "<div class='main-content' style='padding: 100px 0 0 200px;'>";
  if ($_GET['msg'])
  {
    echo "<p class= 'msg'>". $_GET['msg']. "</p>";
  }

    echo "<h1 class='heading' style='margin:50px 0 70px 60px ;'>Books Returned By Students :</h1>";

      include "connection.php";


        
      
        $sql = "SELECT * FROM issued_books WHERE return_flag=1";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) 
        {
          echo "
          <table class='content-table' id='myTable' >
            <thead>
          <tr>
          <th>Book Title</th>
          <th>Book Writer</th>
          <th>Book Publisher</th>
          <th>Book Price</th>
          <th>Student Name</th>
          <th>Father Name</th>
          <th>SBRN</th>
          <th>Branch</th>
          <th>Issued Date</th>
          <th>Issued For(Days)</th>
          <th>Return Date</th>

          </thead>
          </tr>

        ";

            // get student and book id
            while($row = mysqli_fetch_assoc($result))
         
          {
            $issued_id=$row['issued_id'];
            $book_id=$row['book_id'];
            $student_id=$row['student_id'];
            $issued_for=$row['issued_for'];
            $issued_on=$row['issued_on'];
            $return_date=$row['return_date'];

            //getting book data from book id
            $sql1 = "SELECT * FROM allbooks WHERE id='$book_id'";
            $result1 = mysqli_query($con, $sql1);

            if (mysqli_num_rows($result1) > 0) 
            {

                // getting book details
                while($row1 = mysqli_fetch_assoc($result1))            
              {
                echo "<tbody>";
                echo "<tr>";
                echo "<td>".$row1['title']."</td>";
                echo "<td>".$row1['writer']."</td>";
                echo "<td>".$row1['publisher']."</td>";
                echo "<td>".$row1['price']."</td>";
                }
            }

            //getting student data from student id
            $sql2 = "SELECT * FROM lib_students WHERE id='$student_id'";
            $result2 = mysqli_query($con, $sql2);

            if (mysqli_num_rows($result2) > 0) 
            {

                // getting book details
                while($row2 = mysqli_fetch_assoc($result2))            
              {               
                echo "<td>".$row2['sname']."</td>";
                echo "<td>".$row2['fname']."</td>";
                echo "<td>".$row2['sbrn']."</td>";
                echo "<td>".$row2['branch']."</td>";
                echo "<td>".$issued_on."</td>";
                echo "<td>".$issued_for."&nbsp; Days"."</td>";

                //Checking return date with current date

                echo "<td>".$return_date."</td>";
                echo "</tr>";
                }

            }
          }
        } 

        else 
        {       
            echo "<h1 style='margin: 100px 0 0 450px'>"."<strong>Empty! </strong>No Returned Book Found."."</h1>". mysqli_error($con);
        }

        mysqli_close($con);
      

    ?>

  </tbody>
</table>
 
</div>
</body>
</html>