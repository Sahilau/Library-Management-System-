<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: Arial, Helvetica, sans-serif;}


/* Set a style for all buttons */
.open-button {
	font-weight: bolder;
  background-color: red;
  color: white;
  padding: 1px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
}

.open-button:hover 
{
  opacity: 0.8;
}


.open-button:focus
{
  outline: none;
}


.btncancel:focus
{
  outline: none;
}





/* The popup form - hidden by default */
.form-popup {
  background: white;
  display: none;
  position: fixed;
  left: 25%;
  top: 23%;
  bottom: 37%;
  right: 30%;
  border: 3px solid #f1f1f1;
  z-index: 9;
}


/* Set a style for the submit/login button */
.form-container .btn {
  background-color: azure;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}


.btncancel
{
  font-weight: bolder;
  margin-top: 27px;
  margin-left: 400px;
  background: black;
  color: white; 
  padding: 5px 15px 5px 15px;
  border: 1px solid black;
  border-radius: 10px;
  font-size: 16px;
}

#confirm
{
  font-weight: bolder;
  font-size: 16px;
  margin: 100px 20px 50px 60px;
  font-family: Arial, Helvetica, sans-serif
}

.form-popup .closebtn
{
  color: black;
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 30px;
}

</style>
</head>
<body>

<div style="background: azure;">
<button class="open-button" onclick="openForm()">Delete</button>
</div>

<div class="form-popup" id="myForm">
    <a href="javascript:void(0)" onclick="closeForm()" class="closebtn">&times;</a>
  <div id="confirm"> Are you sure you want to this student ? </div>
  <button type="button" class="btncancel" onclick="#">Delete</button>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>



</body>
</html>
