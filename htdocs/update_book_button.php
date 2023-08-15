<!DOCTYPE html> 
<html lang="en">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Book</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

body
{
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 50px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  margin: 100px 0 0 50px;

}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input, 
.user-details .input-box select{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
</style>

</head>

<body>

   <?php
   error_reporting(0);

  session_start();


  include "navbar.php";
  
  echo "<div class='main-content' style='padding: 100px 0 0 200px;'>";
  echo "<h1 class='heading' style='margin:50px 0 70px 60px ;'>List Of Available Books</h1>";
  
    $id= $_GET['id'];
    $title= $_GET['title'];
    $writer= $_GET['writer'];
    $publisher= $_GET['publisher'];
    $price= $_GET['price'];
    $available= $_GET['available'];
    $total= $_GET['total'];
    ?>


     <div class="container">
    <div class="title">Enter Updated Book Details :</div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Book Title :</span>
            <input type="text" name="title" placeholder="Enter Book title" value="<?php echo $title ; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Book Writer :</span>
            <input type="text" name="writer" placeholder="Enter Book writer" value="<?php echo $writer ; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Book Publisher :</span>
            <input type="text" name="publisher" placeholder="Enter Publisher Name" value="<?php echo $publisher ; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Price :</span>
            <input type="number" name="price" placeholder="Enter Price" value="<?php echo $price ; ?>" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" name="submit" value="Update Book">
        </div>
      </form>
    </div>
  </div>



    <?php

    if (isset ($_POST['submit']))
    {
      $updated_title= $_POST['title'];
      $updated_writer= $_POST['writer'];
      $updated_publisher= $_POST['publisher'];
      $updated_price= $_POST['price'];
      $updated_available= $_POST['available'];
      $updated_total= $_POST['total'];

      include "connection.php";

   
          if($updated_available<=$updated_total AND ctype_alpha($updated_writer) AND ctype_alpha($updated_publisher))
          {
              $sql="UPDATE allbooks SET title='$updated_title', writer='$updated_writer', publisher='$updated_publisher', price='$updated_price', available='$updated_available', total='$updated_total' WHERE id='$id'";

              $result=mysqli_query($con, $sql);
              
              $sucess_msg= "Book Details Updated<strong> Successfully!!</strong>";
          }
          else
          {
            $warn_msg="<strong>Warning!!</strong> Incorrect Book Details.";               
          }
          echo " <script> window.location.href='update_book.php? sucess_msg=$sucess_msg & warn_msg=$warn_msg'; </script>";

    }
    
    ?>

 
</div>
</body>
</html>