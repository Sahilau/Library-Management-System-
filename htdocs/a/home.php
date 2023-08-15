<!DOCTYPE html>
<html lang="en">
<head>
  <title> Home </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>


    body  
    {  
        background-image: url('img9.jpg');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        margin: 0px;  
        padding: 0px;  
        position: absolute;
        width: 100%;
    }  

      .text {
        
        background: grey;
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }

      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;  font-family: Arial, Helvetica, sans-serif;font-weight: bolder;">Library Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>

       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Students <span class="caret"></span></a>
        <ul class="dropdown-menu">

          <li><a href="register_student.php">Register Student</a></li>
          <li><a href="view_students.php">View Registered Students</a></li>
          <li><a href="change_student_detail.php">Change student details</a></li>
          <li><a href="delete_student.php"> Delete Student </a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Book Operations <span class="caret"></span></a>
        <ul class="dropdown-menu">

          <li><a href="add_book.php">Add Book</a></li>
          <li><a href="view_books.php">View Book</a></li>
          <li><a href="update_book.php">Update Book</a></li>
          <li><a href="delete_books.php">Delete Book</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Book Inquiry <span class="caret"> </span></a>
        <ul class="dropdown-menu">
          <li><a href="issue_book.php"> Issue Book </a></li>
          <li><a href="issued_book.php"> Issued Books </a></li>
        </ul>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="my_account.php"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      <li><a href="start_project.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
    </ul>
</div>
</nav>

<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <div class="numbertext">1 / 6</div>
            <img src="img1.jpg" style="width:100%; height:630px ;">
        <div class="text">Welcome to library</div>
      </div>

      <div class="item">
        <div class="numbertext">2 / 6</div>
            <img src="img2.jpg" style="width:100%; height:630px ;">
        <div class="text">Welcome to library</div>
      </div>

      <div class="item">
        <div class="numbertext">3 / 6</div>
            <img src="img3.jpg" style="width:100%; height:730px ;">
        <div class="text">Welcome to library</div>
      </div>

      <div class="item">
        <div class="numbertext">4 / 6</div>
            <img src="img4.jpg" style="width:100%; height:630px ;">
        <div class="text">Welcome to library</div>
      </div>

      <div class="item">
        <div class="numbertext">5 / 6</div>
            <img src="img5.jpg" style="width:100%; height:630px ;">
        <div class="text">Welcome to library</div>
      </div>

      <div class="item">
        <div class="numbertext">6 / 6</div>
            <img src="img5.jpg" style="width:100%; height:630px ;">
        <div class="text">Welcome to library</div>
      </div>

</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>


</body>
</html>
