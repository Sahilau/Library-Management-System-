  

<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../links.php">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="login.css">


</head>
<body>

<div class="wrapper">
        <div class="logo">
            <i class="fas fa-book-reader" style="color: #00fecb; font-size: 30px; margin-top: 10px;">&nbsp; <span style="color: white;">BIBLIOTECA </span></i>
        </div>
<ul class="nav-area">
<li><a href="welcome.php">Home</a></li>
<li><a href="student_login.php">User Login</a></li>
<li><a href="../admin_login.php">Admin Login</a></li>
</ul>
</div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                
                <img src="avatar.jpg" class="img-responsive" style="border-radius: 50%"; />

                <div class="col-lg-12 login-title">
                    STUDENT LOGIN
                </div>


                <?php 
                    
                        
                        include "connection.php";

                        if(isset($_POST['submit']))
                        {
                            
                            $uname=$_POST['uname'];
                            $password=$_POST['password'];

                            $sql="SELECT uname, pass from student where uname='$uname' and pass='$password'";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) 
                            {
                              SESSION_start();
                              $_SESSION['uname']=$_POST['uname'];
                              $_SESSION['password']=$_POST['password'];

                              header("Location: student_index.php");
                              
                            }
                             

                            else 
                            {
                              echo "<p style='text-align: left; padding:5px; margin: 10px 0 0 25px; background: none; color: #ff4d4d;'>
                                 <strong>Warning!</strong> Incorrect Username or Password
                                </p>";
                            }

                            mysqli_close($con);

                          
                            

                            
                        }
                      
                ?> 



                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="#" method="POST" >
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control" name="uname" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" id="password" name="password" required >
                                <i class="far fa-eye" id="togglePassword" ></i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary" name="submit">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>

        <script>
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');
            togglePassword.addEventListener('click', function (e) 
            {
                // toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // toggle the eye slash icon
                this.classList.toggle('fa-eye-slash');
            });
        </script>



</body>
</html>







