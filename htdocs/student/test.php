<?php include "connection.php";
//FETCHING ORDERED BOOK DATA
            $sql3 = "SELECT * FROM allbooks WHERE id=1";
            $result3 = mysqli_query($con, $sql3);

            
              while($row3 = mysqli_fetch_assoc($result3))        
              {
                $book_id=$row3['id'];
                $book_title=$row3['title'];
                $book_writer=$row3['writer'];
                $book_publisher=$row3['publisher'];
              } 
            

            //FETCHING STUDENT/USER DATA
            $sql4 = "SELECT * FROM lib_students WHERE sbrn=190720204001";
            $result4 = mysqli_query($con, $sql4);

            if (mysqli_num_rows($result4) > 0) 
            {
              while($row4 = mysqli_fetch_assoc($result4))        
              {
                $s_id=$row4['id'];
                $s_name=$row4['sname'];
                $s_fname=$row4['fname'];
                $s_branch=$row4['branch'];
                $s_phone=$row4['phone'];

                $query5="INSERT INTO my_orders(book_id, s_sbrn) VALUES ('$book_id', '$student_uname')";

                $result5=mysqli_query($con,$query5);

                $query="INSERT INTO applications(book_id, book_title, book_writer, book_publisher, s_id, s_name, s_fname, s_sbrn, s_branch, s_phone) VALUES('$book_id', '$book_title', '$book_writer', '$book_publisher', '$s_id', '$s_name', '$s_fname', '$student_uname', '$s_branch' ,'$s_phone')";

                $result=mysqli_query($con,$query);

                if ($result) 
                {
                  $success_msg="Book Ordered <strong>Successfully</strong>";
                }
                else
                {
                  $error_msg="<strong>Error: </strong>Unable To Order Book";
                }
          

              } 
            }