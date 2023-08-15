<?php  include "menu_bar.php"; ?>
<?php  include "search_bar.php"; echo "<br>"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>All Books</title>

</head>

<body>
<div class="formargin">



    <table class="table" id="myTable" style=" position: fixed; background: azure; width: 100%;">
  <thead class="table thead-dark" style="background: black; color: white;">
    <tr>
      <th scope="col">Student Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Semester</th>
      <th scope="col"> Branch </th>
      <th scope="col"> Phone Number </th>
      <th scope="col"> Address </th>
      <th scope="col"> Action </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Anand</td>
      <td>Dhani Ram</td>
      <td>Fifth</td>
      <td> Computer</td>
      <td> 7876035914</td>
      <td> V.P.O Dhabiri Teh. Dhatwal Distt. Hamirpur (H.P.) </td>
      <td> <?php include "delete_student_button.php" ?> </td>
    </tr>
    
    <tr>
      <th scope="row">2</th>
      <td>Sumit Chandel</td>
      <td>----------</td>
      <td>Fifth</td>
      <td> Computer</td>
      <td> 1234567989</td>
      <td> --------- </td>
      <td> <?php include "delete_student_button.php" ?> </td>
    </tr>
    
    <tr>
      <th scope="row">3</th>
      <td> Sahil Kaundal</td>
      <td> --------- </td>
      <td>Fifth</td>
      <td> Computer</td>
      <td> --------- </td>
      <td> --------- </td>
      <td> <?php include "delete_student_button.php" ?> </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td> Rohit Kumar </td>
      <td> -------- </td>
      <td>Fifth</td>
      <td> Computer</td>
      <td> --------</td>
      <td> --------</td>
      <td> <?php include "delete_student_button.php" ?> </td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td> Sonia Sharma </td>
      <td> -------- </td>
      <td>Fifth</td>
      <td> Computer</td>
      <td> --------</td>
      <td> --------</td>
      <td> <?php include "delete_student_button.php" ?> </td>
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




