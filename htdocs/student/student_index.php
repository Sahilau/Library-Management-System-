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

  <style>
  html, body { 
  background: url(img3.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


    .button
    {
      text-decoration: none;
      font-size: 23px;
      padding: 10px 20px 10px 20px;
      background-color: black;
      color: white;
      border: 2px solid black;
      border-radius: 5px;
        margin: 250px 500px 100px 750px;
        text-align: center;
    }

    .button:hover
    {
      background-color: white;
      color: black;
    }

    h1
    {
      font-size: 60px;
      margin: 150px 500px 0 400px;
      text-align: center;
    }


    h2
    {
      font-size: 40px;
      margin: 70px 400px 50px 300px;
      text-align: center;
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
  ?>

  <div class="main-content" style="padding: 100px 0 0 200px;">
    <h1 class="heading" class="heading">Welcome To Library</h1>
    <h2>Nothing is pleasanter than exploring a library </h2>
    <a href="all_books.php" class="button">Explore Now <i class="fas fa-arrow-circle-right"></i></a>



 
</div>
</body>
</html>