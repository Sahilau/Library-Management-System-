<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Profile</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


   <style type="text/css">

    .edit
  {
  background-color: #008CBA;
  border: 1px solid black;
  padding: 10px 30px 10px 30px;
  text-decoration: none;
  font-weight: bold;
  color: white;
  top: 10px;
  }

.avatar-container {
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

   <?php

  session_start();

  if (!isset($_SESSION['uname']))
  {
    header("Location: admin_login.php");

  }

  include "navbar.php";

  echo "<div class='main-content' style='padding: 100px;'>";


          include "connection.php";
          $uname=$_SESSION['uname'];
          $sql="SELECT * FROM admin WHERE uname='admin'";
          $result=mysqli_query($con,$sql);

          if (mysqli_num_rows($result))
          {          
              // output data of each row
            while($row = mysqli_fetch_assoc($result))            
             {
               $id=$row['id'];
               $uname=$row['uname'];
               $pass=$row['pass'];
               $created_on=$row['created_on'];
             }
          } 
          else 
          {
            mysqli_error($con);
          }

        mysqli_close($con);
      

    ?>


       <div class="avatar-container">
                        <img src="avatar.jpg" alt="Admin" class="rounded-circle" width="150" style="    background-color: darkslategrey;">

                        <h2><?php echo $uname; ?></h2>
                        <h3 class="text-secondary mb-1">Librarian Of Govt. Polytechnic Hamirpur</h3><br>
                        <a class="edit" href="update_profile.php">Edit/Change</a>
        </div>
<hr>

                      <span class="mb-0">Identity Number :</span>  <span class="variable"><?php echo $id; ?></span>
                      <hr>
                      <span class="mb-0">Username :</span><span class="variable"><?php echo $uname; ?></span>
                      <hr>
                      <span class="mb-0">Password :</span><span class="variable"> <?php echo $pass; ?></span>
                      <hr>
                      <span class="mb-0">Registered On :</span><span class="variable"><?php echo $created_on; ?></span>
                      <hr>

            <!--
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
                      <span class="mb-0">Username :</span><span class="variable"><?php echo $uname; ?></span>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <span class="mb-0">Password :</span><span class="variable"> <?php echo $pass; ?></span>
                    </div>
                  </div>
                  <hr>

                   <div class="row">
                    <div class="col-sm-3">
                      <span class="mb-0">Registered On :</span><span class="variable"><?php echo $created_on; ?></span>
                    </div>
                  </div>
                  <hr>
                  
                </div>
              </div>-->
            </div>

 
</div>
</body>
</html>