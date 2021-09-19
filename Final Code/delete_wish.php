<?php
        include("connect.php");
$watch = $_GET['id'];

$delete_movie = "delete from wishlist where Wishlist_ID = '$watch' ";

$query = mysqli_query($conn,$delete_movie );
if ($query) {
  header('Location:'.'wishlist.php');
}
else {
  echo "Something went Wrong!!!";
}
 ?>
