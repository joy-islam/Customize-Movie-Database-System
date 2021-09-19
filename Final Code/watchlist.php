<?php
session_start();
if (!isset($_SESSION['email'])) {
header("Location: ./movie.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./watchlist.css">
    <title>Watchlist</title>
  </head>
  <body>
    <h1>Your Watchlist</h1>
      <table class= "motable" align="center">
        <thead>
          <tr>
            <th>Movie Name</th>
            <th>History</th>
            <th></th>
          </tr>
        </thead>
       <?php
       $email= $_SESSION['email'];
         include("connect.php");
         $add_query= " select * from watchlist w join user u on w.User_Email = u.Email where w.User_Email  = (select Email from user where Email like '$email')";
         $addmovie = mysqli_query($conn,  $add_query);
         while ($rows = mysqli_fetch_array($addmovie)) {
           $watch_id = $rows[0];
           $movie = $rows[2];
           $his = $rows[3];
           ?>
           <tbody>
           <tr>
             <td><?php echo $movie  ?></td>
             <td><?php echo $his ?></td>
             <td> <a href="./delete_movie.php?id=<?php echo $watch_id  ?>"> <button onclick="return confirm('Are you sure?')"> Delete </button> </a> </td>

           </tr>
           </tbody>
           <?php
         }
        ?>
      </table>
    <form  class="box" action="movie_to_watchlist.php" method="post">
      <input type="text" name="moviename" placeholder="Movie Name">
      <input type="submit" name="add" value="Add">

    </form>
  </body>
</html>
