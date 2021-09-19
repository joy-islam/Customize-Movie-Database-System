<?php
include("connect.php");
$username=$_POST['Username'];
$userpass=$_POST['Pass'];
$useremail=$_POST['Email'];
$userpn = $_POST['Phone'];
$sql="update user set Name='$username',Email='$useremail',Password='$userpass', Phone_Number='$userpn' where Email='$useremail'";
$update_query=mysqli_query($conn,$sql);
if($update_query){
  header('Location:'.'editprofile.php');

} else {
  echo 'TRY AGAIN';
}
?>
