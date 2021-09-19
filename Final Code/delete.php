<?php
        include("connect.php");
$user_id = $_GET['id'];
$delete_user = "delete from user where User_ID = '$user_id'";

$query = mysqli_query($conn,$delete_user );

if ($query) {
  header('Location:'.'view_user.php');
}
else {
  echo "Something went Wrong!!!";
}
 ?>
