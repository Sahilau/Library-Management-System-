<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: black;
  color: white;
  padding: 3px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
}

button:hover {
  opacity: 0.8;
}


button:focus
{
  outline: none;
}


/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  margin-left: 200px; 
  float: center;
  width: auto;
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  float: center;
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: auto; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: white;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Update</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="view_books.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    </div>
    <br> <br>

    <div class="container">
   <label><b> Student Name </b> </label> <br>
    <input type="text" placeholder="Enter Student name here" id="t1" class="tb" /> <br> <br>
   
    <label><b> Father Name </b> </label> <br>
    <input type="text" placeholder="Enter Father Name here" id="t2" class="tb" /> <br> <br>

    <label><b> Semester </b> </label> <br>
    <input list="browsers1" placeholder="Enter Semester here" name="browser" id="t3" class="tb" style="">  <br> <br>
    <datalist id="browsers1">
        <option value="First">
        <option value="Second">
        <option value="Third">
        <option value="Fourth">
        <option value="Fifth">
        <option value="Sixth">
    </datalist>

    <label><b> Branch </b> </label> <br>
    <input list="browsers2" placeholder="Enter Semester here" name="browser" id="t4" class="tb">  <br> <br>
    <datalist id="browsers2">
        <option value="Computer">
        <option value="Elecrical">
        <option value="Civil">
        <option value="Mechanical">
        <option value="IT">
        </datalist>

   <label><b> Phone Number </b> </label> <br>
    <input type="text" placeholder="Enter Phone Number here" id="t5" class="tb" maxlength="10" /> <br> <br>

   
   <label><b> Address </b> </label> <br>
    <input type="text" placeholder="Enter Address here" id="t6" class="tb" /> <br> <br>

      <button type="submit"> Update </button>
 
    </div>

    <div class="container" style="background-color:white">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
