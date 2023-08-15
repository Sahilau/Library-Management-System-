



<?php
include 'connection.php';

//$uploadfile=$_FILES['uploadfile']['tmp_name'];

require 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load("C:\Users\Sahil\Desktop\Book1.xlsx");
foreach($objExcel->getWorksheetIterator() as $worksheet)
{
  $highestrow=$worksheet->getHighestRow();

  for($row=0;$row<=$highestrow;$row++)
  {
    $name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
    $email=$worksheet->getCellByColumnAndRow(1,$row)->getValue();

    
      $insertqry="INSERT INTO `users`( `fname`, `lname`) VALUES ('$name','$email')";
      $insertres=mysqli_query($con,$insertqry);
    
  }
}
 
?>




