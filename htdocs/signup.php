

<!DOCTYPE html>    
<html>    
<head>    
<title>Login Form</title>    



  <meta charset="utf-8">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php include "links.php"; ?>

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
        border-radius: 15px;
        outline: none;  
      } 

          
    }  
    

    #uname,#pass:focus
    {
        outline: none;
    }

    span
    {  
   
        font-size: 17px;  
    }  

    
    
    legend
    {
        color: white;
    }

    h4
    {
        color: red;
        
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
      
      <li><a href="start_project.php"><span class="glyphicon glyphicon-log-in"></span> Back</a></li>
    </ul>
  </div>
</nav>


        <h2>Welcome to Library </h2>  
        <div class="login">    
        <form id="login" method="post" > 
    


           

            <legend>Enter login details </legend>
             <?php 
    
        
        include "connection.php";

        if(isset($_POST['submit']))
        {

            $uname=$_POST['uname'];
            $password=$_POST['pass'];
            
            $sql="select uname,pass from admin where uname='$uname' limit 1";

           $result=mysqli_query($con,$sql);
           
        
                $data=mysqli_fetch_assoc($result);
                
            
                if($data['uname'] === $uname && $data['pass'] === $password)
                {
                    header("Location: home.php");
                    die;
                }
                else
                {
                    echo "<h4>";

                    echo "*Incorrect username or Password";
                    echo "</h4>";
                }
              
            
        }
      
?>   
            <br>

           
            <label><b>User Name     
            </b>    
            </label>    <br>
            <input type="text" name="uname" id="uname" placeholder="Username" required>    
            <br><br>    <br>
            <label><b>Password     
            </b>    
            </label>    <br>
            <input type="Password" name="pass" id="pass" placeholder="Password" required>    
            <br><br>  <br> 
            <input type="submit" name="submit" id="log" value="Log In" 
            style="font-weight: bolder; width: 300px;  height: 30px;   border: none; border-radius: 17px; padding-left: 7px;   color: blue; background: white;  ">       
         

         
        </form>       
    </div>
</body>    
</html>


