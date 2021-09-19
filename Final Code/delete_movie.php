<?php
        include("connect.php");
$watch = $_GET['id'];

$delete_movie = "delete from watchlist where Watchlist_ID = '$watch' ";

$query = mysqli_query($conn,$delete_movie );
if ($query) {
  header('Location:'.'watchlist.php');
}
else {
  echo "Something went Wrong!!!";
}
 ?>
