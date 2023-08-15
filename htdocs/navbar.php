<?php 

include "connection.php";

$sql="SELECT * from applications WHERE flag=0";

$result=mysqli_query($con,$sql);

$badge=mysqli_num_rows($result);

?>

<div class="wrapper">
    <nav>       
      <div class="content">    
      <div class="logo"><a href="#"> <i class="fas fa-book-reader" style="color: #33ffad;"></i>&nbsp; &nbsp;BIBLIOTECA</a></div>
        <ul class="links">
          <li><a href="index.php">Home</a></li>

          <li>
            <a href="#" class="desktop-link">Books&nbsp; <i class="fas fa-caret-down"></i></a>
            <input type="checkbox" id="show-features">
            <ul>
              <li><a href="all_books.php">All Books</a></li>
              <li><a href="add_book.php">Add Book</a></li>
              <li><a href="delete_book.php">Delete Book</a></li>
              <li><a href="update_book.php">Update Book Details</a></li>
            </ul>
          </li>

          <li>
            <a href="#" class="desktop-link">Students&nbsp; <i class="fas fa-caret-down"></i></a>
            <input type="checkbox" id="show-features">
            <ul>
              <li><a href="view_students.php">All Students</a></li>
              <li><a href="add_student.php">Add Students</a></li>
              <li><a href="delete_student.php">Delete Student</a></li>
              <li><a href="update_student.php">Update Student Details</a></li>
            </ul>
          </li>

          <li>
            <a href="#" class="desktop-link">Teachers&nbsp; <i class="fas fa-caret-down"></i></a>
            <input type="checkbox" id="show-features">
            <ul>
              <li><a href="view_teacher.php">All Teachers</a></li>
              <li><a href="add_teacher.php">Add Teacher</a></li>
              <li><a href="delete_teacher.php">Delete Teacher</a></li>
              <li><a href="update_teacher.php">Update Teacher Details</a></li>
            </ul>
          </li>

          <li>
            <a href="#" class="desktop-link">Issue Book&nbsp; <i class="fas fa-caret-down"></i></a>
            <input type="checkbox" id="show-features">
            <ul>
              <li><a href="issue_book.php">Issue Book To Student</a></li>
              <li><a href="issue_teacher.php">Issue Book To Teacher</a></li>
            </ul>
          </li>

          <li>
            <a href="#" class="desktop-link">Return Book&nbsp; <i class="fas fa-caret-down"></i></a>
            <input type="checkbox" id="show-features">
            <ul>
              <li><a href="return_student.php">Return Student Book</a></li>
              <li><a href="return_teacher.php">Return Teacher Book</a></li>
            </ul>
          </li>


          <li>
            <a href="#" class="desktop-link">Returned Books &nbsp;<i class="fas fa-caret-down"></i></a>
            <input type="checkbox" id="show-features">
            <ul>
              <li><a href="issued_books.php">Books Returned By Students</a></li>
              <li><a href="issued_teacher_books.php">Books Returned By Teachers</a></li>
            </ul>
          </li>


          <li style="margin-left: 250px;"><a href="#"><i class="fas fa-1x fa-envelope"></i>&nbsp;Applications&nbsp;<span 
            style="padding: 3px 9px 3px 3px; border-radius: 50%; background: red; color: white;">
            <?php 

              include "connection.php";

              $sql="SELECT * from applications WHERE flag=0";

              $result=mysqli_query($con,$sql);

              $badge=mysqli_num_rows($result);
              echo $badge;
            ?>
            </script>

                
              </span></a>
            <input type="checkbox" id="show-features">
            <ul>
              <li><a href="pending_applications.php"> <i class="fas fa-bell"></i>&nbsp;Pending</a></li>
              <li><a href="approved_applications.php"> <i class="fas fa-1x fa-envelope"></i>&nbsp;Approved</a></li>
            </ul>
         </li>

s          <li><a href="logout.php">&nbsp; &nbsp;<i class="fas fa-sign-out-alt"></i> Logout </a>
          </li>
        </ul>
      </div>
    </div>  

   </nav>
  </div>
  

