<!DOCTYPE html>
<html lang="en">
<head>
  <title> Home </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;  font-family: Arial, Helvetica, sans-serif;font-weight: bolder;">Library Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>

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
</body>
</html>
