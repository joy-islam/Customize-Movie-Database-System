<?php
include("connect.php");
if(isset($_POST['update'])){

$moviename=$_POST['Moviename'];
$releasedate=$_POST['Date'];
$duration=$_GET['duration'];

$language=$_POST['language'];
$trailer=$_POST['trailer'];
$description=$_GET['description'];

$genre=$_POST['genre'];
$movie_id=$_GET['id'];


$Update_query="Update movie set Name='$moviename', Release_Date='$releasedate',Duration='$duration',Language='$language',
Trailer='$trailer',Description='$description',Genre='$genre' where ID='$user_id'";
$sql=mysqli_query($conn,$Update_query);
if($sql){
  header('Location:'.'admin_view_movie.php');
}else{
  echo 'TRY AGAIN';
}
}
 ?>
