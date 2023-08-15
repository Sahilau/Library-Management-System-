<?php
include "menu_bar.php";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

.container
{
    margin:0px;
    background-image: url('img9.jpg');
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
}


.media
{
    position:absolute; top: 16%; left: 40%; width:100%; height:18em;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em; /*set to a negative number 1/2 of your width*/
    background-color: auto;"
}

body{
    margin-top:20px;
}

.ui-w-100 {
    width: 100px !important;
    height: auto;
}

.card {
    background-clip: padding-box;
    box-shadow: 0 1px 4px rgba(24,28,33,0.012);
}

.user-view-table td:first-child {
    width: 9rem;
}
.user-view-table td {
    padding-right: 0;
    padding-left: 0;
    border: 0;
}

.text-light {
    color: #babbbc !important;
}

.card .row-bordered>[class*=" col-"]::after {
    border-color: rgba(24,28,33,0.075);
}    

.text-xlarge {
    font-size: 170% !important;
}

h4
{
  font-size: 25px;
  font-weight: bolder;
   font-family: Arial, Helvetica, sans-serif;
}

.mb-4
{
  padding: 40px;
  background-color: azure;
}

.heading
{
  font-weight: bolder;
}

td
{
  font-size: 17px;
}

.editbtn
{
  border-color: white;
  padding: 5px 20px 5px 20px;
  color: white;
  font-size: 17px;
  background: black; 
  border-radius: 10px;"
  cursor: pointer;
}

.editbtn:hover
{ 
  border-radius: 10px;"
}


.editbtn:focus
{
  outline: none;
}


</style>
</head>
<body>

 <table class="registered" style="position: absolute; left:25px; top: 17%;">
                  <tbody>
                    <tr>
                      <td style="font-size: 20px; font-weight: bolder;">Registered on: </td>
                      <td> &nbsp; 01/23/2017</td>
                    </tr>
                  </tbody>
 </table>


 <div class="edit" style="position: absolute; left:62%; top: 45%;">
               
                      <input type="button" class="editbtn" onclick="document.location.href='edit_profile.php';" id="edit" value="Edit Profile"/>
</div>            

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container bootdey flex-grow-1 container-p-y">

            <div class="media align-items-center py-3 mb-3">

              <img src="avatar.jpg" style="width:200px;  border-radius: 50%;">
              <div class="media-body ml-4" style="margin-left: 50%;"> <br>
                <h4 class="font-weight-bold mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Anand</h4>
              </div>

            </div>
             <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  <br>  <br> <br> <br>  <br>
            <div class="card mb-4">
              <div class="card-body">
                  <table class="table user-view-table m-0">
                  <tbody>
                     <h6 class="mt-4 mb-3">Personal info</h6>
                    <tr>
                      <td class="heading">Username:</td>
                      <td>nmaxwell</td>
                    </tr>
                    <tr>
                      <td class="heading">Name:</td>
                      <td>Nelle Maxwell</td>
                    </tr>
                    <tr>
                      <td class="heading">E-mail:</td>
                      <td>nmaxwell@mail.com</td>
                    </tr>
                    <tr>
                      <td class="heading">Company:</td>
                      <td>Company Ltd.</td>
                    </tr>
                  </tbody>
                </table>
              </div>

                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td class="heading">Birthday:</td>
                      <td>May 3, 1995</td>
                    </tr>
                    <tr>
                      <td class="heading">Country:</td>
                      <td>Canada</td>
                    </tr>
                    <tr>
                      <td class="heading">Languages:</td>
                      <td>English</td>
                    </tr>
                  </tbody>
                </table>

                 <div class="card-body">
                  <table class="table user-view-table m-0">
                  <tbody>
                     <h6 class="mt-4 mb-3">Login info</h6>
                    <tr>
                      <td class="heading">Username:</td>
                      <td>nmaxwell</td>
                    </tr>
                    <tr>
                      <td class="heading">Password:</td>
                      <td> **********  </td>
                    </tr>
                    </tbody>
                </table>
              </div>
              

                <h6 class="mt-4 mb-3">Contacts</h6>

                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td class="heading">Phone:</td>
                      <td>+0 (123) 456 7891</td>
                    </tr>
                  </tbody>
                </table>


                <h6 class="mt-4 mb-3">Social links</h6>

                <table class="table user-view-table m-0">
                  <tbody>
                    <tr>
                      <td class="heading">Twitter:</td>
                      <td><a href="javascript:void(0)">https://twitter.com/user</a></td>
                    </tr>
                    <tr>
                      <td class="heading">Facebook:</td>
                      <td><a href="javascript:void(0)">https://www.facebook.com/user</a></td>
                    </tr>
                    <tr>
                      <td class="heading">Instagram:</td>
                      <td><a href="javascript:void(0)">https://www.instagram.com/user</a></td>
                    </tr>
                  </tbody>
                </table>

                <br><br>

              </div>
            </div>

          </div>

</body>
</html>
