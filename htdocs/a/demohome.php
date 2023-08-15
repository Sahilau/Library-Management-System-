<?php
include "menu_bar.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Menu Bar
	</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
  * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
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

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

  body { 
  font-family: Helvetica, sans-serif; 
  padding: 5%; 
  text-align: center; 
  font-size: 50; 
  } 

  /* Styling the area of the slides */ 
  #slideshow { 
  overflow: hidden; 
  height: 510px; 
  width: 728px; 
  margin: 0 auto; 
  } 

  /* Style each of the sides 
  with a fixed width and height */ 
  .slide { 
  float: left; 
  height: 510px; 
  width: 728px; 
  } 

  /* Add animation to the slides */ 
  .slide-wrapper { 

  /* Calculate the total width on the 
  basis of number of slides */ 
  width: calc(728px * 4); 
    
  /* Specify the animation with the 
  duration and speed */ 
  animation: slide 10s ease infinite; 
  } 

  /* Set the background color 
  of each of the slides */ 
  .slide:nth-child(1) { 
  background: green; 
  } 

  .slide:nth-child(2) { 
  background: pink; 
  } 

  .slide:nth-child(3) { 
  background: red; 
  } 

  .slide:nth-child(4) { 
  background: yellow; 
  } 

  /* Define the animation 
  for the slideshow */ 
  @keyframes slide { 

  /* Calculate the margin-left for 
  each of the slides */ 
  20% { 
    margin-left: 0px; 
  } 

  40% { 
    margin-left: calc(-728px * 1); 
  } 

  60% { 
    margin-left: calc(-728px * 2); 
  } 

  80% { 
    margin-left: calc(-728px * 3); 
  } 
  } 

</style>

</head>
<body>
	<!--
	<div>Library Management System</div>
	<div><a href="home.php">Home</a></div>
	<div><a href="add_book.php">Add Book</a></div>
	<div><a href="update_button.php">Update Button</a></div>
	<div><a href="update_book.php">Update Book</a></div>
	<div><a href="delete_books.php">Delete Books</a></div>
	<div><a href="delete_button.php">Delete Button</a></div>
	<div><a href="view_books.php">View Books</a></div>
	<div><a href="issue_book.php">Issue Book</a></div>
	<div><a href="return_book.php">Return Book</a></div>
	<div><a href="log_out.php">Log Out</a></div>
-->



 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php" style="color:white;  font-family: Arial, Helvetica, sans-serif;font-weight: bolder;">Library Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="add_book">Add Book</a></li>
      <li><a href="update_book">Update Book</a></li>
      <li><a href="delete_books.php">Delete Book</a></li>
       <li><a href="update_books.php">Update Book</a></li>
        <li><a href="issue_book.php">Issue Book</a></li>
        <li><a href="return_book.php">Return Book</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
    </ul>
  </div>
</nav>

<!-- Define the slideshow container -->
<div id="slideshow"> 
  <div class="slide-wrapper"> 

  <!-- Define each of the slides 
    and write the content -->
  <div class="slide"> 
    <h1 class="slide-number"> 
    GeeksforGeeks 
    </h1> 
  </div> 
  <div class="slide"> 
    <h1 class="slide-number"> 
    A computer science portal 
    </h1> 
  </div> 
  <div class="slide"> 
    <h1 class="slide-number"> 
    This is an example of 
    </h1> 
  </div> 
  <div class="slide"> 
    <h1 class="slide-number"> 
    Slideshow with HTML and CSS only 
    </h1> 
  </div> 
  </div> 
</div> 
</body> 
</html>


  <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div>
    <div class="numbertext">1 / 5</div>
    <img src="img1.jpg" style="width:100%";>
    <div class="text">Welcome to Library</div>
  </div>

  <div>
    <div class="numbertext">2 / 5</div>
    <img src="img2.jpg" style="width:100%">
    <div class="text">Welcome to Library</div>
  </div>

  <div>
    <div class="numbertext">3 / 5</div>
    <img src="img3.jpg" style="width:100%">
    <div class="text">Welcome to Library</div>
  </div>

<div>
    <div class="numbertext">4 / 5</div>
    <img src="img4.jpg" style="width:100%">
    <div class="text">Welcome to Library</div>
  </div>

  <div>
    <div class="numbertext">5 / 5</div>
    <img src="img5.jpg" style="width:100%">
    <div class="text">Welcome to Library</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
   <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div> 


<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 

var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>

</body>
</html>
