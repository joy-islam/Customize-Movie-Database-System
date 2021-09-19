<?php
session_start();
if (!isset($_SESSION['name'])) {
header("Location: ./adminlogin.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Updated Movies</title>
  </head>
  <body>
    <center>
<h3>Updated Movies</h3>

<form action="./movie_insert.php" method="post"><br>
  <input type="text" name="name" placeholder="Movie Name"><br>
  <input type="date" name="Releasedate" placeholder="Date"><br>
  <input type="hour" name="Duration" placeholder="Duration"><br>
  <input type="text" name="Language" value="language"><br>
  <input type="text" name="Countryname" placeholder="country"><br>
  <input type="text" name="Directorid" placeholder="D.id"><br>
  <input type="url" name="trailer" placeholder="trailer"><br>
  <input type="text" name="Castid" value="c.id"><br>
  <input type="text" name="description" placeholder="description"><br>
  <input type="text" name="rating" placeholder="rating"><br>
  <input type="text" name="genre" placeholder="genre"><br>
  <input type="submit" name="insert" value="insert">
</form>

<center/>

  </body>
</html>
