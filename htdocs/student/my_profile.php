<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Profile</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <style type="text/css">


.avatar-container {
    background-color: #f2f2f2;
    text-align: center;
    padding: 2%;
    margin-bottom: 2%;
    width: 98%;
}

.table-container {
    background-color: #f2f2f2;
    padding: 2%;
    width: 98%;
}

.mb-0{
    font-size: 25px;
    font-weight: bold;

}

.row{
  margin-bottom: 10px;
}

.variable{
  font-size: 24px;
  margin-left: 50px;
}


    </style>

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
          <li><a href="my_approved_books.php">My Approved Books</a></li>
          <li><a href="my_pending_books.php">My Pending Books</a></li>
          <li><a href="my_cart.php">My Cart</a></li>
          <li style="margin-left: 395px;"><a href="my_profile.php"><i class="fas fa-user"></i> My Profile</i></a></li>
          <li><a href="logout.php">&nbsp; &nbsp;<i class="fas fa-sign-out-alt"></i> Logout </a>
          </li>
        </ul>
      </div>
    </div>  

   </nav>
  </div>


   <div class="profile-container" style="padding: 100px 0 0 20px;">

    <?php  
      SESSION_start();

          include "connection.php";
          $s_sbrn=$_SESSION['uname'];
          $sql="SELECT * FROM lib_students WHERE sbrn='$s_sbrn'";
          $result=mysqli_query($con,$sql);

          if (mysqli_num_rows($result))
          {          
              // output data of each row
            while($row = mysqli_fetch_assoc($result))            
             {
               $id=$row['id'];
               $sname=$row['sname'];
               $fname=$row['fname'];
               $sbrn=$row['sbrn'];
               $branch=$row['branch'];
               $phone=$row['phone'];
               $dob=$row['dob'];
               $reg_on=$row['reg_on'];
             }
          } 
          else 
          {
            mysqli_error($con);
          }

        mysqli_close($con);
      

    ?>


       <div class="avatar-container">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150" style="    background-color: darkslategrey;">

                        <h2><?php echo $sname; ?></h2>
                        <p class="text-secondary mb-1">Student Of <strong><?php echo $branch; ?></strong> Branch</p>
                        <!--<button class="btn btn-primary">Edit/Change</button>-->
        </div>
<hr>
            <div class="col-md-13">
              <div class="card mb-6">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <span class="mb-0">Identity Number :</span>  <span class="variable"><?php echo $id; ?></span>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <span class="mb-0">Student Name :</span><span class="variable"><?php echo $sname; ?></span>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <span class="mb-0">Father Name :</span><span class="variable"> <?php echo $fname; ?></span>
                    </div>
                  </div>
                  <hr>

                   <div class="row">
                    <div class="col-sm-3">
                      <span class="mb-0">SBRN :</span><span class="variable"><?php echo $_SESSION['uname']; ?></span>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <span class="mb-0">Branch :</span><span class="variable">  <?php echo $branch; ?></span>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <span class="mb-0">Phone Number :</span> <span class="variable"> <?php echo $phone; ?></span>
                    </div>
                  </div>
                 <hr>

                 <div class="row">
                   <div class="col-sm-3">
                      <span class="mb-0">Date Of Birth :</span> <span class="variable"> <?php echo $dob; ?></span>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <span class="mb-0">Registered On :</span><span class="variable"> <?php echo $reg_on; ?></span>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
</body>
</html>