<?php
include("connect.php");
$Movie_id= $_GET['id'];
$movie_query="select * from movie where ID='$Movie_id'";
$sql=mysqli_query($conn,$movie_query);
$row=mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>
    <center>
    <form class="box" action="./movie_update.php?ID=<?$row ['id']; ?>" method="post">
    Movie Name:
    <br> <input type="text" name="Moviename" value="<?=$row ['name'] ?>">
    <br>
    Release Date: <br><input type="date" name="Date" value="<?=$row ['release_date'] ?>">
    <br>
    Duration: <br><input type="hour" name="duration" value="<?=$row ['Duration']?>">
    <br>
    Language: <br><input type="text" name="language" value="<?=$row ['Language']  ?>">
    <br>
    Trailer:<br><input type="url" name="trailer" value="<?= $row ['Trailer']?>">
    <br>
    Description: <br><input type="text" name="description" value="<?=$row['Description'] ?>">
    <br>
    Genre: <br><input type="text" name="genre" value="<?=$row ['Genre'] ?>">
    <br>
    <input type="submit" name="update" value="update">


    </form>
</center>
  </body>
</html>
