

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: Arial, Helvetica, sans-serif;}

/* Set a style for all buttons */
.button {
  background-color: aqua;
  color: black;
  font-weight: bolder;
  padding: 3px 20px;
  border: 1px solid black;
  cursor: pointer;
  width: 50%;
}

.button:hover {
  background: lightgrey;
  opacity: 0.7;
}


.button:focus
{
  outline: none;
}



/* Set a style for all buttons */
.button {
  font-weight: bolder;
  background-color: aqua;
  color: black;
  padding: 1px 10px;
  border: none;
  cursor: pointer;
  width: 50%;
  border: 1px solid black;
}

.button:hover 
{
  opacity: 0.8;
}


</style>
</head>
<body>

<div style="background: azure;">

<input type='button' value='Issue Book' class="button" onclick="document.location.href='issue_book_button.php';"/>
</div>

</body>
</html>

