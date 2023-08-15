<?php include "menu_bar.php"; ?>




    <!DOCTYPE html>    
    <html>    
    <head>    
        <title>SignUp Form</title>    
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

    /* body css for whole page */
    body
    {
        margin:0px;
        background-image: url('img2.jpg');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        color:#f9fcf5;
        font-family:Arial, Helvetica, sans-serif;
    }
    
    #main{
      overflow: hidden;  
            margin: auto;  
            margin: 0px 200px 100px 200px;  
            padding: 80px;  
            background: #23463f;  
            border-radius: 15px ;  
    }
    
    #main table{font-family:"Comic Sans MS", cursive;}
    /* css code for textbox */
    #main .tb{height:28px; width:50%; border:1px solid #f26724; color:#fd7838; font-weight:bold; border-left:5px solid #f7f7f7; opacity:0.9;}
    
    #main .tb:focus{height:28px; border:1px solid #f26724; outline:none; border-left:5px solid #f7f7f7;}

    /* css code for button*/
    #main .btn{width:150px; height:32px; outline:none;  color:#f7f7f7; font-weight:bold; border:0px solid #f26724; 
    text-shadow: 0px 0.5px 0.5px #fff; border-radius: 2px; font-weight: 600; color: #f26724; letter-spacing: 1px; 
    font-size:14px; background-color:#f1f1f1; -webkit-transition: 1s; -moz-transition: 1s; transition: 1s;}
  
    #main .btn:hover{background-color:#f26724; outline:none;  border-radius: 2px; color:#f1f1f1; border:1px solid #f1f1f1;
    -webkit-transition: 1s; -moz-transition: 1s; transition: 1s; }


    #main .btn:focus
    {
        outline: none;
    }


    #b1
    {
        margin-left: 50px;
    }

  </style>
</head>


    <body> 

    <!-- Main div code -->
    <div id="main">
    <div class="h-tag">

    <h2> Enter New Details </h2> <br>
    <hr>
    </div>
    <!-- create account div -->
    <div class="login">
    <form action="my_account.php">
    <label><b> Name </b> </label> <br>
    <input type="text" placeholder="Enter your name" id="t1" class="tb" /> <br> <br>
   
    <label><b> Email </b> </label> <br>
    <input type="text" placeholder="Enter Email ID here" id="t2" class="tb" /> <br> <br>

    <label><b> Phone number </b> </label> <br>
    <input type="text" placeholder="Enter Phone Number here" id="t3" class="tb" /> <br> <br>

   
   <label><b> User Name </b> </label> <br>
    <input type="text" placeholder="Enter Username here" id="t4" class="tb" /> <br> <br>

   
   <label><b> Password </b> </label> <br>
    <input type="password" placeholder="Enter Password here" id="t5" class="tb" /> <br> <br>

   
   <label><b> Re-enter Password </b> </label> <br>
    <input type="password" placeholder="Re-enter Password here" id="t6" class="tb" /> <br> <br>

    <hr>
    <input type="reset" value="Clear Form" onclick="clearFunc()" id="res" class="btn" />
    <input type="submit" id="b1" value="Update" class="btn" onclick="registration()" />
  
    </div>
    <hr>    
    <!-- create account box ending here.. -->
    </div>
     
        </form>       
    </div>
<script>

      function registration()
    {

        var name= document.getElementById("t1").value;
        var email= document.getElementById("t2").value;
        var phone= document.getElementById("t3").value;
        var uname= document.getElementById("t4").value;
        var password= document.getElementById("t5").value;           
        var rpassword= document.getElementById("t6").value;
        
        //email id expression code
        var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
        var letters = /^[A-Za-z]+$/;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(name=='')
        {
            alert('Please enter your name');
        }
        else if(!letters.test(name))
        {
            alert('Name field required only alphabet characters');
        }
        else if(email=='')
        {
            alert('Please enter your user email id');
        }
        else if (!filter.test(email))
        {
            alert('Invalid email');
        }
        else if(uname=='')
        {
            alert('Please enter the user name.');
        }
        else if(!letters.test(uname))
        {
            alert('User name field required only alphabet characters');
        }
        else if(pwd=='')
        {
            alert('Please enter Password');
        }
        else if(cpwd=='')
        {
            alert('Enter Confirm Password');
        }
        else if(!pwd_expression.test(pwd))
        {
            alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
        }
        else if(pwd != cpwd)
        {
            alert ('Password not Matched');
        }
        else if(document.getElementById("t5").value.length < 6)
        {
            alert ('Password minimum length is 6');
        }
        else if(document.getElementById("t5").value.length > 12)
        {
            alert ('Password max length is 12');
        }
        else
        {                                           
               alert('Thank You for Login & You are Redirecting to Campuslife Website');
               // Redirecting to other page or webste code. 
               window.location = "http://www.campuslife.co.in"; 
        }
    }
    function clearFunc()
    {
        document.getElementById("t1").value="";
        document.getElementById("t2").value="";
        document.getElementById("t3").value="";
        document.getElementById("t4").value="";
        document.getElementById("t5").value="";
        document.getElementById("t6").value="";

    }
</script>


</body>    
</html>     
