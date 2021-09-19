<?php
session_start();
if (!isset($_SESSION['email'])) {
header('Location: ./signin.php');
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="editprofile.css">
    <title></title>
  </head>
  <body >
    <center>
    <h2>welcome <br> <?php echo $_SESSION['email'] ?></h2></center>
<center>
    <table class="motable" cellspacing='15px'>
    <thead>
      <tr><center>
      <th> Name</th>
      <th>Password</th>
      <th>E-Mail</th>
      <th>Phone-Number</th>
      <th></th>
      </tr>
    </thead>
    <center>
<?php
include("connect.php");
$currentuser=$_SESSION['email'];

$viewinfo="select * from user where email='$currentuser'";
$sql=mysqli_query($conn,$viewinfo);
if($row=mysqli_fetch_array($sql)){
$user_id = $row[0];
$user_Name=$row[1];
$user_Pass=$row[2];
$user_Email=$row[3];
$user_pn= $row[4];
}
 ?>
 <tbody>

 <tr>

 <td><?php echo $user_Name;  ?></td>
 <td><?php echo $user_Pass  ?></td>
 <td><?php echo $user_Email;  ?></td>
 <td><?php echo $user_pn;  ?></td>
 <td>
   <a href="./updateprofile.php?id=<?php echo $user_id;?>">EDIT</a>
 </td>

 </tr>
 </tbody>
   </table>


       <a href="./logout.php">Logout</a>
  </body>
</html>
