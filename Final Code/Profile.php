<?php
session_start();
if(isset( $_SESSION['id']))
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
<link rel="stylesheet" href="profile.css">
  </head>
  <body>
    <div class="contant">
 <center><h1>Profile</h1>
     </div>
<br>
<div class="nav-url">
</center>
<a href="watchlist.php">Watchlist</a>

<a href="wishlist.php">Wishlist</a>

<a href="editprofile.php">Edit Profile</a>


<a href="./logout.php">Logout</a>
</div>
  </body>
</html>
