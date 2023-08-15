
    <Section id="main-content" >
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
                <img src="avatar.jpg" class="img-responsive" style="border-radius: 50%"; />
                <a href="my_profile.php" style="text-decoration: none;"><span id= "more" style="    margin-left: 5%; font-size: 20px;">My Profile <i class="fas fa-ellipsis-v"></i></span></a>

                
            </div>
            <div class="clear"></div>
        </header>
        <div class="clear"></div>



<section id="sidebar">
        <div class="sidebar-brand">
            <h2><i class="fas fa-book-reader"></i> <span>BIBLIOTECA</span></h2>
              <div class="side-left side-profile">
                 <img src="avatar.jpg" alt="Avatar" class="avatar" style = "vertical-align: center; height: 50%; width: 50%; border-radius: 50%; margin: 15% 25% 0 25%;">
          <p style="color: white; text-align: center; margin-top: 5%;"><i class="fa fa-user"></i><span>&nbsp Hi, Admin</span></p>
                
            </div>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="index.php"><i class="fa fa-desktop"></i> <span>Dashboard</span></a></li>

                <div class="d-menu1">

                <li><a href="#" id="hidden-option"><i class="fa fa-user"></i> <span>Registered Students <i class="fa fa-chevron-down" style="float: right;"></i></span></a></li>
                    <ul class="d-content1">
                        <li><a href="view_students.php"><span>All Students</span></a></li>
                        <li><a href="add_student.php"><span>Add Student</span></a></li>
                        <li><a href="delete_student.php"><span>Delete Student</span></a></li>
                        <li><a href="update_student.php"><span>Update Student Details</span></a></li>
                    </ul>
                </div>


                <div class="dropdown-menu1">

                <li><a href="#" id="hidden-option"><i class="fa fa-user"></i> <span>Registered Teachers <i class="fa fa-chevron-down" style="float: right;"></i></span></a></li>
                    <ul class="dropdown-content1">
                        <li><a href="view_teacher.php"><span>All Teachers</span></a></li>
                        <li><a href="add_teacher.php"><span>Add Teacher</span></a></li>
                        <li><a href="delete_teacher.php"><span>Delete Teacher</span></a></li>
                        <li><a href="update_teacher.php"><span>Update Teacher Details</span></a></li>
                    </ul>
                </div>

                <div class="dropdown-menu2">
                <li><a href="#" id="hidden-option"><i class="fa fa-book"></i> <span>Books <i class="fa fa-chevron-down" style="float: right;"></i></span></a></li>
                    <ul class="dropdown-content2">
                        <li><a href="all_books.php"><span>All Books</span></a></li>
                        <li><a href="add_book.php"><span>Add Books</span></a></li>
                        <li><a href="delete_book.php"><span>Delete Books</span></a></li>
                        <li><a href="update_book.php"><span>Update Book Details</span></a></li>
                    </ul>
                </div>

                <div class="list3">

                <li><a href="#" id="hidden-option"><i class="fa fa-user"></i> <span>Issue Book <i class="fa fa-chevron-down" style="float: right;"></i></span></a></li>
                    <ul class="content3">
                        <li><a href="issue_book.php"><span>Issue Book To Student</span></a></li>
                        <li><a href="issue_teacher.php"><span>Issue Book To Teacher</span></a></li>
                    </ul>
                </div>     
                
                <div class="list4">

                <li><a href="#" id="hidden-option"><i class="fa fa-user"></i> <span>Issued Books <i class="fa fa-chevron-down" style="float: right;"></i></span></a></li>
                    <ul class="content4">
                        <li><a href="issued_books.php"><span>Books Issued To Students</span></a></li>
                        <li><a href="issued_teacher_books.php"><span>Books Issued To Teachers</span></a></li>
                    </ul>
                </div>

                <div class="list-5">
                <li><a href="#" id="hidden-option"><i class="fa fa-user"></i> <span>Return Book <i class="fa fa-chevron-down" style="float: right;"></i></span></a></li>
                    <ul class="content-5">
                        <li><a href="return_student.php"><span>Return Student Book</span></a></li>
                        <li><a href="return_teacher.php"><span>Return Teacher Book</span></a></li>
                    </ul>
                </div> 

                <li><a href="import_students.php"><i class="fa fa-user"></i> <span>Institution Students</span></a></li>
                <li><a href="applications.php"><i class="fa fa-envelope"></i> <span>Application <span class="counter">3</span></span></a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
            </ul>

        </div>
    </section>
</Section>
