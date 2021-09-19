<?php
session_start();
if (!isset($_SESSION['email'])) {
header('Location: ./prim_signin.php');
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./movied.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Movie</title>
  </head>

  <body style= "background-image : url(./background.jpg) ; background-repeat: no-repeat; background-attachment: fixed;background-position: center top; background-size: 100% 100%;">

    <h1>Prime User</h1>
    <h1>Rotten Bananaas</h1>
    <h2>Welcome.
    Make your watchlist,See trailer and explore now.</h2>
    <div class="topnav">
      <a href="./Profile.php">Profile</a>
  <a href="wishlist.php">Wishlist</a>
  <a href="./watchlist.php">Watchlist</a>
  <a href="./logout.php"> Logout</a>
</div>


    <div class="main">
    <form class="" action="./prime_movie_search.php" method="post">
    <input class="main" type="text" name="moviename" placeholder="Type to search">
    <input  type="submit" name="Search" value="Search">
    </form>
    </div>



  </body>
</html>
