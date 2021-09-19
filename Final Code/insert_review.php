<?php
include("connect.php");
session_start();
if (!isset($_SESSION['email'])) {
header("Location: ./prim_signin.php");
}
$user_name = $_SESSION['email'];
$mname= $_GET['name'];
echo $mname;
if(isset($_POST['review'])){

  $review=$_POST['comment'];


$insert_movie="insert into review(User_Email, Movie_name, Comment)
value ('$user_name','$mname','$review')";
if (mysqli_query($conn,$insert_movie)){

  echo "Your Comment Is Add. <br> Please Refresh to See your Review";
}

}
else {
  echo " Error!!";
}

 ?>
