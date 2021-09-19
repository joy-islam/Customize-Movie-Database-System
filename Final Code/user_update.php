<?php
        include("connect.php");
$user_name = $_POST['username'];
$user_email = $_POST['email'];
$user_phone = $_POST['pnum'];
$userid= $_GET['id'];

$get_user_id = "update  user set Name = '$user_name',Email='$user_email',Phone_Number= '$user_phone' where User_ID='$userid'";

$update_query = mysqli_query($conn,$get_user_id );

if ($update_query) {
  header('Location:'.'view_user.php');
}
else{
  echo "Try Again!!!!";
}

 ?>
