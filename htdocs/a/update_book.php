<?php  include "menu_bar.php"; ?>
<?php  include "search_bar.php"; ?>

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
      <td> <?php include "update_button.php"; ?> </td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Rs. 500/-</td>
       <td> <?php include "update_button.php"; ?> </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Rs. 500/-</td>
       <td> <?php include "update_button.php"; ?> </td>
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

