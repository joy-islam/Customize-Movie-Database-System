<?php
session_start();
if(!isset( $_SESSION['name'])){
header("location:./admin_login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"><link rel="stylesheet" href="./admin_view_movie.css">
    <title>Admin Panel</title>
  </head>
  <body>
    <center><h2>WELCOME <br>
      <?php echo $_SESSION['name']; ?></h2> </center>
      <center><h1>All Movies</h1></center>
<table class="motable">
<thead>
  <tr>
    <th>Movie Id</th>
      <th> Name</th>
        <th>Release Date</th>
          <th>Duration</th>
          <th>Language</th>
          <th>Country Name</th>
          <th>Director_Id</th>
          <th>Trailer</th>
          <th>Cast_Id</th>
          <th>Description</th>
          <th>Rating</th>
          <th>Genre</th>
          <th></th>
  </tr>
</thead>

<?php
include('./connect.php');
$view_movie="select *from movie";
$run=mysqli_query($conn,$view_movie);
while($row=mysqli_fetch_array($run)){
$Movie_Id =$row[0];
$Movie_name =$row[1];
$Release_date =$row[2];
$Duration =$row[3];
$Language =$row[4];
$Country_name =$row[5];
$Director_Id =$row[6];
$Trailer =$row[7];
$Cast_Id =$row[8];
$Description =$row[9];
$Rating =$row[10];
$Genre =$row[11];


?>
<tbody>

<tr>
<td><?php echo $Movie_Id;  ?></td>
<td><?php echo $Movie_name;  ?></td>
<td><?php echo $Release_date;  ?></td>
<td><?php echo $Duration;  ?></td>
<td><?php echo $Language;  ?></td>
<td><?php echo $Country_name;  ?></td>
<td><?php echo $Director_Id;  ?></td>
<td><?php echo $Trailer;  ?></td>
<td><?php echo $Cast_Id ;  ?></td>
<td><?php echo $Description;  ?></td>
<td><?php echo $Rating;  ?></td>
<td><?php echo $Genre;  ?></td>
<td>
  <a href="./movie_edit.php?id=<?php echo $Movie_Id?>">EDIT</a>
</td>
</tr>

</tbody>









<?php
}
?>
  </table>
<a href="movie_insert.php">Insert Movie</a>

      <a href="./logout.php">Logout</a>
  </body>
</html>
