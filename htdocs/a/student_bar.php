<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 
#myInput
{
  box-sizing: border-box;
  border: 2px solid black;
  border-radius: 20px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 8px 20px 8px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  width: 100%;
}	

#myInput:focus
{
	outline: none;
}

input.myInput
{
  padding: 7px 20px 7px 20px;
}


</style>
</head>
<body>

<form>
  
<input type="text" class="myInput" id="myInput" onkeyup="myFunction()" placeholder="Search student name.." title="Type in a name">
</form>

</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_anim_search by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Nov 2020 14:38:07 GMT -->
</html>

