<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">


</head>

<body>
    <?php include "side_bar.php"; ?>

    <Section id="main-content">
        <header>
            <div class="header-left">
                <h2 class="toggle-btn">
                    <i class="fa"></i> Dashboard
                </h2>
            </div>
            <div class="header-left header-serach">
                <div class="serach-par">
                    <input class="search" type="text" placeholder="Search Here...">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="header-left header-profile">
                <img src="images/user.png" class="img-responsive" />
                <h3>My Profile</h3>
                <p>Admin</p>
            </div>
            <div class="clear"></div>
        </header>
        <div class="clear"></div>
        <div class="main-content-info container">
            <div class="card">
                <h2 class="cus-num cus-h">
                    <?php
                        include "connection.php";

                        //Displaying total books
                        $sql1="select * from allBooks";
                        if ($result1=mysqli_query($con, $sql1)) 
                        {
                            $total_books=mysqli_num_rows($result1);
                            echo $total_books;
                        }
                        mysqli_close($con);
                    ?>
                </h2>
                <p><br>Total Books</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-pro">
                    <?php
                        include "connection.php";

                        //Displaying total books
                        $sql2 = "SELECT * FROM lib_students";
                        $result2 = mysqli_query($con, $sql2);
                        if ($result2=mysqli_query($con, $sql2)) 
                        {
                            $reg_students=mysqli_num_rows($result2);
                            echo $reg_students;
                        }
                        mysqli_close($con);
                    ?>
                </h2>
                <p>Total Registered Students</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-ord">
                    <?php
                        include "connection.php";

                        //Displaying total books
                        $sql3 = "SELECT * FROM teachers";
                        $result3 = mysqli_query($con, $sql3);
                        if ($result3=mysqli_query($con, $sql3)) 
                        {
                            $reg_teachers=mysqli_num_rows($result3);
                            echo $reg_teachers;
                        }

                        mysqli_close($con);
                    ?>
                </h2>
                <p>Total Registered Teachers</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-inc">
                    <?php
                        include "connection.php";

                        //Number of issued books
                        $sql4 = "SELECT * FROM issued_books";
                        $result4 = mysqli_query($con, $sql4);
                        if ($result4=mysqli_query($con, $sql4)) 
                        {
                            $issued_books=mysqli_num_rows($result4);
                            echo $issued_books;
                        }

                        mysqli_close($con);
                    ?>
                </h2>
                <p><br>Total Issued Books</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-ord">
                    <?php
                        include "connection.php";
                        //Number of applications
                        $sql5 = "SELECT * FROM applications";
                        $result5 = mysqli_query($con, $sql5);
                        if ($result5=mysqli_query($con, $sql5)) 
                        {
                            $applications=mysqli_num_rows($result5);
                            echo $applications;
                        }

                        mysqli_close($con);
                    ?>
                </h2>
                <p>Total Applications Received</p>
            </div>
            <div class="clear"></div>
        </div>
            <div class="pro-table">

                    <div class="rec-pro-h">
                        <h2>Recent Activities</h2>
                    </div>
                    <div class="see-all">
                        <button>See all</button>
                    </div>
                    <div class="clear"></div>
                
                
                </table>
            </div>
            
    </Section>
    <div class="clear"></div>
</body>

</html>
