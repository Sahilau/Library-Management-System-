<?php  include "menu_bar.php"; ?>
<?php  include "search_bar.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>All Books</title>

<style>
  
div.formargin
{
  margin: 10px;
}


</style>

</head>

<body>
<div class="formargin">


    <table class="table" id="myTable" style=" position: fixed; background: azure; width: 100%;">
  <thead class="table thead-dark" style="background: black; color: white;">
    <tr>
      <th scope="col">Book Id</th>
      <th scope="col">Name</th>
      <th scope="col">Author Name</th>
      <th scope="col">Quantity</th>
       <th scope="col">Price</th>
       <th scope="col"> Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Rs. 500/-</td>
      <td> <?php include "delete_student_button.php"; ?> </td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Rs. 500/-</td>
       <td> <?php include "delete_student_button.php"; ?> </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Rs. 500/-</td>
       <td> <?php include "delete_student_button.php"; ?> </td>
    </tr>
  </tbody>
</table>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>



<?php
//include "connection.php";

$sql = "SELECT * FROM books";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='2'>";
            echo "<tr>";
                echo "<th>book_id</th>";
                echo "<th>book_name</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['book_id'] . "</td>";
                echo "<td>" . $row['book_name'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
$conn->close();
?>


    