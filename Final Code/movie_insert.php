<?php
include("connect.php");

if(isset($_POST['insert'])){

  $Moviename=$_POST['name'];
  $Releasedate=$_POST['Releasedate'];
  $Duration=$_POST['Duration'];
  $language=$_POST['Language'];
  $country=$_POST['Countryname'];
  $directorid=$_POST['Directorid'];
  $trailer=$_POST['trailer'];
  $castid=$_POST['Castid'];
  $description=$_POST['description'];
  $rating=$_POST['rating'];
  $genre=$_POST['genre'];
  $movie_id=$_GET['id'];


//$check_name_query="select * from movie where Name='$Moviename'";
//$run_query=mysqli_query($conn,$check_name_query);

$insert_movie="insert into movie(Name,Release_date,Duration,Language,Country_Name,Director_Id,Trailer,Cast_ID,Description,Rating,Genre)
value ('$Moviename','$Releasedate','$Duration','$language','$country','$directorid','$trailer','$castid','$description','$rating','$genre')";
if (mysqli_query($conn,$insert_movie)){

  echo "<script> window.open('./admin_view_movie.php','_self')  </script>";
}




}else {
  echo "<script> window.open('./updated_movies.php','_self')  </script>";
}

 ?>
