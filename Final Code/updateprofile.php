<?php
include("connect.php");
$wuser= $_GET['id'];
$user_query="select * from user where User_ID='$wuser'";
$sql=mysqli_query($conn,$user_query);
$row=mysqli_fetch_assoc($sql);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center><h2>Update your profile Here</h2></center>

<center>
  <br><br><br>
<form action="./updatedprofile.php" method="post">
Your Profile Name: <br> <input type="text" name="Username" value="<?=$row['Name']; ?>"><br>
Your Password: <br> <input type="text" name="Pass" value="<?=$row['Password']; ?>"><br>
Your Email: <br> <input type="email" name="Email" value="<?=$row['Email'];?>"><br>
Your Phone Number: <br>  <input type="varchar" name="Phone" value="<?=$row['Phone_Number'];?>"><br>
<input type="submit" name="Click" value="Update">
</center>
</form>
</body>
</html>
