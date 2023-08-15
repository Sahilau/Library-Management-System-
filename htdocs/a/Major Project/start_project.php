<!DOCTYPE html>    
<html>    
    <head>    
        <title>Login Form</title>    
        <link rel="stylesheet" type="text/css" href="css/style.css">    


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
        font-family: 'Arial';  
    }  
    .login{  
            overflow: hidden;  
            margin: auto;  
            margin: 0px 200px 100px 200px;  
            padding: 80px;  
            background: #008080;  
            border-radius: 15px ;  
              
    }  

    #signup
    { 
            color: black;
            overflow: show;  
            padding: 25px;  
              
           
    }

    h2{  
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bolder;
        text-align: center;  
        color: #277582;  
        padding: 20px;  
    }  
    label{  
        color: #08ffd1;  
        font-size: 17px;  
    }  
    
    #uname, #pass
    {  
        font-weight: bolder;
        width: 300px;  
        height: 30px;  
        border: none;  
        padding-left: 7px;  
        color: blue;
        background: white;  
      } 

          
    }  
    
    #log
    {  
        font-weight: bolder;
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 17px;  
        padding-left: 7px;  
        color: blue;
        background: white;  
      } 

    #log:focus
    {
        outline: none;
    }

    span{  
   
        font-size: 17px;  
    }  

    #signincolor
    {
            font-weight: bolder;
            color: blue;
    }
    
    legend
    {
        color: white;
    }

  </style>
</head>


    <body>  

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:white;  font-family: Arial, Helvetica, sans-serif;font-weight: bolder;">Library Management System</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
      <li><a href="start_project.php"><span class="glyphicon glyphicon-log-in"></span> LogIn</a></li>
    </ul>
  </div>
</nav>


        <h2>Weclome to Library </h2>  
        <div class="login">    
        <form id="login" method="post" action="<?php checkData(); ?>"> 


            <legend>Enter login details </legend> <br><br>
            <label><b>User Name     
            </b>    
            </label>    <br>
            <input type="text" name="username" id="username" placeholder="Username">    
            <br><br>    <br>
            <label><b>Password     
            </b>    
            </label>    <br>
            <input type="Password" name="password" id="password" placeholder="Password">    
            <br><br>  <br> 
            <input type="submit" name="submit" id="log" value="Log In"   
            style="font-weight: bolder; width: 300px;  height: 30px;   border: none; border-radius: 17px; padding-left: 7px;   color: blue; background: white;  ">       
         

            <div id="signup">
                Didn't have any Account ? <a href="signup.php" id="signincolor"> Sign Up </a>
            </div>
     
        </form>       
    </div>
</body>    
</html>

<?php

$db = mysqli_connect("localhost","root","","lms");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}


include "connection.php"; // Using database connection file here

$records = mysqli_query($db,"select uname,pass from admin"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php $uname= $data['uname']; ?></td>
    <td><?php $pass= $data['pass']; ?></td>

  </tr> 
<?php
}
?>

<?php

echo $username;
echo $uname;
echo $password;
echo $pass;
function checkData()
{

extract($_POST);

if (isset($submit))
{
    if ($username==$uname && $password==$pass) 
    {
        echo "Working";
    }

    elseif ($username="" || $password=="") 
    {
        echo "Please enter username and password first";
    }
    
    else
    {
        echo "Invalid details";
    }
}
}

?>